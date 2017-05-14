<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?><!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>IPR | Blog</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>

                 
      <!--[if lt IE 9]>
	      <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
	    <link rel="shortcut icon" href="img/icon.png" >
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->
      <header>
         <div id="topbar">
            <div class="line">
               <div class="s-12 m-6 l-6">
                  <p>.</p>
               </div>
               <div class="s-12 m-6 l-6">
                  <div class="social right">
                     <div><a class="white-btn" href="logout.php">Logout</a></div>
                  </div>
               </div>
            </div>  
         </div> 
         <nav>
            <div class="line">
               <div class="s-12 l-2">
                  <p class="logo"><strong>IPR</strong>4students</p>
               </div>
               <div class="top-nav s-12 l-10">
                  <p class="nav-text">Menu</p>
                  <ul class="right">
                     <li><a href="home.php">Home</a></li>
                     <li><a href="#">IPR</a>
					 <ul>
								<li><a href="copyright.php">Copyright</a></li>
								<li><a href="patent.php">Patent</a></li>
								<li><a href="trademark.php">Trademark</a></li>
								</ul>
					 </li>
                     <li><a href="#">Team</a>
					  <ul>
								<li><a href="coreteam.php">Core Team</a></li>
								<li><a href="mentors.php">Mentors</a></li>
								</ul>
					 </li>
                     <li><a href="blog.php">Blog</a></li>
                     <li><a href="#">FAQs</a>
					 <ul>
								<li><a href="copyrightfaqs.php">Copyright FAQs</a></li>
								<li><a href="patentfaqs.php">Patent FAQs</a></li>
								<li><a href="trademarkfaqs.php">Trademark FAQs</a></li>
					 </ul></li>

           <li><a href="#">News</a>
            <ul>
                <!-- <li><a href=""></a></li> this creates problem -->
                
                </ul>
           </li>
           <li><a href="#">Contact Us</a>
            <ul>
                
                </ul>
           </li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>  
      <section>
         <!-- CAROUSEL --> 
         <div id="carousel">
            <div id="owl-demo" class="owl-carousel owl-theme"> 
               <div class="item">
                  <img src="img/a.png" alt="">
                  
               </div>
            </div>
         </div>
         <!-- FIRST BLOCK -->
         <div id="first-block">
            <div class="line">
               <h1>Blog</h1>
           
            </div>
         </div>
         <!-- OUR WORK -->
         <div id="our-work">
            <div class="line">
               <h2 align="center"><b>Comming Soon</b></h2>


			
		
				
 

            </div>
         </div>         
     
        
         
         
      </section>
      <!-- FOOTER -->
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright 2017, IPR4Students</p>
               <p>Designed and Maintained by <a href="mediaspa.in"><font size="2" color="white"><strong>Mediaspa<strong></font></a>.</p>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
            var theme_slider = $("#owl-demo");
            $("#owl-demo").owlCarousel({
                navigation: false,
                slideSpeed: 300,
                paginationSpeed: 400,
                autoPlay: 6000,
                addClassActive: true,
             // transitionStyle: "fade",
                singleItem: true
            });
            $("#owl-demo2").owlCarousel({
                slideSpeed: 300,
                autoPlay: true,
                navigation: true,
                navigationText: ["&#xf007","&#xf006"],
                pagination: false,
                singleItem: true
            });
        
            // Custom Navigation Events
            $(".next-arrow").click(function() {
                theme_slider.trigger('owl.next');
            })
            $(".prev-arrow").click(function() {
                theme_slider.trigger('owl.prev');
            })     
        }); 
      </script>
   </body>
</html>