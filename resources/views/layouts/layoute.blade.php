<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ReFix</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Restore - Computer, Mobile & Digital Repair Shop HTML5 Template">
        <meta name="author" content="codeecstasy">
        <link rel="shortcut icon" href="images/favicon.png" />

        <!-- The styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="css/icon-styles.css" rel="stylesheet" type="text/css" >
        <link href="css/animate.css" rel="stylesheet" type="text/css" >
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" >
        <link href="css/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="css/styles.css" />
		<link href="css/bootstrap-social.css" rel="stylesheet" type="text/css" >

        
    <body> 

        <div id="preloader">
            <span class="margin-bottom"><img src="images/loader.gif" alt="" /></span>
        </div>

       <!--  HEADER -->

        <header class="main-header clearfix">
            
            <section class="header-wrapper navgiation-wrapper">
                
                <div class="repair-header-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-12 repair-col-logo">
                                <div class="repair-logo">
                                    <a href="">
                                        <img src="images/logo.png" alt="Logo" width="156">
                                    </a>
                                </div>
                                <!-- end .repair-logo  -->
                            </div>
                            <!-- end .col-md-3  -->
                            <div class="col-md-7 hidden-sm hidden-xs">
                                
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="repair-icon-box">
                                                <div class="icon-container">
                                                   <span class="icon icon-basic-home"></span>
                                                </div>
                                                <div class="text">
                                                    <span class="head-heading">Nous rendre visite</span>
                                                    <span class="head-content">25, Rue Elmacira, Essaouira</span>
                                                </div>
                                            </div>
                                            <!-- end .repair-icon-box  -->
                                        </div>
                                        <!-- end .col-md-4  -->
                                        
                                        <div class="col-md-4">
                                            <div class="repair-icon-box">
                                                <div class="icon-container">
                                                   <i class="icon icon-basic-smartphone"></i>
                                                </div>
                                                <div class="text">
                                                    <span class="head-heading">Appelez-nous</span>
                                                    <span class="head-content">+212 641966888</span>
                                                </div>
                                            </div>
                                            <!-- end .repair-icon-box  -->
                                        </div>
                                        <!-- end .col-md-4  -->

                                        <div class="col-md-4">
                                            <div class="repair-icon-box">
                                                <div class="icon-container">
                                                   <i class="icon icon-basic-clock"></i>
                                                </div>
                                                <div class="text">
                                                    <span class="head-heading">Lun - Sam</span>
                                                    <span class="head-content">10.00 - 20.00</span>
                                                </div>
                                            </div>
                                            <!-- end .repair-icon-box  -->
                                        </div>
                                        <!-- end .col-md-4  -->
                                    </div>
                                    <!-- end .row  -->
                                
                            </div>
                            <!-- end .col-md-7  -->
                            
                            <div class="col-md-2 hidden-sm hidden-xs">
                                   <div class="btn-quote">
                                      <a class="btn-request_quote" href="{{ url('/commencer') }}">COMMENCER</a>
                                   </div>
                                   <!-- end .btn-quote  -->
                            </div>
                            <!-- end .col-md-2  -->
                            
                        </div>
                        <!-- end .row  -->
                    </div>
                    <!-- end .container  -->
                </div>
                <!-- end .repair-header-top  -->
                

                <div class="navbar navbar-default">			
                    <div class="container clearfix">
                        <div class="navbar-collapse collapse pull-left">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ url('/') }}" title="Accueil">Accueil</a></li>
                                <li><a href="{{ url('/service') }}" title="Nos services">Nos services</a></li>
                                <li><a href="{{ url('/about-us') }}" title="À propos">À propos</a></li>
                                <li><a href="{{ url('/gallery') }}" title="Galerie">Galerie</a></li>
                                <li><a href="{{ url('/contact') }}" title="Contact">Contact</a></li>
                            </ul>
                            <!-- end .nav .navbar-nav  -->
                        </div>
                        <div class="navbar-header pull-right">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="social-icons hidden-sm hidden-xs">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="margin-right-0">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                            <!-- end .social-icons  --> 
                        </div>
                    </div>
                    <!-- end .container  -->
                </div>
                <!-- end .navbar .navbar-default  --> 
                
            </section>


        </header> <!-- end main-header  -->



@yield('content')



    <!-- FOOTER  -->
        
    <footer>
        <!-- FOOTER WIDGET AREA -->

            <section class="section-content-block footer-widget-area-bg">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-4 col-sm-7">
                            <div class="footer-widget-area">
                                <div class="footer-logo" >
                                   <img src="images/logo-footer.png" alt="Logo" width="156">
                                </div>
                                <div class="contact-info divider-line">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed dolor consectetur, ex inventore quibusdam provident rem molestiae vero quae quia.
                                </p>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-details">
                                        <div class="social-icons">
                                            <a href="#">
                                            <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-pinterest-p"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-instagram"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end .footer-widget-area  -->
                        </div> <!-- end .col-md-4  -->
                        
                        <div class="col-md-4 col-sm-5">
                            <div class="footer-widget-area">
                                <h3>Shop Info</h3>
                                <div class="contact-info divider-line">
                                    <div class="contact-heading">Adresse :</div>
                                    <div class="contact-details">
                                        25, Rue Elmacira, Essaouira
                                    </div>
                                </div>
                                <div class="contact-info divider-line">
                                    <div class="contact-heading">Télé :</div>
                                    <div class="contact-details">
                                    +212 641966888
                                    </div>
                                    <div class="contact-heading">Email :</div>
                                    <div class="contact-details color-primary">
                                        <a href="rachid@gmail.com">rachid@gmail.com</a>
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-heading">Heur :</div>
                                    <div class="contact-details">
                                    Lun - Sam (10am - 8pm)
                                    </div>
                                </div>
                            </div> <!-- end .footer-widget-area  -->
                        </div> <!-- end .col-md-3  --> 

                        <div class="col-md-4 col-sm-6">
                            <div class="footer-widget-area">
                                    <h3>Nos services de réparation</h3>     
                                    <ul class="footer-useful-links">
                                        <li>
                                            <a href="{{ url('/service') }}">
                                            <i class="fa fa fa-long-arrow-right fa-footer"></i>
                                            Réparation des ordinateur
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/service') }}">
                                            <i class="fa fa fa-long-arrow-right fa-footer"></i>
                                            Réparation des pc portable
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/service') }}">
                                            <i class="fa fa fa-long-arrow-right fa-footer"></i>
                                            réparation des tablets
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/service') }}">
                                            <i class="fa fa-long-arrow-right fa-footer"></i>
                                            réparation des mobiles
                                            </a>
                                        </li>
                                    </ul>  
                                    
                            </div> <!-- end .footer-widget-area  -->
                        </div> <!-- end .col-md-2  -->
                        
                    </div> <!-- end .row  --> 
                </div> <!-- end .container  -->
            </section> <!--  end .footer-widget-area-bg -->

            <!--FOOTER CONTENT  -->

            <section class="footer-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                             <span>
                            Copyright © 2016. All right reserved by
                            <a class="color-primary" href="http://restore.com/">restore.com</a>
                            </span>
                        </div> <!-- end .col-md-6  --> 
                        <div class="col-md-8 col-sm-12">
                            <div class="footer-nav">
                                <nav>
                                    <ul>
                                        <li>
                                           <a href="{{ url('/') }}">Accueil</a>
                                        </li>
                                        <li>
                                          <a href="{{ url('/service') }}">Nos services</a>
                                        </li>
                                        <li>
                                          <a href="{{ url('/about-us') }}">À propos</a>
                                        </li>
                                        <li>
                                          <a href="{{ url('/gallery') }}">Gallerie</a>
                                        </li>
                                        <li>
                                          <a href="{{ url('/contact') }}">Contact</a>
                                        </li>
                                        <li>
                                          <a href="{{ url('/commencer') }}">Commencer</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div> <!-- end .col-md-6  --> 
                    </div> <!-- end .row  --> 
                </div> <!-- end .container  --> 
            </section>  <!--  end .footer-area -->
            
    </footer> <!--  end of footer -->

        <!-- Back To Top Button  -->

        <a id="backTop">Back To Top</a>
       
        <script src="js/jquery.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <script src="js/wow.min.js"></script>
       <script src="js/jquery.backTop.min.js"></script>
       <script src="js/waypoints.min.js"></script>
       <script src="js/waypoints-sticky.min.js"></script>
       <script src="js/owl.carousel.min.js"></script>
       <script src="js/jquery.stellar.min.js"></script>
       <script src="js/jquery.counterup.min.js"></script>
       <script src="js/venobox.min.js"></script>
       <script src="js/custom-scripts.js"></script>
   </body>


</html>
