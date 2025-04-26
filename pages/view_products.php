<?php include('db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>All Products</title>
</head>
<body>
    <h2>All Products</h2>
    <table border="1">
        <tr>
            <th>ID</th><th>Name</th><th>Price</th><th>Category</th><th>Image</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM products");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>₹{$row['price']}</td>
                    <td>{$row['category']}</td>
                    <td><img src='{$row['image']}' width='80'></td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
