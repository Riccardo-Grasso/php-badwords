<?php
$paragrafo = "Primo paragrafo con PHP";
$paragrafoLength = strlen($paragrafo);
$censura = $_GET["parola"];

$paragrafoMinuscolo = strtolower($paragrafo);
$paragrafoCensurato = str_replace($censura, "***", $paragrafoMinuscolo);
$paragrafoCensuratoLength = strlen($paragrafoCensurato);
?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>

<body>
    <main>
        <h1>PHP</h1>
        <p> <?php echo $paragrafo  ?> </p>
        <p>Lunghezza paragrafo: <?php echo $paragrafoLength ?></p>
        <h4>Paragrafo censurato</h4>
        <p> <?php echo $paragrafoCensurato  ?> </p>
        <p>Lunghezza paragrafo censurato: <?php echo $paragrafoCensuratoLength ?></p>
    </main>
</body>

</html>