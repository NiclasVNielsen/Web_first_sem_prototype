<?php
    require '../dbconn.php';

    $sql = 'SELECT * FROM users'
?>

<?php
    require './partials/header.php';
?>

<?php 
    //if logged in redirect to /
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == "false"){
        header("Location:/$URL/");
    }
?>

<form method="post" action="/<?php echo $URL ?>/models/createPost.php" enctype="multipart/form-data">
    <fieldset>
        <legend>Create post</legend>
        <div>
            <label for="title">Title</label> <br>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="description">Description</label> <br>
            <input type="text" name="description" id="description">
        </div>
        <div>
            <label for="image">Picture</label>
            <input type="file" name="image" id="image">
        </div>
        <input type="submit" value="Post">
    </fieldset>
</form>

<?php 
    //Regex to check if they have argh anywhere in thier post
    //fail the post if they dont
?>

<?php
    require './partials/footer.php';
?>