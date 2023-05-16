<?php
$conexao = mysqli_connect("localhost", "root", "", "crud");

if (mysqli_connect_errno()) {
    echo "Falha ao conectar com o MySQL: " . mysqli_connect_error();
    exit();
}

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexao, $sql);

while ($row = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["nome"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>";
    echo "<button type='button' onclick='editarUsuario(" . $row["id"] . ", \"" . $row["nome"] . "\", \"" . $row["email"] . "\")'>Editar</button>";
    echo "<button type='button' onclick='excluirUsuario(" . $row["id"] . ")'>Excluir</button>";
    echo "</td>";
    echo "</tr>";
}

mysqli_close($conexao);
?>