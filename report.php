<!DOCTYPE html>
<html lang="en">

<head>
    <title>Monthly Report</title>
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
        <h2>Monthly Report</h2>
        <table>
            <thead>
                <tr>
                    <th>Month</th>
                    <th>Year</th>
                    <th>Total Quantity</th>
                    <th>Total Price</th>
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

                $sql = "SELECT 
                            MONTH(order_date) AS month,
                            YEAR(order_date) AS year,
                            SUM(qty) AS total_quantity,
                            SUM(p_price * qty) AS total_price
                        FROM
                            orders
                        GROUP BY
                            MONTH(order_date),
                            YEAR(order_date)";

                $result = mysqli_query($conn, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . date('F', mktime(0, 0, 0, $row['month'], 1)) . "</td>";
                        echo "<td>" . $row['year'] . "</td>";
                        echo "<td>" . $row['total_quantity'] . "</td>";
                        echo "<td>$" . $row['total_price'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No data available.</td></tr>";
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
