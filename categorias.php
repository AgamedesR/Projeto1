<?php
include "topo/topo.php"; ?>

<link rel="stylesheet" href="css/categorias.css">

<?php
require_once "admin/config.inc.php";

$sql = "SELECT * FROM categorias";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    echo "<h3>Categorias de Imóveis</h3>";
    echo "<div class='table-wrapper'>";
    echo "<table class='tabela-categorias'>";
    echo "<tr><th>ID</th><th>Bairro</th><th>Tamanho do Imóvel</th></tr>";

    while ($dados = mysqli_fetch_array($resultado)) {
        echo "<tr>";
        echo "<td>$dados[id]</td>"; 
        echo "<td>$dados[bairro]</td>";
        echo "<td>$dados[tamanho]</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
} else {
    echo "<h3>Nenhuma categoria cadastrada.</h3>";
}

include "rodape/rodape.php";
?>
