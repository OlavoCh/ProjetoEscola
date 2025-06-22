<!DOCTYPE html>
<html lang="ptbr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="indexcss.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>

    <title>Escola</title>
</head>

<body>
    <div>
    <style>
        .navbar-redounded{
            border-radius: 20px;
            margin-top: 20px;

        }
        .margin-top{
            margin-top: 20px;
        }
        


    </style>
    
    <div class="container">
        <h1 class="text-center">Projeto Escola</h1>
        <nav class="navbar navbar-expand-lg bg-primary navbar-redounded">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Escola</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Cadastrar
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="CadastroProfessor.php">Professor</a></li>
                                <li><a class="dropdown-item" href="CadastroDisciplina.php">Disciplina</a></li>
                                <li><a class="dropdown-item" href="CadastroAluno.php">Aluno</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Consultar
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="ConsultarProfessor.php">Professor</a></li>
                                <li><a class="dropdown-item" href="ConsultarDisciplina.php">Disciplina</a></li>
                                <li><a class="dropdown-item" href="ConsultarAluno.php">Aluno</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


</body>

</html>