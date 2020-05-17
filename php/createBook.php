<?php
include  'header.php';
include_once ('../config/Database.php');
include_once ('../classes/Book.php');
include_once ('../classes/AuthorBook.php');

$database = new Database();

$book = new Book();




if($_POST)
{
    $book->setName(addslashes(trim($_POST['Name'])));
    $book->setPages(addslashes(trim($_POST['Pages'])));
    $book->setPublisher(addslashes(trim($_POST['populatePublisher'])));
    $book->setGenre(addslashes(trim($_POST['populateGenre'])));

    if(isset($_FILES['image'])){
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];



        if($file_size > 2097152){
            $errors[]='File size must be excately 2 MB';
        }

        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"../post/".$file_name);

        }else{
            print_r($errors);
        }
        $book->setImage($file_name);
        $array=array();
        $array =$book->getArray();

        $database->insert($array);
    }






}


include_once '../html/displayBook.php';
?>



