<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Outgoing</title>
    <link rel="stylesheet" href="./../../../public/Styles/style.css">
    <style>
        table,
        tr,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Order Id</th>
            <th>Product Id</th>
            <th>Quantity</th>
            <th>Product Name</th>
            <th>Date</th>
        </tr>
        <?php include "../../../configs/db.php";
        $query = "SELECT * FROM outgoing";
        $statement = $connection->prepare($query);
        try {
            $statement->execute();
            $result = $statement->fetchAll();
            foreach ($result as $row) {
        ?>
                <tr>
                    <td><?= $row['outgoingId'] ?></td>
                    <td><?= $row['productId'] ?></td>
                    <td><?= $row['quantity'] ?></td>
                    <td><?= $row['productName'] ?></td>
                    <td><?= $row['added_date'] ?></td>
                </tr>
        <?php
            }
        } catch (PDOException $error) {
            echo "Error :" . $error->getMessage();
        }
        $result = $statement->getAll
        ?>
    </table>
</body>

</html>