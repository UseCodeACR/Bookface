<?php
session_start();
if(!isset($_SESSION["userid"])){
    header ("Location: /projects/Bookface/login.php");
    exit();
}
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

        <style>

        .avatar{
            
            width: 20%;
            height: 20%;
            border-radius: 50%;
            margin-left: 1%;
            margin-right: 1%;
            float: left;
            border-style: solid;
            border-color: black;
        }
        </style>

    </head>
    <body>

    <?php
        $conn = connect();
        $sql = "SELECT messages.id AS msg_id, name, message, date, userid FROM messages LEFT JOIN users ON messages.userid = users.id ORDER BY messages.id DESC"; 
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
            if ($row["userid"] == $_SESSION["userid"] ){
                $style = "background-color: #2780E3; color: #ffffff;"; 
                $style2 = "margin: 10px; margin-left: 200px; ";
            }
            else{
                $style = "background-color: #eeeeee;";
                $style2 = "margin: 10px; margin-right: 200px;";
            }
            ?>
            <div class="toast show" role="alert" aria-live="assertive" aSria-atomic="true" style="<?= $style2 ?>">

            <div class="toast-header" style="<?= $style ?>">
            <?php if(file_exists("pfp-images/".$_SESSION["userid"] . ".jpg")){
                $pfp = $_SESSION["userid"] . ".jpg";?>
                <img src='<?="pfp-images/".$pfp?>' alt='Avatar' class='avatar'  > <?php 
            } 
            else if(file_exists("pfp-images/".$_SESSION["userid"] . ".png")){
                $pfp = $_SESSION["userid"] . ".png";?>
                <img src='<?="pfp-images/".$pfp?>' alt='Avatar' class='avatar'  > <?php 
            } 
            else if(file_exists("pfp-images/".$_SESSION["userid"] . ".gif")){
                $pfp = $_SESSION["userid"] . ".gif";?>
                <img src='<?="pfp-images/".$pfp?>' alt='Avatar' class='avatar'  > <?php 
            } 
            else {
                echo "<img src='Images/avatar.png' alt='Avatar' class='avatar'  >";
                echo $_SESSION["userid"];
            }
            ?>
                <strong class="me-auto"><?=$name?></strong>
                <small>
                    <?=$date?>
                    <?php if($_SESSION["isadmin"]==true){ ?>
                        <form action="delete-messages-action.php?id=<?= $row["msg_id"] ?>" method="post">       
                            <input type='submit' value="Delete" class='btn btn-danger'></input>
                        </form>
                    <?php
                    }    
                    ?>
                </small>     
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