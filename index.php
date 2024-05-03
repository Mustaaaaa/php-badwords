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
            <label for="paragraph">Paragrafo: </label>
            <input type="text" name="paragraph" class="paragraph-input" placeholder="Scrivi qui il yuo messaggio...">
        </p>
        <p>
            <label for="word">Parola: </label>
            <input type="text" name="word" class="word-input" placeholder="Scrivi qui la parola da censurare...">
        </p>
        <button>Invia</button>
    </form>
</body>
</html>
<style>
    .paragraph-input { 
        border: 2px solid red;
        border-radius: 10px;
        padding: 10px;
        overflow-y: scroll;
    }
    .word-input { 
        margin-top: 10px;
        border: 2px solid green;
        border-radius: 10px;
        padding: 10px;
    }
    label{
        font-size: 25px;
        font-weight: 700;
    }
</style>