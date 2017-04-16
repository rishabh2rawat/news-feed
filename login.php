<?php

if(isset($_POST['loginb']))
{
 $username=$_POST['username'];
 $password=$_POST['password'];
if($username=='Rishabh'&& $password=='1234')
{
   if(!session_id())
   session_start();

   $_SESSION['username']=$username;
   $_SESSION['logon']=true;
   header('location:index.php');
   die();
}
else
{
   echo '<strong> invalid account try again later </strong>';
}
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
	 <div class='container'>
	

	   <header>

	    <div class="navbar navbar-inverse navbar-fixed-top">
	    	<div class="container">
	   		 <div class="navbar-header">
	   		     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
	   		     	<span class="icon-bar"></span>
	   		     	<span class="icon-bar"></span>
	   		     	<span class="icon-bar"></span>

	   		      </button>
                  
	   		     <img class="navbar-brand" src="images/logo.png">
	   			 <a class="navbar-brand" href="index.php" >Uddeshya</a>
	   		  </div>
	   		   <form action="index.php" class="navbar-form navbar-right" >
            	<a href="index.php" class="btn" style="font-size:20px;font-weight:250;">Login</a>?></a>
            </form>


	   		</div>
	   	</div>
	   </div>

	   <br>
	   <br>
	   <br>
	     
	   		  
	   		     <h1  style= " color:#f0f0f0 ; text-align:center; 
	            font-size: 45px;font-weight:450;">Uddeshya News Feed</h1>  
	   		 
	   		
	   	
	   
	   </header>


	   <br>



	   
	     	
	   	<div class="row">
	   	<div class="col-md-3"></div>
	   		<div class="col-md-6">
	   			<div class="well well-lg" style="background-color: rgba(192,192,192,0.3);">
	   				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

	   				     <h1 style="text-align:center; font-size: 50px;font-weight:400;" > Sign In  </h1>
	   				    <hr>
	   					<label for="username" style="font-family:'' ;font-size:20px;font-weight:400;">Username</label>
	   					<br>
	   					<input type="text" name="username" id="username" placeholder="Username" class="form-control" required="required">
	   					<br>
	   					<label for="password" style="font-family:'' ;font-size:20px;font-weight:400;">Password</label>
	   					<br>
	   					<input type="password" name="password" id="password" placeholder="password" class="form-control" required="required">
	   					<br> 
	   					<input type="submit" class="btn btn-primary btn-block" name="loginb" id="loginb" value="Login" > 
             
	   				</form>
	   			</div>
	   		</div>
	   		<div class="col-md-3"></div>
	   	</div>
	



	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      </div>
	</body>
</html>



	