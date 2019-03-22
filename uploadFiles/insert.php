<?php
require 'cnxDB.php';
$imageData = array();
if(isset($_FILES['files'])){
    $errors= array();
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$file_name = $key.$_FILES['files']['name'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
        
        
        array_push($imageData, $file_name);
       
        $desired_dir="user_data";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);		// Create directory if it does not exist
            }
            if(is_dir("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"user_data/".$file_name);
            }else{									//rename the file if another one exist
                $new_dir="user_data/".$file_name.time();
                 rename($file_tmp,$new_dir) ;				
            }
            		
        }else{
                print_r($errors);
        }
    }
        if(empty($error)){
        $today = date("Y-m-d H:i:s");
		$imgDt = implode("|", $imageData);
		$query="INSERT into imgs (file_name,uploaed_on) VALUES('$imgDt','$today')";
        mysqli_query($con,$query);	
        }
	
}

header("Location: ../result/index.php");


?>