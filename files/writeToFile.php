<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['username'])==0){
    header('location:login.php');
}
else {
    include_once '../php/header.php';
    include_once '../classes/Book.php';
    include_once '../classes/Publisher.php';
    include_once '../classes/Genre.php';
    include_once '../config/Database.php';
    $db = new Database();
    $book = new Book();
    $gen = new Genre();
    $pub = new Publisher();

    $array = array();
    $arrayBook = $book->getArray();
    $stmt = $db->read($arrayBook);
    $id = $book->getId();

    $record_per_page = 10;
    $page = '';
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    } else {
        $page = 1;
    }



    $start_from = ($page - 1) * $record_per_page;

    $query = "SELECT b.Name, b.Pages, p.Publisher_Name as Publisheri, g.gname as Genrei from book b
                inner join Publisher p on p.id = b.Publisher
                inner join Genre g on g.id = b.Genre";
    $result = $db->query($query);
?>
<html>
<head>
    <title>List of books</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <style>
        a {
            padding:8px 16px;
            border:1px solid #ccc;
            color:#286090;
            font-weight:bold;
        }
    </style>

</head>
<body>
<div class="clearfix"></div>

<div class="container">
    <a href="../html/createBook.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Book</a>
    <a href="../html/indexAdmin.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon glyphicon-home"></i> &nbsp; Home</a>
</div>

<?php
    $file = "./books.txt";

    //Pjesa qe shkruan ne fajll
    file_put_contents($file, "");
    foreach ($result as $row) {
        $write = "Book Title : {$row[Name]} - Page Count : {$row[Pages]} - Publisher : {$row[Publisheri]} - Genre : {$row[Genrei]}\n";
        file_put_contents($file, $write, FILE_APPEND);
    }


    //Pjesa qe lexon nga fajlli
    $document = file_get_contents($file);
    $linesToPrint = explode("\n",$document);
    $longestTitle = '';
    printf('<b>'.'Read data from file books.txt'.'<br>');
    foreach($linesToPrint as $newLines) {
        $splitet = preg_split("/ - /", $newLines, 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
        printf('<b>'.$newLines.'<br>');
        foreach ($splitet as $newSplitet)
        {
            if(substr($newSplitet, 0 , 4) === "Book")
            {
                if(strlen($newSplitet) > strlen($longestTitle)){
                    //echo('<b>'.$newSplitet.'<br>');
                    $longestTitle = $newSplitet;
                }
            }
        }
    }
    echo('Longest title is : '.'<b>'.substr($longestTitle,13).'</b>'.' with exactly : '.'<b>'.strlen(substr($longestTitle,13)).'</b>'.' letters');
}
?>

</body>
</html>
