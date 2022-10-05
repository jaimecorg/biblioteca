
<?php
    require "libreria.php";

    session_start();

    if($_POST){
        $isbn  = $_POST['isbn'];
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $fechaPublicacion = $_POST['fechaPublicacion'];

        $nuevoLibro = new Libro($isbn, $titulo, $autor, $fechaPublicacion);

        //echo $nuevoLibro."</br>";
        print_r($nuevoLibro);
        echo "<br>" . "<a href=\"/biblioteca/listadoLibros.php\">Volver a Listado</a>";
    }
?>
