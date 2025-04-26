<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Save to DB or email logic goes here (optional)

    // Clear cart after placing order
    $_SESSION['cart'] = [];
}
include('header.php');
?>

<div class="container mt-5 text-center">
  <h2>Thank You for Your Order!</h2>
  <p>We will deliver your products to the given address soon.</p>
  <a href="product.php" class="btn btn-dark mt-3">Continue Shopping</a>
</div>

<?php include('footer.php'); ?>
