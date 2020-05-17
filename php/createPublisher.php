<?php

include_once ('../config/Database.php');
include_once ('../classes/Publisher.php');

$database = new Database();

$pub = new Publisher();



if($_POST) {
    $pub->setPublisherName(addslashes(trim($_POST['Publisher_Name'])));
    $pub->setCityName(addslashes(trim($_POST['City_Name'])));
    $array=array();
    $array =$pub->getArray();
    $database->insert($array);
}
include_once "../html/displayPublisher.php";
?>