<?php
$conexao = mysqli_connect("localhost", "root", "", "crud");

if (mysqli_connect_errno()) {
    echo "Falha ao conectar com o MySQL: " . mysqli_connect_error();
    exit();
}

$id = $_POST["id"];

$sql = "DELETE FROM usuarios WHERE id=$id";

if (mysqli_query($conexao, $sql)) {
    echo "Usuário excluído com sucesso.";
} else {
    echo "Erro ao excluir usuário: " . mysqli_error($conexao);
}

mysqli_close($conexao);

?>