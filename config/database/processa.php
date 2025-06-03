<?php


require_once '../database/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    echo "Nome recebido:" . $nome . "<br>";
    echo "Email recebido:" . $email . "<br>";

    $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

    if ($conn->query($sql) === TRUE){
        echo "<script>alert('Usuário cadastrado com sucesso!');</script>";
    }
    else{
        echo "<pre>Falha ao tentar cadastrar";
    }
}









?>



