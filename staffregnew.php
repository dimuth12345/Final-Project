

<!DOCTYPE html>
<html>
<head> 
  <title>Staff Registration Form</title>
  <style>
    .container {
      width: 300px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .container h2 {
      text-align: center;
    }

    .container input[type="text"],
    .container input[type="password"],
    .container input[type="email"] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 4px;
    }

    .container button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Staff Registration</h2>
    <form action="" method="post">
      <input type="text" name="fullname" placeholder="Full Name" required><br>
      <input type="text" name="address" placeholder="Address" required><br>
      <input type="text" name="username" placeholder="Contact Number" required><br>
      <input type="text" name="password" placeholder="Possition" required><br>
      <input type="text" name="confirmpassword" placeholder="DAte of Birth" required><br>
      <input type="email" name="email" placeholder="Email" required><br>
      <button type="submit" name="register">Register</button>
    </form>
  </div>

  <?php
  // Database connection
  $conn = mysqli_connect("localhost", "root", "", "ap");

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Check if the form is submitted
  if (isset($_POST['register'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $confirmpassword = $_POST['confirmpassword'];
    $email = $_POST['email'];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format";
      exit();
    }

    // Check if passwords match
    if ($password != $confirmpassword) {
      echo "Registration successful";
      exit();
    }

    // Insert data into the database
    $sql = "INSERT INTO staff (fullname, address,  username, password, email) VALUES ('$fullname','$address', '$username', '$password', '$email')";
    if (mysqli_query($conn, $sql)) {
      echo "Registration successful";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  // Close database connection
  mysqli_close($conn);
  ?>
</body>
<body>
<style>
        /* CSS styles for buttons */
        button {
            font-size: 16px; /* Change the font size */
            font-family: Arial, sans-serif; /* Change the font family */
            padding: 10px 20px; /* Change the button padding */
            border-radius: 5px; /* Add border radius for rounded corners */
            background-color: #007bff; /* Change the background color */
            color: #ffffff; /* Change the text color */
            border: none; /* Remove the button border */
            cursor: pointer; /* Add cursor pointer on hover */
            margin-bottom: 10px; /* Add margin bottom for spacing */
        }
    </style>
     <form action="index.php" method="GET">
        <button type="submit">Go to Main Page</button>
    </form>

</body>
</html>
