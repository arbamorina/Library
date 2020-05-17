<?php

include_once '../config/Database.php';
include_once '../classes/Author.php';
include_once "../php/header.php";
// get database connection
$database = new Database();

$author = new Author();
$array =array();
$array = $author->getArray();
$id = '';
if( isset( $_GET['Id'])) {
    $id = $_GET['Id'];
}
$author->setId($id);
$stmt = $database->readOne($array,$id);


echo "<div class='right-button-margin'>";
echo "<a href='../html/displayAuthor.php' class='btn btn-default pull-left'>List of Authors</a>";
echo "</div>";


if(isset($_POST['submit'])){

    $author->setName($_POST['Name']);
    $author->setLastname($_POST['Lastname']);
    $author->setDOB($_POST['DOB']);

    $array =array();
    $array = $author->getArray();

    // update
    $database->update($array,$id);

}

include_once "../php/footer.php";
?>

<html>
<head>

</head>
<body>
<form  method="post" action="" onsubmit="return ValidateAuthorForm()">
    <table class='table table-hover table-responsive table-bordered'>

        <tr>
            <td>Name</td>
            <td><input id="AuthorName" type='text'  name='Name' value="<?php echo $stmt['Name']; ?>" onkeyup="validateAuthorName()" class='form-control' ><label id="commentAuthorName"></label></td>
        </tr>

        <tr>
            <td>Lastname</td>
            <td><input id="AuthorLastName" type='text'  name='Lastname'  value="<?php echo $stmt['Lastname']; ?>" onkeyup="validateAuthorLastName()" class='form-control' ><label id="commentAuthorLastName"></label></td>
        </tr>
        <tr>
            <td>Date of birth</td>
            <td><input id='DaB 'type='text' name='DOB'  value="<?php echo $stmt['DOB']; ?>" onkeyup="validateAuthorDOB()" class='form-control' <label id="commentDOB"></label></td>

        <tr>

        <tr>
            <td>
                <button type="submit" name="submit" class="btn btn-primary pull-right">Update</button>
            </td>
        </tr>

    </table>
</form>
<script type="text/javascript" src="../js/validateAuthor.js"> </script>

</body>

</html>
