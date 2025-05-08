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
            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>
        </div>

        <button type="submit" class="submit-btn">Add Product</button>
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

/* Sidebar Styles */
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

/* Content Area */
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
.form-container {
    background-color: #ffffff;
    padding: 25px;
    border-radius: 10px;
    max-width: 500px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #34495e;
}

input[type="text"],
input[type="number"],
input[type="file"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
}

input[type="file"] {
    padding: 8px;
}

.submit-btn {
    background-color: #27ae60;
    color: white;
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    border-radius: 6px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s;
}

.submit-btn:hover {
    background-color: #219150;
}

/* Message Alert */
.alert {
    background-color: #ffeded;
    border-left: 5px solid #e74c3c;
    padding: 12px;
    margin-bottom: 20px;
    color: #c0392b;
    font-weight: 500;
    border-radius: 6px;
}
</style>

</body>
</html>

<?php $conn->close(); ?>
