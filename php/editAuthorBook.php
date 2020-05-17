<?php
include_once "../php/header.php";
include_once '../config/Database.php';
include_once '../classes/Book.php';
include_once '../classes/AuthorBook.php';
include_once '../classes/Author.php';

// get database connection
$database = new Database();
$book = new Book();
$ab = new AuthorBook();
$author = new Author();

$id = '';
if( isset( $_GET['Id'])) {
    $id = $_GET['Id'];
}
$ab->setId($id);
$arrayABook=$ab->getArray();
$stmt = $database->readOne($arrayABook,$id);

$arrayBook=$book->getArray();
$stmt1 = $database->read($arrayBook);

$arrayAuthor=$author->getArray();
$stmt2 = $database->read($arrayAuthor);


echo "<div class='right-button-margin'>";
echo "<a href='../html/displayAuthorBook.php' class='btn btn-default pull-left'>List of Books with authors</a>";
echo "</div>";


if(isset($_POST['submit'])){

    $ab->setBookID($_POST['populateBook']);
    $ab->setAuthorID($_POST['populateAuthor']);
    $array = array();
    $array=$ab->getArray();

    // update
    $database->update($array,$id);
}
// set page footer
include_once "../php/footer.php";
?>

<form  method="post" action="">
    <table class='table table-hover table-responsive table-bordered'>

        <tr>
            <td>Book Name: </td>
            <td> <?php

                $html = '<select name="populateBook">';
                foreach ($stmt1 as $row) {
                    if ($row['id'] == $stmt['Book_ID']) {
                        $html .= '<option selected value="' . $row['id'] . '">'
                            . $row['Name'] . '</option>';
                    }
                    $html .= '<option value="' . $row['id'] . '">'
                        . $row['Name'] . '</option>';
                }
                $html .= '</select>';

                echo $html;
                ?>
            </td>
        </tr>

        <tr>
            <td>Author Name: </td>
            <td> <?php

                $html = '<select name="populateAuthor">';
                foreach ($stmt2 as $row) {
                    if($row['id'] == $stmt['Author_ID']){
                        $html .= '<option selected value="' . $row['id'] . '">'
                            . $row['Name'] . '</option>';
                    }
                    $html .= '<option  value="' . $row['id'] . '">'
                        . $row['Name'] . '</option>';
                }
                $html .= '</select>';

                echo $html;
                ?>
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </td>
        </tr>

    </table>
</form>

