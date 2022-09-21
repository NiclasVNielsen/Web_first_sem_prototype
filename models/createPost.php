<?php
    require '../dbconn.php';

    //https://www.youtube.com/watch?v=JaRq73y5MJk

    if(isset($_POST['submit'])){
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
                if($fileSize < 7000000){
                    $fileNewName = uniqid('', true).".".$fileActualExt;
                    $fileDestination = "../src/uploads/".$fileNewName;
                    move_uploaded_file($fileTmpName, $fileDestination);


                    /* get user ID for post owner as FK */
                    $name = $_SESSION['name'];
                    $fetchIdSql = "SELECT user_id FROM users WHERE name = '$name'";

                    $userId = $pdo->query($fetchIdSql)->fetch()[0];

                    /* send data to DB */
                    $title = $_POST['title'];
                    $description = $_POST['description'];
                    $sql = "INSERT INTO posts (title, description, image, likes, date, sticky, user_fk) VALUES ('$title', '$description', '$fileNewName', 0, '2022-09-21-10-32-40'/* current time */, 0, $userId)";
                
                    $pdo->query($sql);


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
    }