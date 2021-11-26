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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Bad Words</title>
</head>

<body>
    <main class="text-center mt-5">
        <h1>PHP</h1>
        <p> <?php echo $paragrafo  ?> </p>
        <p>Lunghezza paragrafo: <?php echo $paragrafoLength ?></p>
        <h4 class="mt-5">Paragrafo censurato</h4>
        <p> <?php echo $paragrafoCensurato  ?> </p>
        <p>Lunghezza paragrafo censurato: <?php echo $paragrafoCensuratoLength ?></p>
    </main>
</body>

</html>