<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj69FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="container mt-4">
        <h1>Cadastrar Aluno</h1>
        <form action="recebe.php" method="post">
            <div class="row mb-3">
                <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="dataNascimento" class="col-sm-2 col-form-label">Data de Nascimento:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="matricula" class="col-sm-2 col-form-label">Matrícula:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="matricula" name="matricula" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="curso" class="col-sm-2 col-form-label">Curso:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="curso" name="curso" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>