<?php include('db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h2>Add New Product</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Product Name" required><br><br>
        <input type="number" name="price" placeholder="Price" required><br><br>
        <input type="text" name="category" placeholder="Category (almirah/bed/sofa)" required><br><br>
        <input type="file" name="image" required><br><br>
        <input type="submit" name="submit" value="Add Product">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $category = $_POST['category'];

        $image = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];
        $uploadPath = "uploads/" . $image;

        move_uploaded_file($tmp, $uploadPath);

        $sql = "INSERT INTO products (name, price, image, category) VALUES ('$name', '$price', '$uploadPath', '$category')";
        if ($conn->query($sql)) {
            echo "Product added successfully.";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>
</body>
</html>
