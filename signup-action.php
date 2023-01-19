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
    <?php require dirname(__FILE__). "/PHPFunc/dbcheck.php";?>
    <?php require dirname(__FILE__). "/PHPFunc/email.php";?>
</head>
<body>
    


<?php
    //require dirname(__FILE__). "/PHPFunc/db-connect.php";
    dbcheck();
    email($_POST["email"], $_POST["name"]);
    $email = $_POST["email"];
    $name = $_POST["name"];
    if($_SESSION["authnumber"] == $_POST["enterauth"]){
        $conn = connect();
        echo "Added: " . $_POST["name"] . " " . $_POST["email"] . "  To the database";
        $hash = $_POST["password"];
        $hash = password_hash($hash, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (name, email, password) VALUES (?,?,?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $name, $email, $hash);
        $stmt->execute();
        $_SESSION["signup"] = true;
        header ("Location: /projects/Bookface/Index.php");
        exit();
    }
    else{
        $_SESSION["wrong_auth"] = true;
        header ("Location: /projects/Bookface/signup-verify.php");

    }

    ?>






</body>
</html>