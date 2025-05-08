<?php
session_start();

// Redirect to login page if not logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

include 'furnio_db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            min-height: 100vh;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2); /* Gradient background */
            background-size: cover;
            color: #34495e;
        }

        /* Sidebar */
        .sidebar {
            width: 240px;
            background-color: #2c3e50;
            padding-top: 30px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding-left: 10px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            box-shadow: 2px 0px 15px rgba(0, 0, 0, 0.1);
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 8px 0;
        }

        .sidebar ul li a {
            display: block;
            color: #ecf0f1;
            text-decoration: none;
            padding: 12px 20px;
            font-size: 18px;
            border-left: 4px solid transparent;
            transition: 0.3s;
        }

        .sidebar ul li a:hover,
        .sidebar ul li a.active {
            background-color: #34495e;
            border-left: 4px solid #1abc9c;
        }

        .sidebar ul li a:focus {
            outline: none;
        }

        .sidebar .extra-buttons {
            margin-top: auto;
            padding-bottom: 20px;
        }

        .extra-buttons a {
            background-color: #e74c3c;
            color: white;
            padding: 12px 20px;
            text-align: center;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            margin-top: 10px;
            transition: 0.3s;
        }

        .extra-buttons a.update-btn {
            background-color: #2980b9;
        }

        .extra-buttons a:hover {
            opacity: 0.85;
        }

        /* Content area */
        .content {
            flex-grow: 1;
            margin-left: 240px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .content h1 {
            font-size: 36px;
            color: #2c3e50;
        }

        .content p {
            font-size: 18px;
            margin-top: 10px;
            color: #555;
        }

        /* Logout button */
        .logout-btn {
            position: absolute;
            top: 20px;
            right: 30px;
            padding: 14px 28px;
            font-size: 16px;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;
        }

        .logout-btn:hover {
            background-color: #ff7675;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .content {
                margin-left: 200px;
                padding: 20px;
            }

            .content h1 {
                font-size: 28px;
            }

            .content p {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            body {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                height: auto;
                padding: 10px;
                position: static;
                box-shadow: none;
            }

            .content {
                margin-left: 0;
                padding: 10px;
            }

            .logout-btn {
                position: static;
                margin-top: 20px;
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <ul>
            <li><a href="products.php">Products</a></li>
            <li><a href="orders.php">Orders</a></li>
            <li><a href="order_items.php">Order Items</a></li>
            <li><a href="add_product.php">Add Product</a></li>
    
        </ul>

        
    </div>

    <div class="content">
        <a href="logout.php"><button class="logout-btn">Logout</button></a>
        <h1>Welcome to the Dashboard</h1>
        <p>Select a section from the sidebar to view more details.</p>
    </div>

</body>
</html>
