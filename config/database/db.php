<?php

$host = "127.0.0.1";
$user = "root";
$password = 3301;
$dbname = "crud_php";

$conn = new mysqli($host, $user, $password, $dbname);


if ($conn->connect_error) {
    echo "Erro na conexão:" . $conn->connect_error;
}
else{
    echo "Conexão estabelecida com sucesso!!";
}


