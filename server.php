<?php
// var_dump($_POST);
// var_dump($_GET);

$paragraph = $_POST['paragraph'];
$word = $_POST['word'];
$paragraph_lenght = strlen($paragraph);
$paragraph_with_censored_word = str_replace($word, '***', $paragraph, $censored_word_count);
$paragraph_with_censored_word_lenght = strlen($paragraph_with_censored_word);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PP Badwords</title>
</head>
<body>
    <div>
        <div class="first-paragraph">
            <h2>Paragrafo:</h2>
            <h3><?php echo $paragraph ?></h3>
            <p>Lunghezza del paragrafo originale: <?php echo $paragraph_lenght ?></p>
        </div>
        <div class="second-paragraph">
            <h2>Paragrafo con la parola scritta censurata:</h2>
            <h3><?php echo $paragraph_with_censored_word ?></h3>
            <p>Lunghezza del paragrafo originale: <?php echo $paragraph_with_censored_word_lenght ?></p>
            <p>Totale parole censurate: <?php echo $censored_word_count ?></p>
        </div>
    </div>
</body>
</html>
<style>
    .first-paragraph { 
        border: 2px solid red;
        border-radius: 10px;
        padding: 10px;
    }
    .second-paragraph { 
        margin-top: 10px;
        border: 2px solid green;
        border-radius: 10px;
        padding: 10px;
    }
</style>