<?php
if(!isset($_SESSION["userid"])){
    header ("Location: /projects/Bookface/login.php");
    exit();
}
require dirname(__FILE__). "/PHPFunc/db-connect.php";
require dirname(__FILE__). "/PHPFunc/dbcheck.php";
require dirname(__FILE__). "/Style/links.php";


delete_user();


header ("Location: /projects/Bookface/admin.php");

?>