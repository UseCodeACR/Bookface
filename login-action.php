<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookFace</title>
    <?php include "Style/links.php"; ?>
</head>
<body>
    

<?php
    $servername ="localhost";
    $username = "bookface";
    $password = "1234";
    
    //connect to database
    $conn = mysqli_connect($servername, $username, $password, "bookface");
    //check connection
    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }else{
        echo "Connection successful";
    }
?>
<?php
    echo "Added: " . $_POST["name"] . " " . $_POST["email"] . "  To the database";
    $hash = $_POST["password"];
    $hash = password_hash($hash, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (name, email, password) VALUES (?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $_POST["name"], $_POST["email"], $hash);
    $stmt->execute();
?>



</body>
</html>