<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

    <title>Registro</title>
</head>
<body>
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
        <h1 class="text-center">Cadastrar Disciplina</h1>
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
    
        <form method="POST" action="CadastroDisciplina.php" class="form-control">
                Nome: <input type="text" name="TxtNome" class="form-control">
                Sigla: <input type="text" name="TxtSigla" class="form-control">

                <div class="text-center">
                    <input type="submit" value="Cadastrar">
                    <input type="reset" value="Limpar">
                </div>
        </form>
    </div>
    </div>
    

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hostnmame = "localhost";
        $username = "root";
        $password = "";
        $database = "escola";


        $conexao = mysqli_connect($hostnmame, $username, $password, $database);
        if ($conexao) {
            echo "Conectado";
        } else {
            echo "Falhou";
        }

        $nome = $_POST['TxtNome'];
        $sigla = $_POST['TxtSigla'];

        $sql_inserir = "insert into disciplina(disciplina_nome, disciplina_sigla) values ('$nome', '$sigla')";
        $executar_sql = mysqli_query($conexao, $sql_inserir);
        if ($executar_sql) {
            echo "Cadastrado";
            mysqli_close($conexao);
        }
    }
    ?>
</body>
</html>