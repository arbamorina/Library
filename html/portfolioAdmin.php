<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['username'])==0){  
    header('location:login.php');
}
else{ ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- page title -->
    <title>Portfolio</title>
   

    <!-- theme css -->
    <link href="../assets/css/structure.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- carousel css -->
    <link href="../assets/js/lib/owl-carousel/owl.carousel.css" rel="stylesheet">

    <!-- author -->
    <meta name="author" content="Lucid Themes">
    <!-- responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">

    <!-- google fonts used -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

</head>


<body class="page-template-portfolio">

<!-- header -->
<header id="site-header" class="fixed-header">

    <div class="header-main">
        <div class="container">

            <div class="header-inner clearfix">

                <div class="medium-header-container">


                    <!-- Mobile burger icon -->
                    <div id="mobile-nav-button" class="hidden-desk hidden-tab">
                        <div id="mobile-nav-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                </div>

                <!-- header nav menu -->
                <nav id="header-nav">

                    <ul id="nav-ul" class="menu font-montserrat-reg clearfix">

                        <!-- Nav item - single tier drop down -->
                        <li class="menu-item menu-item-has-children">
                            <a href="indexAdmin.php">Home<span class="sub-drop-icon fa fa-angle-down"></span></a>
                        </li>

                        <li class="menu-item menu-item-has-children">
                            <a href="">Manage Library<span class="sub-drop-icon fa fa-angle-down"></span></a>
                            <ul class="sub-menu sub-menu-first">
                                <li class="menu-item menu-item-has-children">
                                    <a href="">Book<span class="sub-drop-icon sub-second-drop fa fa-angle-down"></span></a>
                                    <ul class="sub-menu sub-second-tier">
                                        <li><a href="../html/createBook.php">Create Book</a></li>
                                        <li><a href="../html/displayBook.php">Show all Books</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="">Author<span class="sub-drop-icon sub-second-drop fa fa-angle-down"></span></a>
                                    <ul class="sub-menu sub-second-tier">
                                        <li><a href="../html/createAuthor.php">Create Author</a></li>
                                        <li><a href="../html/displayAuthor.php">Show all Authors</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="">Publisher<span class="sub-drop-icon sub-second-drop fa fa-angle-down"></span></a>
                                    <ul class="sub-menu sub-second-tier">
                                        <li><a href="../html/createPublisher.php">Create Publisher</a></li>
                                        <li><a href="../html/displayPublisher.php">Show all Publishers</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="">Genre<span class="sub-drop-icon sub-second-drop fa fa-angle-down"></span></a>
                                    <ul class="sub-menu sub-second-tier">
                                        <li><a href="../html/createGenre.php">Create Genre</a></li><li>
                                        <a href="../html/displayPublisher.php">Show all Genres</a></li>

                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="">Books and Authors<span class="sub-drop-icon sub-second-drop fa fa-angle-down"></span></a>
                                    <ul class="sub-menu sub-second-tier">
                                        <li><a href="../html/createAuthorBook.php">Connect author with his book</a></li>
                                        <li><a href="../html/displayAuthorBook.php">Show authors and their books</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>



                        <!-- Nav item - no drop down -->
                        <li class="menu-item menu-item-has-children">
                            <a href="aboutAdmin.php">About<span class="sub-drop-icon fa fa-angle-down"></span></a>
                        </li>

                        <!-- Nav item - no drop down -->
                        <li class="menu-item menu-item-has-children">
                            <a href="portfolioAdmin.php">Portfolio<span class="sub-drop-icon fa fa-angle-down"></span></a>
                        </li>



                        <!-- Nav item - no drop down -->
                        <li class="menu-item menu-item-has-children">
                            <a href="contactAdmin.php">Contact<span class="sub-drop-icon fa fa-angle-down"></span></a>
                        </li>

                        <li class="menu-item menu-item-has-children">
                            <a href="../php/logout.php">Log Out<span class="sub-drop-icon fa fa-angle-down"></span></a>
                        </li>

                    </ul>

                </nav>

            </div>

        </div>
    </div>

</header>


<div id="main-content">

    <!-- portfolio section -->
    <section class="portfolio-section">
        <div class="container">

            <div class="section-inner no-border">

                <!-- Portfolio filter -->
                <ul id="portfolio-item-filter" class="font-montserrat-reg clearfix">
                    <li><a href="#" class="active" data-filter="*">All</a></li>
                    <li><a href="#" data-filter=".design">Books</a></li>
                    <li><a href="#" data-filter=".photography">Authors</a></li>
                    <li><a href="#" data-filter=".print-design">Genres</a></li>
                </ul>

                <!-- portfolio item list -->
                <ul id="portfolio-items" class="row clearfix" data-layout-style="masonry">

                    <!-- portfolio item example 1 -->
                    <li class="col-xlarge-6 col-medium-6 print-design">
                        <a href="displayBook.php"  class="portfolio-item">
                            <img src="../assets/img/books.jpg" class="image" alt="" />
                            <!-- portfolio item hover -->
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <h3 class="font-montserrat-reg">Books</h3>
                                    <p class="font-opensans-reg">Show all books</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <!-- portfolio item example 2 -->
                    <li class="col-xlarge-6 col-medium-6 photography">
                        <a href="displayAuthor.php" class="portfolio-item">
                            <img src="../assets/img/author.jpg" class="image" alt="" />
                            <!-- portfolio item hover -->
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <h3 class="font-montserrat-reg">Authors</h3>
                                    <p class="font-opensans-reg">Show all Authors</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <!-- portfolio item example 3 -->
                    <li class="col-xlarge-3 col-medium-3 design print-design">
                        <a href="displayPublisher.php" class="portfolio-item">
                            <img src="../assets/img/company.jpg" class="image" alt="" />
                            <!-- portfolio item hover -->
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <h3 class="font-montserrat-reg">Publisher Companies</h3>
                                    <p class="font-opensans-reg">Show all Publisher Companies</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <!-- portfolio item example 4 -->
                    <li class="col-xlarge-3 col-medium-3 design">
                        <a href="displayGenre.php" class="portfolio-item">
                            <img src="../assets/img/genre.jpg" class="image" alt="" />
                            <!-- portfolio item hover -->
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <h3 class="font-montserrat-reg">Genre</h3>
                                    <p class="font-opensans-reg">Show all genres of books</p>
                                </div>
                            </div>
                        </a>
                    </li>

                </ul>

            </div>

        </div>
    </section>

</div>


<!-- footer -->
<footer>

    <div id="footer-main">
        <div class="container">

            <div id="footer-inner" class="clearfix">

                <!-- footer social icons -->
                <ul id="footer-social">
                    <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="" target="_blank"><i class="fa fa-instagram"></i></a></li>
                </ul>

                <!-- footer right section -->
                <div id="footer-right">

                    <!-- copyright text -->
                    <p id="footer-copyright" class="font-montserrat-reg">Copyright &copy; 2020</p>

                    <!-- scroll to top -->
                    <div id="scroll-top">
                        <span class="fa fa-angle-up"></span>
                    </div>

                </div>

            </div>

        </div>
    </div>

</footer>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="../assets/js/lib/jquery.sharrre.min.js"></script>
<script type="text/javascript" src="../assets/js/lib/isotope/isotope.js"></script>
<script type="text/javascript" src="../assets/js/lib/isotope/packery.js"></script>
<script type="text/javascript" src="../assets/js/main.js"></script>

</body>
</html>

<?php } ?>