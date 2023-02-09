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
    <title>Raspberry Pi</title>
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

    <div class="row mt-4 mb-5">
      <div class="col-4"></div>
      <div class="col-4 text-center">
        <button
          type="button"
          class="btn-lg btn-outline-success"
          data-mdb-ripple-color="dark"
        >
          SHOP
        </button>
      </div>
      <div class="col-4 text-center">
        <!-- Success -->
        <div class="btn-group mr-3">
          <button
            type="button"
            class="btn-md btn-outline-white dropdown-toggle"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            Sort
          </button>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="shop.php?sort=htol" name="sorthtol"
                >Price (Hight to Low)</a
              >
            </li>
            <li>
              <a class="dropdown-item" href="shop.php?sort=ltoh" name="sortltoh"
                >Price (Low to High)</a
              >
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item" href="shop.php">Clears sort</a></li
          </ul>
        </div>
        
      </div>
    </div>

    <!--SORT H TO L-->
    <?php if($_GET['sort'] === "htol") {?>
    <div class="row ml-1 mr-1">
      <?php 
        require_once ('includes/conn.inc.php');
        $query="SELECT * FROM product ORDER BY price DESC";
        $result = mysqli_query($conn, $query);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck >0) { while($row = mysqli_fetch_assoc($result)) { ?>
      <div class="col-3 p-1">
            <div class="card" style="height: 500px">
              <?php $directory = "product.php?pid=".$row['pid']; ?>
              <a href="<?= $directory?>"><?php echo '<img height=246 width=350 src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" />'
                ?></a>
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['name']?></h5>
                <p class="card-text">
                  <?php echo substr($row['description'],0,100)?>
                </p>
                <p class="card-text font-weight-bold" style="color: darkblue">
                  Rs.
                  <?php echo $row['price']?>
                </p>
                    <a href="#!" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
      </div>
      <?php }
        } 
      }?> 
      <!--SORT L TO H-->
    <?php if($_GET['sort'] === "ltoh") {?>
      <div class="row ml-1 mr-1">
        <?php 
          require_once ('includes/conn.inc.php');
          $query="SELECT * FROM product ORDER BY price";
          $result = mysqli_query($conn, $query);
          $resultCheck = mysqli_num_rows($result);
          if($resultCheck >0) { while($row = mysqli_fetch_assoc($result)) { ?>
        <div class="col-3 p-1">
            <div class="card" style="height: 500px">
              <?php $directory = "product.php?pid=".$row['pid']; ?>
              <a href="<?= $directory?>"><?php echo '<img height=246 width=350 src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" />'
                ?></a>
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['name']?></h5>
                <p class="card-text">
                  <?php echo substr($row['description'],0,100)?>
                </p>
                <p class="card-text font-weight-bold" style="color: darkblue">
                  Rs.
                  <?php echo $row['price']?>
                </p>
                    <a href="#!" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
        </div>
  
        <?php }
          } 
        }?>

        <!--NORMAL-->
    <?php if(!$_GET['sort']) {?>
      <div class="row ml-1 mr-1">
        <?php 
          require_once ('includes/conn.inc.php');
          $query="SELECT * FROM product";
          $result = mysqli_query($conn, $query);
          $resultCheck = mysqli_num_rows($result);
          if($resultCheck >0) { while($row = mysqli_fetch_assoc($result)) { ?>
        <div class="col-3 p-1">
            <div class="card" style="height: 500px">
              <?php if(isset($_SESSION['id'])) { $directory = "product.php?pid=".$row['pid']; } else { $directory = "login.php";} ?>
              <a href="<?= $directory?>"><?php echo '<img height=246 width=350 src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" />'
                ?></a>    
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['name']?></h5>
                <p class="card-text">
                  <?php echo substr($row['description'],0,100)?>
                </p>
                <p class="card-text font-weight-bold" style="color: darkblue">
                  Rs.
                  <?php echo $row['price']?>
                </p>
                    <a href="<?= $directory?>" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>           
        </div>
  
        <?php }
          } 
        }?>
    </div>
    <br><br><br><br><br><br>
      <?php //require_once'footer.php'; ?>
  </body>
</html>
