<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj69FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php include 'menu.php'; ?>
    <?php
    session_start();
    include 'aluno.php';

    $aluno = null;
    if (isset($_SESSION['aluno'])) {
        $aluno = unserialize($_SESSION['aluno']);
    }
    ?>

    <div class="container mt-4">
        <h1>Dados do Aluno Salvo</h1>
        <?php if ($aluno): ?>
            <div class="card" style="width: 22rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($aluno->nome); ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Matrícula: <?php echo htmlspecialchars($aluno->matricula); ?></h6>
                    <p class="card-text">
                        <strong>Data de Nascimento:</strong> <?php echo htmlspecialchars($aluno->dataNascimento); ?><br>
                        <strong>Curso:</strong> <?php echo htmlspecialchars($aluno->curso); ?><br>
                        <strong>Idade:</strong> <?php echo htmlspecialchars($aluno->idade()); ?> anos
                    </p>
                </div>
            </div>
        <?php else: ?>
            <div class="alert alert-info" role="alert">
                Nenhum aluno encontrado na sessão. Por favor, <a href="formulario.php">cadastre um aluno</a> primeiro.
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>