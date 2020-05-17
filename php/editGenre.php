<?php
include_once "../php/header.php";
include_once '../config/Database.php';
include_once '../classes/Genre.php';

// get database connection
$database = new Database();

$genre = new Genre();
$array = $genre->getArray();
$id = '';
if( isset( $_GET['Id'])) {
    $id = $_GET['Id'];
}
$genre->setId($id);
$stmt = $database->readOne($array,$id);


echo "<div class='right-button-margin'>";
echo "<a href='../html/displayGenre.php' class='btn btn-default pull-left'>Back</a>";
echo "</div>";


if(isset($_POST['submit'])){

    $genre->setGname($_POST['Gname']);

    $array = $genre->getArray();

    // update
    $database->update($array,$id);

}

include_once "../php/footer.php";
?>


<form  method="post" action="" onsubmit=" return ValidateGenreForm()>
    <table class='table table-hover table-responsive table-bordered'>

        <tr>
            <td>Genre Name</td>
            <td><input id="GenreName" type='text' name='Gname' value="<?php echo $stmt['Gname']; ?>" onkeyup="validateGenreName()"
                       class='form-control'><label id="commentGenreName"></label> </td>
        </tr>


        <tr>
            <td>
                <button type="submit" name="submit" class="btn btn-primary pull-right">Update</button>


            </td>
        </tr>

    </table>
</form>
<script type="text/javascript" src="../js/validateGenre.js"></script>




