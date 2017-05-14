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
      <title>IPR | FAQs</title>
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
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

                 
      <!--[if lt IE 9]>
	      <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
	    <link rel="shortcut icon" href="img/icon.png">
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
               <h1><strong>FAQs</strong></h1>
           
            </div>
         </div>
         <!-- OUR WORK -->
         <div id="our-work">
           
              <div class="container1"> 
  
  <section>
  <h1> Patent Related FAQs</h1>
  </section>
<div class="toggle">
	<div class="toggle-title ">
		<h3>
		<i></i>
		<span class="title-name">What is expected from patentee as an obligation to the state?</span>
		</h3>
	</div>
	<div class="toggle-inner">
		<p>A patentee must disclose the invention in a patent document for anyone to practice it after the expiry of the patent or practice it with the consent of the patent holder during the life of the patent.</p>
	</div>
	</div><!-- END OF TOGGLE -->
	
	
	<div class="toggle">
		<div class="toggle-title ">
			<h3>
			<i></i>
			<span class="title-name"> What are the types of inventions which are not patentable in India? </span>
			</h3>
		</div>
		
		<div class="toggle-inner">
			<p>An invention may satisfy the condition of novelty, inventiveness and usefulness but it may not qualify for a patent under the following situations: <br>(i) an invention which is frivolous or which claims anything obviously contrary to well established natural laws; <br> (ii) an invention the primary or intended use or commercial exploitation of which could be contrary to public order or morality or which causes serious prejudice to human , animal or plant life or health or to the environment;  <br>(iii) the mere discovery of scientific principle or the formulation of an abstract theory or discovery of any living thing or non-living substance occurring in nature;  <br>(iv) the mere discovery of a new form of a known substance which does not result in enhancement of the known efficacy of that substance or the mere discovery of any new property or new use for a known substance or of the mere use of a  known process, machine or apparatus unless such known process results in a new product or employs at least one new reactant;  <br>
 
Explanation: For the purposes of this clause, salts, esters, ethers, polymorphs, metabolites, pure form, particle size, isomers, mixtures of isomers, complexes, combinations and other derivatives of known substance shall be considered to be the same substance, unless they differ significantly in properties with regards to efficacy.  <br>(v) a substance obtained by mere admixture resulting only in the aggregation of the properties of the components thereof or a process for producing such substance; <br> (vi) the mere arrangement or re-arrangement or duplication of known devices each functioning independently of one another in a known way; <br> (vii) a method of agriculture or horticulture; <br> (viii) any process for medicinal, surgical, curative, prophylactic (diagnostic, therapeutic) or other treatment of human beings or any process for a similar treatment of animals to render them free of disease or to increase their economic value or that of their products; <br> (ix) plants and animals in whole or any part thereof other than microorganisms but including seeds, varieties and species and essentially biological processes for production or propagation of plants and animals; <br> (x) a mathematical or business method or a computer program per se or algorithms;   <br>(xi) a literary, dramatic, musical or artistic work or any other aesthetic creation whatsoever including cinematographic works and television productions;  <br>(xii) a mere scheme or rule or method of performing mental act or method of playing game;  <br>(xiii) a presentation of information;  <br>(xiv) topography of integrated circuits; <br> (xv) an invention which, in effect, is traditional knowledge or which is an aggregation or duplication of known properties of traditionally known component or components;  <br>(xvi) inventions relating to atomic energy; </p>
		</div>
		</div><!-- END OF TOGGLE -->
		
		<div class="toggle">
			<div class="toggle-title  ">
				<h3>
				<i></i>
				<span class="title-name"> Can a published or disclosed invention be patented ?  </span>
				</h3>
			</div>
			
			<div class="toggle-inner">
				<p>No. Publication of an invention in any form by the inventor before filing of a patent application would disqualify the invention to be patentable. However, a grace period of 12 months is available in India for filing a patent application after disclosure of the invention through publication or display. This grace period is available only when such publications or displays are done in government notified exhibitions or paper read before learned society. A patent application must be filed before the grace period ends. A practical advice to inventors is that they should try to utilize the grace period only under special circumstances. As a matter of sound practice they should not disclose their invention before filing the patent application. The invention can be considered for publication after a patent application has been filed. Thus, it can be seen that there is no contradiction between publishing an inventive work and filing a patent application in respect of the invention.  </p>
			</div>
			
			</div><!-- END OF TOGGLE -->
			
  
  
		<div class="toggle">
			<div class="toggle-title  ">
				<h3>
				<i></i>
				<span class="title-name"> What is considered as the date of patent ?</span>
				</h3>
			</div>
			
			<div class="toggle-inner">
				<p>The date of patent is the date of filing the application for patent (whether provisional or complete). The term of the patent is counted from this date. </p>
			</div>
			
			</div><!-- END OF TOGGLE -->
			
  
  
		<div class="toggle">
			<div class="toggle-title ">
				<h3>
				<i></i>
				<span class="title-name">  What is the term of a patent in the Indian system? </span>
				</h3>
			</div>
			
			<div class="toggle-inner">
				<p>Term of the patent is 20 years from the date of filing for all types of inventions. </p>
			</div>
			
			</div><!-- END OF TOGGLE -->
			
  
  <div class="toggle">
			<div class="toggle-title ">
				<h3>
				<i></i>
				<span class="title-name"> What is the cost of filing a patent application in India? </span>
				</h3>
			</div>
			
			<div class="toggle-inner">
				<p>The Government fee for filing a patent application (complete/provisional) in India is Rs.750/- for individuals and Rs.3,000/- for legal entities. An applicant is now required to make a request for examining the patent application within 48 months of filing of the application. In case of applications filed before May 20, 2003 examination request has to be made within the 48 months of filing of the application or within 12 months from May 20, 2003 whichever is shorter. An individual has to pay Rs.1,000/- as examination fee and Rs.3,000/- for legal entities. A sealing fee of Rs.1,500/- for individuals and Rs.5,000/- for legal entities has to be paid at the time of grant (sealing) of patent.</p>
			</div>
			
			</div><!-- END OF TOGGLE -->
  
		<div class="toggle">
			<div class="toggle-title ">
				<h3>
				<i></i>
				<span class="title-name"> How does one keep a patent in force for the full patent term?  </span>
				</h3>
			</div>
			
			<div class="toggle-inner">
				<p>A patent has to be maintained by paying the maintenance fees every year. If the maintenance fees are not paid, the patent will cease to remain in force and the invention becomes open to public. Anyone can then utilize the patent without the danger of infringing the patent. </p>
			</div>
			
			</div><!-- END OF TOGGLE -->
			
			
  
  		<div class="toggle">
			<div class="toggle-title ">
				<h3>
				<i></i>
				<span class="title-name"> What are the essential documents to be generated and submitted by a potential patentee? </span>
				</h3>
			</div>
			
			<div class="toggle-inner">
				<p>There are two types of patent documents usually known as patent specification, namely  <br>
(i) Provisional Specification and (ii) Complete Specification <br> 
<b>Provisional Specification</b>  <br>
A provisional specification is usually filed to establish priority of the invention in case the disclosed invention is only at an early stage and a delay is expected in giving final shape to the invention. Although, a patent application accompanied with provisional specification does not confer any legal patent rights to the applicant, it is, however, a very important document to establish the earliest ownership of an invention. The provisional specification is a permanent and independent scientific cum legal document and no amendment is allowed in this. No patent is granted on the basis of a provisional specification. It has to be  followed by a complete specification for obtaining a patent for 
the said invention. Complete specification must be submitted within 12 months of filing the provisional specification. This period is non-extendible. It is not necessary to first file an application with provisional specification and then the complete specification. An application with complete specification can be filed right at the first instance.  <br>
<b>Complete Specification</b> <br>
Submission of complete specification is necessary to obtain a patent. The contents of a complete specification would include the following :- <br>
1. Title of the invention.<br>  2. Field to which the invention belongs.<br>  3. Background of the invention including prior art giving drawbacks of the known inventions & practices. <br> 4. Complete description of the invention along with experimental results.<br>  5. Drawings etc. essential for understanding the invention. <br> 6. Claims, which are statements related to the invention on which legal proprietorship is being sought. Therefore, the claims have to be drafted very carefully. <br> 7. Abstract of the invention.<br> 8. If a biological material is mentioned in a specification; then the source and geographical origin of the same is to be disclosed in the specification. For new biological material, registration number of the same given by an International Depositary Authority (IDA) is to be included in the specification along with its address. [Institute of Microbial Technology (IMTech), Chandigarh is a recognized IDA in India]</p>
			</div>
			
			</div><!-- END OF TOGGLE -->


			<div class="toggle">
			<div class="toggle-title ">
				<h3>
				<i></i>
				<span class="title-name">  What is request for examination and when it is to be filed?   </span>
				</h3>
			</div>
			
			<div class="toggle-inner">
				<p>An applicant has to make a request to the Patent Office for examining the patent application by paying the requisite fees.  The request can be made at the time of submitting complete specification or within 48 months of filing the application.  The request can also be made by any other interested person. </p>
			</div>
			
			</div><!-- END OF TOGGLE -->


			<div class="toggle">
			<div class="toggle-title ">
				<h3>
				<i></i>
				<span class="title-name">  When will a patent application be published? How will it be accessible to public? </span>
				</h3>
			</div>
			
			<div class="toggle-inner">
				<p>A patent application will be published in the Official Journal of the Patent Office on expiry of eighteen months from the date of filing or date of priority of the application, whichever is earlier. It can also be published earlier, if such a request is made by the applicant.  
 
An application will not be published in cases where directions have been given for secrecy, until the term of those directions expires. If an applicant wishes to withdraw the application on his own without any secrecy consideration, he can do so by withdrawing his application at-least three months before the date of the publication. In that case the application will not be published. 
The publication of every application includes the particulars of the date of application, application number, name and address of the applicant, an abstract, and is open for public  
 
 
inspection. However, the whole patent document can be obtained from the Patent Office upon payment of the requisite fees.  These documents are now also available online at the Patent Office website www.ipindia.nic.in.  The Official Journal of the Patent Office and the patent database in the searcheable form can be accessed through this website. </p>
			</div>
			
			</div><!-- END OF TOGGLE -->



			<div class="toggle">
			<div class="toggle-title ">
				<h3>
				<i></i>
				<span class="title-name"> What is opposition under the Indian Patents Act 1970?   </span>
				</h3>
			</div>
			
			<div class="toggle-inner">
				<p>The Act now provides for pre-grant and post-grant opposition. Pre-grant opposition can be filed after the publication of patent application and before the grant of patent. Postgrant opposition can be filed within one year of the grant of the patent. An opposition board will be constituted for each of the opposition notifications accepted by the Controller for the post grant opposition proceedings. Opposition in both cases will be allowed on all grounds specified in the Act.</p>
			</div>
			
			</div><!-- END OF TOGGLE -->


<div class="toggle">
			<div class="toggle-title ">
				<h3>
				<i></i>
				<span class="title-name">What are the grounds for opposition? </span>
				</h3>
			</div>
			
			<div class="toggle-inner">
				<p>Pre-grant and post-grant opposition can be filed only on the following grounds:-<br> 
i. Claimed invention or its part wrongfully obtained;<br>    ii. Claimed invention is published in a patent or any other document before the priority date;<br>  iii. Claimed invention is published in a patent after the priority date having earlier priority date;<br>  iv. Claimed invention was publicly known or publicly used before the priority date; <br> v. Claimed invention is obvious and does not involve clearly any inventive step, as regards to the matter published or used (in India) before the priority date;<br>   vi. Claimed invention is not an invention within the meaning of the Patents Act or is not patentable under the Patents Act; <br> vii. The complete specification does not sufficiently and clearly describe the invention or the method by which it is to be performed; <br> viii. The applicant has failed to disclose to the Controller the information regarding foreign applications filed by him for the same invention or has furnished the information which in any material particular was false to his knowledge; <br>  ix. In case of convention application if the application is not filed before the expiry of 12 months from the date of first application in convention country;<br>  x. The complete specification does not disclose or wrongly mentions the source and geographical origin of biological material used in the invention; <br> xi. Claimed invention was anticipated having regard to the knowledge, oral or otherwise available within any local or indigenous community in India or elsewhere. </p>
			</div>
			
			</div><!-- END OF TOGGLE -->

			<div class="toggle">
			<div class="toggle-title ">
				<h3>
				<i></i>
				<span class="title-name"> Is a patent granted in one country automatically enforceable in other countries? </span>
				</h3>
			</div>
			
			<div class="toggle-inner">
				<p>No. There is nothing like a global patent or a world patent. Patent rights are essentially territorial in nature and are protected only in a country (or countries), which has (have) granted these rights. Therefore, the patent could only be enforced in such countries. In other words, for obtaining patent rights in different countries one has to submit patent applications in all the countries of interest for grant of patents. This would entail payment of official fees and associated expenses, like the attorney fees, essential for obtaining patent rights in each country. However, there are some regional systems where by filing one application, one could simultaneously obtain patents in the member countries of a regional system; European Patent Office is an example of a similar system.  </p>
			</div>
			
			</div><!-- END OF TOGGLE -->



			<div class="toggle">
			<div class="toggle-title ">
				<h3>
				<i></i>
				<span class="title-name"> Is there a provision for filing patent application online in India? </span>
				</h3>
			</div>
			
			<div class="toggle-inner">
				<p>Yes. From 20th July, 2007 the Indian Patent Office has put in place an online filing system for patent application.  More information for filing online application is available on the website of Patent Office i.e. www.ipindia.nic.in.</p>
			</div>
			
			</div><!-- END OF TOGGLE -->


			<div class="toggle">
			<div class="toggle-title ">
				<h3>
				<i></i>
				<span class="title-name"> What are the criteria for naming inventors in an application for patent?</span>
				</h3>
			</div>
			
			<div class="toggle-inner">
				<p>The naming of inventors is normally decided on the basis of the following criteria:<br>

All persons who contribute towards development of patentable features of an invention should be named inventor(s).<br>
All persons, who have made intellectual contribution in achieving the final results of the research work leading to a patent, should be named inventor(s).<br>
A person who has not contributed intellectually in the development of an invention is not entitled to be included as an inventor.<br>
A person who provides ideas needed to produce the �germs of the invention� need not himself / herself carry out the experiments, constructs the apparatus with his/her own hands or make the drawings himself/herself. The person may take the help or others. Such person who have helped in conducting the experiments, constructing apparatus or making the drawings or models without providing any intellectual inputs are not entitled to be named inventors.<br>

Quite often difficulties are experienced in deciding the names of inventors. To avoid such a situation, it is very essential that all scientists engaged in research should keep factual, clear and accurate recorded of daily work done by them in the form of diary. The pages in the diary should be consecutively numbered and the entries made be signed both by the scientists and the concerned leader.</p>
			</div>
			
			</div><!-- END OF TOGGLE -->


			<div class="toggle">
			<div class="toggle-title ">
				<h3>
				<i></i>
				<span class="title-name">  What is the nature of information needed while consulting a patent attorney? </span>
				</h3>
			</div>
			
			<div class="toggle-inner">
				<p>As an inventor one should share the complete invention with a patent attorney in the same manner as a patient confides in a doctor. A s a doctor may not be able to write a correct prescription without knowing the details of the disease/problem, a patent attorney may not be able to draft a good specification in the absence of details about the invention. Following points should be kept in mind while discussing with the attorney:<br>

Provide complete details of the invention including failures, if any, on the way to the invention.<br>

Do not feel bad if attorney asks you questions like where did you get the idea from or did you copy the idea from somewhere or are you keeping other inventors working with you on the inventorship or have you published the invention or disclosed it in a seminar/conference or have you displayed the invention in an exhibition? A patent document is a techno-legal document, hence all precautions are to be taken right from the first step. Provides right answers and you may even show your laboratory note book/log book to the attorney. This will help the attorney / agent to explain the inventive step in a precise manner and draft a good specification and associated claims. 
Explain the central theme of the invention and novelty, inventiveness and utility of the invention. <br>
Share all the prior art documents in your possession with the attorney. <br>
If you have developed an improved version of your competitor's product/process, admit it and be totally honest. This would help the attorney in drafting precise claims and avoid excessive claims, which might be struck down immediately or at a later date.<br>
A detailed description of the best way of putting the invention into practical use, results of your tests and trials, etc., including all failures and defects should be given to the attorney.<br>
Alternative ways of using the invention, and the substitutes or parts of it i.e., will one chemical compound do as well as any other in the process? <br>
It may be worth drafting the patent widely enough to cover less satisfactory alternatives as well so as to prevent rivals from marketing a less satisfactory competing product which because of its defects might bring the whole genre of product into disrepute or which may be cheap. <br>
Both after an initial search and during the course of the filing and grant of a patent application, it is important to respond quickly and accurately to queries which the patent attorney may have. Thus the client should keep the patent attorney informed of any new developments in the field of invention carried by the patentee or some one else.</p>
			</div>
			
			</div><!-- END OF TOGGLE -->



			
  
  
 
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
	  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index2.js"></script>

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