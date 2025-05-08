<?php
// order_items.php

include 'furnio_db.php';

// Correct SQL query matching your actual table and column names
$sql = "SELECT order_item_id, order_id, product_name, product_price, quantity FROM order_items";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Items</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sidebar">
        <ul>
            <li><a href="products.php">Products</a></li>
            <li><a href="orders.php">Orders</a></li>
            <li><a href="order_items.php">Order Items</a></li>
            <li><a href="add_product.php">Add Product</a></li>
            <li><a href="delete_product.php">Delete Product</a></li>
            


        </ul>
    </div>
    
    <div class="content">
        <h1>Order Items</h1>

        <a href="logout.php" class="logout-btn">Logout</a>

        
        <table>
            <thead>
                <tr>
                    <th>Order Item ID</th>
                    <th>Order ID</th>
                    <th>Product Name</th>
                    <th>Product Price (₹)</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['order_item_id']}</td>
                                <td>{$row['order_id']}</td>
                                <td>{$row['product_name']}</td>
                                <td>{$row['product_price']}</td>
                                <td>{$row['quantity']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No order items found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>


    <style>
       /* Reset and base */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    display: flex;
    background-color: #f4f6f7;
    min-height: 100vh;
}

/* Sidebar */
.sidebar {
    width: 220px;
    background-color: #2c3e50;
    padding-top: 30px;
    display: flex;
    flex-direction: column;
}

.sidebar ul {
    list-style: none;
}

.sidebar ul li {
    margin-bottom: 12px;
}

.sidebar ul li a {
    color: #ecf0f1;
    text-decoration: none;
    padding: 12px 20px;
    display: block;
    font-size: 16px;
    transition: 0.3s;
}

.sidebar ul li a:hover,
.sidebar ul li a.active {
    background-color: #34495e;
    border-left: 4px solid #1abc9c;
}

/* Content */
.content {
    flex-grow: 1;
    padding: 40px;
    position: relative;
}

.content h1 {
    font-size: 28px;
    color: #2c3e50;
    margin-bottom: 20px;
}

/* Logout Button */
.logout-btn {
    position: absolute;
    top: 20px;
    right: 30px;
    background-color: #e74c3c;
    color: #fff;
    padding: 10px 18px;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    font-size: 14px;
    transition: background-color 0.3s ease;
}

.logout-btn:hover {
    background-color: #c0392b;
}

/* Table Styling */
table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    border-radius: 6px;
    overflow: hidden;
}

th, td {
    padding: 14px 20px;
    text-align: left;
    border-bottom: 1px solid #e0e0e0;
}

thead {
    background-color: #1abc9c;
    color: #fff;
}

tbody tr:hover {
    background-color: #f9f9f9;
}

tbody td {
    color: #2c3e50;
}

</style>
</body>
</html>

<?php
$conn->close();
?>
