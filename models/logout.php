<?php
    require '../dbconn.php';

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == "true"){
        $_SESSION["name"] = $data[''];
        $_SESSION["loggedin"] = "false";
        header("Location:/$URL/index.php");
    }


