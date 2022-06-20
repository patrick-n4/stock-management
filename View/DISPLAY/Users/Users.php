<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
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
    <?php include '../../../configs/db.php' ?>

    <table>
        <tr>
            <th>User Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Telephone</th>
            <th>Gender</th>
            <th>Nationality</th>
            <th>Usename</th>
            <th>Email</th>
            <th>Added time</th>
            <?php
            $sql = "SELECT * FROM users";
            $statement = $connection->prepare($sql);
            try {
                $statement->execute();
                $result = $statement->fetchAll();
                foreach ($result as $row) {
            ?>
        <tr>
            <td><?= $row['userId'] ?></td>
            <td><?= $row['firstName'] ?></td>
            <td><?= $row['lastName'] ?></td>
            <td><?= $row['telephone'] ?></td>
            <td><?= $row['gender'] ?></td>
            <td><?= $row['nationality'] ?></td>
            <td><?= $row['username'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['added_time'] ?></td>
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