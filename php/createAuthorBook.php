<?php
include 'header.php';
include_once ('../config/Database.php');
include_once ('../classes/AuthorBook.php');
include_once ('../classes/Book.php');
include_once ('../classes/Author.php');

$database = new Database();

$ab = new AuthorBook();


if($_POST)
{
    $ab->setBookID(addslashes(trim($_POST['populateBook'])));
    $ab->setAuthorID(addslashes(trim($_POST['popublateAuthor'])));


    $array=array();
    $array =$ab->getArray();
    $database->insert($array);

}
include_once '../html/displayAuthorBook.php';
?>
