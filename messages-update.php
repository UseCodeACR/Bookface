<?php
session_start()
?>
<?php

require dirname(__FILE__). "/PHPFunc/db-connect.php";

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BookFace</title>
        <?php require dirname(__FILE__). "/Style/links.php"; ?>

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
            if ($row["id"] == $_SESSION["userid"] ){
                $style = "background-color: #2780e3; color: #ffffff; "; 
                $style2 = "margin: 10px; margin-left: 200px; ";
            }
            else{
                $style = "background-color: #eeeeee;";
                $style2 = "margin: 10px; margin-right: 200px;";
            }
            ?>
            <div class="toast show" role="alert" aria-live="assertive" aSria-atomic="true" style="<?= $style2 ?>">
            <div class="toast-header" style="<?= $style ?>">
                <strong class="me-auto"><?=$name?></strong>
                <small><?=$date?></small>     
                <span aria-hidden="true"></span>
            </div>
            <div class="toast-body" style="<?= $style ?>">
                <?=$message?>
            </div>
        </div>
        <?php
        }
        ?>
    </body>
    </html>