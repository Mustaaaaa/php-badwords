<?php
var_dump($_POST);
// var_dump($_GET);

$paragraph = $_POST['paragraph'];
$word = $_POST['word'];
$paragraph_lenght = strlen($paragraph);

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
        <h3>Paragrafo: <?php echo $paragraph ?></h3>
        <p>Lunghezza del paragrafo originale: <?php echo $paragraph_lenght ?></p>
    </div>
</body>
</html>