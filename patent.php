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
      <title>IPR | Patent</title>
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
	   <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-98184758-1', 'auto');
  ga('send', 'pageview');

</script>
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
		  <div id="about-us">
            <div class="s-12 m-12 l-6 media-container">
               <img src="img/patent.png" alt="">
            </div>
            <article class="s-12 m-12 l-6">
               <h2>Patent</h2>
               <p style="font-size:20px">A patent is an exclusive right granted for an invention.<br><br> Generally speaking, a patent provides the patent owner with the right to decide how - or whether - the invention can be used by others. <br>In exchange for this right, the patent owner makes technical information about the invention publicly available in the published patent document.<br><br><br>The process of filing a patent is explained below step-by-step.<br>Also all the forms required to fill and a "Sample Filled Form" links are provided below at the bottom of the page.<br>For more queries : Goto<a href="patentfaqs.php"><font size="5" color="white"><strong> FAQs</strong></font></a>.
               </p>
            </article>
         </div>
		 <!---Our works-->
		   <div id="our-work1">
            <div class="line "> 
			<h2 class="section-title">What can be patented and the conditions to be satisfied by an invention to be patentable ?</h2>
			<p style="font-size:20px;text-align:center">Invention of product or process that involves an inventive step and capable of industrial application.Capable of industrial application means that the invention is capable of being made or used in an industry.<br>An invention must satisfy the following three conditions of :

(i) Novelty (ii) Inventiveness (Non-obviousness) (iii) Usefulness</p><br>
			<h2 class="section-title">When to file a patent ?</h2>
			<p style="font-size:20px;text-align:center">Filing of an application for a patent should be completed at the earliest possible date and should not be delayed. An application filed with provisional specification, disclosing the essence of the nature of the invention helps to register the priority by the applicant. Delay in filing an application may entail some risks such as (i) some other inventor might file a patent application on the said invention and (ii) there may be either an inadvertent publication of the invention by the inventor himself/herself or by others independently of him/her. </p><br>
			<h2 class="section-title">Important</h2>
			<p style="font-size:20px;text-align:center"> Publication of an invention in any form by the inventor before filing of a patent application would disqualify the invention to be patentable. The invention should not be published or be a part of the existing global state of the art such as information appearing in magazines, technical journals, books, newspapers, published patents etc. constitute the state of the art. It should not be disclosed in any seminar/conference.</p><br>
               <h2 class="section-title">How To ?</h2>
         <form id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active"></li>
    <li></li>
    <li></li>
	  <li ></li>
	    <li></li>
		  <li></li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Step 1</h2>
    <h3 class="fs-subtitle">Do prior art.<br>(Search for similar patents).</h3>
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Step 2</h2>
    <h3 class="fs-subtitle">Fill Forms: <br><br>Form 1<br>Form 2<br>Form 3<br>&<br>Form 5 (If inventorship).<br></h3>
	<h3 class="fs-subtitle">Attach DD of the fees and Abstract in the format</h3> 
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Step 3</h2>
    <h3 class="fs-subtitle">Get the application number.<br>(Normally takes 4-6 weeks).</h3>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
   <fieldset>
     <h2 class="fs-title">Step 4</h2>
    <h3 class="fs-subtitle">Publication:</h3>
	<h3 class="fs-subtitle">a. Wait 18 months for publication.</h3>
	<h3 class="fs-subtitle">b. Pay early publication fees and fill "Form 9" to get it published early.</h3>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
   <fieldset>
     <h2 class="fs-title">Step 5</h2>
    <h3 class="fs-subtitle">Request for examination by filling "Form 18".</h3>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
   <fieldset>
     <h2 class="fs-title">Step 6</h2>
    <h3 class="fs-subtitle">Presentation and grant of patent is satisfied.</h3>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
  </fieldset>
</form>
               
        <br>
		<br>
     
         </div>
		
		 </div>
		
		 <div id="services1">
            <div class="line">
                <center>  
				<!--<div><a class="white-btn1" href="#contact">All Forms</a></div>-->
		<div><a class="white-btn1" href="/pdf/samplepatentform.pdf">Sample Filled Forms</a></div>
		<div><a class="white-btn1" href="patentfaqs.php">More Questions : FAQs</a></div>
        </center> 
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
	    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

    <script src="js/index1.js"></script>

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