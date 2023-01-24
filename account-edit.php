<?php
session_start();

require dirname(__FILE__). "/PHPFunc/db-connect.php"; 

require dirname(__FILE__). "/PHPFunc/dbcheck.php"; 


$conn = connect();
$userid = $_SESSION["userid"];
$sql = "SELECT * FROM users WHERE id = $userid";
$stmt = $conn->prepare($sql);
$row = $stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
    <?php require dirname(__FILE__). "/Style/links.php"; ?>


    <style>
    h1 {
        text-align: center;
        
        background: #2780E3;
        color: white;
    }
    </style>
</head>
<body>

    <?php require dirname(__FILE__). "/templates/nav.php"; ?>

    <h1> Edit Your Details </h1>




    <form action="account-edit-action.php" method="post">
        <div class="form-group">
        <label for="exampleInputName" class="form-label mt-4" class="form-label mt-4" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%; display:block">Name</label>
            <input type="text" name="name" value="<?= $row["name"]  ?>" class="form-control" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%; display:block">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4" class="form-label mt-4" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%; display:block">Email address</label>
            <input type="text" name="email" value="<?= $row["email"] ?>" class="form-control" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%; display:block" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-4" class="form-label mt-4" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%; display:block">Change Password</label>
            <input type="text" name="password" value="" class="form-control" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%; display:block">
        </div>
        <div class = form-group>
            <input type="hidden" name="id" value="<?= $row["id"] ?>" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%; display:block">
            <input type="submit" value="Update" class="btn btn-primary form-control" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%; display:block"></input>
        </div>
        <div class="form-group">
            <a href="admin.php" class="btn btn-primary form-control" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%; display:block">Back</a>
        </div>
    </form>
        




<?php

$result->free_result();
$conn->close();

?>



</body>
</html>