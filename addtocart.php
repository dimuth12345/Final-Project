<?php
$conn = mysqli_connect("localhost", "root", "", "ap");

// Check if the connection was successful


if(isset ($_POST['cart'])){
    $pname = $_POST['p_name'];
    $p_featered_photo=$_POST['p_featured_photo'];
    $p_size=$_POST['size'];
    $p_color=$_POST['color'];
    $qty=$_POST['qty'];
    $p_price=$_POST['price'];
    $p_id=$_GET['id'];
   


    $sqlQuery = "INSERT INTO cart ( `p_name`, `p_featured_photo`, `p_price`, `size`, `colour`, `qty`, `p_id`) VALUES('$pname','$p_featered_photo','$p_price','$p_size','$p_color','$qty','$p_id')";
    if (!mysqli_query($conn, $sqlQuery)) {
        echo "Error: " . $sqlQuery . "<br>" . mysqli_error($conn);
      }
     header("Location: ./cart.php");

}


