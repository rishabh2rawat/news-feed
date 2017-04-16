<?php
	
	$news=array();
	$response=array();
       
    $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
	$month = $date -> format('F');
	$year = $date -> format('Y');
	$now = $date -> format('d M');

    $root="data/".$year."/".$month;
    
    if(! (file_exists ( $root))){mkdir ($root,0777,true);}

	try{	
		
		$title=$_POST["title"];
		$summary=$_POST["summary"];
		$img_source=$_POST["img"];
        $fullstory=$_POST["story"];
        $news_type=$_POST["selectoption"];
        $source=$_POST["source"];
	
		$file_name = $root.'/'.$news_type.'.json';
	
		if($title!=null&&$summary!=null){		
			
			$response=array('title'=>$title,'summary'=>$summary,'fullstory'=>$fullstory,'source'=>$source,'date'=>$now);
			$news['news']=array($response);	
			$data=file_get_contents($file_name);			
			$handler=fopen($file_name,'w') or die("can't open file");			
			
			if($img_source!=""){
                                
                if(! (file_exists ( $root.'/'.$news_type) )){ mkdir($root.'/'.$news_type,0777,true); }
                                
                $fileCount = count (glob ($root.'/'.$news_type.'/*.jpg'));
                $newName = $root.'/'.$news_type.'/'.( $fileCount + 1).'.jpg';
          
				$imageData=file_get_contents($img_source);
				
				$content=File_put_contents( $newName,$imageData);
				echo "\nImage success";		
			
			}

			if($data==""){fwrite($handler,json_encode($news));
				echo "\nData success."."\n"."New file created";
			}else {	
				$brk=explode('[',$data);
				file_put_contents($file_name,$brk[0]."[".json_encode($response).",".$brk[1]);
				echo "\nData success";			
			}			
		}

	header('location:index.php');
	
	}
 
	catch(Exception $e){
		echo "Exception :".$e->egetMessage()."\n";	
	}
	
?>
				
 
