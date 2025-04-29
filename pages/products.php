<?php
include 'furnio_db.php'; // include the database connection file
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Products</title>
    <style>
        /* Some basic CSS for beautiful layout */
        .product-container {
            display: flex;
            flex-wrap: wrap;
            gap: 50x;
            padding: 20px;
        }
        .product-card {
            border: 1px solid #ccc;
            padding: 15px;
            width: 250px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .product-card h3 {
            margin: 10px 0;
        }
        .product-card p {
            margin: 5px 0;
            font-weight: bold;
        }
        .product-card button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
        }
        .product-card button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<h1>Our Products</h1>

<div class="product-container">
<?php
// fetch all products from the products table
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ?>
        <div class="product-card">
            <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
            <h3><?php echo $row['name']; ?></h3>
            <p>Price: ₹<?php echo $row['price']; ?></p>
            <button>Purchase</button>
        </div>
        <?php
    }
} else {
    echo "No products found!";
}
?>
</div>

</body>
</html>
