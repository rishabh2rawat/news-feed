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
	  		background: #fff url(images/b3.jpg) ;
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





	 <div class="container">

	 <script type="text/javascript">
function reply_click(clicked_id)
{
	<?php
	
	$news=array();
	$response=array();
       
    $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
	$month = $date -> format('F');
	$year = $date -> format('Y');
	$now = $date -> format('d M');

    $root="data/".$year."/".$month;
	try{	
	
		$file_name = $root.'/home.json';

		$data=file_get_contents($file_name);			
		$raw_data=json_decode($data);
		unset($raw_data->news[1]);
		$data=json_encode($raw_data);				
		$handler=fopen($file_name,'w') or die("can't open file");			
		fwrite($handler,$data);
		echo "\nData success";						
	}
	catch(Exception $e){
		echo "Exception :".$e->egetMessage()."\n";	
	}	
?>
    alert(clicked_id);
}
</script>

<?php
	
	$i =1;
	$file_name = 'data/2017/March/home.json';
	$data=file_get_contents($file_name);			
	//echo $data."<br>";
	$txt=json_decode($data);
	//echo $txt->news[1]->title.'<br>';*/
   
        $fileCount = count (glob ('data/2017/March/home/*.jpg'));
	foreach($txt->news as $key)
	{
	   echo '<div class=" row well"style="background-color: rgba(192,192,192,0.3); font-size:16px; font-weight:500;">';
	   
           echo '<div class="col-md-6 text-center">';
           echo "NEWS : ".$i.'<br>';
	   echo "Title : ".$key->title . '<br>';
	   echo "Summary : ".$key->summary . '<br><br><br><br><br>';
               
                   
           echo'<button id='.$i.' onClick="reply_click(this.id)" class="btn btn-primary">delete</button>';

           echo "</div>";
       
	   echo '<div class="col-md-6 text-center">';
         $newName = 'data/2017/March/home/' . ( $fileCount) . '.jpg';
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

		