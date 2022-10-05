
<?php
    require "libreria.php";

    session_start();

    if($_POST){
        $isbn  = $_POST['isbn'];
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $fechaPublicacion = $_POST['fechaPublicacion'];

        $nuevoLibro = new Libro($isbn, $titulo, $autor, $fechaPublicacion);
        $_SESSION['libro'] = $nuevoLibro;

        array_push($_SESSION['libro'], $nuevoLibro);
        
        //echo $_SESSION['libro']."</br>";
        print_r($nuevoLibro);
        echo "<br>" . "<a href=\"/biblioteca/listadoLibros.php\">Volver a Listado</a>";
    }
?>
