<?php
session_start();
$conn = new mysqli("localhost", "root", "", "furnio_db");

// Handle Add to Cart
if (isset($_GET['action']) && $_GET['action'] === 'add' && isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $product = $conn->query("SELECT * FROM products WHERE id = $id");
    if ($product && $product->num_rows > 0) {
        $row = $product->fetch_assoc();

        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['quantity'] += 1;
        } else {
            $_SESSION['cart'][$id] = [
                'name' => $row['name'],
                'price' => $row['price'],
                'quantity' => 1
            ];
        }
    }
    header("Location: cart.php");
    exit();
}

// Handle Remove from Cart
if (isset($_GET['action']) && $_GET['action'] === 'remove' && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    if (isset($_SESSION['cart'][$id])) {
        unset($_SESSION['cart'][$id]);
    }
    header("Location: cart.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include('header.php'); ?>
<div class="container mt-5">
    <h2>Your Shopping Cart</h2>
    <?php if (!empty($_SESSION['cart'])): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price (₹)</th>
                    <th>Quantity</th>
                    <th>Subtotal (₹)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                foreach ($_SESSION['cart'] as $id => $product):
                    $subtotal = $product['price'] * $product['quantity'];
                    $total += $subtotal;
                ?>
                <tr>
                    <td><?= htmlspecialchars($product['name']) ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['quantity'] ?></td>
                    <td><?= $subtotal ?></td>
                    <td><a href="cart.php?action=remove&id=<?= $id ?>" class="btn btn-danger">Remove</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h4>Total: ₹<?= $total ?></h4>
        <a href="product.php" class="btn btn-secondary">← Continue Shopping</a>
        <a href="checkout.php" class="btn btn-success">Proceed to Checkout</a>
    <?php else: ?>
        <p>Your cart is empty.</p>
        <a href="product.php" class="btn btn-primary">← Continue Shopping</a>
    <?php endif; ?>
</div>
<?php include('footer.php'); ?>
</body>
</html>
