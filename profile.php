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
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Welcome <?= $first_name.' '.$last_name ?></title>
  <?php include 'css/css.html'; ?>
  	    <link rel="shortcut icon" href="img/icon.png" >
</head>

<body>
	<nav>
            <div class="line">
            
                  <p class="logo" style=" text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>IPR</strong>4students</p>
      
               
            </div>
         </nav>

  <div class="form">

          <h1 style="color:white">Welcome</h1>
          
          <p>
          <?php 
     
          // Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
             
              
              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }
          
          ?>
          </p>
          
         
          
          <h2 style="color:white"><?php echo $first_name.' '.$last_name; ?></h2>
          <p><?= $email ?></p>
	   <?php
          
          // Keep reminding the user this account is not active, until they activate
          if ( !$active ){
              echo
              '<div class="info">
              Account is unverified, please confirm your email by clicking
              on the email link sent to you on your mail!
              </div>';
          }
          
          ?>
          <?php
          
          // Keep reminding the user this account is not active, until they activate
          if ( $active ){
			  echo
          '<a href="home.php"><button class="button button-block" name="logout"/>Home</button></a>';
		  }
		  ?>

    </div>
    <footer>
<p  style="font-size:15px;color:white">Copyright 2017, IPR4Students<br>Designed and Maintained by <a href="mediaspa.in"><font size="3" color="white">Mediaspa</font></a>.<br>Contact:<br><a href="mailto=support@ipr4students.org"><font size="3" color="white">support@ipr4students.org</font></a></p>

</footer>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
