<?php
include_once  'header.php';
include_once ('../config/Database.php');
include_once ('../classes/User.php');


$database = new Database();

$user = new User();


if($_POST) {
    $user->setUsername($_POST['Username']);
    $user->setPassword($_POST['Password']);
    $user->setEmail($_POST['Email']);
    $user->setType($_POST['typeChooser']);

    $array = array();
    $array = $user->getArray();

    $database->insert($array);
    header("Location: ../html/login.php");
}
?>