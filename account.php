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
    <?php include "PHPFunc\db-connect.php";?>
</head>
<body>

<?php /*
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">BookFace</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
            <a class="nav-link active" href="index.php">Home
                <span class="visually-hidden">(current)</span>
            </a>
            </li>
            <?php if (!isset($_SESSION['signup'])):?>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Sign Up</a>
                </li>
            <?php endif;?>

            <?php if (isset($_SESSION['loggedin'])):?>
                <li class="nav-item">
                    <a class="nav-link" href="messages.php">Messages</a>
                </li>
            <?php endif;?>
            <li class="nav-item">
            <a class="nav-link" href="account.php">Account</a>
            </li>
        </ul>
        <?php if(connect()):?>
            <span class="badge rounded-pill bg-success">Connected</span>
        <?php else:?>
            <span class="badge rounded-pill bg-danger">Failed</span>
        <?php endif;?>
        
        </div>
    </div>
    </nav>
*/ ?>

<?php include "templates/nav.php"; ?>
    
    <form action="account-action.php" method="post">
        <button type="submit" name="logout" class="btn btn-primary" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%; display:block">Log Out</button>
    </form>


    <?php

  ?>




</body>
</html>