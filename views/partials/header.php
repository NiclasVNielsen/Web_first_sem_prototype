<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Piratemaniacs</title>
</head>
<body>
    <header>
        <?php
            if(isset($_SESSION["name"]) && $_SESSION["name"] != ""){
                echo $_SESSION["name"];
            }
        ?>
        <nav>
            <ul>
                <li>
                    <a href="/<?php echo $URL /* $URL comes from config.php */ ?>/">Home</a>
                </li>
                
                <?php 
                    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == "false"){
                ?>
                    <li>
                        <a href="/<?php echo $URL ?>/views/login/login.php">login</a>
                    </li>
                    <li>
                        <a href="/<?php echo $URL ?>/views/login/signup.php">signup</a>
                    </li>
                <?php
                    }
                ?>

                <?php 
                    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == "true"){
                ?>
                    <li>
                        <a href="/<?php echo $URL ?>/views/login/profile.php">Profile</a>
                    </li>
                    <li>
                        <a href="/<?php echo $URL ?>/models/logout.php">Logout</a>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </nav>
    </header>