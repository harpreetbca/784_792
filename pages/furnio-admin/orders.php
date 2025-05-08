<?php
// orders.php

include 'furnio_db.php';

$sql = "SELECT * FROM orders";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <style>
    /* Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Body Layout */
    body {
        font-family: 'Segoe UI', sans-serif;
        display: flex;
        min-height: 100vh;
        background-color: #f8f9fa;
    }

    /* Sidebar */
    .sidebar {
        width: 220px;
        background-color: #2c3e50;
        padding-top: 30px;
        height: 100vh;
    }

    .sidebar ul {
        list-style: none;
        padding: 0;
    }

    .sidebar ul li {
        margin: 10px 0;
    }

    .sidebar ul li a {
        display: block;
        padding: 12px 20px;
        color: #ecf0f1;
        text-decoration: none;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    .sidebar ul li a:hover,
    .sidebar ul li a.active {
        background-color: #34495e;
        border-left: 4px solid #1abc9c;
    }

    /* Content Area */
    .content {
        flex-grow: 1;
        padding: 40px;
        position: relative;
    }

    /* Page Title */
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
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        border-radius: 6px;
        overflow: hidden;
    }

    th, td {
        padding: 14px 20px;
        text-align: left;
        border-bottom: 1px solid #eaeaea;
    }

    thead {
        background-color: #1abc9c;
        color: white;
    }

    tbody tr:hover {
        background-color: #f1f1f1;
    }

    tbody td {
        color: #2c3e50;
    }
    </style>
</head>
<body>
    <div class="sidebar">
        <ul>
            <li><a href="products.php">Products</a></li>
            <li><a href="orders.php" class="active">Orders</a></li>
            <li><a href="order_items.php">Order Items</a></li>
            <li><a href="add_product.php">Add Product</a></li>
            
        </ul>
    </div>
    
    <div class="content">
        <h1>Orders</h1>
        <a href="logout.php" class="logout-btn">Logout</a>

        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Customer Address</th>
                    <th>Total Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                               <td>" . $row['order_id'] . "</td>

                                <td>" . $row['customer_name'] . "</td>
                                <td>" . $row['customer_email'] . "</td>
                                <td>" . $row['customer_address'] . "</td>
                                <td>" . $row['total_amount'] . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No orders found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
$conn->close();
?>
