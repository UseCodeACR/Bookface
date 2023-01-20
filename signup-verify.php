<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require dirname(__FILE__). "/Style/links.php"; ?>
    <?php require dirname(__FILE__). "/PHPFunc/db-connect.php";?>
    <?php require dirname(__FILE__). "/PHPFunc/dbcheck.php";?>
</head>
<body>
    <?php require dirname(__FILE__). "/templates/nav.php"; ?>    

    <?php
    if(isset($_SESSION["wrong_auth"])){
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Oops!!</strong> Wrong Code!!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
            unset($_SESSION["wrong_auth"]);
        }

    $_SESSION["visited-verify"];
    ?>

    <form action="signup-action.php" method="post">
        <div class="form-group" >
            <label for="exampleInputAuth" class="form-label mt-4" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%; display:block">Code</label>
            <input type="text" name="enterauth" class="form-control" id="exampleInputAuth" aria-describedby="authHelp" placeholder="Enter Verification Code" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%;" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Enter" class="btn btn-primary form-control" style="margin-top: 1%; margin-left: auto; margin-right: auto; width: 20%; display:block"></input>
        </div>
    </form>


</body>
</html>