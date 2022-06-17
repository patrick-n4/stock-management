<?php
class User{
    public function registerUser($fname,$lname,$telephone,$gender,$nationality,$username,$email,$password,$cpassword,$date){
      if($password !== $cpassword){
      return  "<h1>Passwords don't match</h1>";
    }else{
        $registerUser = mysqli_query(mysqli_connect('127.0.0.1','PATRICK', 'DATAbase@123','STOCK_MANAGEMENT'), "INSERT  INTO users(firstName, lastName,telephone,gender,nationality,username,email,password,added_time) VALUES ('$fname','$lname','$telephone','$gender','$nationality','$username','$email','$password','$date');");
        if(!$registerUser){
            echo"<h1>An error occurred when registering user</h1>";
        }else{
            echo"<h2>User registered successfully</h2>";
        }
    }
    }
}
$today = date("Y-m-d H:i:s");  
$newUser = new User();
$newUser->registerUser($_POST['fname'], $_POST['lname'], $_POST['telephone'],$_POST['gender'],$_POST['nationality'],$_POST['username'],$_POST['email'],$_POST['password'],$_POST['cpassword'],$today);
?>