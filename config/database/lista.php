<?php

require_once '../database/db.php';

$sql = "SELECT *FROM usuarios";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0){
    while ($row = $resultado->fetch_assoc()){
        echo "<pre>ID: " . $row["id"] . " | NOME: " . $row["nome"] . " | EMAIL:" . $row["email"]; 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Usuários</title>
</head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 8px;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #c82333;
        }
    </style>

<body>
    

    <h1>Lista de Usuários</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ação</th>
        </tr>
        <?php

        require_once '../database/db.php';

        $sql = "SELECT * FROM usuarios";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0){
            while($row = $resultado->fetch_assoc()){
                echo "";
            }
        }


        ?>
    </table>


</body>
</html>