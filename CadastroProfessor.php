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
        <h1 class="text-center">Cadastrar Professor</h1> <nav class="navbar navbar-expand-lg bg-primary navbar-redounded">
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

        <form method="POST" action="CadastroProfessor.php" class="form-control margin-top">
            Nome: <input type="text" name="TxtNome" class="form-control">
            Email: <input type="email" name="TxtEmail" class="form-control">
            Telefone: <input type="text" id="telefone" name="TxtNumero" class="form-control" maxlength="15" placeholder="(00) 00000-0000">
            CPF: <input type="text" id="cpf" name="TxtCpf" class="form-control" maxlength="14" placeholder="000.000.000-00">
            <div class="text-center margin-top">
                <input type="submit" value="Cadastrar" class="btn btn-primary">
                <input type="reset" value="Limpar" class="btn btn-secondary">
            </div>
        </form>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // --- Máscara de CPF ---
                const cpfInput = document.getElementById('cpf');
                cpfInput.addEventListener('input', function(e) {
                    let value = e.target.value;
                    value = value.replace(/\D/g, ''); // Remove tudo que não é dígito

                    if (value.length > 11) { // Limita para 11 dígitos, que é o tamanho do CPF
                        value = value.substring(0, 11);
                    }

                    // Aplica a máscara
                    if (value.length > 9) {
                        value = value.replace(/^(\d{3})(\d{3})(\d{3})(\d{2})$/, '$1.$2.$3-$4');
                    } else if (value.length > 6) {
                        value = value.replace(/^(\d{3})(\d{3})(\d{3})/, '$1.$2.$3');
                    } else if (value.length > 3) {
                        value = value.replace(/^(\d{3})(\d{3})/, '$1.$2');
                    } else if (value.length > 0) {
                        value = value.replace(/^(\d{3})/, '$1');
                    }
                    e.target.value = value;
                });

                // --- Máscara de Telefone ---
                const telefoneInput = document.getElementById('telefone');
                telefoneInput.addEventListener('input', function(e) {
                    let value = e.target.value;
                    value = value.replace(/\D/g, '');

                    
                    if (value.length > 11) {
                        value = value.substring(0, 11);
                    }

                    if (value.length > 10) { 
                        value = value.replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3');
                    } else if (value.length > 5) { 
                        value = value.replace(/^(\d{2})(\d{4})(\d{0,4}).*/, '($1) $2-$3');
                    } else if (value.length > 2) { 
                        value = value.replace(/^(\d{2})(\d{0,5}).*/, '($1) $2');
                    } else if (value.length > 0) { 
                        value = value.replace(/^(\d*)/, '($1');
                    }
                    e.target.value = value;
                });
            });
        </script>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hostnmame = "localhost";
        $username = "root";
        $password = "";
        $database = "escola";

        $conexao = mysqli_connect($hostnmame, $username, $password, $database);
        if (!$conexao) {
            die("Falha na conexão: " . mysqli_connect_error());
        }

        $nome = $_POST['TxtNome'];
        $email = $_POST['TxtEmail'];

      
        $numero = preg_replace('/\D/', '', $_POST['TxtNumero']);
        $cpf = preg_replace('/\D/', '', $_POST['TxtCpf']); 

     
        $sql_inserir = "INSERT INTO professor(professor_nome, professor_email, professor_numero, professor_cpf) VALUES ('$nome', '$email', '$numero', '$cpf')";
        $executar_sql = mysqli_query($conexao, $sql_inserir);

        if ($executar_sql) {
            echo "'Cadastrado com sucesso!'";
        }
        mysqli_close($conexao); 
    }
    ?>
</body>
</html>