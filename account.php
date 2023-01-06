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
    <?php include dirname(__FILE__). "/Style/links.php"; ?>
    <?php include dirname(__FILE__). "/PHPFunc\db-connect.php";?>
</head>
<body>

<?php include dirname(__FILE__). "/templates/nav.php"; ?>

    <form action="account-action.php" method="post">
        <button type="submit" name="logout" class="btn btn-primary" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%; display:block">Log Out</button>
    </form>


    <?php

  ?>




</body>
</html>