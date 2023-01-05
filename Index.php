<?php
echo "0";
session_start();
echo "1";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookFace</title>
    <?php include "Style/links.php"; ?>
    <?php echo "links"; ?>
    <?php include "PHPFunc\db-connect.php"; echo "connected";?>

</head>
<body>
    
<?php include "/Applications/XAMPP/xamppfiles/htdocs/projects/bookface/templates/nav.php"; echo "included"; ?>
  
    <?php
    echo "2";
    if(isset($_SESSION["signup"])){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> You have successfully signed up.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        unset($_SESSION["signup"]);
    }
    echo "3";
    if(isset($_SESSION["loggedin"])){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!!</strong> You're Logged In!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        unset($_SESSION["loggedin"]);
    }
    echo "4";
    if(isset($_SESSION["loggedout"])){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!!</strong> You are not logged in!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        unset($_SESSION["loggedout"]);
    }
  ?>



<?php echo "finished"; ?>
</body>
</html>