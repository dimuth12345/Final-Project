<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap 5 Footer</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <style>
        .footer {
            background-color: #f5f5f5;
            color: #333;
            padding-top: 30px;
            padding-bottom: 20px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: bold;
        }

        .footer h5 {
            text-transform: uppercase;
            margin-bottom: 20px;
            font-weight: bold;
            color: #ff0000;
            font-size: 18px;
        }

        .footer p {
            color: #333;
        }

        .footer a {
            color: #333;
            font-weight: bold;
            text-decoration: none;
        }

        .footer a:hover {
            color: #ff0000;
        }

        .social-icons i {
            font-size: 23px;
            color: black;
        }
    </style>
</head>

<body>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4">Bahunia Clothing Company</h5>
                    <p>BAUHINIA is a renowned clothing brand in Sri Lanka, founded in 2018. We have established ourselves as a leading provider of high-quality and stylish clothing options for fashion-conscious individuals. With a wide range of designs and a commitment to customer satisfaction, BAUHINIA has become a preferred choice for many Sri Lankans.</p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4">Products</h5>
                    <div class="footer-menu">
                        <ul>
                            <li><a href="mens.php">Men's Collection</a></li>
                            <li><a href="womens.php">Women's Collection</a></li>
                            <li><a href="kids.php">Kids Collection</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4">Useful Links</h5>
                    <div class="footer-menu">
                        <ul>
                            <li><a href="">Your Account</a></li>
                            <li><a href="">Shipping Rates</a></li>
                            <li><a href="">Help</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4">Contact Us</h5>
                    <div class="contact-info">
                        <p><i class="fas fa-home mr-3"></i>NO27, Sudugalahena, Maliduwa, Boossa, Galle, Sri Lanka</p>
                        <p><i class="fas fa-envelope mr-3"></i>bahuniaclothing346@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i>0 77 240 6852</p>
                        <p><i class="fas fa-print mr-3"></i>+77 240 6852</p>
                    </div>
                </div>
            </div>
            <hr class="mb-4">
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8">
                    <p>
                        &copy; 2023 All rights reserved by:
                        <a href="" style="text-decoration: none;">
                            <strong class="text-danger">Dimuth Chathuranga</strong>
                        </a>
                    </p>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-right social-icons">
                        <a href="https://www.facebook.com/" class="btn btn-floating btn-sm text-white"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.google.com/" class="btn btn-floating btn-sm text-white"><i class="fab fa-google"></i></a>
                        <a href="https://twitter.com/" class="btn btn-floating btn-sm text-white"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/" class="btn btn-floating btn-sm text-white"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.whatsapp.com/" class="btn btn-floating btn-sm text-white"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
