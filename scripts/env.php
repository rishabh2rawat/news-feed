 	<?php
            $key=$_GET['key'];
            $match="harshit";
            $directory = $_SERVER['DOCUMENT_ROOT'].'/data/2017/March/environment/';
            $files = glob($directory . '*.jpg');
            if ( $files != false ){
                $filecount = count( $files );
                echo $filecount."\n";
            }
            else{
                echo 0;
            }
            if($key==$match){  
	        $file_name = $_SERVER['DOCUMENT_ROOT'].'/data/2017/March/environment.json';
	        $data=file_get_contents($file_name);			
	        echo $data;
            }
            else 
            echo "Sorry access denied";
            
	?>					