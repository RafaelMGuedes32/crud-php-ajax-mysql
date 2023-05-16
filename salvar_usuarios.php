<?php
require_once "config.php";

$bd = new BaseDeDados();
$bd->connect();
$conexao = $bd->getConnection();

if (mysqli_connect_errno()) {
    echo "Falha ao conectar com o MySQL: " . mysqli_connect_error();
    exit();
}

$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];

if ($id != "") {
    $sql = "UPDATE usuarios SET nome='$nome', email='$email' WHERE id=$id";
} else {
    $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
}

if (mysqli_query($conexao, $sql)) {
    echo "Usuário salvo com sucesso.";
} else {
    echo "Erro ao salvar usuário: " . mysqli_error($conexao);
}

$conexao->close();

?>