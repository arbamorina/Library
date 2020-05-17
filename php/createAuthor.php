<?php
include_once  'header.php';
include_once ('../config/Database.php');
include_once ('../classes/Author.php');
include_once ('../classes/AuthorBook.php');


$database = new Database();

$author = new Author();


if($_POST) {
    $author->setName(addslashes(trim($_POST['Name'])));
    $author->setLastname(addslashes(trim($_POST['Lastname'])));
    $author->setDOB(addslashes(trim($_POST['DOB'])));

    $array = array();
    $array = $author->getArray();
    $database->insert($array);
}
include_once ('../html/displayAuthor.php');
?>