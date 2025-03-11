<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $total_amount = $_POST['total_amount'];

    if (empty($name) || empty($email) || empty($address)) {
        echo "<h2>All fields are required. <a href='checkout.php'>Go back</a></h2>";
        exit;
    }

    // Here, you can save order details to a database (not included in this example)

    // Clear the cart after confirming order
    unset($_SESSION['cart']);

    echo "<h2>Thank you, $name! Your order has been confirmed.</h2>";
    echo "<p>We will send the order details to <strong>$email</strong> and ship to:</p>";
    echo "<p><strong>$address</strong></p>";
    echo "<p>Total Amount: ₹$total_amount</p>";
    echo "<a href='product.php'>Continue Shopping</a>";
} else {
    header("Location: checkout.php");
    exit;
}
?>
