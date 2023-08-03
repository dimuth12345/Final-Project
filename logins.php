<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
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
    <h2>Login</h2>
    <form action="" method="post">
      <input type="text" name="username" placeholder="User Name" required><br>
      <input type="email" name="email" placeholder="Email" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      
      <input type="password" name="confirmpassword" placeholder="Confirm Password" required><br>
      <button type="submit" name="register">Login</button>
    </form>
  </div>
  
  <?php
  if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $confirmpassword = $_POST['confirmpassword'];

    // Database connection configuration
    $conn = mysqli_connect("localhost", "root", "", "ap");

    // Check the connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL query
    $sql = "SELECT * FROM customers WHERE username = '$username' AND password = '$password'";

    // Execute the query
    $result = $conn->query($sql);

    // Check if any results were found
    if ($result->num_rows > 0) {
      $userData = mysqli_fetch_assoc($result);
      $_SESSION['name'] = $userData['fullname'];
      // Login successful
      echo '<script>alert("Login successful!");</script>';
      header("Location: index.php"); // Redirect to main.html
      exit(); // Stop further execution
    } else {
      // Login failed
      echo '<script>alert("Incorrect username or password!");</script>';
    }

    // Close the database connection
    $conn->close();
  }
  ?>
</body>
</html>
 