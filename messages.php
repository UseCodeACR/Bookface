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
    <script>
        const interval = setInterval(function() {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            document.getElementById("messages").innerHTML = this.responseText;
        };
        xhttp.open("GET", "messages-update.php");
        xhttp.send();
        }, 0001);
    </script>
</head>
<body>

<?php include "templates/nav.php"; ?>

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
*/ ?>

    

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
    
    
    
    <div id="messages">
  
        </div>





</body>
</html>