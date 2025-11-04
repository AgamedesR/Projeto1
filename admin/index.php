<?php
echo "Painel administrativo";
?>
<nav>
    <a href="index.php">Início</a>
    <a href="?pg=clientes-admin">Clientes</a>
    <a href="?pg=categorias-admin">Categorias</a> <!-- 👈 Novo link -->
    <a href="?pg=paginas-admin">Administrar Páginas</a>
    <a href="?pg=contato-admin">Administrar Contatos</a>
</nav>

<?php
// Conteúdo
if (empty($_SERVER["QUERY_STRING"])) {
    $var = "principal";
    include_once "$var.php";
} elseif (isset($_GET['pg'])) {
    $pg = $_GET['pg'];

    // Evita erro caso arquivo não exista
    if (file_exists("$pg.php")) {
        include_once "$pg.php";
    } else {
        echo "<h3>Página '$pg' não encontrada.</h3>";
    }

} else {
    echo "<h3>Página não encontrada</h3>";
}
?>
