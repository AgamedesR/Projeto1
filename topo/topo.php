<!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <title>Navbar</title> 
    <link rel="stylesheet" href="topo/topo.css"/> 
</head>

<body>
    <!-- CABEÇALHO -->
    <header>
        <nav> <!-- Barra de navegação -->
            <a class="logo" href="/">
            <img src="topo/logo-white-homenet.png" alt="HomeNet" />
            <span class="sr-only">HomeNet</span></a>

            <!-- MENU MOBILE (ícone hambúrguer) -->
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div> 
            </div>
        
            <!-- LISTA DE LINKS DO MENU -->
            <ul class="nav-list">
                <li><a href="conteudo.php">Home</a></li> 
                <li><a href="quemsomos.php">Quem Somos</a>
                <li><a href="clientes.php">Clientes</a>
                <li><a href="categorias.php">Categorias</a>
                <li><a href="faleconosco.php">Fale Conosco</a></li> 
            </ul>
        </nav>
    </header>
    <!-- SCRIPT DO MENU MOBILE -->
    <script src="topo/topo-mobile.js"></script>
</body>
</html>
