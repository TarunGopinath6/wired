<?php ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false); ?>

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
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
    />
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

  <body style="background-color: black; overflow-x: hidden">
    <!-- END -->
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
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>

    <?php require_once ('header.php'); ?>

    <?php if(isset($_GET['pid'])) { ?>
    <?php $row = require_once ('includes/product.inc.php'); $_SESSION['pid']=$_GET['pid'];?>
    <button onclick="history.back()" type="button" class="btn btn-outline-success mt-5 ms-5" data-mdb-ripple-color="dark">
        Back To Shop
      </button>
    <div class="row mt-5 ms-5 mb-0"> 
        
      <div class="col-md-6">
        <?php echo '<img   width=100% src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" />'?>
      </div>
      <div class="col-md-1 ml-2"></div>
      <div class="col-md-4">
        <p
          style="
            color: white;
            font-family: 'Poppins';
            font-size: 50px;
            line-height: 1.2;
          "
        >
          <?php echo $row['name']; ?>
        </p>        
        <p
          style="
            color: grey;
            font-family: 'Poppins';
            font-size: 20px;
            line-height: 1.2;
          "
        >Category: 
        <?php echo $row['category']; ?>
        </p>
        <p
          style="
            color: grey;
            font-family: 'Poppins';
            font-size: 15px;
            line-height: 1.2;
          "
        >PID: 
        <?php echo $row['pid']; ?>
        </p>
        <p
          style="
            color: grey;
            font-family: 'Poppins';
            font-size: 15px;
            line-height: 1.2;
          "
        >SID: 
        <?php echo $row['sid']; ?>
        </p>
        <br /><br />
        <p
          style="
            color: white;
            font-family: 'Poppins';
            font-size: 25px;
            line-height: 1.2;
          "
        >
        &#8377 <?php echo $row['price']." /-"; ?>
        </p>
        <br /><br>
        <form action="includes/cart.inc.php"
        method="post">
            <p
          style="
            color: grey;
            font-family: 'Poppins';
            font-size: 15px;
            line-height: 1.2;
          "
        >Quantity:
        </p>
        <input
        name="qty"
          type="number"
          value="1"
          aria-label="Search"
          class="form-control"
          style="width: 250px"
        />
        <br>
        <button type="submit" name="cartsubmit" class="btn btn-primary btn-block mb-4" style="width: 250px;">
            Add to Cart
          </button>
        </form>
    </div>
    </div>
    <br><br>
    <div class="row container justify-content-center ms-5 mt-0">
        <p
          style="
            color: white;
            font-family: 'Poppins';
            font-size: 20px;
            line-height: 1.2;
          "
        >DESCRIPTION:
        </p>
    </div>
    <div class="row container justify-content-center ms-5 mt-4">
        <p
          style="
            color: white;
            font-family: 'Poppins';
            font-size: 17px;
            line-height: 1.2;
          "
        >Category: 
        <?php echo $row['description']; ?>
        </p>
    </div>

    <?php } ?>
    <br><br><br><br><br><br>
      <?php require_once'footer.php'; ?>
  </body>
</html>
