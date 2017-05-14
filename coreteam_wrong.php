<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
/* if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
} */
?><!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>IPR | Team:Core</title>
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
                     <div><a class="white-btn" href="login.php">Login | Sign UP</a></div>
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
                     <li ><a href="home.php">Home</a></li>
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
         
         <!-- OUR WORK -->
        <div id="latest-news">
				<div class="line">
              <h2 class="section-title">Core Team</h2> 
              <div class="margin">


					

</div></div>
<div class="s-12 m-12 l-8 l-offset-2">
<br><br>
                  <div class="s-12 l-4">
                    <div class="news-date1">
                    <center> <img class="img" src="img/4.jpg" style="height:270px;width:248px"></center>
                    </div>
                  </div>

                  <div class="s-12 l-8">
                    <div class="news-text1">
                      <h4><b><u>Mr. Dnyaneshwar Kamble</u></b> </h4>
                      <p>M.Tech from IIT Madras.
       18 years work experience within Tata Group  across  domains Telecom, Automation, Smart City, Business Intelligence, Sustainability and Utilities.
       Worked in US, Canada and UK Geographies.
       New Business Unit 'Ecological Sustainability ' for TCS.
       In 2013, Part of Tata group level committee for targeting global water business.
      Part of CMC MD's office team and drove top 100 strategic accounts.
       IEEE Bombay Section Board Member from 2012.
     On Department Advisory board of Thakur, Vidyalankar, Rajiv Gandhi Institute in 2016-17.
      Mentoring for Startup's  DOBOZ.
      Executive board member of NGO's  like'One life Alliance India' working for sustainability and peace ,  Vikas Sahyog Prathisthan working for rural development.
</p>
                    </div>
                  </div>  

<br><br><br>
                  <div class="s-12 l-4">
                    <div class="news-date1">
                    <center> <img class="img" src="img/6.jpg" style="height:270px;width:248px"></center>
                    </div>
                  </div>

                  <div class="s-12 l-8">
                    <div class="news-text1">
                      <h4><b><u>Mr. Pratik Baheti</u></b> </h4>
                      <p>B.E. Electronics Engineering Student, Shri Ramdeobaba College of Engineering and Management, Nagpur

</p>
                    </div>
                  </div>  
                  </div>
            
			<div class="line">
			<br><br>
              <h2 class="section-title">Designing Team</h2> 
              <div class="margin">
<div class="s-12 m-12 l-6">
<br><br>
                  <div class="s-12 l-5">
                    <div class="news-date1">
                    <center> <img class="img" src="img/7.jpg" style="height:280px;width:220px"></center>
                    </div>
                  </div>

                  <div class="s-12 l-7">
                    <div class="news-text1">
                      <h4><b><u>Mr. Shubham Madke</u></b> </h4><br>
                      <p><font size="5px">Student ARMIET,Shahapur</font></p>
                    </div>
                  </div>  
				  
                </div> 
					<div class="s-12 m-12 l-6">
<br><br>
                  <div class="s-12 l-5">
                    <div class="news-date1">
                     <center> <img class="img" src="img/8.jpg" style="height:280px;width:220px"></center>
                    </div>
                  </div>

                  <div class="s-12 l-7">
                    <div class="news-text1">
                      <h4><b><u>Mr. Shubham Patil</u></b> </h4><br>
                      <p><font size="5px">Student ARMIET,Shahapur</font></p>
                    </div>
                  </div>  
				  
                </div> 
                <div class="s-12 m-12 l-6">
<br><br>
                  <div class="s-12 l-5">
                    <div class="news-date1">
                     <center> <img class="img" src="img/9.png" style="height:280px;width:220px"></center>
                    </div>
                  </div>

                  <div class="s-12 l-7">
                    <div class="news-text1">
                      <h4><b><u>Mr. Kirtiraj R. Garud</u></b> </h4><br>
                      <p><font size="5px">Student GHRCE,Nagpur</font></p>
                    </div>
                  </div>  
          
                </div> 

</div></div>
         </div>         
         <!-- SERVICES -->
         

        
         
         
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
		  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-98184758-1', 'auto');
  ga('send', 'pageview');

</script>
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