

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Formulário</h1>

    <form action="./database/processa.php" method="POST">

        <label for="nome">nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="email">email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>