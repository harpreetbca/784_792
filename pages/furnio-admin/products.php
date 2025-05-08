<?php
include './furnio_db.php'; // Database connection
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <style>
       <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        display: flex;
        background-color: #f5f7fa;
        min-height: 100vh;
    }

    /* Sidebar */
    .sidebar {
        width: 220px;
        background-color: #2c3e50;
        padding-top: 30px;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        box-shadow: 2px 0 8px rgba(0, 0, 0, 0.1);
    }

    .sidebar ul {
        list-style: none;
        padding: 0;
    }

    .sidebar ul li {
        margin-bottom: 10px;
    }

    .sidebar ul li a {
        display: block;
        padding: 14px 20px;
        color: #ffffffcc;
        text-decoration: none;
        transition: 0.3s ease;
        font-weight: 500;
    }

    .sidebar ul li a:hover,
    .sidebar ul li a.active {
        background-color: #1abc9c;
        color: #fff;
    }

    /* Logout Button */
    .logout-btn {
        position: absolute;
        top: 20px;
        right: 20px;
        background-color: #e74c3c;
        color: #fff;
        padding: 10px 18px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 14px;
        font-weight: bold;
        transition: background 0.3s ease;
    }

    .logout-btn:hover {
        background-color: #c0392b;
    }

    /* Header */
    h2 {
        margin-left: 240px;
        margin-top: 30px;
        font-size: 26px;
        color: #333;
    }

    /* Table Styling */
    table {
        width: calc(100% - 260px);
        margin-left: 240px;
        margin-top: 30px;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        border-radius: 8px;
        overflow: hidden;
    }

    th, td {
        padding: 14px 16px;
        text-align: center;
        border-bottom: 1px solid #eee;
        font-size: 14px;
    }

    th {
        background-color: #f9fafb;
        color: #333;
        font-weight: 600;
    }

    td {
        color: #555;
    }

    /* Image Path Cell */
    td:nth-child(3) {
        font-family: monospace;
        color: #666;
        font-size: 13px;
    }

    /* Buttons */
    .btn {
        padding: 6px 12px;
        color: #fff;
        text-decoration: none;
        font-size: 13px;
        border-radius: 4px;
        margin: 0 4px;
        display: inline-block;
    }

    .btn-update {
        background-color: #28a745;
    }

    .btn-update:hover {
        background-color: #218838;
    }

    .btn-delete {
        background-color: #dc3545;
    }

    .btn-delete:hover {
        background-color: #c82333;
    }

    @media (max-width: 768px) {
        body {
            flex-direction: column;
        }

        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }

        h2, table {
            margin-left: 0;
            width: 100%;
        }

        .logout-btn {
            top: 10px;
            right: 10px;
        }
    }
</style>

    </style>
</head>
<body>
<a href="logout.php" class="logout-btn">Logout</a>
<div class="sidebar">
        <ul>
            <li><a href="products.php">Products</a></li>
            <li><a href="orders.php" class="active">Orders</a></li>
            <li><a href="order_items.php">Order Items</a></li>
            <li><a href="add_product.php">Add Product</a></li>
            
        </ul>
    </div>
        
<h2 style="text-align:center;">Product List</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image Path</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM newproducts";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Assuming images are stored in a directory called "images"
                $imagePath = 'images/' . $row['image'];
                
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$imagePath}</td> <!-- Displaying the image path -->
                        <td>₹{$row['price']}</td>
                        <td>
                            <a href='update_product.php?id={$row['id']}' class='btn btn-update'>Update</a>
                            <a href='delete_product.php?id={$row['id']}' class='btn btn-delete' onclick=\"return confirm('Are you sure you want to delete this product?');\">Delete</a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No products found.</td></tr>";
        }

        $conn->close();
        ?>
    </tbody>
</table>

</body>
</html>
