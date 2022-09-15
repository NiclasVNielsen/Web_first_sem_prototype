<?php
    require '../dbconn.php';

    //https://www.youtube.com/watch?v=JaRq73y5MJk

    $file = $_FILES['image'];

    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];
    $fileError = $_FILES['image']['error'];
    $fileType = $_FILES['image']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowedFileTypes = array('jpg', 'jpeg', 'png', 'gif');

    if(in_array($fileActualExt, $allowedFileTypes)){
        if($fileError === 0){
            if($filesize < 7000){
                $fileNameNew = uniqid('', true) . ".$fileActualExt";
                $fileDestination = "./src/uploads/$fileNameNew";
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location:/$URL/?msg=✅");
            }else{
                echo "File size limit is 7mb!";
            }
        } else {
            echo "🔥 Something is burning";
        }
    }else{
        echo "you cannot upload $fileActualExt files!";
    }