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
include_once '../classes/Book.php';
include_once '../classes/Author.php';
$db = new Database();
$book = new Book();
$author = new Author();
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add Book</title>
    </head>
    <body>

    <div class="container">
        <form method='POST' action="../php/createAuthorBook.php">

            <table class='table table-bordered'>

                <tr>
                    <td>Book Name:  </td>
                    <td>
                        <?php
                       ;
                        $res = $db->read($book->getArray());

                        $html = '<select name="populateBook">';
                        $html .= '<option value="first">Please Select Book</option>';
                        foreach ($res as $row) {
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

                    <td>
                        <?php
                        $res = $db->read($author->getArray());

                        $html = '<select name="popublateAuthor">';
                        $html .= '<option value="first">Please Select Author</option>';
                        foreach ($res as $row) {
                            $html .= '<option value="' . $row['id'] . '">'
                                . $row['Name'] . '</option>';
                        }
                        $html .= '</select>';
                        echo $html;
                        ?>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-primary" name="btn-save">
                            <span class="glyphicon glyphicon-plus"></span> Create New Record
                        </button>
                        <a href="indexAdmin.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to home</a>
                        <a href="../php/createAuthorBook.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Show data</a>
                    </td>
                </tr>

            </table>
        </form>
    </div>
    </body>
    </html>

<?php include "../php/footer.php";  }?>