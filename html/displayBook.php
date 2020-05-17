<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['username'])==0){  
    header('location:login.php');
}
else{ 
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
$arrayBook=$book->getArray();
$stmt = $db->read($arrayBook);
$id = $book->getId();

$record_per_page = 10;
$page = '';
if(isset($_GET["page"]))
{
    $page = $_GET["page"];
}
else
{
    $page = 1;
}


$start_from = ($page-1)*$record_per_page;
$query = "SELECT * FROM book order by id DESC LIMIT $start_from, $record_per_page";
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
        <a href="indexAdmin.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon glyphicon-home"></i> &nbsp; Home</a>
        <a href="../files/writeToFile.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon glyphicon-pencil"></i> &nbsp; Write to File</a>
    </div>

    <div class="clearfix"></div><br />

    <div class="container">
        <form method='POST' action="">
            <table class='table table-bordered table-responsive'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Pages </th>
                    <th>Publisher </th>
                    <th>Genre </th>
                    <th>Images </th>
                    <th colspan="2" align="center">Actions</th>
                </tr>
                <tr>
                    <?php foreach ($result as $row){?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Pages']; ?></td>
                    <td><?php echo $pub->getPublisherNameByID($row['Publisher']) ?></td>
                    <td><?php echo $gen->getGenreNameByID($row['Genre'])?></td>
                    <!--<td></td>-->
                    <td align="center">
                        <a href="../php/editBook.php?Id=<?php print($row['id']); ?>"><i
                                    class="glyphicon glyphicon-edit"></i> Update</a>
                    </td>
                    <td align="center">
                        <a href="../php/deleteBook.php?Id=<?php print($row['id']); ?>"><i
                                    class="glyphicon glyphicon-remove-circle"></i> Delete</a>
                    </td>
                </tr>
                <?php  }?>
            </table>
    </div>

    <div align="center">
        <?php
        $page_query = "SELECT * FROM book ORDER BY id DESC";
        $page_result = $db->query( $page_query);
        $total_records = count($page_result);

        $total_pages = ceil($total_records/$record_per_page);
        $start_loop = $page;
        $difference = $total_pages - $page;
        if($difference <= 5)
        {
            $start_loop = $total_pages - 1;
        }
        $end_loop = $start_loop + $total_pages-1;
        if($page > 1)
        {
            echo "<a href='../html/displayBook.php?page=1'>First</a>";
            echo "<a href='../html/displayBook.php?page=".($page - 1)."'><<</a>";
        }
        for($i=$start_loop; $i<=$end_loop; $i++)
        {
            echo "<a href='../html/displayBook.php?page=".$i."'>".$i."</a>";
        }
        if($page <= $end_loop)
        {
            echo "<a href='../html/displayBook.php?page=".($page+1)."'>>></a>";
            echo "<a href='../html/displayBook.php?page=".$total_pages."'>Last</a>";
        }
        ?>
    </div>

</body>
</html>

<?php } ?>

