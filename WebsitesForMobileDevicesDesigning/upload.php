<?php 
include_once 'header.php';

if (isset($_POST['submit']) || isset($file)){
    $file = $_FILES['file'];

    $fileName = $file['name'];
    $fileName = $file['tmp_name'];
    $fileName = $file['size'];
    $fileName = $file['error'];
    $fileName = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array ('jpg', 'jpeg', 'png', 'pdf',);

    if (in_array($fileActualExt, $allowed)){
        if (fileError === 0){
            if (fileSize < 1000000){
                $fileNameNew = "profile".$id.".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fielTmpName, $fileDestination);
                $sql = "UPDATE profileimg SET status=0 where userid='$id';";
                $result = mysqli_query($conn, $sql);
                header("Location: index.php?uploadsuccess");
            }
            else{
                echo "There was an error uploading your file!";
            }
        }
        else {
            echo "You cannot upload files of this type!";
        }
    }
}