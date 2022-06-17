<?php
class Outgoing{
    public function registerUser($productId,$quantity){
        $registerUser = mysqli_query(mysqli_connect('127.0.0.1','PATRICK', 'DATAbase@123','STOCK_MANAGEMENT'), "INSERT  INTO outgoing(productId,quantity,added_date) VALUES ($productId,$quantity,'$date');");
        if(!$registerUser){
            echo"<h1>An error occurred when registering user</h1>";
        }else{
            echo"<h2>User registered successfully</h2>";
        }
    }
}
$today = date("Y-m-d H:i:s");  
$newOutgoing = new Outgoing();
// $newOutgoing->registerUser();
?>
