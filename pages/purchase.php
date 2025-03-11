<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/pur.css">
    <title>Document</title>
</head>
<body>

     <!-- javascript file -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"></script>

  <?php
    include('header.php');
    ?>


<h1 class="pur"><p>THANKYOU FOR PURCHASE</p></h1>




<?php
session_start();
?>

<h2>Your Shopping Cart</h2>

<?php if (!empty($_SESSION["cart"])): ?>
    <ul>
        <?php foreach ($_SESSION["cart"] as $index => $item): ?>
            <li>
                <?php echo $item["product"] . " - $" . $item["price"]; ?>
                <a href="cart.php?remove=<?php echo $index; ?>">Remove</a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Your cart is empty.</p>
<?php endif; ?>

<a href="product.php">Continue Shopping</a>





<?php
    include('footer.php');
    ?>




</body>
</html>