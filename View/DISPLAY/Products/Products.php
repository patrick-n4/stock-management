<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        table,
        tr,
        td,
        th {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php include './../../../configs/db.php' ?>

    <table>
        <tr>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Brand</th>
            <th>Supplier Phone</th>
            <th>Supplier</th>
            <th>Order</th>
            <?php
            $sql = "SELECT * FROM products";
            $statement = $connection->prepare($sql);
            try {
                $statement->execute();
                $result = $statement->fetchAll();
                foreach ($result as $row) {
            ?>
        <tr>
            <td><?= $row['productId'] ?></td>
            <td><?= $row['product_Name'] ?></td>
            <td><?= $row['brand'] ?></td>
            <td><?= $row['supplier_phone'] ?></td>
            <td><?= $row['supplier'] ?></td>
            <td><?= "<a href='./../'>Order</a>" ?></td>
        </tr>

<?php
                }
            } catch (PDOException $err) {
                echo "Error: " . $err->getMessage();
            }
?>
    </table>
</body>

</html>