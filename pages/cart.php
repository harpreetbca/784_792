<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

<?php
include('header.php');
?>

  <div class="container mt-5">
    <h2>Your Cart</h2>
    <?php
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        echo '<table class="table table-bordered">';
        echo '<thead><tr><th>Product</th><th>Price</th></tr></thead><tbody>';

        $total = 0;
        foreach ($_SESSION['cart'] as $item) {
            echo "<tr><td>{$item['name']}</td><td>₹{$item['price']}</td></tr>";
            $total += $item['price'];
        }

        echo "<tr><td><strong>Total</strong></td><td><strong>₹$total</strong></td></tr>";
        echo '</tbody></table>';
    } else {
        echo "<p>Your cart is empty.</p>";
    }
    ?>
    <button class="btn btn-success">Place Order</button>
  </div>

<?php
include('footer.php');
?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
