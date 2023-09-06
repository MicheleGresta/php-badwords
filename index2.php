<?php


$parag = $_POST["paragrafo"];
$leng_parag = strlen($parag);
$censura = $_POST["censura"];

var_dump($_POST);

$testo_censurato = str_replace($censura, "***", $parag);

$leng_testo_censurato= strlen($testo_censurato);



?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <h1>Risultato</h1>


        <form action="index.php" class="card">
            <div class="card-body">
                <p> <?php echo $parag?> </p>
                <p> Lunghezza: <?php echo $leng_parag ?> </p>
                <p> <?php echo $testo_censurato?> </p>
                <p> Lunghezza: <?php echo $leng_testo_censurato ?> </p>
                <button class="btn btn-primary" type="submit">Torna Indietro</button>
            </div>
        </form>
    </div>
</body>

</html>