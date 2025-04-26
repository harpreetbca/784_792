<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = [
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'image' => $_POST['image'],
    ];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $_SESSION['cart'][] = $product;

    header("Location: cart.php");
    exit();
}
?>
