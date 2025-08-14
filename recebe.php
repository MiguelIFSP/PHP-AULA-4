<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj69FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php include 'menu.php'; ?>
    <?php
    session_start();
    include 'aluno.php';

    $aluno = null;
    $message = "Nenhum dado de aluno foi enviado. Por favor, <a href='formulario.php'>cadastre um aluno</a>.";

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nome'])) {
        $nome = $_POST['nome'];
        $dataNascimento = $_POST['dataNascimento'];
        $matricula = $_POST['matricula'];
        $curso = $_POST['curso'];

        $aluno = new Aluno($nome, $dataNascimento, $matricula, $curso);
        $_SESSION['aluno'] = serialize($aluno);
        $message = "Dados do aluno salvos na sessão com sucesso!";
    } elseif (isset($_SESSION['aluno'])) {
        $aluno = unserialize($_SESSION['aluno']);
        $message = "Aluno já cadastrado na sessão. Clique no botão abaixo para visualizar.";
    }
    ?>

    <div class="container mt-4">
        <h1><?php echo $message; ?></h1>
        <?php if ($aluno): ?>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alunoModal">
                Mostrar Dados do Aluno
            </button>

            <div class="modal fade" id="alunoModal" tabindex="-1" aria-labelledby="alunoModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="alunoModalLabel">Dados do Aluno</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Nome:</strong> <?php echo htmlspecialchars($aluno->nome); ?></p>
                            <p><strong>Data de Nascimento:</strong> <?php echo htmlspecialchars($aluno->dataNascimento); ?></p>
                            <p><strong>Matrícula:</strong> <?php echo htmlspecialchars($aluno->matricula); ?></p>
                            <p><strong>Curso:</strong> <?php echo htmlspecialchars($aluno->curso); ?></p>
                            <p><strong>Idade:</strong> <?php echo htmlspecialchars($aluno->idade()); ?> anos</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>