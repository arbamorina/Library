
<?php include '../php/header.php';?>
<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['username'])==0){ 
    header('location:login.php');
}
else{ 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Publisher</title>
</head>
<body>

<div class="container">
    <form method='POST' action="../php/createPublisher.php" onsubmit="return ValidatePublisherForm()">

        <table class='table table-bordered'>

            <tr>
                <td>Publisher Name</td>
                <td><input id="PublisherName" type='text' name='Publisher_Name' onkeyup="validatePublisherName()" class='form-control'
                           ><label id="commentPublisherName"></label> </td>
            </tr>

            <tr>
                <td>City Name</td>
                <td><input id="PublisherCity" type='text' name='City_Name' onkeyup="validatePublisherCity()" class='form-control'
                           ><label id="commentPublisherCity"></label> </td>
            </tr>

            <tr>
                <td colspan="2">
                   <button type="submit" class="btn btn-primary" name="btn-save">
                        <span class="glyphicon glyphicon-plus"></span> Create New Record
                    </button>
                    <a href="indexAdmin.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to home</a>
                    <a href="../html/displayPublisher.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Show data</a>
                </td>
            </tr>

        </table>
    </form>
</div>
<script type="text/javascript" src="../js/validatePublisher.js"></script>
</body>
</html>
<?php include '../php/footer.php';?>
<?php  } ?>