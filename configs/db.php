<?php
$servername = "127.0.0.1";
$username = "PATRICK";
$password = "DATAbase@123";
try {
  $connection = new PDO("mysql:host=$servername;dbname=STOCK_MANAGEMENT", $username, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $error) {
  echo "Connection failed: " . $error->getMessage();
}
?>