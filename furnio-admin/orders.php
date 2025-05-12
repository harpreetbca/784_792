<?php
// orders.php

include 'furnio_db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <style>
        /* General page styles */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f0f4ff;
}

/* Sidebar styles */
.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 220px;
    height: 100%;
    background-color: #1e3a8a; /* Deep blue */
    padding-top: 60px;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.sidebar ul li a {
    display: block;
    padding: 15px 40px;
    color: #fff;
    text-decoration: none;
    transition: background-color 0.3s ease;
    length: 40px;
}

.sidebar ul li a:hover,
.sidebar ul li a.active {
    background-color: #2563eb; /* Lighter blue */
}

/* Content area */
.content {
    margin-left: 250px;
    padding: 30px;
}

.content h1 {
    color: #1e3a8a;
    margin-bottom: 20px;
}

/* Logout button */
.logout-btn {
    position: absolute;
    top: 15px;
    right: 20px;
    padding: 10px 20px;
    background-color: #2563eb;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.logout-btn:hover {
    background-color: #1e40af;
}

/* Table styles */
table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 100, 0.1);
}

th, td {
    padding: 12px 15px;
    border-bottom: 1px solid #ddd;
    text-align: left;
}

thead {
    background-color: #1e3a8a;
    color: #fff;
}

tbody tr:hover {
    background-color: #e0f2fe;
}

/* Footer styles */
.footer {
    background-color: #1e3a8a;
    color: #ffffff;
    text-align: center;
    padding: 15px 0;
    position: fixed;
    left: 250px;
    bottom: 0;
    width: calc(100% - 250px);
}

    </style>
</head>
<body>
    <div class="sidebar">
        <ul>
            <li><a href="Dashboard.php">dashboard</a></li>
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
                
                $sql = "SELECT * FROM orders";
                $result = $conn->query($sql);
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
     <footer class="footer">
  <div class="footer-content">
    <p>© 2025 Furnio Admin Panel. All rights reserved.</p>
  </div>
</footer>
</body>
</html>

<?php
$conn->close();
?>
