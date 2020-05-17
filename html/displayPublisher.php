<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['username'])==0){  
    header('location:login.php');
}
else{ 
include_once '../php/header.php';
include_once '../classes/Publisher.php';
include_once '../config/Database.php';
$db = new Database();
$pub = new Publisher();

$array = array();
$array=$pub->getArray();

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
$query = "SELECT * FROM publisher order by id DESC LIMIT $start_from, $record_per_page";
$result = $db->query($query);


?>
<html>
<head>
<title>List of Publishers</title>
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
        <a href="../html/createPublisher.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Publisher</a>
        <a href="indexAdmin.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Home</a>
    </div>

    <div class="clearfix"></div><br />

    <div class="container">
        <form method='POST' action="../php/displayPublisher.php">
            <table class='table table-bordered table-responsive'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>City Name </th>
                    <th colspan="2" align="center">Actions</th>
                </tr>
                <tr>
                    <?php foreach ($result as $row){?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['Publisher_Name']; ?></td>
                    <td><?php echo $row['City_Name']; ?></td>
                    <td align="center">
                        <a href="../php/editPublisher.php?Id=<?php print($row['id']); ?>"><i
                                class="glyphicon glyphicon-edit"></i> Update</a>
                    </td>
                    <td align="center">
                        <a href="../php/deletePublisher.php?Id=<?php print($row['id']); ?>"><i
                                class="glyphicon glyphicon-remove-circle"></i> Delete</a>
                    </td>
                </tr>
                <?php  }?>

            </table>

    </div>
    <div align="center">
        <?php
        $page_query = "SELECT * FROM publisher ORDER BY id DESC";
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
            echo "<a href='../html/displayPublisher.php?page=1'>First</a>";
            echo "<a href='../html/displayPublisher.php?page=".($page - 1)."'><<</a>";
        }
        for($i=$start_loop; $i<=$end_loop; $i++)
        {
            echo "<a href='../html/displayPublisher.php?page=".$i."'>".$i."</a>";
        }
        if($page <= $end_loop)
        {
            echo "<a href='../html/displayPublisher.php?page=".($page+1)."'>>></a>";
            echo "<a href='../html/displayPublisher.php?page=".$total_pages."'>Last</a>";
        }
        ?>
    </div>

</body>

</html>

<?php  }?>