<?php
include_once "../php/header.php";
include_once '../config/Database.php';
include_once '../classes/Book.php';
include_once '../classes/Publisher.php';
include_once '../classes/Genre.php';

// get database connection
$database = new Database();
$pub = new Publisher();
$book = new Book();
$gen = new Genre();

$id = '';
if( isset( $_GET['Id'])) {
    $id = $_GET['Id'];
}
$book->setId($id);
$arrayBook=$book->getArray();
$stmt = $database->readOne($arrayBook,$id);

$arrayPub=$pub->getArray();
$stmt1 = $database->read($arrayPub);

$arrayGen=$gen->getArray();
$stmt2 = $database->read($arrayGen);


echo "<div class='right-button-margin'>";
echo "<a href='../html/displayBook.php' class='btn btn-default pull-left'>List of Books</a>";
echo "</div>";


if(isset($_POST['submit'])){

    $book->setName($_POST['Name']);
    $book->setPages($_POST['Pages']);
    $book->setPublisher($_POST['populatePublisher']);
    $book->setGenre($_POST['populateGenre']);
    $array = array();
    $array=$book->getArray();

    // update
    $database->update($array,$id);
}
// set page footer
include_once "../php/footer.php";
?>

<form  method="post" action="" onsubmit=" return ValidateBookForm()">
    <table class='table table-hover table-responsive table-bordered'>

        <tr>
            <td>Name</td>
            <td><input id="BookName" type='text' name='Name'  value="<?php echo $stmt['Name'];?>"  onkeyup="validateBookName()"
                       class='form-control'><label id="commentBookName"></label></td>

        </tr>

        <tr>
            <td>Pages</td>
            <td><input  id="BookPages" type='text' name='Pages' value='<?php echo $stmt['Pages'];?>' onkeyup="validateBookPages()"
                        class='form-control'><label id="commentBookPages"></label> </td>
        </tr>

        <tr>
            <td>Publisher</td>
            <td> <?php

                $html = '<select name="populatePublisher">';
                foreach ($stmt1 as $row) {
                    if ($row['id'] == $stmt['Publisher']) {
                        $html .= '<option selected value="' . $row['id'] . '">'
                            . $row['Publisher_Name'] . '</option>';
                    }
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
            <td> <?php

                $html = '<select name="populateGenre">';
                foreach ($stmt2 as $row) {
                    if($row['id'] == $stmt['Genre']){
                        $html .= '<option selected value="' . $row['id'] . '">'
                            . $row['Gname'] . '</option>';
                    }
                    $html .= '<option  value="' . $row['id'] . '">'
                        . $row['Gname'] . '</option>';
                }
                $html .= '</select>';

                echo $html;
                ?>
            </td>
        </tr>
        <tr>
            <td><label class="control-label">Image: </label></td>
            <td> <input type="file" name="image" value='<?php echo $stmt['image'];?>'/></td>
        </tr>

        <tr>
            <td></td>
            <td>
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </td>
        </tr>

    </table>
</form>

