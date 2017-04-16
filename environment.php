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
	  		background: #fff url(images/env.jpg) ;
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
<br>





	 <div class="container">

<?php
	
	$i =1;
	$file_name = 'data/2017/March/environment.json';
	$data=file_get_contents($file_name);			
	//echo $data."<br>";
	$txt=json_decode($data);
	//echo $txt->news[1]->title.'<br>';*/
   
        $fileCount = count (glob ('data/2017/March/environment/*.jpg'));
	foreach($txt->news as $key)
	{
	  echo '<div class=" row well"style="background-color: rgba(192,192,192,0.3); font-size:16px; font-weight:500;">';
	   
           echo '<div class="col-md-6 text-center">';
           echo "NEWS : ".$i.'<br>';
	   echo "Title : ".$key->title . '<br>';
	   echo "Summary : ".$key->summary . '<br><br><br>';
              echo  '<a href="" class="btn btn-info form-control">Full story</a>';
                echo  '<br><br>';
                   
           echo'<a href="" class="btn btn-danger form-control">delete</a>';
           echo "</div>";
       
	   echo '<div class="col-md-6 text-center">';
         $newName = 'data/2017/March/environment/' . ( $fileCount) . '.jpg';
          echo '<img src=" '.$newName .'" alt="no image found" class="img-thumbnail">';
            echo "</div>";
             echo "</div>";
	    $i++;
             $fileCount--;
	}

       
	?>	 		
	 </div>

	 	
	 </body>


		</html>

	