<?php
include "PHPFunc\db-connect.php";

function dbcheck(){
    session_start();
    include "PHPFunc\db-connect.php";
    $conn = connect();
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $_POST["email"]);
    $stmt->execute();
    $result = $stmt->get_result();
    $email = $result->fetch_assoc();
    if($email){
        $_SESSION["emailverify"] = true;
        header ("Location: signup.php");
        exit();
    }else{}
}

?>