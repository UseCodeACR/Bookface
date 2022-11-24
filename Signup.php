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
    <?php include "PHPFunc\db-connect";?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">BookFace</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
            <a class="nav-link" href="index.php">Home
                <span class="visually-hidden">(current)</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="signup.php">Sign Up</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="messages.php">Messages</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">About</a>
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

    <?php
    if(isset($_SESSION["emailverify"])){
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Oops!!</strong> Email already exists!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        unset($_SESSION["emailverify"]);
    }
    
    ?>

    <form action="signup-action.php" method="post">
        <div class="form-group" >
            <label for="exampleInputName" class="form-label mt-4" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%; display:block">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter Name" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%;" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%; display:block">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%;" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-4" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%; display:block">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%;"required>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary form-control" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%; display:block">
        </div>
        <div class="form-group">
            <a href="login.php" class="btn btn-primary form-control" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%; display:block">Login</a>
        </div>
    </form>

    
    
</body>
</html>