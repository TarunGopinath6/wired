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
    <title>WIRED - Edit details</title>
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

  <body
    style="
      background-image: url('img/homebg.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      overflow-x: hidden;
    "
  >
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript"></script>

    <!-- START -->

    <?php $var = require_once 'includes/customerpassword.inc.php'; if($var!== "success") { echo $var; } else { $_SESSION['code']=$var; }?>
      
    <div class="row align-content-center mt-3">
      <div class="col-4"></div>
      <!-- Form -->
      <form
        class="col-4 mt-5 mb-5 p-5 bg-black"
        action="../wired/includes/login.inc.php"
        method="post"
        style="background-color: black; border-radius: 30px"
      >
        <div class="text-center mb-5">
          <a href="index.php"
            ><img src="img/WIRED(hz).png" style="height: 100px" alt=""
          /></a>
        </div>

        <div>
          <h5
            style="color: white; font-family: Arial, Helvetica, sans-serif"
            class="text-center"
          >
            We have sent a link to reset your password!<br /><br />
            Please check
            <?php echo $_SESSION['email']; ?>
          </h5>
        </div>
      </form>
      <!-- Form End-->
    </div>

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
    <script
      src="/assets/libs/frontend/MDB-UI-KIT-Pro-Essential-1.0.0/js/mdb.min.js"
      type="text/javascript"
    ></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".form-outline").forEach((formOutline) => {
          new mdb.Input(formOutline).init();
        });

        document.querySelectorAll(".form-outline").forEach((formOutline) => {
          new mdb.Input(formOutline).update();
        });
      });
    </script>
  </body>
</html>
