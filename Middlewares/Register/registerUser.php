<?php
include "./../../configs/db.php";
include_once "../../Controllers/handleRegisterUser/handleRegisterUser.php";

$newUser = new User($_POST['fname'], $_POST['lname'], $_POST['telephone'], $_POST['gender'], $_POST['nationality'], $_POST['username'], $_POST['email'], $_POST['password'], $_POST['cpassword']);
$newUser->registerUser($connection);
