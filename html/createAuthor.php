  <?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['username'])==0){  
    header('location:login.php');
}
else{ 
?>

   <?php include "../php/header.php"; ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add Author</title>

    </head>
    <body>

    <div class="container">
        <form method='POST' action="../php/createAuthor.php" onsubmit=" return ValidateAuthorForm()" ">
            <table class='table table-bordered'>

                <tr>
                    <td>Name</td>
                    <td><input id="AuthorName" type='text'  name='Name' onkeyup="validateAuthorName()" class='form-control' ><label id="commentAuthorName"></label></td>
                </tr>

                <tr>
                    <td>Lastname</td>
                    <td><input id="AuthorLastName" type='text'  name='Lastname' onkeyup="validateAuthorLastName()" class='form-control' ><label id="commentAuthorLastName"></label></td>
                </tr>
                <tr>
                    <td>Date of birth</td>
                    <td><input id="DaB" 'type='text' name='DOB' onkeyup="validateAuthorDOB()" class='form-control' <label id="commentDOB"></label></td>

                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-primary" name="btn-save">
                            <span class="glyphicon glyphicon-plus"></span> Create New Record
                        </button>
                        <a href="indexAdmin.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to home</a>
                        <a href="../html/displayAuthor.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-menu-down   "></i> &nbsp; Show data</a>

                    </td>
                </tr>

            </table>
        </form>
    </div>
    <script type="text/javascript" src="../js/validateAuthor.js"> </script>
    </body>


    </html>

<?php  } ?>