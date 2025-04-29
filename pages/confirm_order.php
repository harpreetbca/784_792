<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "furnio_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve order_id from the URL parameter
if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];

    // Fetch order details from the 'orders' table
    $order_query = "SELECT * FROM orders WHERE order_id = '$order_id'";
    $order_result = $conn->query($order_query);

    if ($order_result->num_rows > 0) {
        // Fetch the order information
        $order = $order_result->fetch_assoc();
        $customer_name = $order['customer_name'];
        $customer_email = $order['customer_email'];
        $customer_address = $order['customer_address'];
        $total_amount = $order['total_amount'];

        // Fetch the products in the order from the 'order_items' table
        $items_query = "SELECT * FROM order_items WHERE order_id = '$order_id'";
        $items_result = $conn->query($items_query);

        // Display order and items
        echo "<div class='container mt-5'>";
        echo "<div class='card shadow-lg border-0'>";
        echo "<div class='card-body'>";
        echo "<h2 class='card-title text-center text-uppercase text-primary'>Order Confirmation</h2>";
        echo "<p class='lead text-center text-muted'>Thank you for your purchase, $customer_name!</p>";
        echo "<hr>";
        echo "<div class='row'>";
        echo "<div class='col-12 col-md-6'>";
        echo "<h4>Order ID: <span class='text-dark'>$order_id</span></h4>";
        echo "<p>We will ship your items to:</p>";
        echo "<p><strong>$customer_address</strong></p>";
        echo "<p><small>Email: $customer_email</small></p>";
        echo "</div>";
        echo "<div class='col-12 col-md-6 text-md-end'>";
        echo "<p><strong>Total Amount:</strong> ₹$total_amount</p>";
        echo "</div>";
        echo "</div>";

        echo "<h4 class='mt-4'>Your Order Details:</h4>";

        // Display the ordered items
        echo "<table class='table table-hover table-bordered mt-3'>";
        echo "<thead class='thead-dark'><tr><th>Product Name</th><th>Price</th><th>Quantity</th><th>Total</th></tr></thead>";
        echo "<tbody>";
        while ($item = $items_result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $item['product_name'] . "</td>";
            echo "<td>₹" . $item['product_price'] . "</td>";
            echo "<td>" . $item['quantity'] . "</td>";
            echo "<td>₹" . ($item['product_price'] * $item['quantity']) . "</td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
        
        // Provide a link to continue shopping
        echo "<div class='text-center mt-4'>";
        echo "<a href='product.php' class='btn btn-primary btn-lg'>Continue Shopping</a>";
        echo "</div>";

        echo "</div>";
        echo "</div>";
        echo "</div>";
    } else {
        echo "<div class='container mt-5'><h2 class='text-center text-danger'>Order not found.</h2></div>";
    }
} else {
    echo "<div class='container mt-5'><h2 class='text-center text-danger'>Invalid Order ID.</h2></div>";
}

// Close the database connection
$conn->close();
?>

<!-- Add Bootstrap and custom CSS for styling -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f4f7fa;
    }
    .container {
        max-width: 900px;
    }
    .card {
        border-radius: 15px;
    }
    .card-body {
        background-color: #ffffff;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    .text-primary {
        color: #0056b3 !important;
    }
    .text-muted {
        color: #6c757d;
    }
    .table thead th {
        background-color: #343a40;
        color: #ffffff;
    }
    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 12px 30px;
        font-size: 18px;
        text-transform: uppercase;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
    .thead-dark {
        background-color: #343a40;
        color: #ffffff;
    }
    .lead {
        font-size: 18px;
    }
    hr {
        border-top: 1px solid #e0e0e0;
    }
</style>
