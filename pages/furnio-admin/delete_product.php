<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

include 'furnio_db.php';

// Handle deletion
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    // Delete the product by ID
    $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();

    $message = "Product deleted successfully!";
}

// Fetch all products for the dropdown
$result = $conn->query("SELECT id, name FROM products");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Product</title>
    
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
        <h1>Delete Product</h1>

        <a href="logout.php" class="logout-btn">Logout</a>

        <?php if (!empty($message)) echo "<div class='success'>$message</div>"; ?>

        <form method="POST" action="">
            <label>Select a Product to Delete:</label>
            <select name="product_id" required>
                <option value="">-- Select Product --</option>
                <?php
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='{$row['id']}'>{$row['name']}</option>";
                    }
                } else {
                    echo "<option value=''>No products available</option>";
                }
                ?>
            </select>
            <button type="submit">Delete Product</button>
        </form>
    </div>


    <style>
        /* Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f6f7;
    display: flex;
    min-height: 100vh;
}

/* Sidebar */
.sidebar {
    width: 220px;
    background-color: #2c3e50;
    padding-top: 30px;
    padding-left: 10px;
    display: flex;
    flex-direction: column;
}

.sidebar ul {
    list-style: none;
}

.sidebar ul li {
    margin: 12px 0;
}

.sidebar ul li a {
    color: #ecf0f1;
    text-decoration: none;
    padding: 12px 20px;
    display: block;
    font-size: 16px;
    border-left: 4px solid transparent;
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
    font-size: 32px;
    margin-bottom: 20px;
    color: #2c3e50;
}

/* Logout Button */
.logout-btn {
    position: absolute;
    top: 20px;
    right: 30px;
    padding: 10px 20px;
    background-color: #e74c3c;
    color: white;
    text-decoration: none;
    border-radius: 6px;
    font-weight: bold;
    font-size: 14px;
    transition: background-color 0.3s;
}

.logout-btn:hover {
    background-color: #c0392b;
}

/* Form Styles */
form {
    background-color: #ffffff;
    padding: 25px;
    max-width: 400px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

form label {
    display: block;
    margin-bottom: 10px;
    font-weight: 600;
    color: #2c3e50;
}

select {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 6px;
}

button[type="submit"] {
    background-color: #e67e22;
    color: white;
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    border-radius: 6px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s;
}

button[type="submit"]:hover {
    background-color: #d35400;
}

/* Success Message */
.success {
    background-color: #dff0d8;
    color: #3c763d;
    padding: 12px;
    margin-bottom: 20px;
    border-left: 5px solid #3c763d;
    border-radius: 6px;
    font-weight: 500;
}

        </style>
</body>
</html>

<?php
$conn->close();
?>
