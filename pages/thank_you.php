<?php
session_start();
unset($_SESSION["cart"]);
echo "<h2>Thank you for your purchase!</h2>";
echo '<a href="product.php">Back to Products</a>';
?>
