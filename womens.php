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
            <h3 class ="text-center mb-2">LADIES FASHION</h3>
            <p class="text-center">Elevate Your Style, Empower Your Identity.</p>
</div>
<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <!--first child-->
        <?php
        require_once("./navbar.php")
        ?>
        <!--Carousel slide-->

        <div class="slider-container">
  <div class="slider">
    <img src="ladies2.png" alt="Slider Image 1">
    <img src="ladies1.png" alt="Slider Image 2">
    <img src="p.png" alt="Slider Image 3">
    <img src="w.png" alt="Slider Image 2">
    <img src="z.png" alt="Slider Image 3">
  </div>
</div>
<style>
  .slider-container {
  width: 100%;
  height: 600px;
  overflow: hidden;
  position: relative;
}

.slider {
  display: flex;
  transition: transform 0.5s ease-in-out;
}

.slider img {
  width: 100%;
  height: 800px;
  object-fit: cover;
}

</style>
<script>
  var slider = document.querySelector('.slider');
  var slideWidth = document.querySelector('.slider img').clientWidth;
  var interval;

  function startSlider() {
    interval = setInterval(function() {
      slider.style.transform = 'translateX(-' + slideWidth + 'px)';
      setTimeout(function() {
        slider.appendChild(slider.firstElementChild);
        slider.style.transform = 'translateX(0)';
      }, 500);
    }, 3000);
  }

  function stopSlider() {
    clearInterval(interval);
  }

  startSlider();
</script>


        <!--1. Ow; Carousel Min.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--2. Ow; Carousel Theme.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--second child-->
        

        <!--let's include cdn files-->

        <!--0.Jquery Cdn-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!--1. owl carousel min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <section>
            <div class="container-fluid my-5 bg-light">
                <h1 class="text-center fw-bold display-10 mb-3">Check out our highly sought-after products that are flying off the shelves</h1>
                <h5 class="text-center display-6 mb-3 ">Explore our recently added items in the product catalog.</h5>
                <div class="row mt-5">
                    <div class="owl-carousel owl-theme">
                        
                        
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "ap");

                        // Check if the connection was successful
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        // Create a query to fetch items from the table
                        $query = "SELECT * FROM womens_collection";

                        // Execute the query
                        $result = mysqli_query($conn, $query);

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
                                //echo $p_featured_photo."<br>";

                                echo '
                            <div class="card m-2" style="width: 18rem">
                                <img src="images/' . $p_featured_photo . '" class="" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">' . $p_name . '</h5>
                                    <div class="price-holder">
                                    <p>' . $p_old_price . '</p>
                                    <p>Rs.' . $p_new_price . '</p>
                                </div>
                                    <a href="cartview.php?id='.$p_id.'&catagory=wc" class="btn btn-primary">View</a>
                                </div>
                            </div>
                                ';
                            }
                        } else {
                            // No rows found in the table
                            echo "No items found.";
                        }

                        // Close the database connection
                        mysqli_close($conn);
                        ?>


                    </div>
                </div>
            </div>




            <!--item ends-->
        </section>

        <!--Init Owl Carousel-->
        <script>
            $('.owl-carousel').owlCarousel({
                stagePadding: 50,
                loop: true,
                margin: 8,
                nav: true,
                responsive: {
                    0: {
                        items: 6
                    },
                    600: {
                        items: 6
                    },
                    1000: {
                        items: 6
                    }
                }
            })
        </script>

        <!--last child-->

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script
  </body>

</html>