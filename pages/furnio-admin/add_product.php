<?php
// add_product.php
include 'furnio_db.php';

$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['product_name']);
    $price = floatval($_POST['price']);
    $image = $_FILES['image'];

    if (!empty($name) && $price > 0 && $image['error'] == 0) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $imageName = basename($image["name"]);
        $targetFilePath = $targetDir . time() . "_" . $imageName;
        $imageType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($imageType, $allowedTypes)) {
            // Move uploaded image to target directory
            if (move_uploaded_file($image["tmp_name"], $targetFilePath)) {
                $sql = "INSERT INTO newproducts (name, price, image) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);

                // Check if the prepared statement was successful
                if ($stmt === false) {
                    $message = "❌ Prepare failed: " . $conn->error;
                } else {
                    $stmt->bind_param("sds", $name, $price, $targetFilePath);

                    // Execute the query
                    if ($stmt->execute()) {
                        // Redirect after successful insertion
                        header("Location: products.php?success=1");
                        exit;
                    } else {
                        $message = "❌ Database Error: " . $stmt->error;
                    }
                    $stmt->close();
                }
            } else {
                $message = "❌ Failed to upload image.";
            }
        } else {
            $message = "⚠️ Only JPG, JPEG, PNG & GIF files are allowed.";
        }
    } else {
        $message = "⚠️ Please fill all fields correctly and choose an image.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="sidebar">
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="orders.php">Orders</a></li>
        <li><a href="order_items.php">Order Items</a></li>
        <li><a href="add_product.php" class="active">Add Product</a></li>
        
        <div class="content">
        
</div>

    </ul>
</div>

<div class="content">
    <h1>Add New Product</h1>
    
  <a href="logout.php" class="logout-btn">Logout</a>

    <?php if ($message): ?>
        <div class="alert"><?= $message ?></div>
    <?php endif; ?>

    <form method="POST" action="add_product.php" enctype="multipart/form-data" class="form-container">
        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" required>
        </div>

        <div class="form-group">
            <label for="price">Price (in $):</label>
            <input type="number" id="price" name="price" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="image">images:</label>
            <input type="file" id="image" name="image" accept="image/*" required>
        </div>

        <button type="submit" class="submit-btn">Add Product</button>
    </form>
</div>
<style>

/* General styles */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f0f4ff;
}

/* Sidebar */
.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 220px;
    height: 100%;
    background-color: #1e3a8a;
    padding-top: 60px;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul li a {
    display: block;
    padding: 15px 20px;
    color: white;
    text-decoration: none;
    transition: background-color 0.3s;
}

.sidebar ul li a:hover,
.sidebar ul li a.active {
    background-color: #2563eb;
}

/* Content area */
.content {
    margin-left: 250px;
    padding: 30px;
}

.content h1 {
    color: #1e3a8a;
}

/* Form styles */
.form-container {
    background: #ffffff;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(30, 58, 138, 0.1);
    max-width: 500px;
    margin-top: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 6px;
    color: #1e3a8a;
    font-weight: bold;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #93c5fd;
    border-radius: 5px;
    font-size: 16px;
}

.submit-btn {
    background-color: #2563eb;
    color: white;
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.submit-btn:hover {
    background-color: #1d4ed8;
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

/* Alert message */
.alert {
    margin-top: 15px;
    padding: 10px;
    background-color: #e0f2fe;
    border-left: 5px solid #2563eb;
    color: #0c4a6e;
    border-radius: 5px;
}

/* Footer */
.footer {
    background-color: #1e3a8a;
    color: white;
    text-align: center;
    padding: 15px 0;
    position: fixed;
    bottom: 0;
    left: 250px;
    width: calc(100% - 250px);
}

</style>

    <footer class="footer">
  <div class="footer-content">
    <p>© 2025 Furnio Admin Panel. All rights reserved.</p>
  </div>
</footer>
</body>
</html>

<?php $conn->close(); ?>
