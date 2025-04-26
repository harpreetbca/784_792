<?php
session_start();
include('header.php');
?>





<h2 class="text-center mt-4">Checkout</h2>
<div class="container">
  <?php if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0): ?>
    <p class="text-center">Your cart is empty. <a href="product.php">Shop Now</a></p>
  <?php else: ?>
    <form action="place_order.php" method="post" class="mt-4">
      <div class="mb-3">
        <label>Name:</label>
        <input type="text" name="customer_name" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="customer_email" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Address:</label>
        <textarea name="customer_address" class="form-control" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Place Order</button>
    </form>
  <?php endif; ?>
</div>



<?php include('footer.php'); ?>
