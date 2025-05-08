<?php
// products.php

include 'furnio_db.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="sidebar">
        <ul>
            <li><a href="products.php" class="active">Products</a></li>
            <li><a href="orders.php">Orders</a></li>
            <li><a href="order_items.php">Order Items</a></li>
            <li><a href="add_product.php">Add Product</a></li>
            <li><a href="delete_product.php">Delete Product</a></li>
        


        </ul>
    </div>
    
        
    </div>

    <div class="content">
        <h1>Products</h1>

        <a href="logout.php" class="logout-btn">Logout</a>
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Price ($)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td><img src='" . htmlspecialchars($row['image']) . "' alt='Product Image'></td>
                                <td>" . htmlspecialchars($row['name']) . "</td>
                                <td>$" . number_format($row['price'], 2) . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No products found</td></tr>";
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
<style>
    /* Reset styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* General body layout */
body {
    font-family: 'Segoe UI', sans-serif;
    display: flex;
    background-color: #f4f4f4;
    min-height: 100vh;
}

/* Sidebar styles */
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
    margin-bottom: 12px;
}

.sidebar ul li a {
    display: block;
    padding: 12px 20px;
    color: #ecf0f1;
    text-decoration: none;
    font-size: 16px;
    transition: 0.3s;
}

.sidebar ul li a:hover,
.sidebar ul li a.active {
    background-color: #34495e;
    border-left: 4px solid #1abc9c;
}

/* Main content area */
.content {
    flex: 1;
    padding: 40px;
    position: relative;
}

/* Page title */
.content h1 {
    font-size: 28px;
    color: #2c3e50;
    margin-bottom: 20px;
}

/* Logout button */
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

/* Table styles */
table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    border-radius: 6px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

th, td {
    padding: 14px 20px;
    border-bottom: 1px solid #eee;
    text-align: left;
    vertical-align: middle;
}

thead {
    background-color: #1abc9c;
    color: white;
}

tbody tr:hover {
    background-color: #f1f1f1;
}

/* Product image */
td img {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 6px;
}

    
    </style>