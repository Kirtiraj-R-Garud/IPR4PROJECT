<?php
/* The password reset form, the link to this page is included
   from the forgot.php email message
*/
require 'db.php';
session_start();

// Make sure email and hash variables aren't empty
if( isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']) )
{
    $email = $mysqli->escape_string($_GET['email']); 
    $hash = $mysqli->escape_string($_GET['hash']); 

    // Make sure user email with matching hash exist
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email' AND hash='$hash'");

    if ( $result->num_rows == 0 )
    { 
        $_SESSION['message'] = "You have entered invalid URL for password reset!";
        header("location: error.php");
    }
}
else {
    $_SESSION['message'] = "Sorry, verification failed, try again!";
    header("location: error.php");  
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>IPR4Students | Reset Your Password</title>
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

          <h1 style="color:white">Choose Your New Password</h1>
          
          <form action="reset_password.php" method="post">
               <div class="top-row">
            <div class="field-wrap">
				 <label>
              New Password<span class="req">*</span><span id="result"></span>
            </label>
			 <input type="password" style="width:465.5px" required name="newpassword" id="password" autocomplete="off"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number, one special symbol and one uppercase and lowercase letter, and at least 8 or more characters"/>
					
           </div>
        
           <div class="field-wrap">
		 
              <input type="button"  style="width:55px;float:right;height:37.3px;font-size:15px;" id="btn" value="show">
           </div>
       </div>
         
              
          
          
          <!-- This input field is needed, to get the email of the user -->
          <input type="hidden" name="email" value="<?= $email ?>">    
          <input type="hidden" name="hash" value="<?= $hash ?>">    
              
          <button class="button button-block"/>Apply</button>
          
          </form>

    </div><br><br><br><br><br><br>
<footer>
<p  style="font-size:15px;color:white">Copyright 2017, IPR4Students<br>Designed and Maintained by <a href="mediaspa.in"><font size="3" color="white">Mediaspa</font></a>.<br>Contact:<br><a href="mailto=support@ipr4students.org"><font size="3" color="white">support@ipr4students.org</font></a></p>

</footer>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/script.js"></script>	
	<script src="js/eye2.js"></script>	
</body>
</html>
