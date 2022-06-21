<?php
$productId = $_GET['product_id'];
$productName = $_GET['product_name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Outgoing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./../../../public/Styles/style.css">
</head>

<body>
    <div class="flex items-center justify-center w-[100%]  h-[100vh] flex-col ">
        <h1 class="text-[2em]">You are ordering <?php echo "<span class='text-green-500 '>" . $productName . "</span>" ?> </h1>
        <h1 class='text-red-500'>Plesase enter quantity you would like to order</h1>
        <form action=<?= "./../../../Middlewares/Register/registerOutGoing.php?product_id=$productId&product_name=$productName" ?> method="POST" class="grid  grid-cols-2 w-[50%] gap-3">
            <label for="fname">Quantity</label>
            <input type="number" name="quantity" placeholder="Enter quantity" class="border">
            <input type="submit" value="ORDER" class="border">
            <a href="./../../DISPLAY/OUTGOING/Outgoing.php">Get List of Orders</a>
        </form>
    </div>
</body>

</html>