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
    <?php require dirname(__FILE__). "/Style/links.php"; ?>
    <?php require dirname(__FILE__). "/PHPFunc/db-connect.php";?>
</head>
<body>

<?php require dirname(__FILE__). "/templates/nav.php"; ?>

    <?php
        if(isset($_SESSION["updated"])){
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Success!!</strong> You Have Updated Your Details!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
            unset($_SESSION["updated"]);
        }
    ?>

    <form action="account-action.php" method="post">
        <button type="submit" name="logout" class="btn btn-primary" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%; display:block">Log Out</button>
    </form>

    <form action="account-edit.php" method="post">
        <button type="submit" name="editdetails" class="btn btn-primary" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%; display:block">Edit Details</button>
    </form>


    <?php

        


    ?>




</body>
</html>