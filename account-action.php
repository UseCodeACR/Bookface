<?php
session_start()
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
    


<?php
    //$conn = connect();
    $_SESSION["loggedout"] = true;
    $_SESSION["setmessage"] = true;
    unset($_SESSION['userid']);
    unset($_SESSION['loggedin']);
    unset($_SESSION['isadmin']);
    header("Location: Index.php");
    exit();
?>



</body>
</html>