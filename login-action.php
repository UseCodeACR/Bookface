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
    <?php include "Style/links.php"; ?>
    <?php include "PHPFunc\db-connect";?>
    <?php include "PHPFunc\dbcheck.php";?>
</head>
<body>
    


<?php
    $conn = connect();
    dbchecklogin();
    

    
?>



</body>
</html>