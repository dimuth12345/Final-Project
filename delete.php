<?php
// delete.php

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if the delete_item field exists in the POST data
    if (isset($_POST["delete_item"]) && isset($_POST["table_name"])) {
        $item_id = $_POST["delete_item"];
        $table_name = $_POST["table_name"];

        // Perform the deletion in the database using the item_id and table_name

        // Replace "localhost", "root", "", "bahunia" with your database credentials
        $conn = mysqli_connect("localhost", "root", "", "ap");

        // Check if the connection was successful
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Escape the table_name to prevent SQL injection
        $table_name = mysqli_real_escape_string($conn, $table_name);

        // Create a query to delete the item with the specified id from the given table
        $query = "DELETE FROM customers WHERE id = 'id'";

        // Execute the query
        if (mysqli_query($conn, $query)) {
            // Redirect back to the referring page after successful deletion
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }

        // Close the database connection
        mysqli_close($conn);
    }
}
?>