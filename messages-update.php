<?php

include dirname(__FILE__). "/PHPFunc\dbcheck.php";

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
        $conn = connect();
        $sql = "SELECT * FROM messages LEFT JOIN users ON messages.userid = users.id ORDER BY messages.id DESC"; 
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $name = $row['name'];
            $message = $row['message'];
            $date = $row['date'];
            if(substr($date,0,10) == date("Y-m-d")){
                $date = substr($date, 11 ,5);
            }
            else{
                $date = substr($date, 0, 16);
            }
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