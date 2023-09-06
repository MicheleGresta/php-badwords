<?php 










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
        <h1>Censuratore</h1>


        <form action="index2.php" class="card" method="POST">
            <div class="card-body">
                <div class="mb-3">
                    <label>Testo lungo</label>
                    <input type="text" class="form-control" name="paragrafo">
                </div>
                <div class="mb-3">
                    <label>Bad Word</label>
                    <input type="text" class="form-control" name="censura">
                </div>

                <button class="btn btn-primary" type="submit">Vai</button>
            </div>
        </form>
    </div>
</body>

</html>