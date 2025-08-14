<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$currentPage = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Aluno App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link <?php echo ($currentPage == 'formulario.php' ? 'active' : ''); ?>" href="formulario.php">Cadastrar</a>
                <a class="nav-link <?php echo ($currentPage == 'recebe.php' ? 'active' : ''); ?>" href="recebe.php" style="display:none;">Recebe</a>
                <a class="nav-link <?php echo ($currentPage == 'mostra.php' ? 'active' : ''); ?>" href="mostra.php">Mostrar</a>
                <a class="nav-link <?php echo ($currentPage == 'mostra_idade.php' ? 'active' : ''); ?>" href="mostra_idade.php">Idade</a>
                <a class="nav-link <?php echo ($currentPage == 'sair.php' ? 'active' : ''); ?>" href="sair.php">Sair</a>
            </div>
        </div>
    </div>
</nav>