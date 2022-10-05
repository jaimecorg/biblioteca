
<?php
    require "libreria.php";

    session_start();

    if($_POST){
        $_SESSION['libreria'] = $libros;
       

        print_r($libros);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Libros</title>
    <style>
        body{
            background-image: url("fondoLibreria.jpg");
        }
        h2{
            color:white;
            text-align:center;

        }
        #titulo{
            
            background-color: grey;
        }

        #contenedor{

        }
        #tabla{
            margin-left: auto;
            margin-right: auto;            
            color:white;
            background-color: grey;
            border-width: 1px;
            border-style: solid;
            border-color: white grey; 
        }
        #tablaTh{
            border-width: 1px;
            border-style: solid;
            border-color:  white;
        }

    </style>
</head>
<body>
    <h2>Listado de libros</h3>

    <p>
        <a id="titulo" href="altaLibro.php">Nuevo libro</a>
    </p>

    <div id="contenedor">
        <table id="tabla">
            <th id="tablaTh">ISBN</th>
            <th id="tablaTh">Titulo</th>
            <th id="tablaTh">Autor</th>
            <th id="tablaTh">Fecha Publicacion</th>
            <tr>
                <td>Prueba ISBN</td>
                <td>Prueba Titulo</td>
                <td>Prueba Autor</td>
                <td>Prueba Fecha</td>
                <td>
                    <a href="">Modificar</a>
                </td>
                <td>
                    <a href="">Eliminar</a>
                </td>
            </tr>
            <tr>
                <td><?php ?></td>
                <td><?php ?></td>
                <td><?php ?></td>
                <td><?php ?></td>
                <td>
                    <a href="">Modificar</a>
                </td>
                <td>
                    <a href="">Eliminar</a>
                </td>
            </tr>
        </table>
    </div>
    
</body>
</html>