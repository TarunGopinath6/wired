<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>WIRED - Online Shopping site for electronics</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/WIRED(logo).png" type="image/png" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="style.css" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    />
    <!-- Google Fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    />
    <!-- Bootstrap core CSS -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Material Design Bootstrap -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css"
      rel="stylesheet"
    />
  </head>

  <body style="background-color: black">
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    />
    <!-- Google Fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    />
    <!-- Bootstrap core CSS -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Material Design Bootstrap -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css"
      rel="stylesheet"
    />
    <!-- JQuery -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    ></script>
    <!-- Bootstrap tooltips -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"
    ></script>
    <!-- Bootstrap core JavaScript -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"
    ></script>
    <!-- MDB core JavaScript -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"
    ></script>
    
    <!-- Navbar -->
    <nav
      class="
        navbar navbar-expand-lg navbar-light
        bg-black
        m-0
        p-0
        align-items-center
        justify-content-center
      "
    >
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i> 
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar brand -->
          <a class="navbar-brand" href="index.php">
            <img src="img/WIRED(hz).png" height="70" alt="" loading="lazy" />
          </a>
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->

        <!-- Search Bar -->
        <div class="d-flex align-items-center">
          <!--<form action="shop.php">-->
          <!--<a href="includes/search.inc.php" name="searchsubmit">
           <div class="input-group rounded">
            <input 
              type="search"
              class="form-control rounded"
              placeholder="Search"
              aria-label="Search"
              aria-describedby="search-addon"
              name = "searchinput"
            />
            <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
            </span>
          </div>
          </a>-->
          <!--</form>-->
          

          <!-- Shopping Cart -->
          <a class="text-reset me-3 ml-3" href="cart.php">
            <i class="fas fa-shopping-cart" style="color:#08fc8c"></i>
          </a>
        </div>

        <?php 

        if(isset($_SESSION['email']) and $_SESSION["partner"] === false) { ?>
        <!-- Account -->
        <div class="btn-group">
          <button
            type="button"
            class="btn btn-outline-success btn-rounded dropdown-toggle" 
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            My Account  
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
            <li><a class="dropdown-item" href="customerorders.php">Orders</a></li>

            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a class="dropdown-item" href="includes/logout.inc.php">Logout</a>
            </li>
          </ul>
        </div>
        <?php }
        else  if(isset($_SESSION['email']) and $_SESSION['partner'] === true) { ?>
        <!-- Account -->
        <div class="btn-group">
          <button
            type="button"
            class="btn btn-outline-success btn-rounded dropdown-toggle"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            My Account
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="partnerprofile.php">Profile</a></li>
            <li><a class="dropdown-item" href="partnerorders.php">Orders</a></li>
            <li><a class="dropdown-item" href="products.php">Products</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a class="dropdown-item" href="includes/logout.inc.php">Logout</a>
            </li>
          </ul>
        </div>
        <?php }
        else { ?>
        <!-- Log In/Sign Up -->
        <a href="login.php">
          <button type="button" class="btn btn-outline-success waves-effect">
            Log In / Sign Up
          </button>
        </a>
        <a href="partnersignup.php">
          <button type="button" class="btn btn-outline-success waves-effect">
            BECOME A PARTNER
          </button>
        </a>

        <?php }

        ?>

        <!-- Right elements -->
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-light"
      style="background-color: #08fc8c"
    >
      <div class="container-fluid">
        <ul class="navbar-nav" style="font-weight: 600">
          <li class="nav-item">
            <a class="nav-link mr-2" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-2" href="raspberrypi.php">RASPBERRY PI</a>
          </li>
          <li class="nav-item mr-2">
            <a class="nav-link" href="arduino.php">ARDUINO</a>
          </li>
          <li class="nav-item mr-2">
            <a class="nav-link" href="#">SENSORS</a>
          </li>
          <li class="nav-item mr-2">
            <a class="nav-link" href="modules.php">MODULES</a>
          </li>
          <li class="nav-item mr-2">
            <a class="nav-link" href="#">ROBOTICS</a>
          </li>
          <li class="nav-item mr-2">
            <a class="nav-link" href="#">WIRELESS</a>
          </li>
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
              ELECTRONIC COMPONENTS
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#">Action</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Another action</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
              DISPLAY DEVICES
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#">Action</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Another action</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
              SMALL COMPONENTS
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#">Action</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Another action</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
              POWER SUPPLY
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#">Action</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Another action</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Navbar -->
  </body>
</html>
