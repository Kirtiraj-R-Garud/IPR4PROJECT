<?php
/* Displays all successful messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>IPR4Students | Success</title>
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
    <h1 style="color:white"><?= 'Success'; ?></h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];    
    else:
        header( "location: index.php" );
    endif;
    ?>
    </p>
    <?php
	if($_SESSION['message']=="Your password has been reset successfully!"){
    echo '<a href="index.php"><button class="button button-block"/>Login</button></a>';
	}
		else if($_SESSION['message']=="Your account has been activated!"){
		echo '<a href="index.php"><button class="button button-block"/>Login</button></a>';	
	}
	?>
</div><br><br><br><br><br>
	<footer>
<p  style="font-size:15px;color:white">Copyright 2017, IPR4Students<br>Designed and Maintained by <a href="mediaspa.in"><font size="3" color="white">Mediaspa</font></a>.<br>Contact:<br><a href="mailto=support@ipr4students.org"><font size="3" color="white">support@ipr4students.org</font></a></p>

</footer>
</body>
</html>
