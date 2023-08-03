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
  <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key="></script>
    <script>
        function initMap() {
            // Specify coordinates for the center of the map
            var center = { lat: 37.7749, lng: -122.4194 };

            // Create a new map object
            var map = new google.maps.Map(document.getElementById('map'), {
                center: center,
                zoom: 12
            });

            // Add a marker to the map
            var marker = new google.maps.Marker({
                position: center,
                map: map,
                title: 'Hello World!'
            });
        }
    </script>
    <body>
    <div class="container-fluid p-0">
    <!--first child-->
    <?php
    require_once("./navbar.php")
    ?>


<div class="container text-bold">
<h2>Find Us..</h2>
<div id="map">

</div>
</div>
    <script>
        // Initialize the map when the page has finished loading
        window.onload = function() {
            initMap();
        };
    </script>

<div class="container text-bold mt-4">
 
  <p>BAUHINIA Clothing is a prominent clothing brand in Sri Lanka, founded in 2018. Over the years, BAUHINIA has gained a strong reputation for providing Sri Lankans with exceptional designs and a wide range of clothing options. With a focus on quality and style, BAUHINIA has become a popular choice among fashion enthusiasts.</p>
     
  <p>To streamline their order management process, BAUHINIA currently handles orders through popular social media networks like Facebook and Instagram. Customers can conveniently message BAUHINIA with the details of the desired items, including the item code, size, and quantity. Upon confirming the availability of the requested items, customers are required to provide their delivery address and contact number to finalize the order. BAUHINIA ensures a hassle-free shopping experience by delivering the ordered items right to the customer's doorstep within 3 to 5 working days, with the option to pay cash on delivery.</p>

  <p>As the brand's popularity grew, BAUHINIA faced challenges associated with manual inventory management and paperwork due to the increasing number of orders received through message requests. To address these challenges and streamline their operations, BAUHINIA's Managing Director has made the strategic decision to consult AKL Software (AKL), a renowned software development consultant.</p>
</div>
<div class="container-fluid p-0 mt-4">
        <!--first child-->
        <?php
        require_once("./footer.php")
        ?>
<!-- Section: Design Block -->
<!--bootstrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>