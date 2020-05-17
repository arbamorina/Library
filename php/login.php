<?php
session_start();
error_reporting(0);
include_once  'header.php';
include_once ('../config/Database.php');
include_once ('../classes/User.php');
$database = new Database();
$user = new User();


if($_SESSION['username']!=''){
$_SESSION['username']='';
}
if(isset($_POST['btn-save']))
{
 
                $_SESSION['alogin']=$_POST['username'];
                echo "<script type='text/javascript'> document.location ='admin/dashboard.php'; </script>";


                    $username=addslashes(trim($_POST['Username']));
                    $pass=addslashes(trim($_POST['Password']));
                    $type = $_POST['typeChooser'];

                    $query= "SELECT count(*) as Nr,Type FROM user WHERE Username = ".'\'' . $username . '\'' ." and Password =".'\'' . $pass . '\''." and Type =".'\'' . $type . '\'';
                    $result=$database->query($query);
                    if($result[0]['Nr']> 0){
                        if($result[0]['Type'] =='Admin') {
                            $_SESSION['username']=$username;
                            header("Location: ../html/indexAdmin.php");
                            return true;
                        }else{
                            $_SESSION['username']=$username;
                            header("Location: ../html/indexPuntore.php");
                            return true;
                        }
                    }
                    else{
                        header("Location: ../html/login.php");
                        return false;

                    }



               
 }else{
     header("Location: login.php");
 }

?>