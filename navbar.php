<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css"
  rel="stylesheet"
/>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"
></script>


</head>
<style >
    @import '~mdb-ui-kit/css/mdb.min.css';
    #into-jumbotron {
    background: #159957; /* fallback for old browsers */
    background: -webkit-linear-gradient(
      to bottom,
      #283041,
      #0f1420
    ); /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(
      to bottom,
      #283041,
      #0f1420
    ); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  }
  
  @media (max-width: 991.98px) {
    #into-jumbotron .border-right {
      border: none !important;
    }
  }
    </style>

<!--Main Navigation-->
<header class="mb-4">
  <!-- Jumbotron -->
  <div class="p-3 text-center bg-white border-bottom ">
    <div class="container">
      <div class="row">
        <div class="col-md-4 d-flex justify-content-center justify-content-md-start mb-3 mb-md-0">
          <a href="index.php" class="ms-md-2">
            <img src="capture.PNG" height="45" />
          </a>
        </div>

        <div class="col-md-4">
          <form action="search.php" class="d-flex input-group w-auto my-auto mb-3 mb-md-0">
          <input class="form-control mr-sm-0" name="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>

        <div class="col-md-4 d-flex justify-content-center justify-content-md-end align-items-center">
          <div class="d-flex">
            <!-- Cart -->
            <a class="text-reset me-3" href="cart.php">
              <span><i class="fas fa-shopping-cart"></i></span>
              <span class="badge rounded-pill badge-notification bg-danger">1</span>
            </a>

            <!-- Notification -->
            <div class="dropdown">
              <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-bell"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Some news</a></li>
                <li><a class="dropdown-item" href="#">Another news</a></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </div>

            <!-- Languages -->
          
            <!-- User -->
          
            <div class="dropdown">
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                <li><?php echo $_SESSION['names'];?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top">
        <img src="Capture.PNG" alt="" class="logo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-light" href="index.php" class="Home">Home <span class="sr-only">(current) </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="##">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Collections
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="mens.php">Mens Collections</a>
                        <a class="dropdown-item" href="womens.php">Womens Collections</a>
                        <a class="dropdown-item" href="kids.php">Kids Collections</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="about.php">About Us</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0 ">
                <div class="d-flex align-items-center mr-3">
                   
                <?php
          if(!isset($_SESSION['name'])){
            echo'
            
            <div class="dropdown mr-2">
            <div>
              <a href="cusreg.php" class="btn btn-danger my-2 my-sm-0">SignUp</a>
            </div>
            </div>
            <div>
              <a href="logins.php" class="btn btn-success my-2 my-sm-0">Log in</a>
            </div>
       
            ';
          }
          else{
            echo'
            <a href="logout.php" style="text-decoration: none">
            <div class="d-flex gap-1 item-center">
            
              <img src="./images/log.png" style="width: 40px""/>
              <p>'.$_SESSION['name'].'</p>
              
            </div>
            </a>
       
            ';
          }
          ?>
                </div>
               
            </form>
        </div>
    </nav>
</body>
  <!-- Jumbotron -->
</header>
<!--Main Navigation-->
<script type="text/javascript" src="js/mdb.min.js">

</script>
<script type="text/javascript"></script>
<!--bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>