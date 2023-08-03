<!DOCTYPE html>
<html lang="en">

<head>
  <title> Bahunia Payment Process </title>
  <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  <!--bootstrap CSS link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-creditcardvalidator/1.0.0/jquery.creditCardValidator.js"></script>
  <script type="text/javascript" src="script/payment.js"></script>
</head>

<body>

  <!--navbar-->
  <div class="container-fluid p-0">
    <!--first child-->
    <?php
    require_once("./navbar.php")
    ?>
    <?php
    /* Database connection start */
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bahunia";
    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
    if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
    }
    ?>
    <div class="container" style="min-height:500px;">
      <div class=''>
      </div>
      <?php
      include('include/container.php'); ?>
      <br><br><br><br>
      <div class="container">
        <div class="row">
          <h2>Bahunia Payment Process</h2>

          <?php
          if (isset($_SESSION["message"]) && $_SESSION["message"] && $_SESSION["message"] == 'failed') {
          ?>
            <div class="alert alert-danger">
              <?php
              echo "Error : Payment failed!";
              $_SESSION["message"] = '';
              ?>
            </div>
          <?php
          } elseif (isset($_SESSION["message"]) && $_SESSION["message"]) {
          ?>
            <div class="alert alert-success">
              <?php
              echo $_SESSION["message"];
              $_SESSION["message"] = '';
              ?>
            </div>
          <?php } ?>
          <div class="panel panel-default">
            <div class="panel-heading">Order Process</div>
            <div class="panel-body">
           
              <form action="process.php" method="post" id="paymentForm">
                <div class="row">
                  <div class="col-md-8" style="border-right:1px solid #ddd;">
                    <h4 align="center">Customer Details</h4>
                    <div class="form-group">
                      <label><b>Card Holder Name <span class="text-danger">*</span></b></label>
                      <input type="text" name="customerName" id="customerName" class="form-control" value="">
                      <span id="errorCustomerName" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                      <label><b>Email Address <span class="text-danger">*</span></b></label>
                      <input type="text" name="emailAddress" id="emailAddress" class="form-control" value="">
                      <span id="errorEmailAddress" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                      <label><b>Address <span class="text-danger">*</span></b></label>
                      <textarea name="customerAddress" id="customerAddress" class="form-control"></textarea>
                      <span id="errorCustomerAddress" class="text-danger"></span>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label><b>City <span class="text-danger">*</span></b></label>
                          <input type="text" name="customerCity" id="customerCity" class="form-control" value="">
                          <span id="errorCustomerCity" class="text-danger"></span>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label><b>Zip <span class="text-danger">*</span></b></label>
                          <input type="text" name="customerZipcode" id="customerZipcode" class="form-control" value="">
                          <span id="errorCustomerZipcode" class="text-danger"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label><b>State </b></label>
                          <input type="text" name="customerState" id="customerState" class="form-control" value="">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label><b>Country <span class="text-danger">*</span></b></label>
                          <input type="text" name="customerCountry" id="customerCountry" class="form-control">
                          <span id="errorCustomerCountry" class="text-danger"></span>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <h4 align="center">Payment Details</h4>
                    <div class="form-group">
                      <label>Card Number <span class="text-danger">*</span></label>
                      <input type="text" name="cardNumber" id="cardNumber" class="form-control" placeholder="1234 5678 9012 3456" maxlength="20" onkeypress="">
                      <span id="errorCardNumber" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-4">
                          <label>Expiry Month</label>
                          <input type="text" name="cardExpMonth" id="cardExpMonth" class="form-control" placeholder="MM" maxlength="2" onkeypress="return validateNumber(event);">
                          <span id="errorCardExpMonth" class="text-danger"></span>
                        </div>
                        <div class="col-md-4">
                          <label>Expiry Year</label>
                          <input type="text" name="cardExpYear" id="cardExpYear" class="form-control" placeholder="YYYY" maxlength="4" onkeypress="return validateNumber(event);">
                          <span id="errorCardExpYear" class="text-danger"></span>
                        </div>
                        <div class="col-md-4">
                          <label>CVC</label>
                          <input type="text" name="cardCVC" id="cardCVC" class="form-control" placeholder="123" maxlength="4" onkeypress="return validateNumber(event);">
                          <span id="errorCardCvc" class="text-danger"></span>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div align="center">
                      <input type="submit" name="payNow" onclick="return confirmorder();" class="btn btn-success btn-sm" value="Pay Now" />
                      <a href="process.php"></a>
                    </div>
                    <br>
                  </div>
                  <script>
function confirmorder() {
  return confirm ("Your order has been placed successfully! Please come again.");
}
</script>
                  <div class="col-md-4">
                    <h4 align="center">Order Details</h4>
                    <div class="table-responsive" id="order_table">
                      <table class="table table-bordered table-striped">
                        <tbody>
                          <tr>
                            <th>Product</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Quntatity</th>
                            <th>Total</th>
                        


                          </tr>
                        </tbody>
                        <?php
                        // Check if the item ID and category are set in the URL
                        $cart_id = $_GET['id'];

                        $conn = mysqli_connect("localhost", "root", "", "ap");

                        $query = "SELECT * FROM cart WHERE cart_id='$cart_id'";
                        $result = mysqli_query($conn, $query);

                        if (!$result) {
                          echo "Error: " . mysqli_error($conn);
                        } else {
                          while ($row = mysqli_fetch_assoc($result)) {
                            $p_name = $row['p_name'];
                            $p_featured_photo = $row['p_featured_photo'];
                            $p_new_price = $row['p_price'];
                            $p_color = $row['colour'];
                            $p_size = $row['size'];
                            $qty = $row['qty'];
                            echo '
              <tr>
                <td>
                  <p>' . $p_name . '</p>
                </td>
                <td>
                  <img src="images/' . $p_featured_photo . '" alt="" style="width: 60px">
                </td>
                <td>
                  <p>' . $p_new_price . '</p>
                </td>
                <td>
                ' . $p_size . '</td>
              <td>
             ' . $p_color . '
              </td>
              <td>
             '.$qty.'
            </td>
            <td>
            '.$p_new_price*$qty.'
           </td>
        
              
            </td>

              ';
                          }
                        }
                        mysqli_close($conn);

                        ?>

                      </table>
                    </div>
                  </div>
                </div>
              </form>
            
            </div>
          </div>
        </div>
      </div>
      <?php include('include/footer.php'); ?>
      <!--bootstrap js link-->
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
      <!-- Stripe JS -->
      <script src="https://js.stripe.com/v3/"></script>
      <script>
        var stripe = Stripe('YOUR_STRIPE_PUBLISHABLE_KEY'); // Replace with your own Stripe publishable key

        function stripePay(event) {
          event.preventDefault();

          var name = $('#customerName').val();
          var email = $('#emailAddress').val();
          var address = $('#customerAddress').val();
          var city = $('#customerCity').val();
          var zip = $('#customerZipcode').val();
          var state = $('#customerState').val();
          var country = $('#customerCountry').val();
          var cardNumber = $('#cardNumber').val();
          var expMonth = $('#cardExpMonth').val();
          var expYear = $('#cardExpYear').val();
          var cvc = $('#cardCVC').val();
          var amount = $('input[name="total_amount"]').val();
          var currency = $('input[name="currency_code"]').val();
          var itemDetails = $('input[name="item_details"]').val();
          var itemNumber = $('input[name="item_number"]').val();
          var orderNumber = $('input[name="order_number"]').val();

          // Validation
          var valid = true;
          if (name === "") {
            valid = false;
            $('#errorCustomerName').text('Please enter card holder name.');
          } else {
            $('#errorCustomerName').text('');
          }

          if (email === "") {
            valid = false;
            $('#errorEmailAddress').text('Please enter email address.');
          } else {
            $('#errorEmailAddress').text('');
          }

          if (address === "") {
            valid = false;
            $('#errorCustomerAddress').text('Please enter address.');
          } else {
            $('#errorCustomerAddress').text('');
          }

          if (city === "") {
            valid = false;
            $('#errorCustomerCity').text('Please enter city.');
          } else {
            $('#errorCustomerCity').text('');
          }

          if (zip === "") {
            valid = false;
            $('#errorCustomerZipcode').text('Please enter zip code.');
          } else {
            $('#errorCustomerZipcode').text('');
          }

          if (country === "") {
            valid = false;
            $('#errorCustomerCountry').text('Please enter country.');
          } else {
            $('#errorCustomerCountry').text('');
          }

          if (cardNumber === "") {
            valid = false;
            $('#errorCardNumber').text('Please enter card number.');
          } else {
            $('#errorCardNumber').text('');
          }

          if (expMonth === "") {
            valid = false;
            $('#errorCardExpMonth').text('Please enter expiry month.');
          } else {
            $('#errorCardExpMonth').text('');
          }

          if (expYear === "") {
            valid = false;
            $('#errorCardExpYear').text('Please enter expiry year.');
          } else {
            $('#errorCardExpYear').text('');
          }

          if (cvc === "") {
            valid = false;
            $('#errorCardCvc').text('Please enter CVC.');
          } else {
            $('#errorCardCvc').text('');
          }

          if (valid) {
            // Payment successful
            // Display success message or redirect to a success page
            alert('Payment successful!');
          }
        }
      </script>



</body>

</html>