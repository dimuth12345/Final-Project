<!DOCTYPE html>
<html lang="en">

<head>
    <title>Orders Table</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        /* Additional CSS styles for the table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <div class="container">
        <br><br>
        <h2>Orders Table</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Featured Photo</th>
                    <th>Price</th>
                    <th>Color</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Customer Name</th>
                    <th>Customer Address</th>
                    <th>Card Number</th>
                    <th>Exp. Month</th>
                    <th>Exp. Year</th>
                    <th>CVC</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Replace with your database credentials
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ap";

                $conn = mysqli_connect($servername, $username, $password, $dbname);

                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM orders";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                      
                        echo "<td>" . $row['p_name'] . "</td>";
                        echo "<td><img src='images/" . $row['p_featured_photo'] . "' alt='' style='width: 60px;'></td>";
                        echo "<td>$" . $row['p_price'] . "</td>";
                        echo "<td>" . $row['colour'] . "</td>";
                        echo "<td>" . $row['size'] . "</td>";
                        echo "<td>" . $row['qty'] . "</td>";
                        echo "<td>" . $row['customer_name'] . "</td>";
                        echo "<td>" . $row['cus_add'] . "</td>";
                        echo "<td>" . $row['card_number'] . "</td>";
                        echo "<td>" . $row['exp_month'] . "</td>";
                        echo "<td>" . $row['exp_year'] . "</td>";
                        echo "<td>" . $row['cvc'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='13'>No orders found.</td></tr>";
                }

                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and jQuery links -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>
