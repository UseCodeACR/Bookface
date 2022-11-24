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
    <?php include "Style/links.php"; ?>
    <?php include "PHPFunc\db-connect";?>
    <?php include "PHPFunc\dbcheck.php";?>
</head>
<body>
    


<?php
    dbcheck();
    $conn = connect();
    echo "Added: " . $_POST["name"] . " " . $_POST["email"] . "  To the database";
    $hash = $_POST["password"];
    $hash = password_hash($hash, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (name, email, password) VALUES (?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $_POST["name"], $_POST["email"], $hash);
    $stmt->execute();
    $_SESSION["setmessage"] = true;
    header ("Location: index.php");
?>




</body>
</html>