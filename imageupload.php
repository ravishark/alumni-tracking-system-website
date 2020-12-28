<?php
if(isset($_POST['submit'])){
    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];

    $fileExt= explode('.', $fileName);
    $fileActualExt= strtolower(end($fileExt));

    $allowed=array('jpg','jpeg','png');

    if(in_array($fileActualExt,$allowed)){

        if($fileError===0){
            if($fileSize<1000){
                $fileNameNew=uniqid('',true).".".$fileActualExt;
                $fileDestination='uplads/'.$fileNameNew;
                move_uploaded_file( $fileTmpName,$fileDestination);
                header("")

            }else{
                echo "Your file size is too large!";
            }

        }
        else{
            echo "There was an error uploading your file!";
        }
    }else{
        echo "You cannot ulpoad files of this extension!";
    }
}
?>