<?php
session_start();
$conn = new mysqli("localhost", "root", "", "furnio_db");

// Add to cart
if (isset($_GET['action']) && $_GET['action'] == 'add' && isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_SESSION['cart'][$id])) {
        // Increment quantity if the item already exists
        $_SESSION['cart'][$id]['quantity'] += 1;
    } else {
        // Fetch product details from the database
        $sql = "SELECT * FROM products WHERE id=$id";
        $row = $conn->query($sql)->fetch_assoc();
        $_SESSION['cart'][$id] = [
            "name" => $row['name'],
            "price" => $row['price'],
            "quantity" => 1 // Start with quantity of 1
        ];
    }
    header("Location: cart.php");
    exit();
}

// Remove from cart
if (isset($_GET['action']) && $_GET['action'] == 'remove' && isset($_GET['id'])) {
    unset($_SESSION['cart'][$_GET['id']]);
    header("Location: cart.php");
    exit();
}

// Display cart
$total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Cart</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Cart buttons with stylish design */
    .cart-button {
      width: 180px;
      height: 45px;
      margin: 10px;
      font-size: 16px;
      font-weight: bold;
      text-align: center;
      display: inline-block;
      border: none;
      border-radius: 25px;
      background: linear-gradient(45deg, #6c5b7b, #b497bd); /* Gradient color */
      color: white;
      cursor: pointer;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }

    .cart-button:hover {
      background: linear-gradient(45deg, #b497bd, #6c5b7b); /* Hover effect */
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      transform: translateY(-2px);
    }

    /* Footer styling */
    footer {
      text-align: center;
      padding: 20px;
      background-color: #f8f9fa;
      margin-top: auto;
    }

    footer p {
      margin: 0;
      color: #6c757d;
    }
  </style>
</head>
<body>

<?php include('header.php'); ?>

<div class="container mt-5">
  <h2>Your Cart</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $id => $product) {
            $subtotal = $product['price'] * $product['quantity']; // Calculate subtotal considering quantity
            $total += $subtotal;
            echo "<tr>
                    <td>{$product['name']}</td>
                    <td>₹{$product['price']}</td>
                    <td>{$product['quantity']}</td>
                    <td>
                      <a href='cart.php?action=remove&id=$id' class='cart-button'>Remove</a>
                    </td>
                  </tr>";
        }
      } else {
        echo "<tr><td colspan='4'>Your cart is empty</td></tr>";
      }
      ?>
    </tbody>
  </table>
  <h4>Total: ₹<?php echo $total; ?></h4>

  <div class="d-flex gap-3 mt-4">
    <a href="product.php" class="btn btn-secondary">← Continue Shopping</a>
    <a href="checkout.php" class="btn btn-success">Proceed to Checkout</a>
  </div>
</div>

<?php include('footer.php'); 
?>



</body>
</html>
