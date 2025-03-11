<?php
session_start();
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "<h2>Your cart is empty. <a href='product.php'>Go back to shop</a></h2>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include('header.php'); ?>

    <div class="container mt-5">
        <h2>Checkout</h2>
        <form action="confirm_order.php" method="post">
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

            <h3>Order Summary</h3>
            <ul class="list-group mb-3">
                <?php
                $total = 0;
                foreach ($_SESSION['cart'] as $id => $item) {
                    echo "<li class='list-group-item'>{$item['name']} - ₹{$item['price']} x {$item['quantity']}</li>";
                    $total += $item['price'] * $item['quantity'];
                }
                ?>
                <li class="list-group-item"><strong>Total: ₹<?php echo $total; ?></strong></li>
            </ul>

            <input type="hidden" name="total_amount" value="<?php echo $total; ?>">
            <button type="submit" class="btn btn-success">Confirm Order</button>
        </form>
    </div>

    <?php include('footer.php'); ?>
    <h3>Order Summary</h3>
<ul class="list-group mb-3">
    <?php
    $total = 0;
    foreach ($_SESSION['cart'] as $id => $item) {
        // Ensure quantity exists and set a default of 1 if missing
        $quantity = isset($item['quantity']) ? $item['quantity'] : 1;
        
        echo "<li class='list-group-item'>{$item['name']} - ₹{$item['price']} x {$quantity}</li>";
        $total += $item['price'] * $quantity;
    }
    ?>
    <li class="list-group-item"><strong>Total: ₹<?php echo $total; ?></strong></li>
</ul>

</body>

</html>
