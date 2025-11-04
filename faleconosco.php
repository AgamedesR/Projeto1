<?php include "topo/topo.php";?>
<link rel="stylesheet" href="css/faleconosco.css">

<main class="container-fale">
    <h1>Fale Conosco</h1>
    <form action="enviar.php" method="post" class="form-fale">
        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Mensagem:</label>
        <textarea name="mensagem" required></textarea>

        <button type="submit">Enviar</button>
    </form>
</main>

<?php include "rodape/rodape.php";?>
