<!DOCTYPE html>
<html>
<head>
      <!--bootstrap CSS link -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css file-->
    <link rel="stylesheet" href="style.css">
  <title>Shopping Cart</title>
  <style>
     /* CSS styles for the cart view */
     .cart-item {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      border-bottom: 1px solid #ccc;
    }

    .cart-item img {
      width: 100px;
      margin-right: 10px;
    }

    .item-details {
      flex-grow: 1;
    }

    .item-details h4 {
      margin: 0;
    }

    .item-details p {
      margin: 5px 0;
    }

    .item-details .description {
      font-style: italic;
      color: #777;
    }

    .item-details .price {
      font-weight: bold;
    }

    .item-details .color {
      color: blue;
    }

    .button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 16px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .button.buy-button {
      background-color: #f44336;
    }

    .button:hover {
      background-color: #45a049;
    }

    .button.buy-button:hover {
      background-color: #d32f2f;
    }
  </style>
</head>
<body>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="car.css">

</head>

<body>

    <!--navbar-->
    <div class="container-fluid p-0">
        <!--first child-->
        <?php
        require_once("./navbar.php")
        ?>
<?php
$conn = mysqli_connect("localhost", "root", "", "ap");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET["id"];
$type_cata = $_GET['catagory'];

$tbl = "";

if ($type_cata === "lp") {
    $tbl = "latest_product";
} elseif ($type_cata === "fp") {
    $tbl = "features_product";
} elseif ($type_cata === "pp") {
    $tbl = "popular_product";
} elseif ($type_cata === "mc") {
    $tbl = "`mens_collection`";
} elseif ($type_cata === "wc") {
    $tbl = "`womens_collection`";
} elseif ($type_cata === "kc") {
    $tbl = "`kids_collection`";
}

$query = "SELECT * FROM $tbl WHERE p_id = $id";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $p_name = $row['p_name'];
        $p_featured_photo = $row['p_featured_photo'];
        $p_old_price = $row['p_old_price'];
        $p_new_price = $row['p_new_price'];
        $p_qty = $row['p_qty'];
        $p_description = $row['p_description'];
        $p_condition = $row['p_condition'];
        $p_return_policy = $row['p_return_policy'];

        echo '
        <div class="cartview-container">
            <div class="cart-row top">
                <div class="cartv-col image">
                    <img src="images/' . $p_featured_photo . '" alt="" />
                </div>
                <form action="addtocart.php?id='.$id.'" method="post" class="cartv-col details">
                        <div style="display: none">
                            <input name="p_name" value="'.$p_name.'"/>
                            <input name="p_featured_photo" value="'.$p_featured_photo.'"/>
                            <input name="price" value="'.$p_new_price.'"/>
                            <input name="p_qty" value="'.$p_qty.'"/>

                        </div>
                        <div class="item-title">
                            <h2>' . $p_name . '</h2>
                        </div>
                        <div class="item-details-row dropdown item-size">
                            <label for="size">Select Size</label>
                            <select name="size" id="size">
                                <option value="Small">Small</option>
                                <option value="Medium">Medium</option>
                                <option value="Large">Large</option>
                                <option value="XXL">XXL</option>
                                <option value="2XXL">2XXL</option>
                                <option value="3XXL">3XXL</option>
                            </select>
                        </div>
                        <div class="item-details-row dropdown item-color">
                            <label for="color">Select Color</label>
                            <select name="color" id="color">
                                <option value="Red">Red</option>
                                <option value="Blue">Blue</option>
                                <option value="Green">Green</option>
                                <option value="Black">Black</option>
                            </select>
                        </div>
                        <div class="item-details-row product-price">
                            <span>Product Price</span>
                            <div class="price-holder">
                                <p>' . $p_old_price . '</p>
                                <p>Rs.' . $p_new_price . '</p>
                            </div>
                        </div>
                        <div class="item-qty">
                        <label for="quantity">Stock Availability</label>
                            <h2>' . $p_qty . '</h2>
                        </div>
                        <div class="item-details-row item-quantity">
                            <label for="quantity">Quantity</label>
                            <input type="number" id="quantity" name="qty"/>
                        </div>
                        <div class="item-details-row button-holder">
                        
                            <button type="submit" name="cart">
                            Add Cart</button>
                        
                        
                        
                        </div>
                        
                        </form>
            </div>
            <div class="cart-row bottom">
                <div class="description">
                    <div class="title-tab">Product Description</div>
                    <div class="details-item">
                    <div>
                    <h6>Description:</h6>
                    <p>' . $p_description . '</p>
                    <p></p>
                </div>
                <div>
                       <h6>Condition:</h6>
                            <p>' . $p_condition . '</p>
                            <p></p>
                        </div>
                       <div>
                       <h6>Return Policy:</h6>
                            <p>' . $p_return_policy . '</p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
           </div>
        
        ';
    }
} else {
    echo "No items found.";
}

mysqli_close($conn);
?>

            <!--navbar-->
    <div class="container-fluid p-0">
        <!--first child-->
        <?php
        require_once("./navbar.php")
        ?>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>