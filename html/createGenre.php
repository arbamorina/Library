<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['username'])==0){  
    header('location:login.php');
}
else {
    include '../php/header.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Genre</title>
</head>
<body>

<div class="container">
    <form method='POST' action="../php/createGenre.php"  onsubmit=" return ValidateGenreForm()">

        <table class='table table-bordered'>

            <tr>
                <td>Genre Name</td>
                <td><input id="GenreName" type='text' name='Gname' onkeyup="validateGenreName()"
                           class='form-control'><label id="commentGenreName"></label> </td>
            </tr>

            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-primary" name="btn-save">
                        <span class="glyphicon glyphicon-plus"></span> Create New Record
                    </button>
                    <a href="indexAdmin.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to home</a>
                    <a href="../html/displayGenre.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Show data</a>
                </td>
            </tr>

        </table>
    </form>
    <script type="text/javascript" src="../js/validateGenre.js"> </script>

</div>
</body>
</html>
<?php include '../php/footer.php'; ?>