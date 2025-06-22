<?php
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


?>