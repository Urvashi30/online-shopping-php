<?php
//$con=mysqli_connect('localhost','root','','store') or die('Could not Connect My Sql:'.mysqli_error($con));
$db_user = "root";
$db_pass = "";
$db_name = "store";

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
