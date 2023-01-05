<?php
$page_name = basename($_SERVER['PHP_SELF']);
echo $page_name;
?>

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
            <?php if (isset($_SESSION['signup'])):?>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Sign Up</a>
                </li>
            <?php endif;?>

            <?php if (!isset($_SESSION['userid'])):?>
                <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
                </li>
            <?php endif;?>

            <?php if (isset($_SESSION['userid'])):?>
                <li class="nav-item">
                    <a class="nav-link" href="messages.php">Messages</a>
                </li>
            <?php endif;?>
            <?php if(isset($_SESSION['userid'])):?>
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