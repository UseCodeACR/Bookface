<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookFace</title>
    <?php include dirname(__FILE__)."/Style/links.php"; ?>
    <?php include dirname(__FILE__)."/PHPFunc/db-connect.php";?>

</head>
<body>
    
<?php include dirname(__FILE__). "/templates/nav.php"; ?>
  
    <?php
    if(isset($_SESSION["signup"])){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> You have successfully signed up.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        unset($_SESSION["signup"]);
    }
    
    if(isset($_SESSION["loggedin"])){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!!</strong> You're Logged In!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        unset($_SESSION["loggedin"]);
    }
    
    if(isset($_SESSION["loggedout"])){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!!</strong> You are not logged in!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        unset($_SESSION["loggedout"]);
    }
  ?>



</body>
</html>