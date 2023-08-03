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
  <style>
    #map {
      height: 400px;
      width: 100%;
    }

    /* Custom CSS modifications */
    body {
      background-color: #f1f1f1;
      font-family: Arial, sans-serif;
    }

    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
        hsl(218, 41%, 35%) 15%,
        hsl(218, 41%, 30%) 35%,
        hsl(218, 41%, 20%) 75%,
        hsl(218, 41%, 19%) 80%,
        transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
        hsl(218, 41%, 45%) 15%,
        hsl(218, 41%, 30%) 35%,
        hsl(218, 41%, 20%) 75%,
        hsl(218, 41%, 19%) 80%,
        transparent 100%);
    }

    .card-body {
      background-color: #ffffff;
      color: #000000;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: "Arial Black", sans-serif;
      color: #333333;
    }

    p {
      font-family: Arial, sans-serif;
      color: #555555;
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
        title: 'Bahunia Clothing Company'
      });
    }
  </script>
</head>
<body>
  <div class="background-radial-gradient">
    <header>
      <?php include 'navbar.php'; ?>
    </header>
    <main>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h2>About Us</h2>
                <p>BAUHINIA is a renowned clothing brand in Sri Lanka, founded in 2018. We have established ourselves as a leading provider of high-quality and stylish clothing options for fashion-conscious individuals. With a wide range of designs and a commitment to customer satisfaction, BAUHINIA has become a preferred choice for many Sri Lankans..</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div id="map"></div>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <?php include 'footer.php'; ?>
    </footer>
  </div>
  <!--bootstrap JS link-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-Ookl5Df43b8brB8A8HByOJl6wnpQ1E0Mv7+Qkg3c75AjsKCUDdvc4hOqkz1PBHcC" crossorigin="anonymous"></script>
  <script>
    // Initialize Google Maps when the page has loaded
    window.onload = function () {
      initMap();
    };
  </script>
</body>
</html>
