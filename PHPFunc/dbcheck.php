<?php
include_once "PHPFunc\db-connect.php";

function dbcheck(){
    //session_start();
    //include "PHPFunc\db-connect.php";
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

function dbchecklogin(){
    //session_start();
    //include "PHPFunc\db-connect.php";
    $conn = connect();
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $_POST["email"]);
    $stmt->execute();
    $result = $stmt->get_result();
    $email = $result->fetch_assoc();
    if(password_verify($_POST["password"], $email["password"])){
        $_SESSION["loggedin"] = true;
        $_SESSION["userid"] = $email["id"];
        header ("Location: index.php");
        exit();
    }else{
        $_SESSION["loginerror"] = true;
        header ("Location: login.php");
        exit();
    }
}



function dbpasswordcheck(){
    session_start();
    //include "PHPFunc\db-connect.php";
    $conn = connect();
    $query = "SELECT * FROM users WHERE password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $_POST["password"]);
    $stmt->execute();
    $result = $stmt->get_result();
    $password = $result->fetch_assoc();
    if(password_verify($_POST[$password] == $password)){
        $_SESSION["passwordverify"] = true;
        header ("Location: signup.php");
        exit();
}}

?>