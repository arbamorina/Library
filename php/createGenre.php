<?php
    include 'header.php';
    include_once ('../config/Database.php');
    include_once ('../classes/Genre.php');

$database = new Database();

$genre = new Genre();

if($_POST) {
    $genre->setGname(addslashes(trim($_POST['Gname'])));
    $array=array();
    $array =$genre->getArray();
    $database->insert($array);
}

include_once '../html/displayGenre.php';

?>



