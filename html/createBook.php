<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['username'])==0){  
    header('location:login.php');
}
else{ 
include_once '../php/header.php';
include_once '../config/Database.php';
include_once '../classes/Publisher.php';
include_once '../classes/Genre.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Book</title>
</head>
<body>

<div class="container">
    <form method='POST' action="../php/createBook.php"  enctype="multipart/form-data" onsubmit=" return ValidateBookForm()" >

        <table class='table table-bordered'>

            <tr>
                <td>Name</td>
                <td><input id="BookName" type='text' name='Name' onkeyup="validateBookName()"
                           class='form-control'><label id="commentBookName"></label></td>
            </tr>

            <tr>
                <td>Pages</td>
                <td><input  id="BookPages" type='text' name='Pages' onkeyup="validateBookPages()"
                            class='form-control'><label id="commentBookPages"></label> </td>
            </tr>
            <tr>
                <td>Publisher</td>
                 <td>
                         <?php
                            $db = new Database();
                            $pub = new Publisher();
                            $res = $db->read($pub->getArray());

                         $html = '<select name="populatePublisher" id="BookPublisher" onkeyup="validateBookPublisher()" <label id="commentBookPublisher"></label>';
                         $html .= '<option id="first1" value="first">Please Select Publisher</option>';
                            foreach ($res as $row) {
                             $html .= '<option value="' . $row['id'] . '">'
                                 . $row['Publisher_Name'] . '</option>';
                             }
                             $html .= '</select>';
                             echo $html;
                     ?>
                </td>

            </tr>


            <tr>

                <td>Genre</td>
                <td>
                    <?php
                    $db = new Database();
                    $gen = new Genre();
                    $res = $db->read($gen->getArray());

                    $html = '<select name="populateGenre" id="BookGenre" onkeyup="validateBookGenre()" <label id="commentBookPublisher"></label>';
                    $html .= '<option value="first">Please Select Genre</option>';
                    foreach ($res as $row) {
                        $html .= '<option value="' . $row['id'] . '">'
                            . $row['Gname'] . '</option>';
                    }
                    $html .= '</select>';
                    echo $html;
                    ?>
                </td>



            </tr>

            <tr>
                <td><label class="control-label">Profile Img.</label></td>
                <td> <input type="file" name="image" /></td>
            </tr>

            <tr>
                <td colspan="2">
                    <button class="btn btn-primary" name="btn-save">
                        <span class="glyphicon glyphicon-plus"></span> Create New Record
                    </button>
                    <a href="indexAdmin.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to home</a>
                    <a href="../html/displayBook.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Show data</a>
                </td>
            </tr>

        </table>
    </form>

</div>
<script type="text/javascript" src="../js/validateBook.js"> </script>
</body>
</html>


<?php include "../php/footer.php"; }
?>