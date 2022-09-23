<?php
    require '../dbconn.php';

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == "true"){
        $_SESSION["name"] = null;
        $_SESSION["loggedin"] = "false";
        $_SESSION["user_id"] = null;
        header("Location:/$URL/index.php");
    }


