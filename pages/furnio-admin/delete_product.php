<?php
include './furnio_db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "DELETE FROM newproducts WHERE id = $id";

    if ($conn->query($sql)) {
        header("Location: products.php");
        exit();
    } else {
        echo "Error deleting product: " . $conn->error;
    }
}
$conn->close();
?>
