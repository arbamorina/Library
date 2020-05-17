<?php
// check if value was posted


    // include database and object file
    include_once '../config/Database.php';
    include_once '../classes/Author.php';

    // get database connection
    $database = new Database();

    // prepare product object
    $autor = new Author();
    $id = '';
    if( isset( $_GET['Id'])) {
        $id = $_GET['Id'];
    }
    $array = $autor->getArray();
    // set product id to be deleted
   $database->delete($array,$id);

    echo '<a href="../html/index.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Back to index</a>';
    echo '<a href="../html/displayAuthor.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Show data</a>'

?>