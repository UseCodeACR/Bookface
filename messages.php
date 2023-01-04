<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <?php include "Style/links.php"; ?>
    <?php include "PHPFunc\db-connect.php";?>
    <?php include "PHPFunc\dbcheck.php";?>
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
            <?php if (!isset($_SESSION['loggedin'])):?>
                <li class="nav-item">
                <a class="nav-link" href="messages.php">Messages</a>
                </li>
            <?php endif;?>

            <?php if(isset($_SESSION['loggedin'])):?>
                <li class="nav-item">
                    <a class="nav-link" href="account.php">Account</a>
                </li>
            <?php endif;?>
        </ul>
        <?php if(connect()):?>
            <span class="badge rounded-pill bg-success">Connected</span>
        <?php else:?>
            <span class="badge rounded-pill bg-danger">Failed</span>
        <?php endif;?>
        </div>
    </div>
    </nav>


    

        <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="messages-action.php" method="post">
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <input type="text" class="form-control" id="message" name="message">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
    
    
    <?php
    $conn = connect();
    $sql = "SELECT * FROM messages LEFT JOIN users ON messages.userid = users.id ORDER BY messages.id DESC"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $name = $row['name'];
        $message = $row['message'];
        $date = $row['date'];
        ?>
        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto"><?=$name?></strong>
            <small><?=$date?></small>     
            <span aria-hidden="true"></span>
        </div>
        <div class="toast-body">
            <?=$message?>
        </div>
    </div>
    <?php
    }
    ?>





</body>
</html>