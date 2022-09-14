<?php
    require '../../dbconn.php';

    $sql = 'SELECT * FROM users'
?>

<?php
    require '../partials/header.php';
?>

<?php 
    //if logged in redirect to /
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == "true"){
        header("Location:/$URL/index.php");
    }
?>

<form method="post" action="/<?php echo $URL ?>/models/createUser.php">
    <fieldset>
        <legend>Sign up</legend>
        <div>
            <label for="name">Name</label> <br>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="password">Password</label> <br>
            <input type="password" name="password" id="password">
        </div>
        <input type="submit" value="Sign up">
    </fieldset>
</form>

<?php
    if(isset($_GET["err"]) && $_GET["err"] == "invalidname"){
?>
    <p>
        Name is already taken or invalid
    </p>
<?php 
    }
?>

<?php
    require '../partials/footer.php';
?>