<?php
if(!session_id())
session_start();
if(!$_SESSION['logon'])
{
  
   header('location:login.php');
   die();
}
?>






<!DOCTYPE html>
<html lang="en">

<html>
	<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>NewsFeed</title>

	  <style>
	  	body
	  	{
	  		background: #fff url(images/bg.jpg) ;
	  		background-size: cover;
	  		background-attachment: fixed;
	  	 
	  		
	  		overflow-y: scroll;

	  		
	        color: #1d3c41;
	  	}
	  	hr { 
		  	border: 0; 
  			height: 30px; 
  			border-style: solid; 
  			border-color: #8c8c8c; 
  			border-width: 2px 0 0 0; 
  			border-radius: 20px; 
			} 
		hr:before { 
  			display: block; 
  			content: ""; 
  			height: 30px; 
 			margin-top: -30px; 
  			border-style: solid; 
  			border-color: #8c8c8c; 
  			border-width: 0 0 1px 0; 
  			border-radius: 20px; 
			}
			
	  		

	 
	  </style>




	  <link href="css/bootstrap.min.css" rel="stylesheet">
	  <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
	 
	 </head>

	 <body>
      <header>
      	
      <?php include_once('navbar.php'); ?>
      </header>

   <br>
<br>
<br>
<br>






	 	
	 </body>


		</html>

	