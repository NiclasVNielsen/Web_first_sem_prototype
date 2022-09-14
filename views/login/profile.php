<?php
    require '../../dbconn.php';

    $sql = 'SELECT * FROM users'
?>

<?php
    require '../partials/header.php';
?>

<?php 
    //if logged in redirect to /
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == "false"){
        header("Location:/$URL/index.php");
    }
?>

<form method="post" action="/<?php echo $URL ?>/models/editProfile.php">
    <fieldset>
        <legend>Edit Profile</legend>
        <div>
            <label for="name">Name</label> <br>
            <input type="text" name="name" id="name" value="<?php echo $_SESSION["name"] ?>">
        </div>
        <div>
            <label for="password">Password</label> <br>
            <input type="password" name="password" id="password">
        </div>
        <input type="submit" value="Edit">
    </fieldset>
</form>

<?php
    if(isset($_GET["err"]) && $_GET["err"] == "nameempty"){
?>
    <p>
        Username is empty
    </p>
<?php 
    }
?>

<?php
    require '../partials/footer.php';
?>