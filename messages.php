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
    <?php include dirname(__FILE__). "/Style/links.php"; ?>
    <?php include dirname(__FILE__). "/PHPFunc/db-connect.php";?>
    <?php include dirname(__FILE__). "/PHPFunc/dbcheck.php";?>
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

<?php include dirname(__FILE__). "/templates/nav.php"; ?>


    

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

    
    
<div id="messages"></div>





</body>
</html>