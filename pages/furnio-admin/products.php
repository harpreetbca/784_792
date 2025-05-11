<?php
include './furnio_db.php'; // Database connection
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products List</title>
    <style>
       <style>
      
/* General styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f6ff;
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
    padding: 15px 20px;
    color: #ffffff;
    text-decoration: none;
    transition: background-color 0.3s;
}

.sidebar ul li a:hover,
.sidebar ul li a.active {
    background-color: #2563eb; /* Bright blue */
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
    transition: background-color 0.3s;
}

.logout-btn:hover {
    background-color: #1e40af;
}

/* Header */
h2 {
    margin-left: 250px;
    padding: 20px 0;
    color: #1e3a8a;
}

/* Table styles */
table {
    width: 80%;
    margin: 0 auto 50px auto;
    margin-left: 250px;
    border-collapse: collapse;
    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 50, 0.1);
}

th, td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #cbd5e1;
}

thead {
    background-color: #1e3a8a;
    color: #ffffff;
}

tbody tr:hover {
    background-color: #e0f2fe;
}

/* Buttons */
.btn {
    padding: 8px 12px;
    margin-right: 5px;
    text-decoration: none;
    border-radius: 4px;
    font-size: 14px;
    font-weight: bold;
}

.btn-update {
    background-color: #3b82f6;
    color: #fff;
}

.btn-update:hover {
    background-color: #1d4ed8;
}

.btn-delete {
    background-color: #ef4444;
    color: #fff;
}

.btn-delete:hover {
    background-color: #b91c1c;
}

/* Footer styles */
.footer {
    
    background-color: #1e3a8a;
    color: #ffffff;
    text-align: center;
    padding: 2px 0;
    position: fixed;
    left: 250px;
    bottom: 0;
    width: calc(100% - 200px);
}

    </style>
</head>
<body>
<a href="logout.php" class="logout-btn">Logout</a>
<div class="sidebar">
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="orders.php">Orders</a></li>
            <li><a href="order_items.php">Order Items</a></li>
            <li><a href="add_product.php">Add Product</a></li>
            
        </ul>
    </div>
        
<h2 style="text-align:center;">Products List</h2>

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
                $imagePath =  $row['image'];
                
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
<footer class="footer">
  <div class="footer-content">
    <p>© 2025 Furnio Admin Panel. All rights reserved.</p>
  </div>
</footer>
</body>
</html>
