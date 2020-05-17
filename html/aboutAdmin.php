<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['username'])==0){  
    var_dump("lumi"); 
    header('location:login.php');
}
else{ 
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- page title -->
    <title> About</title>

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


<body class="page-template-about">

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

    <!-- about me section -->
    <section class="about-me-section">
        <div class="container">

            <div class="section-inner no-border">

                <div class="row">

                    <div class="col-xlarge-5">
                        <div class="about-me-image">
                            <img src="../assets/img/portfolio_placeholder_10.jpg" alt="About Me" class="image">
                        </div>
                    </div>

                    <div class="col-xlarge-7">
                        <h1 class="font-montserrat-reg large-heading">About</h1>
                        <div class="page-content">
                            <p>A library is a collection of sources of information and similar resources, made accessible to a defined community for reference or borrowing.[1]
                                It provides physical or digital access to material, and may be a physical building or room, or a virtual space, or both</p>
                            <p>A library's collection can include books, periodicals, newspapers, manuscripts, films, maps, prints, documents, microform, CDs, cassettes, videotapes, DVDs, Blu-ray Discs, e-books, audiobooks, databases, and other formats.
                                Libraries range in size from a few shelves of books to several million items. In Latin and Greek, the idea of a bookcase is represented by Bibliotheca and Bibliothēkē (Greek: βιβλιοθήκη): derivatives of these mean library in many modern languages, e.g. French bibliothèque.</p>
                            <p>The first libraries consisted of archives of the earliest form of writing—the clay tablets in cuneiform script discovered in Sumer, some dating back to 2600 BC.
                                Private or personal libraries made up of written books appeared in classical Greece in the 5th century BC. In the 6th century, at the very close of the Classical period, the great libraries of the Mediterranean world remained those of Constantinople and Alexandria.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="block-section">
        <div class="container">

            <div class="section-inner">

                <!-- service item list -->
                <ul class="row block-list-1">

                    <!-- service block item example -->
                    <li class="col-xlarge-6 col-medium-6">
                        <div class="block-item">
                            <div class="row">
                                <div class="col-xlarge-3">
                                    <div class="block-item-icon">
                                        <i class="fa fa-pencil-square-o" ></i>
                                    </div>
                                </div>
                                <div class="col-xlarge-9">
                                    <h3 class="font-montserrat-reg">Graphic Design</h3>
                                    <p>Graphic design is the process of visual communication and problem-solving using one or more of typography, photography and illustration. The field is considered a subset of visual communication and communication design, but sometimes the term "graphic design" is used synonymously..</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- service block item example -->
                    <li class="col-xlarge-6 col-medium-6">
                        <div class="block-item">
                            <div class="row">
                                <div class="col-xlarge-3">
                                    <div class="block-item-icon">
                                        <i class="fa fa-desktop" ></i>
                                    </div>
                                </div>
                                <div class="col-xlarge-9">
                                    <h3 class="font-montserrat-reg">Web Design</h3>
                                    <p>Web design encompasses many different skills and disciplines in the production and maintenance of websites. The different areas of web design include web graphic design; interface design; authoring, including standardised code and proprietary software; user experience design; and search engine optimization</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- service block item example -->
                    <li class="col-xlarge-6 col-medium-6">
                        <div class="block-item">
                            <div class="row">
                                <div class="col-xlarge-3">
                                    <div class="block-item-icon">
                                        <i class="fa fa-code" ></i>
                                    </div>
                                </div>
                                <div class="col-xlarge-9">
                                    <h3 class="font-montserrat-reg">Web Development</h3>
                                    <p>Web development is a broad term for the work involved in developing a web site for the Internet (World Wide Web) or an intranet
                                        (a private network)</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- service block item example -->
                    <li class="col-xlarge-6 col-medium-6">
                        <div class="block-item">
                            <div class="row">
                                <div class="col-xlarge-3">
                                    <div class="block-item-icon">
                                        <i class="fa fa-bar-chart"></i>
                                    </div>
                                </div>
                                <div class="col-xlarge-9">
                                    <h3 class="font-montserrat-reg">Marketing</h3>
                                    <p>Marketing is the study and management of exchange relationships. The American Marketing Association has defined marketing as "the activity, set of institutions, and processes for creating, communicating, delivering, and exchanging offerings that have value for customers, clients, partners, and society at large."</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- service block item example -->
                    <li class="col-xlarge-6 col-medium-6">
                        <div class="block-item">
                            <div class="row">
                                <div class="col-xlarge-3">
                                    <div class="block-item-icon">
                                        <i class="fa fa-instagram" ></i>
                                    </div>
                                </div>
                                <div class="col-xlarge-9">
                                    <h3 class="font-montserrat-reg">Social Media</h3>
                                    <p>Social media are computer-mediated technologies that facilitate the creation and sharing of information, ideas, career interests and other forms of expression via virtual communities and networks. The variety of stand-alone and built-in social media services currently available introduces challenges of definition; however, there are some common features.</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- service block item example -->
                    <li class="col-xlarge-6 col-medium-6">
                        <div class="block-item">
                            <div class="row">
                                <div class="col-xlarge-3">
                                    <div class="block-item-icon">
                                        <i class="fa fa-database"></i>
                                    </div>
                                </div>
                                <div class="col-xlarge-9">
                                    <h3 class="font-montserrat-reg">Database Development</h3>
                                    <p>A database is an organized collection of data.[1] It is a collection of schemas, tables, queries, reports, views, and other objects. Database designers typically organize the data to model aspects of reality in a way that supports processes requiring information, such as (for example) modelling the availability of rooms in hotels in a way that supports finding a hotel with vacancies.</p>
                                </div>
                            </div>
                        </div>
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
<script type="text/javascript" src="../assets/js/main.js"></script>

</body>
</html>

<?php  } ?>