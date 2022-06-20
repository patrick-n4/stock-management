<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Register User</title>
    <link rel="stylesheet" href="./../../public/Styles/style.css">
</head>

<body>
    <div class="flex items-center justify-center w-[100%]  h-[100vh] flex-col ">
        <h1 class="text-[2em]">Register a product</h1>
        <form action="./../../Middlewares/Register/registerProduct.php" method="POST" class="grid  grid-cols-2 w-[50%] gap-3">
            <label for="fname">PRODUCT NAME</label>
            <input type="text" name="product_name" placeholder="Product name" class="border">
            <label for="lname">BRAND</label>
            <input type="text" name="brand" placeholder="Brand" class="border">
            <label for="telephone">SUPPLIER PHONE</label>
            <input type="number" name="telephone" placeholder="Telephone" class="border">
            <label for="supplier_name">SUPPLIER </label>
            <input type="text" name="supplier_name" placeholder="Supplier name" class="border">
            <input type="submit" value="REGISTER" class="border">
            <a href="./../Products/Products.php">Show Products</a>
        </form>
    </div>
</body>

</html>