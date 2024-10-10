<?php
    // error_reporting(0);

    // Check if the form was submited.
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Check if there is any upload error.
        if(isset($_FILES['myfile']) && $_FILES['myfile']['error'] == 0){

            $allowfiletype = array("png"=>"image/.png","jpg"=>"image/.jpg","jpeg"=>"image/.jpeg","gif"=>"image/.gif");

              $filename=  $_FILES['myfile']['name'];

              $filetype=  $_FILES['myfile']['type'];

              $filesize=  $_FILES['myfile']['size'];

              $fileerror= $_FILES['myfile']['error'];
            
              $filetmpname= $_FILES['myfile']['tmp_name'];
            // Verify extention
              $ext = pathinfo($filename,PATHINFO_EXTENSION);

            if(!array_key_exists($ext,$allowfiletype)){
                header("Location:fileupload.php?invalid_formet");
                exit;
            }

            $maxsize = 5*1024*1024;

            if($filesize>$maxsize){
                header("location:fileupload.php?file_size_exeeded");
                exit;
            }
            
            if(file_exists("../uploads/images/".$filename)){
                header("Location:fileupload.php?error_file_exists");
                exit;
            }
            else{
                if(move_uploaded_file($filetmpname,"../uploads/images/".$filename)){
                    header("location:fileupload.php?success_uploaded");
                    exit;
                }else{
                    echo "There was an error uploading file!";
                }
            }

        }else{
            echo "<script>window.location='fileupload.php?missing_file'</script>";
        }

    }else{
        echo "<script>window.location='fileupload.php?missing_file'</script>";
    }

?>