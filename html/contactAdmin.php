<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['username'])==0){  
    header('location:login.php');
}
else{ 
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- page title -->
    <title> Contact</title>

    <!-- theme css -->
    <link href="../assets/css/structure.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />


    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">

    <!-- google fonts used -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

</head>


<body class="page-template-contact">

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

    <!-- contact block section -->
    <section class="block-section">
        <div class="container">

            <div class="section-inner no-border">

                <!-- contact block item list -->
                <ul class="row">

                    <!-- contact block item example -->
                    <li class="col-xlarge-4 col-medium-4">
                        <div class="block-item">
                            <div class="row">
                                <div class="col-xlarge-4 col-large-12">
                                    <div class="block-item-icon">
                                        <i class="fa fa-map-marker" ></i>
                                    </div>
                                </div>
                                <div class="col-xlarge-8 col-large-12">
                                    <h3 class="font-montserrat-reg">Our Location</h3>
                                    <p>Prishtine, The Republic of Kosova</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- contact block item example -->
                    <li class="col-xlarge-4 col-medium-4">
                        <div class="block-item">
                            <div class="row">
                                <div class="col-xlarge-4 col-large-12">
                                    <div class="block-item-icon">
                                        <i class="fa fa-envelope-o" ></i>
                                    </div>
                                </div>
                                <div class="col-xlarge-8 col-large-12">
                                    <h3 class="font-montserrat-reg">Email Us</h3>
                                    <a href="mailto:something@gmail.com">something@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- contact block item example -->
                    <li class="col-xlarge-4 col-medium-4">
                        <div class="block-item">
                            <div class="row">
                                <div class="col-xlarge-4 col-large-12">
                                    <div class="block-item-icon">
                                        <i class="fa fa-mobile" ></i>
                                    </div>
                                </div>
                                <div class="col-xlarge-8 col-large-12">
                                    <h3 class="font-montserrat-reg">Call Us</h3>
                                    <a href="tel:01234 123456">+37745000000</a>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>

        </div>
    </section>

    <!-- contact map section -->
    <section class="map-section">
        <div class="container">

            <div class="section-inner">

                <!-- Google map -->
                <div id="contact-map-container">
                    <div id="contact-map"></div>
                </div>

            </div>

        </div>
    </section>

    <!-- contact form section -->
    <section class="contact-form-section">
        <div class="container">

            <div class="section-inner">

                <div class="row">

                    <!-- contact text content -->
                    <div class="col-xlarge-4">
                        <div class="contact-text-content">
                            <h1 class="font-montserrat-reg large-heading">Contact</h1>
                            <div class="page-content">
                                <p>Integer pretium posuere est. Ut interdum mollis ipsum, ac vehicula nisl laoreet et. Curabitur ac ipsum aliquam, varius purus at, lobortis purus. Maecenas quis sem dapibus, volutpat odio non, mattis dui. Nam eget urna nec mi tempor mollis vel nec felis. Cras tellus est, malesuada at leo vitae, lacinia pellentesque eros. Donec accumsan tincidunt velit.</p>
                            </div>
                        </div>
                    </div>

                    <!-- contact form -->
                    <div class="col-xlarge-8">

                        <div id="success-message" class="notification"><p class="font-opensans-reg"></p></div>
                        <div id="error-message" class="notification"><p class="font-opensans-reg"></p></div>

                        <!-- contact form -->
                        <form id="contact-form" method="post" name="contact-form">
                            <div class="row">
                                <div class="col-xlarge-6 col-medium-6">
                                    <input class="input-field" name="contact_name" id="contact_name" value=""
                                           placeholder="Name" tabindex="1"/>

                                    <input type="email" class="input-field" name="contact_email" id="contact_email"
                                           value="" placeholder="Email" tabindex="2"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xlarge-12">
                                    <textarea name="contact_message" id="contact_message" class="input-textarea" tabindex="4" placeholder="Message" ></textarea>
                                </div>
                            </div>
                            <input type="submit" class="secondary-button font-montserrat-reg hov-bk" value="Send Message" />
                        </form>

                    </div>

                </div>

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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRt-W_Q9SViiqTlCIWprQyCX0rG_4Y0PQ"></script>
<script type="text/javascript" src="../assets/js/main.js"></script>
<script src="../assets/js/ajax_contact.js"></script>

</body>
</html>
<?php  } ?>