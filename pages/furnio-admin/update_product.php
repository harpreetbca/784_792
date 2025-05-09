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
       body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h2 {
    text-align: center;
    margin-top: 30px;
    color: #333;
}

form {
    background-color: #fff;
    max-width: 500px;
    margin: 30px auto;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
}

label {
    margin-top: 15px;
    margin-bottom: 5px;
    font-weight: bold;
    color: #555;
}

input[type="text"],
input[type="number"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    width: 100%;
}

img {
    margin-top: 15px;
    max-width: 100%;
    height: auto;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    margin-top: 20px;
    padding: 12px;
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s;
}

input[type="submit"]:hover {
    background-color: #2980b9;
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
