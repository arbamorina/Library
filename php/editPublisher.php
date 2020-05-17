<?php

include_once '../config/Database.php';
include_once '../classes/Publisher.php';
include_once "../php/header.php";
// get database connection
$database = new Database();

$pub = new Publisher();
$array =array();
$array = $pub->getArray();
$id = '';
if( isset( $_GET['Id'])) {
    $id = $_GET['Id'];
}
$pub->setId($id);
$stmt = $database->readOne($array,$id);


echo "<div class='right-button-margin'>";
echo "<a href='../html/displayPublisher.php' class='btn btn-default pull-left'>List of Publisher</a>";
echo "</div>";


if(isset($_POST['submit'])){

    $pub->setPublisherName($_POST['Publisher_Name']);
    $pub->setCityName($_POST['City_Name']);

    $array =array();
    $array = $pub->getArray();

    // update
    $database->update($array,$id);

}

include_once "../php/footer.php";
?>
<html>
<head>

</head>
<body>
<form  method="post" action="">
    <table class='table table-hover table-responsive table-bordered' onsubmit=" return ValidatePublisherForm()">

        <tr>
            <td>Publisher Name</td>
            <td><input id="PublisherName" type='text' name='Publisher_Name' value="<?php echo $stmt['Publisher_Name']; ?>"
                       onkeyup="validatePublisherName()" class='form-control'><label id="commentPublisherName"></label> </td>
        </tr>

        <tr>
            <td>City  Name</td>
            <td><input id="PublisherCity" type='text' name='City_Name' value="<?php echo $stmt['City_Name']; ?>"
                       onkeyup="validatePublisherCity()" class='form-control'><label id="commentPublisherName"></label> </td>
        </tr>


        <tr>
            <td>
                <button type="submit" name="submit" class="btn btn-primary pull-right">Update</button>
            </td>
        </tr>

    </table>
</form>
<script type="text/javascript" src="../js/validatePublisher.js"></script>
</body>
</html>



