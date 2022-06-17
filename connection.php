<?php
$server = '127.0.0.1';
$db_user= 'PATRICK';
$db_name = 'STOCK_MANAGEMENT';
$user_password = 'DATAbase@123';
$connect = mysqli_connect($server, $db_user,  $user_password,$db_name);
if(!$connect){
    echo "<h1>DATABASE FAILED TO CONNECT</h1>";
}
?>