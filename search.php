<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Search Results</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
       <!--bootstrap CSS link -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <!-- swiper css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<!-- box icons -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--css file-->
    <link rel="stylesheet" href="style.css">
   
</head>

<body>
<div class="container-fluid p-0">
        <!--first child-->
        <?php
        require_once("./navbar.php")
        ?>
     <div class="bg-light mb-4">
      <h3 class="text-center mb-2">Serach Results</h3>
      <p class="text-center">Timeless Elegance. Refined Masculinity.</p>
    </div>
     <!--fouth child-->
        
     <div class="row">
           <div class="col-md-10">
            <!--products-->
                <div class="row">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "ap");
        // Check if the search term is provided
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        // $id = $_GET["id"];
        // $type_cata = $_GET['catagory'];


        if (isset($_GET['search'])) {
            $searchTerm = $_GET['search'];

            // Perform the search
            $query = "SELECT *
            FROM latest_product
            WHERE p_name LIKE '%$searchTerm%'
            UNION
            SELECT *
            FROM popular_product
            WHERE p_name LIKE '%$searchTerm%'
            UNION
            SELECT * FROM features_product
            WHERE p_name LIKE '%$searchTerm%'
            UNION
            SELECT * FROM mens_collection
            WHERE p_name LIKE '%$searchTerm%'
            UNION
            SELECT * FROM womens_collection
            WHERE p_name LIKE '%$searchTerm%'
            UNION
            SELECT * FROM kids_collection
            WHERE p_name LIKE '%$searchTerm%'";

            $result = mysqli_query($conn, $query);

            if (!$result) {
                die("Error: " . mysqli_error($conn));
            }

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Retrieve the product details
                    $p_id=$row['p_id'];
                    $p_name = $row['p_name'];
                    $p_featured_photo = $row['p_featured_photo'];
                    $p_old_price=$row['p_old_price'];
                    $p_new_price = $row['p_new_price'];

                    // Display the product information
                    echo '
                    <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                      <img src="images/' . $p_featured_photo . '" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">' . $p_name . '</h5>
                        <p class="card-text">Old Price: ' . $p_old_price . '</p>
                        <p class="card-text">New Price: ' . $p_new_price . '</p>     
                        <a href="cartview.php?id=' . $p_id .'" class="btn btn-primary">View</a>
                      </div>
                    </div>
                  </div>';
                }
            } else {
                echo 'No results found.';
            }
        } else {
            echo 'No search term provided.';
        }
        ?>

    </div>
    </div>
    </div>
</div>
</body>

</html>