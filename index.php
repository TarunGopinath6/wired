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
    <link
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
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
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
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

    <!-- Background image -->
    <div
      class="p-5 mb-4 text-center bg-image"
      style="background-image: url('img/homebg.jpg'); height: 400px"
    >
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);"">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
            <h1 class="mb-3" style="font-weight: 500; color:white; ">
              UPTO 50% OFF ON ALL PRODUCTS
            </h1>
            <h4 class="mb-3" style="font-weight:500;">RUSH NOW!</h4>
            <a href="shop.php">
            <button
              type="button"
              class="btn btn-success btn-rounded"
              style="color: black; font-weight: 600; font-size: medium"
            >
              SHOP NOW
            </button></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Name Welcome -->
    <?php if(isset($_SESSION['email']) and $_SESSION['partner'] === true)
    { ?>
    <h3
      class="text-center font-weight-bold"
      style="
        color: #08fc8c;
        font-family: 'Poppins';
      "
    >
      Hello there,
      <?php 
      $row = require_once ('includes/partnerprofile.inc.php');
      if($row !== false) {
        echo $row['name'];
      }
      ?>!
    </h3>
    <?php
    } 
    else if(isset($_SESSION['email'])) { ?>
      <h3
      class="text-center font-weight-bold"
      style="
        color: #08fc8c;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande',
          'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      "
    >

    Hello there,
    <?php 
      $row = require_once ('includes/profile.inc.php');
      if($row !== false) {
        echo $row['name'];
      }
      ?>!

    <?php }?>
    </h3>
    <!-- Bestsellers -->
    <div class="text-start mt-5 ms-3">
      <button type="button" class="btn btn-outline-success" data-mdb-ripple-color="dark" style="
      color: #08fc8c;
      font-family: 'Poppins';
      font-size: 15px;
    ">
        POPULAR NOW
      </button>
    </div>
    <br>
    <div class="row ml-1 mr-1">
      <?php 
        require_once ('includes/conn.inc.php');
        $query="SELECT * FROM product";
        $result = mysqli_query($conn, $query);
        $resultCheck = mysqli_num_rows($result);
        $cnt=0;
        if($resultCheck >0) { while($row = mysqli_fetch_assoc($result) and $cnt!==4) { ?>
      <div class="col-3 p-1">
          <div class="card" style="height: 500px">
            <?php if(isset($_SESSION['id'])) { $directory = "product.php?pid=".$row['pid']; } else { $directory = "login.php";} $cnt+=1; ?>
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
      ?>

      <div style ="background-image: url('img/homebg.jpg');
      min-height: 2000px;
      width: 100%;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: contain;
      margin-bottom: 0px;" >
        <div style="background-color: #08fc8c;
        opacity: 100%;
        height: 600px;
        width: 50%;
        margin-left: 0px;
        margin-bottom: 0px;
        margin-top: 50px;">
        <p style="font-weight: bold;
          opacity: 100%;
          vertical-align: middle;
          padding-top: 180px;
          padding-left: 30px;
          padding-right: 30px;
          padding-bottom: 30px;
          font-family: 'Poppins';
          font-weight: bold;
          margin-top: 0px;
          font-size: 20px;
          color: black;">
            Who are We?
          </p>
          <p style="font-weight: bold;
          opacity: 100%;
          vertical-align: middle;
          padding-left: 30px;
          padding-right: 30px;
          font-family: 'Poppins';
          margin-top: 0px;
          font-size: 18px;
          color: black;">
            WIRED is a one-off platform that connects the customer directly with wholesale players in the market, thus
            helping to procure electronic components needed for innovative projects/ research at a subsidised rate, from 
            the same locality as the user, so as to reduce time of delivery and cost thereof.
          </p>
        </div>    <!-- Bestsellers -->
        <div class="text-start mt-5 ms-3">
        </div>
        <br>
        <div class="row ml-1 mr-1">
          <?php 
            require_once ('includes/conn.inc.php');
            $query="SELECT * FROM product";
            $result = mysqli_query($conn, $query);
            $resultCheck = mysqli_num_rows($result);
            $cnt=0;
            if($resultCheck >0) { while($row = mysqli_fetch_assoc($result)) { ?>
          <div class="col-3 p-1">
              <div class="card" style="height: 500px">
                <?php if(isset($_SESSION['id'])) { $directory = "product.php?pid=".$row['pid']; } else { $directory = "login.php";} $cnt+=1; ?>
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
          ?>    
      </div>

      <br><br><br><br><br><br>
      <?php require_once'footer.php'; ?>

      <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.2/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.2/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyCRxiiUSCh2yvrvoDd9Loc5Bn2iqkNKmS0",
    authDomain: "wiredtg001.firebaseapp.com",
    projectId: "wiredtg001",
    storageBucket: "wiredtg001.appspot.com",
    messagingSenderId: "469137691691",
    appId: "1:469137691691:web:6e8b1218344cb2aef4866e",
    measurementId: "G-H6SC4F377Y"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
  </body>
</html>
