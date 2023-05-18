<!DOCTYPE html>
<html>
<head>
    <title>Form di Censura</title>
</head>
<body>
    <h1>Form di Censura</h1>

    <form action="received.php" method="post">
        <label for="testo">Paragrafo:</label><br>
        <textarea id="paragraph" name="paragraph" rows="4" cols="50"></textarea><br><br>

        <label for="censura">Parola da Censurare:</label><br>
        <input type="text" id="word" name="word"><br><br>

        <input type="submit" value="Invia">
    </form>
</body>
</html>
