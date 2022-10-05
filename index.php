<?php
    session_start();

    $_SESSION['libreria'] = $libros;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <h3>Biblioteca</h3>
    <p>
        <a href="listadoLibros.php">Libros</a>
    </p>
    <p>
        <a href="">Socios</a>
    </p>
   
</body>
</html>