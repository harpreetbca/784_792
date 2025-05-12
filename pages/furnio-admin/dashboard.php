<?php
session_start();

include 'furnio_db.php';

// Redirect to login page if not logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

// Function to safely get a count from a table
function getCount($conn, $query, $field) {
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("SQL Error: " . mysqli_error($conn));
    }
    $row = mysqli_fetch_assoc($result);
    return $row[$field];
}

// Get dashboard statistics
$total_products = getCount($conn, "SELECT COUNT(*) AS total FROM newproducts", 'total');
$total_orders = getCount($conn, "SELECT COUNT(*) AS total FROM orders", 'total');
$pending_orders = getCount($conn, "SELECT COUNT(*) AS pending FROM orders WHERE status = 'Pending'", 'pending');
$delivered_orders = getCount($conn, "SELECT COUNT(*) AS delivered FROM orders WHERE status = 'Delivered'", 'delivered');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
</head>
<body>
   <div class="sidebar">
        <ul>
            <li><a href="dashboard.php" class= active> Dashboard</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="orders.php">Orders</a></li>
            <li><a href="order_items.php">Order Items</a></li>
            <li><a href="add_product.php">Add Product</a></li>
    
        </ul>     
    </div>

    <div class="content">
        <a href="logout.php"><button class="logout-btn">Logout</button></a>
        <h1>Welcome to the furnio admin Dashboard</h1>
        <p>Manage products, view orders, and furniture store running smoothly.</p>
    </div>
    
    <div class="dashboard-container">
    <h1>Dashboard Statistics</h1>

    <div class="stats-grid">
        <div class="stat-card">
            <h3>Total Products</h3>
            <p><?php echo $total_products; ?></p>
        </div>

        <div class="stat-card">
            <h3>Total Orders</h3>
            <p><?php echo $total_orders; ?></p>
        </div>

        <div class="stat-card">
            <h3>Pending Orders</h3>
            <p><?php echo $pending_orders; ?></p>
        </div>

        <div class="stat-card">
            <h3>Delivered Orders</h3>
            <p><?php echo $delivered_orders; ?></p>
        </div>
    </div>
</div>
<style>

     /* Base styling */
body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(to bottom right, #d0e7ff, #eaf4ff);
    color: #1b1f3a;
}

/* Sidebar styling */
.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 220px;
    height: 100vh;
    background-color: #1e3a8a; /* dark blue */
    padding-top: 30px;
    box-shadow: 2px 0 8px rgba(0, 0, 0, 0.2);
}

.sidebar ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar ul li {
    margin: 20px 0;
    text-align: center;
}

.sidebar ul li a {
    text-decoration: none;
    color: #ffffff;
    font-weight: bold;
    font-size: 16px;
    display: block;
    padding: 10px;
    border-radius: 6px;
    transition: background 0.3s;
}

.sidebar ul li a:hover {
    background-color: #3b82f6; /* brighter blue */
    color: #fff;
}

/* Content area */
.content {
    margin-left: 240px;
    padding: 40px;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    margin-top: 20px;
    margin-right: 40px;
    box-shadow: 0 4px 10px rgba(0, 0, 50, 0.1);
}

.content h1 {
    font-size: 28px;
    color: #1e40af;
}

.logout-btn {
    background-color: #2563eb;
    color: white;
    padding: 10px 18px;
    border: none;
    border-radius: 6px;
    float: right;
    cursor: pointer;
    font-weight: bold;
}

.logout-btn:hover {
    background-color: #1d4ed8;
}

/* Dashboard container */
.dashboard-container {
    margin-left: 240px;
    margin-right: 40px;
    margin-top: 20px;
    padding: 20px;
    background-color: rgba(30, 64, 175, 0.1);
    border-radius: 10px;
}

.dashboard-container h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #1d4ed8;
}

/* Statistics cards */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}

.stat-card {
    background-color: #eff6ff;
    padding: 20px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 4px 12px rgba(0, 0, 50, 0.1);
    transition: transform 0.3s ease;
    border: 2px solid #93c5fd;
}

.stat-card:hover {
    transform: translateY(-5px);
}

.stat-card h3 {
    font-size: 18px;
    margin-bottom: 10px;
    color: #1e40af;
}

.stat-card p {
    font-size: 26px;
    font-weight: bold;
    color: #1e3a8a;
}

/* Footer */
.footer {
    margin-left: 240px;
    padding: 20px;
    text-align: center;
    background-color: #1e3a8a;
    color: #fff;
    font-size: 14px;
    margin-top: 30px;
    border-top: 1px solid #3b82f6;
}
   
    </style>

    <footer class="footer">
  <div class="footer-content">
    <p>© 2025 Furnio Admin Panel. All rights reserved.</p>
  </div>
</footer>



</body>
</html>
