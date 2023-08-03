<?php
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ap";
    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

    // Get the form data
    $customerName = $_POST['customerName'];
    $emailAddress = $_POST['emailAddress'];
    $customerAddress = $_POST['customerAddress'];
    $customerCity = $_POST['customerCity'];
    $customerZipcode = $_POST['customerZipcode'];
    $customerState = $_POST['customerState'];
    $customerCountry = $_POST['customerCountry'];
    $totalAmount = $_POST['totalAmount'];

    // Insert customer details into the database
    $sql = "INSERT INTO customer (customer_name, email, address, city, zipcode, state, country)
            VALUES ('$customerName', '$emailAddress', '$customerAddress', '$customerCity', '$customerZipcode', '$customerState', '$customerCountry')";

    if (mysqli_query($conn, $sql)) {
        // Customer details saved successfully
        $customerId = mysqli_insert_id($conn);

        // Insert order details into the database
        $sql = "INSERT INTO orders (customer_id, total_amount)
                VALUES ('$customerId', '$totalAmount')";

        if (mysqli_query($conn, $sql)) {
            // Order details saved successfully
            $_SESSION["message"] = "Payment successful!";
        } else {
            // Failed to save order details
            $_SESSION["message"] = "Payment failed!";
        }
    } else {
        // Failed to save customer details
        $_SESSION["message"] = "Payment failed!";
    }

    mysqli_close($conn);
}

// Redirect back to the payment page
header("Location: buy.php");
exit();
?>
