	
<?php
  define('HOST','localhost');
  define('USER','your_username');
  define('PASS','your-password');
  define('DB','your_database');
  $con = mysqli_connect(HOST,USER,PASS,DB);
  
  if (!$con){
	 die("Error in connection" . mysqli_connect_error()) ;
  } 


?>
