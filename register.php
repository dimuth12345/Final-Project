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


  <div class="container-fluid p-0">
    <!--first child-->
    <?php
    require_once("./navbar.php")
    ?>
    <!--Second navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info login-title">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">

          <a class="nav-link text-center">Welcome to the Customer Registeration..! </a>
        </li>


      </ul>
    </nav>
    <?php
    // Database connection
    $conn = mysqli_connect("localhost", "root", "", "ap");

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the form is submitted
    if (isset($_POST['register'])) {
      $cusid = $_POST['cus_id'];
      $name = $_POST['name'];
      $cono = $_POST['con_no'];
      $mobileno = $_POST['mobile_no'];
      $address = $_POST['address'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $zipcode = $_POST['zipcode'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $confirmpassword = $_POST['comfirm_password'];

      // Validate email
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit();
      }

      // Check if passwords match
      if ($password != $confirmpassword) {
        echo "Passwords do not match";
        exit();
      }

      // Insert data into the database
      $sql = "INSERT INTO tbl_customers (`cus_id`, `names`, `con_no`, `mobile_no`, `adress`, `city`, `states`, `zip_code`, `email`, `passwords`, `comfirm_password`) VALUES 
                           ('$cusid','$name', '$cono', '$mobileno', '$address','$city','$state','$zipcode','$email','$password','$confirmpassword')";
      if (mysqli_query($conn, $sql)) {
        echo "<p style='text-align: center; background: green; padding: .5em; font-size: 1.5rem; color: white; font-weight: 500'>Registration Successfully..!</p>";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }


    // Close database connection
    mysqli_close($conn);
    ?>
    <form method="POST" action="">
      <div class="page">
        <div class="container">
          <div class="row mt-5">
            <div class="col-md-12">
              <div class="user-content">
                <div class="form-row">
                  <div class="form-group col-md-6 ">
                    <label for="inputEmail4">Cus ID</label>
                    <input type="CusID" name='cus_id' class="form-control" id="inputCusID">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="name" name='name' class="form-control" id="inputEmail4">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputconno">Con NO</label>
                    <input type="conno" name='con_no' class="form-control" id="inputconno">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputmobileno">Mobile No</label>
                    <input type="mobileno" name='mobile_no' class="form-control" id="inputmobileno">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputaddress">Address</label>
                    <input type="address" name='address' class="form-control" id="inputaddress">
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputcity">City</label>
                  <input type="city" name='city' class="form-control" id="inputcity">
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">State</label>
                <input type="text" name='state' class="form-control" id="inputAddress" placeholder="1234 Main St">
              </div>
              <div class="form-group">
                <label for="inputAddress2">Zip Code</label>
                <input type="text" name='zipcode' class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">Email</label>
                  <input type="text" name='email' class="form-control" id="inputCity">
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" name='password' class="form-control" id="inputPassword">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4"> Comfirm Password</label>
                <input type="password" name='comfirm_password' class="form-control" id="inputPassword">
              </div>
              
              <button type="submit" name="register" class="btn btn-primary">Register</button>
    </form>


    <!--bootstrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>