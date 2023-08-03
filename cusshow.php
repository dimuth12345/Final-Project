<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
    <title>Bahunia Clothing Company</title>
    <!--bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css file-->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!--navbar-->
    <div class="container-fluid p-0">
        <!--first child-->
        <?php
        require_once("./navbar.php")
        ?>

       <!-- MAIN -->
		<main>
        
        <section>
     
            
                <div class="shadow-4 rounded-7 table-responsive">
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                            <tr>
                                <th>Customer Name</th>
                                <th>Customer Email</th>
                                <th>Address</th>
                                <th>Mobile No</th>
                                <th>Delete</th>
                                <th>Actions</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "ap");
    
                            // Check if the connection was successful
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
    
                            // Create a query to fetch items from the table
                            $query = "SELECT * FROM customers";
    
                            // Execute the query
                            $result = mysqli_query($conn, $query);
    
                            // Check if any rows were returned
                            if (mysqli_num_rows($result) > 0) {
                                // Loop through each row and display the item details
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // Access the column values of the current row
                                    $name = isset($row['fullname']) ? $row['fullname'] : '';
                                    $mobileno = isset($row['mobile_no']) ? $row['mobile_no'] : '';
                                    $address = isset($row['address']) ? $row['address'] : '';
                                    $email = isset($row['email']) ? $row['email'] : '';
    
                                    // Display the item details within a table row
                                    echo '
                                    <tr>
                                        <td>    
                                            <div class="d-flex align-items-center">
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">' . $name . '</p>
                                                    <p class="text-muted mb-0"></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-bold mb-1">' . $email . '</p>
                                            <p class="text-muted mb-0"></p>
                                        </td>
                                        <td>
                                            <p class="fw-bold mb-1">' . $address . '</p>
                                            <p class="text-muted mb-0"></p>
                                        </td>
                                        <td>
                                            <p class="fw-bold mb-1">' . $mobileno . '</p>
                                            <p class="text-muted mb-0"></p>
                                        </td>
                                        <td class="delete-button">
                                            <a href="delete_cart_item.php?cart_id=" onclick="return confirmDelete();">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                        <td>
                                        <a href="" class="btn btn-primary">Edit</a>
                                      </td>
                                    </tr>
                                      
                                    ';
                                }
                            } else {
                                // No rows found in the table
                                echo '<tr><td colspan="5">No items found.</td></tr>';
                            }
    
                            // Close the database connection
                            mysqli_close($conn);
                            ?>
                        </tbody>
                    </table>
                </div>
                          </main>
            </section>
            <script src="script.js"></script>
            </body>
    </html>
    
    </section>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <!--first child-->
        <?php
        require_once("./navbar.php")
        ?>
        <!--Carousel slide-->

        
      

        <div class="container-fluid p-0">
        <!--first child-->
        <?php
        require_once("./footer.php")
        ?>


 <!--bootstrap js link-->
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<!--bootstrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>

</html>