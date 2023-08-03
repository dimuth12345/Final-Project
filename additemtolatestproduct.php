

<!DOCTYPE html>
<html>
<head> 
  <title>Add Items to the Featuers Product </title>
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
    <h2>Add Items to the Featuers Product</h2>
    <form action="" method="post">
      <input type="text" name="p_name" placeholder="item Name" required><br>
      <input type="text" name="p_featured_photo" placeholder="Image Name" required><br>
      <input type="text" name="p_old_price" placeholder="Old price" required><br>
      <input type="text" name="p_new_price" placeholder="New Price" required><br>
      <input type="text" name="p_qty" placeholder="Quantity" required><br>
      <input type="text" name="p_description" placeholder="Description" required><br>
      <input type="text" name="p_condition" placeholder="condition" required><br>
      <input type="text" name="p_return_policy" placeholder="policy" required><br>
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
    $p_name = $_POST['p_name'];
    $p_featured_photo = $_POST['p_featured_photo'];
    $p_old_price = $_POST['p_old_price'];
    $p_new_price = $_POST['p_new_price'];
    $p_qty = $_POST['p_qty'];
    $p_description = $_POST['p_description'];
    $p_condition = $_POST['p_condition'];
    $p_return_policy = $_POST['p_return_policy'];
    // Insert data into the database
    $sql = "INSERT INTO latest_product( p_name, p_featured_photo,  p_old_price, p_new_price, p_qty,p_description,p_condition, p_return_policy  ) VALUES (' $p_name', '$p_featured_photo', '$p_old_price', ' $p_new_price',  ' $p_qty', ' $p_description', '$p_condition',' $p_return_policy')";
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

<form action="adminmain.php" method="GET">
        <button type="submit">Go to Main  Page</button>
    </form>

</body>
</html>
