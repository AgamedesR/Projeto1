<?php
include "topo/topo.php"; ?>

<link rel="stylesheet" href="css/clientes.css">

<?php
require_once "admin/config.inc.php";

$sql = "SELECT * FROM clientes";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    echo "<h3>Clientes</h3>";
    echo "<div class='table-wrapper'>";
    echo "<table class='tabela-clientes'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Cidade</th><th>Estado</th></tr>";

    while ($dados = mysqli_fetch_array($resultado)) {
        echo "<tr>";
        echo "<td>$dados[id]</td>";
        echo "<td>$dados[cliente]</td>";
        echo "<td>$dados[cidade]</td>";
        echo "<td>$dados[estado]</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
} else {
    echo "<h3>Nenhum Cliente cadastrado.</h3>";
}
include "rodape/rodape.php";?>
