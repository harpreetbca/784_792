<?php
// Correct path if furnio_db.php is one level up
include './furnio-admin/furnio_db.php';

$products = [
    // Almirahs
    ["Classic Wooden Almirah", 25000, "../images/almirah2.jpeg"],
    ["Royal Steel Wardrobe", 18000, "../images/almirah.jpeg"],
    ["Vintage Teak Almirah", 30000, "../images/almirah3.jpeg"],
    ["Modern Steel Closet", 22000, "../images/almirah4.jpeg"],
    ["Sheesham Wood Almirah", 35000, "../images/almirah5.jpeg"],
    ["Elegant Steel Almirah", 15550, "../images/almirah6.jpeg"],
    ["Antique Wooden Wardrobe", 23979, "../images/almirah7.jpeg"],
    ["Sturdy Steel Almirah", 17290, "../images/almirah8.jpeg"],

    // Beds
    ["Elegant Wooden Bed Set", 35000, "../images/bed1.jpeg"],
    ["Modern Steel Frame Bed Set", 20000, "../images/bed2.jpeg"],
    ["Royal Teak Wood Bed Set", 45000, "../images/bed3.jpeg"],
    ["Classic Steel Bed Set", 22000, "../images/bed4.jpeg"],

    // Sofas
    ["Contemporary Corner Sofa Set", 40000, "../images/sofa1.jpeg"],
    ["Vintage Wooden Sofa Set", 40000, "../images/sofa2.jpeg"],
    ["Minimalist Modular Sofa Set", 24000, "../images/sofa3.jpeg"],
    ["Royal Velvet Sofa Set", 65000, "../images/sofa4.jpeg"],
    ["Elegant Steel Frame Sofa Set", 32000, "../images/sofa5.jpeg"],
    ["Classic Fabric Sofa Set", 28000, "../images/sofa6.jpeg"],
    ["Modern Wooden Frame Sofa Set", 38000, "../images/sofa7.jpeg"],
    ["Luxe Leather Sofa Set", 60000, "../images/sofa8.jpeg"]
];

foreach ($products as $product) {
    $name = $conn->real_escape_string($product[0]);
    $price = $product[1];
    $image = $conn->real_escape_string($product[2]);

    $sql = "INSERT INTO newproducts (name, price, image) VALUES ('$name', $price, '$image')";

    if ($conn->query($sql) === TRUE) {
        echo "Inserted: $name<br>";
    } else {
        echo "Error inserting $name: " . $conn->error . "<br>";
    }
}

$conn->close();
?>
