<?php
include './furnio_db.php';

if (!isset($_GET['id'])) {
    echo "No product ID provided.";
    exit();
}

$id = intval($_GET['id']);

// Fetch existing product details
$sql = "SELECT * FROM newproducts WHERE id = $id";
$result = $conn->query($sql);

if (!$result || $result->num_rows === 0) {
    echo "Product not found.";
    exit();
}

$product = $result->fetch_assoc();

// Handle update submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $price = floatval($_POST['price']);
    $image = $conn->real_escape_string($_POST['image']);

    $updateSql = "UPDATE newproducts SET name='$name', price=$price, image='$image' WHERE id=$id";

    if ($conn->query($updateSql)) {
        header("Location: products.php");
        exit();
    } else {
        echo "Error updating product: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Product</title>
    <style>
        form {
            width: 400px;
            margin: 40px auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        label, input {
            display: block;
            width: 100%;
            margin-bottom: 12px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 8px;
            border: none;
            cursor: pointer;
        }
        img {
            max-width: 100px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Update Product</h2>

<form method="POST">
    <label>Name:</label>
    <input type="text" name="name" value="<?= htmlspecialchars($product['name']) ?>" required>

    <label>Price:</label>
    <input type="number" name="price" value="<?= $product['price'] ?>" step="0.01" required>

    <label>Image Path:</label>
    <input type="text" name="image" value="<?= htmlspecialchars($product['image']) ?>" required>
    <img src="<?= $product['image'] ?>" alt="Product Image">

    <input type="submit" value="Update Product">
</form>

</body>
</html>
