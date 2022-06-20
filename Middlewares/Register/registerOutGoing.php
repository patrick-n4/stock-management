<?php
include "./../../configs/db.php";
include_once "../../Controllers/handleRegisterProduct/handleRegisterProduct.php";

$newUser = new Product($_POST['product_name'], $_POST['brand'], $_POST['telephone'], $_POST['supplier_name']);
$newUser->registerUser($connection);
