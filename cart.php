<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Bahunia Clothing Company</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container-fluid {
            padding: 0;
        }

        .navbar {
            background-color: #343a40;
            color: #ffffff;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
        }

        .navbar-nav .nav-link:hover {
            color: #ffffff;
        }

        h2 {
            font-size: 36px;
            font-weight: bold;
            color: #343a40;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #343a40;
            color: #ffffff;
            font-weight: bold;
        }

        img {
            width: 60px;
        }

        .total-amount {
            font-weight: bold;
        }

        .delete-button a,
        .buy-button a {
            color: #dc3545;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Bahunia Clothing Company</a>
        </div>
    </nav>
    <Section id="Bahunia Clothing Company" class="pt-5 mt-5 container">
    <?php
          if (isset($_SESSION["message"]) && $_SESSION["message"] && $_SESSION["message"] == 'failed') {
          ?>
            <div class="alert alert-danger">
              <?php
              echo "Error : Payment failed!";
              $_SESSION["message"] = '';
              ?>
            </div>
          <?php
          } elseif (isset($_SESSION["message"]) && $_SESSION["message"]) {
          ?>
            <div class="alert alert-success">
              <?php
              echo $_SESSION["message"];
              $_SESSION["message"] = '';
              ?>
            </div>
          <?php } ?>
      
      <hr>
    </section>

    <!-- Shopping Cart -->
    <section class="container mt-5">
        <h2 class="pt-5">Shopping Cart</h2>
        <hr>
    </section>

    <section class="container my-5">
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Delete</th>
                    <th>Buy Now</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Check if the item ID and category are set in the URL

                $conn = mysqli_connect("localhost", "root", "", "ap");

                $query = "SELECT * FROM cart";
                $result = mysqli_query($conn, $query);

                if (!$result) {
                    echo "Error: " . mysqli_error($conn);
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $carid = $row['cart_id'];
                        $p_name = $row['p_name'];
                        $p_featured_photo = $row['p_featured_photo'];
                        $p_new_price = $row['p_price'];
                        $p_color = $row['colour'];
                        $p_size = $row['size'];
                        $qty = $row['qty'];

                        // Display the cart item details
                        echo '
                        <tr>
                            <td>' . $p_name . '</td>
                            <td><img src="images/' . $p_featured_photo . '" alt=""></td>
                            <td>' . $p_new_price . '</td>
                            <td>' . $p_size . '</td>
                            <td>' . $p_color . '</td>
                            <td><input type="number" value="' . $qty . '" name="quantity[]" class="quantity-input" disabled></td>
                            <td class="total-amount">Rs. ' . $p_new_price * $qty . '</td>
                            <td class="delete-button"><a href="delete_cart_item.php?cart_id=' . $carid . '" onclick="return confirmDelete();"><i class="fas fa-trash-alt"></i></a></td>
                            <td class="Buy-button">
                <a href="buy.php?id='.$carid.'" class="btn btn-info btn-rounded">Buy Now</a>
               
                </div>
              </td>
              </tr>
            ';
                    
                    }
                }

                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </section>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this item from the cart?");
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-l8zYBhA5z/k8EP86ZkbDF5B67ZyOTcLvVR9Aqxz5d0GGpgsihBny46SNHQDO1bf9g/pxkzxtrBM39UYg1kq3mg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
