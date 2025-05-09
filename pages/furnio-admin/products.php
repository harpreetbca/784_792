<?php
include './furnio_db.php'; // Database connection
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products List</title>
    <style>
       <style>
       body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.sidebar {
    position: fixed;
    left: 0;
    top: 0;
    width: 200px;
    height: 100%;
    background-color: #2c3e50;
    padding-top: 20px;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul li a {
    display: block;
    padding: 12px 20px;
    color: white;
    text-decoration: none;
    transition: background 0.3s;
}

.sidebar ul li a:hover,
.sidebar ul li a.active {
    background-color: #1abc9c;
}

.logout-btn {
    position: absolute;
    right: 20px;
    top: 20px;
    text-decoration: none;
    background-color: #e74c3c;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    font-weight: bold;
}

.logout-btn:hover {
    background-color: #c0392b;
}

h2 {
    margin-left: 220px;
    padding: 20px 0;
    color: #333;
}

table {
    width: 80%;
    margin: 0 auto 50px auto;
    margin-left: 220px;
    border-collapse: collapse;
    background-color: white;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

table thead {
    background-color: #34495e;
    color: white;
}

table th, table td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

table tr:hover {
    background-color: #f1f1f1;
}

.btn {
    padding: 6px 12px;
    text-decoration: none;
    border-radius: 4px;
    font-weight: bold;
    margin-right: 5px;
}

.btn-update {
    background-color: #3498db;
    color: white;
}

.btn-update:hover {
    background-color: #2980b9;
}

.btn-delete {
    background-color: #e74c3c;
    color: white;
}

.btn-delete:hover {
    background-color: #c0392b;
}


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

</body>
</html>
