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
      <title>IPR | Team:Mentors</title>
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
                     <div><a class="white-btn" href="login.php">Login | Sign Up</a></div>
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
         
         <!-- OUR WORK -->
        <div id="latest-news">
            <div class="line">
              <h2 class="section-title">Mentors</h2> 
              <div class="margin">

                <div class="s-12 m-12 l-12">

                  <div class="s-12 l-4">
                    <div class="news-date">
                     <img class="img" src="img/1.jpg">
                    </div>
                  </div>

                  <div class="s-12 l-8">
                    <div class="news-text">
                      <h4><b><u>Dr.Saurabh N. Mehta</u></b> </h4>
                      <p>Dr.Saurabh N. Mehta has more than 14 years of professional, research, and teaching experience in wireless system development all together. Dr.Saurabh N.Mehta is currently working as a professor and heading the department of electronics and telecommunication at Vidyalankar Institute of Technology, Mumbai. Dr. Saurabh N. Mehta is responsible for integrating academia and industry collaboration, research program, planning, and educational training for the department of electronics and telecommunications. Dr. Saurabh N.Mehta earned his B.E., M.S., and PhD. degrees in Electronics Engineering from Mumbai University, Mumbai, India, Ajou University, South Korea, and Inha University, South Korea, in 2002, 2005, and 2011, respectively. He has over 60 research articles published in books, journals, national and international conferences, and several technical contributions to IEEE standards. He has been a reviewer, technical committee member, and editorial board for many international/national conferences and journals.  He has won several prizes for the technical papers and projects. He is member of many international and national professional organizations including fellowship of IETE, Senior Member of IEEE , Senior Life Members of CSI, Senior Member of IACSIT .Singapore, life members of ISTE to name a few. He has trained more than 2000 teachers/Students in the field of Electronics and Telecommunication through various guest lectures/seminars / workshops. His research interests are in the area of Wireless Networks, Rf-Id Technology, Ubiquitous Computing, Game Theory, and Educational Technology. He is also running his own "Sun Wireless Technologies", a consultancy firm in the area of embedded System, wireless technology, education, and technical market research. Beside technology he loves to spend his time in watching movies, reading books and educating people about HAM Radio.</p>
                    </div>
                  </div>  
				  
                </div> 

				<div class="s-12 m-12 l-12">
<br><br>
                  <div class="s-12 l-4">
                    <div class="news-date">
                     <img class="img" src="img/2.png">
                    </div>
                  </div>

                  <div class="s-12 l-8">
                    <div class="news-text">
                      <h4><b><u>	Prof. Kiran Talele </u></b> </h4>
                      <p>	Prof. Kiran Talele is an Associate Professor in Electronics Engineering Department of Sardar Patel Institute of Technology.

	He is also Head of Academic Relations, Sardar Patel Technology Business Incubator and Incharge of Innovation & Entrepreneurship Development Centre   supported by Department of Science and Technology, Government of India.

	His area of research is Digital Signal & Image Processing, Computer Vision & Machine Learning and Multimedia System Design.

	He has published 60+ research papers at various national & international refereed conferences and journals. 
He has filed & published 8 patents at Indian Patent Office.

	He is Student Activities Chair & EXECOM Member of IEEE Bombay Section and NEN Certified Mentor for Setting up Startup Vetures.

	He has received incentives in year 2008-09 for excellent performance in academics and research from Management of Bharatiya Vidya Bhavans',  S.P.I.T.
</p>
                    </div>
                  </div>  
				  
                </div> 

<div class="s-12 m-12 l-12">
<br><br>
                  <div class="s-12 l-4">
                    <div class="news-date">
                     <img class="img" src="img/3.png">
                    </div>
                  </div>

                  <div class="s-12 l-8">
                    <div class="news-text">
                      <h4><b><u>Dr. Vinitkumar Jayaprakash Dongre</u></b> </h4>
                      <p>	Dr. Vinitkumar Jayaprakash Dongre completed his bachelor degree in Industrial Electronics Engineering from Amravati University. M. Tech. in Electronics and Telecommunication Engineering and Ph. D. (Engineering) from NMIMS University Mumbai.

He is working as Associate Professor and HOD Electronics & Telecommunication Engineering Department at Thakur Collage of Engineering and Technology, Kandivli, Mumbai. 

He has worked experience of 19 years in teaching field and his area of interest is antenna design, RF-MEMS and Microwave engineering. He has published 38 papers in national, international conferences and journals. He also filed 3 Patents with Indian patent office. He has guided 13 M. E. projects. Recently he got the research grant from innovation and entrepreneurship development cell, department of science and technology, Government of India. He also got research grant from University of Mumbai for his two research projects in the year 2012 and 2017.  

He is also working as IIT Bombay Remote Center Coordinator, IPR Coordinator and International alliance coordinator at Thakur Collage of Engineering and Technology (TCET). He organized two conferences and coordinated 22 Sort Term Training Programs and workshops at TCET.

He has participated and won first rank overall championship for University of Mumbai in "AVISHKAR-2011" the state level Inter-University Research Convention at Shivaji University, Kolhapur in January 2012.

He has worked as reviewer for IEEE International Conferences in India, Malaysia and Indonesia. He has given the talks on Intellectual Property Rights, Antenna and Microwave Designing Aspects, Research Methodology, Formulating Effective Research, Enhancing Quality through NBA to Achieve Sustainability and Employability and Stress Management. 

He has achieved awards for best actor, director in Marathi, Hindi and English dramas also fond of Indian classical music and playing flute.

</p>
                    </div>
                  </div>  
				  
                </div> 

                <div class="s-12 m-12 l-12">
<br><br>
                  <div class="s-12 l-4">
                    <div class="news-date">
                     <img class="img" src="img/5.jpg">
                    </div>
                  </div>

                  <div class="s-12 l-8">
                    <div class="news-text">
                      <h4><b><u>  Dr. Dinesh Israni </u></b> </h4>
                      <p> Dr. Dinesh Israni is an experienced Counsultant at SP-TBI. He is presently Dean of ARMIET College,Shahapur.
</p>
                    </div>
                  </div>  
          
                </div> 







            </div>
			</div>
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