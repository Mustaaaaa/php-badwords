<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <form action="./server.php" method="POST">
        <p>
            <label for="paragraph">Paragrafo</label>
            <input type="text" name="paragraph" placeholder="Scrivi qui il yuo messaggio...">
        </p>
        <p>
            <label for="word">Parola</label>
            <input type="text" name="word" placeholder="Scrivi qui la parola da censurare...">
        </p>
        <button>Invia</button>
    </form>
</body>
</html>