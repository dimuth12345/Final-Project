<?php
// delete_cart_item.php

// Establish database connection
$conn = mysqli_connect("localhost", "root", "", "ap");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the cart_id parameter is set
if (!isset($_GET['cart_id'])) {
    echo "Error: cart_id parameter is missing";
    exit;
}

// Get the item ID from the URL parameter
$cart_id = $_GET['cart_id'];

// Prepare the delete query
$query = "DELETE FROM cart WHERE cart_id = ?";
$stmt = mysqli_prepare($conn, $query);

// Bind the cart_id parameter to the query
mysqli_stmt_bind_param($stmt, "i", $cart_id);

// Execute the delete query
$result = mysqli_stmt_execute($stmt);

// Check if the deletion was successful
if (!$result) {
    echo "Error: " . mysqli_error($conn);
} else {
    // Redirect the user back to the cart page
    header("Location: cart.php");
}

// Close the prepared statement
mysqli_stmt_close($stmt);

// Close the database connection
mysqli_close($conn);
?>
