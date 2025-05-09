<?php
session_start();

// Direct database connection inside this file
$servername = "localhost"; // MySQL server, usually 'localhost'
$username = "root";        // MySQL username (default: 'root')
$password = "";            // MySQL password (default: '' for localhost)
$dbname = "furnio_db";     // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Checkout process
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect customer details from the form
    $customer_name = $_POST['name'];
    $customer_email = $_POST['email'];
    $customer_address = $_POST['address'];

    // Calculate the total amount for the order
    $total_amount = 0;
    foreach ($_SESSION['cart'] as $id => $product) {
        $total_amount += $product['price'] * $product['quantity'];
    }

    // Insert the order details into the 'orders' table
    $sql = "INSERT INTO orders (customer_name, customer_email, customer_address, total_amount) 
            VALUES ('$customer_name', '$customer_email', '$customer_address', '$total_amount')";

    if ($conn->query($sql) === TRUE) {
        // Get the last inserted order ID (this is the order_id)
        $order_id = $conn->insert_id;

        // Insert each item from the cart into the 'order_items' table
        foreach ($_SESSION['cart'] as $id => $product) {
            $product_name = $product['name'];
            $product_price = $product['price'];
            $quantity = $product['quantity'];

            // Insert product details into the 'order_items' table
            $sql = "INSERT INTO order_items (order_id, product_name, product_price, quantity) 
                    VALUES ('$order_id', '$product_name', '$product_price', '$quantity')";
            $conn->query($sql);
        }

        // Clear the cart after the order is placed
        unset($_SESSION['cart']);

        // Redirect to the order confirmation page (optional)
        header("Location: confirm_order.php?order_id=$order_id");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Lora:wght@400;700&display=swap" rel="stylesheet">
  <style>
   body {
    font-family: 'Lora', serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 700px;
    margin: 50px auto;
    padding: 20px;
}

.card {
    background-color: #fff;
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    padding: 25px;
}

.card-body h2 {
    font-family: 'Playfair Display', serif;
    font-weight: 600;
    color: #343a40;
}

.form-label {
    font-weight: 500;
    color: #495057;
}

.form-control {
    border-radius: 6px;
    border: 1px solid #ced4da;
    padding: 10px;
    font-size: 16px;
}

textarea.form-control {
    resize: vertical;
}

.list-group-item {
    font-size: 16px;
    background-color: #fdfdfd;
    border-color: #e9ecef;
    margin-bottom: 5px;
    border-radius: 5px;
}

.total-price {
    font-weight: bold;
    font-size: 20px;
    text-align: right;
    color: #2c3e50;
}

.btn-primary {
    background-color: #1abc9c;
    border: none;
    padding: 12px 25px;
    font-size: 16px;
    font-weight: bold;
    border-radius: 6px;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #17a589;
}

  </style>
</head>
<body>

  <?php include('header.php'); ?>

  <div class="container">
    <div class="card">
      <div class="card-body">
        <h2 class="h2 text-center mb-4">Checkout</h2>
        <form method="POST" action="">
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Shipping Address</label>
            <textarea class="form-control" id="address" name="address" required></textarea>
          </div>

          <h4 class="mt-4">Cart Details:</h4>
          <ul class="list-group">
            <?php 
            $total_amount = 0;
            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $product) {
                    $total_amount += $product['price'] * $product['quantity'];
                    echo "<li class='list-group-item'>";
                    echo "<strong>" . $product['name'] . "</strong><br>Price: ₹" . $product['price'] . " | Quantity: " . $product['quantity'];
                    echo "</li>";
                }
            }
            ?>
          </ul>

          <hr>

          <h4 class="total-price">Total: ₹<?php echo $total_amount; ?></h4>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Place Order</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

</body>
</html>
