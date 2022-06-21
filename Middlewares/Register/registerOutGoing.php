<?php
include "./../../configs/db.php";
include_once "../../Controllers/handleRegisterOutgoing/handleRegisterOutgoinh.php";

$newOutgoing = new Order($_POST['quantity'], $_GET['product_id'], $_GET['product_name']);
$newOutgoing->registerOutgoing($connection);
