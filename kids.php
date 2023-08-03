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

        <!--third child-->
        <div class="bg-light mb-4">
            <h3 class ="text-center mb-2">Kids's Collection</h3>
            <p class="text-center">Elevate Your Style, Empower Your Identity.</p>
</div>
          <!--fouth child-->
        
          <div class="row">
           <div class="col-md-10">
            <!--products-->
                <div class="row">
                    <?php
      $conn = mysqli_connect("localhost", "root", "", "ap");

      // Check if the connection was successful
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }

      // Create a query to fetch items from the table
      $query = "SELECT * FROM `kids_collection`";

      // Execute the query
      $result = mysqli_query($conn, $query);

      // Check if the query execution was successful
      if ($result) {
          // Check if any rows were returned
          if (mysqli_num_rows($result) > 0) {
              // Loop through each row and display the item details
              while ($row = mysqli_fetch_assoc($result)) {
                  // Access the column values of the current row
                  $p_id = $row["p_id"];
                  $p_name = $row['p_name'];
                  $p_featured_photo = $row['p_featured_photo'];
                  $p_old_price = $row['p_old_price'];
                  $p_new_price = $row['p_new_price'];

                  // Display the item details
                  echo '
                  <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                      <img src="images/' . $p_featured_photo . '" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">' . $p_name . '</h5>
                        <p class="card-text">Old Price: ' . $p_old_price . '</p>
                        <p class="card-text">New Price: ' . $p_new_price . '</p>     
                        <a href="cartview.php?id=' . $p_id . '&catagory=kc" class="btn btn-primary">View</a>
                      </div>
                    </div>
                  </div>';
              }
          } else {
              // No rows found in the table
              echo "No items found.";
          }
      } else {
          // Query execution failed
          echo "Error: " . mysqli_error($conn);
      }

      // Close the database connection
      mysqli_close($conn);
      ?>
      
    </div>
</div>

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