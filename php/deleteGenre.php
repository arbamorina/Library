<?php
// check if value was posted


// include database and object file
include_once '../config/Database.php';
include_once '../classes/Genre.php';

// get database connection
$database = new Database();

// prepare product object
$genre= new Genre();
$id = '';
if( isset( $_GET['Id'])) {
    $id = $_GET['Id'];
}
// set product id to be deleted
$array = $genre->getArray();
// set product id to be deleted
$database->delete($array,$id);

echo '<a href="../html/index.php" class="btn btn-large btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Back to index</a>';
echo '<a href="../html/displayGenre.php" class="btn btn-large btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Show data</a>'

?>