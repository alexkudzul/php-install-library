<?php

require_once '../vendor/autoload.php';

// Conexion DB
$conexion = new mysqli('localhost', 'root', '', 'php_mvc_intro');
$conexion->query("SET NAMES 'uft8'");

// Consulta para contar elementos totoales
$consult = $conexion->query("SELECT COUNT(id) AS 'total' FROM notes");
$num_elements = $consult->fetch_object()->total;
$num_elements_page = 2;

// Hacer paginacion
$pagination = new Zebra_Pagination();

// Numero de total de elementos a paginar
$pagination->records($num_elements);

// Numero de elementos por pagina
$pagination->records_per_page($num_elements_page);

// Consigue la pagina actual por URL
$page = $pagination->get_page();

// Limite del inicio de paginacion para mostrar elemento por cada pagina, ejemplo:
// ((1-1)*2) = 0 a 2(num_elments_page) del registro 0 al registro 2
// ((2-1)*2) = 2 a 4(num_elments_page) del registro 2 al registro 4
$start = (($page - 1)*$num_elements_page);
$sql = "SELECT * FROM notes LIMIT $start, $num_elements_page";
$notes = $conexion->query($sql);

echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';

while($note = $notes->fetch_object()){
    echo "<h1>{$note->title}</h1>";
    echo "<h3>{$note->description}</h3> <hr>";
}

// Muestra los links de la pagina
$pagination->render();


?>

