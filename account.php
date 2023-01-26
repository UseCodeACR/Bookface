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

    <style>
        .avatar {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            }
    </style>
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

    
    <img src="avatar.png" alt="Avatar" class="avatar">



    <form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="exampleInputEmail1" class="form-label mt-4" class="form-label mt-4" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 10%; display:block">Select An Image To Upload</label>
        <input type="file" name="fileToUpload" id="fileToUpload" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 10%; display:block" >
        <input type="submit" value="Upload Image" name="submit" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 10%; display:block">
    </form>



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