
<?php
//include dirname(__FILE__). "/PHPFunc/db-connect.php";


session_start()

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookFace</title>
    <?php include dirname(__FILE__). "/Style/links.php"; ?>
</head>
<body>
    


<?php
    include dirname(__FILE__). "/PHPFunc/dbcheck.php";
    //$conn = connect();
    dbchecklogin();
    $_SESSION["signup"] = true;
    $_SESSION["loggedin"] = true;
    $_SESSION["userid"] = $_POST["userid"];
?>



</body>
</html>

