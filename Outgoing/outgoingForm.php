<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Outgoing Form</title>
    <link rel="stylesheet" href="./../Styles/style.css">
</head>
<body>
    <div class="flex items-center justify-center w-[100%]  h-[100vh] flex-col ">
            <h1 class="text-[2em]">Register Outgoings</h1>
            <form action="./../Register/registerOutGoing.php" method="POST" class="grid  grid-cols-2 w-[50%] gap-3">
            <label for="fname">Quantity</label>
            <input type="text" name="quantity" placeholder="First name" class="border">
            <input type="submit" value="REGISTER"  class="border">
        </form>
    </div>
</body>
</html>