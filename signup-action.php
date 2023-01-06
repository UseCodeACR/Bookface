<?php 
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookFace</title>
    <?php include dirname(__FILE__). "/Style/links.php"; ?>
    <?php include dirname(__FILE__). "/PHPFunc/dbcheck.php";?>
</head>
<body>
    


<?php
    //include dirname(__FILE__). "/PHPFunc/db-connect.php";
    dbcheck();
    $conn = connect();
    echo "Added: " . $_POST["name"] . " " . $_POST["email"] . "  To the database";
    $hash = $_POST["password"];
    $hash = password_hash($hash, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (name, email, password) VALUES (?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $_POST["name"], $_POST["email"], $hash);
    $stmt->execute();
    $_SESSION["signup"] = true;
    header ("Location: Index.php");
    exit();
    ?>






</body>
</html>