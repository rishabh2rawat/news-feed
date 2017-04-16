<?php

if(!session_id())

session_start();

if(!$_SESSION['logon'])

{

  

   header('location:login.php');

   die();

}

else

{ 

   echo "\n";

  echo $_SESSION['username'] . ' You are Logged In';

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

            background: #fff url(images/final.jpg) ;

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







<link rel="shortcut icon" type="image/png" href="www.schoolstein.com/images/logo.png">

      <link href="css/bootstrap.min.css" rel="stylesheet">

      <script src="js/html5shiv.min.js"></script>

      <script src="js/respond.min.js"></script>

    

     </head>



    <body>

     <header>

              <?php include_once('navbar.php'); ?>

 

    </header>

    

            








       

            

        <div class="row">

        <div class="col-md-3"></div>

            <div class="col-md-6">

                <div class="well well-md" style="background-color: rgba(192,192,192,0.3);">

                    <form action="cms.php" method="POST">



                        <h1 style="text-align:center; font-size: 50px;font-weight:400;" > Enter News </h1>

                        <hr>

                        <label for="title" style="font-family:'' ;font-size:20px;font-weight:400;">News Title</label>

                        <br>

                        <input type="text" name="title" id="title" placeholder="Title Of The News" class="form-control" required="required">

                        <br>

                        <label for="summary" style="font-family:'' ;font-size:20px;font-weight:400;">News Summary</label>

                        <br>

                        <textarea type="text" name="summary" id="summary" placeholder="Description Of the News" class="form-control" required="required" rows="4"></textarea>

                        <br>

                        <tr><td>

                        	<span style="float: left" >

                        	<label for="selectoption" style="font-family:'' ;font-size:20px;font-weight:400;">News Type</label><br>

                        	<select name = "selectoption">

                       			<option value = "home">home</option>

                       			<option value = "environment">environment</option>

                       			<option value = "sports">sports</option>

                       			<option value = "health">health</option>

                       		</select>

                       		</span>

                        	<span style="float: right">

                        	<label for="source" style="font-family:'' ;font-size:20px;font-weight:400;">Source</label><br>

                        	<input type="type" name="source" id="source" placeholder="Source Of The News" class="form-control" required="required">

                        	<br><br>

                        	</span><br><br>

                       	</tr></td><br><br>

                        <label for="img" style="font-family:'' ;font-size:20px;font-weight:400;">Image URL</label>

                        <br>

                        <input type="text" name="img" id="img" placeholder="image link(small size imaze preferred)" class="form-control">

                        <br>

                        <label for="story" style="font-family:'' ;font-size:20px;font-weight:400;">Story URl</label>

                        <br> 

                        <input type="text" name="story" id="story" placeholder="full story url" class="form-control">

                        <br>

                        <input type="submit" class="btn btn-primary btn-block" placeholder="Submit">

             

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



    