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

  <body style="background-color: black; overflow-x: hidden" class="m-0 p-0">
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
    <div class="row mt-4 mb-4">
      <div class="col-4"></div>
      <div class="col-4 text-center">
        <button
          type="button"
          class="btn-md btn-outline-success"
          data-mdb-ripple-color="dark"
        >
          PROFILE
        </button>
      </div>
    </div>

    <div class="row m-0">
      <div class="col-4 pt-3" style="text-align: end">
        <p style="color: white">Name :</p>
      </div>
      <div class="col-4 text-center align-items-center">
        <button
          type="button"
          class="btn-md btn-outline-white m-2 btn-rounded"
          style="width: 100%"
        >
          <?php 
              $row = require_once ('includes/partnerprofile.inc.php');
              if($row !== false) {
                echo $row['name'];
              }
              ?>
        </button>
      </div>
    </div>
    <div class="row m-0">
      <div class="col-4 pt-3" style="text-align: end">
        <p style="color: white">Email :</p>
      </div>
      <div class="col-4 text-center align-items-center">
        <button
          type="button"
          class="btn-md btn-outline-white m-2 btn-rounded"
          style="width: 100%"
        >
          <?php 
                echo $row['email'];
              ?>
        </button>
      </div>
    </div>
    <div class="row m-0">
      <div class="col-4 pt-3" style="text-align: end">
        <p style="color: white">Phone :</p>
      </div>
      <div class="col-4 text-center align-items-center">
        <button
          type="button"
          class="btn-md btn-outline-white m-2 btn-rounded"
          style="width: 100%"
        >
          <?php 
              echo $row['phone'];
              ?>
        </button>
      </div>
    </div>
    <div class="row m-0">
      <div class="col-4 pt-3" style="text-align: end">
        <p style="color: white">Address :</p>
      </div>
      <div class="col-4 text-center align-items-center">
        <button
          type="button"
          class="btn-md btn-outline-white m-2 btn-rounded"
          style="width: 100%"
        >
          <?php 
              echo $row['address'];
              ?>
        </button>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-4"></div>
      <div class="col-4 ml-3 mb-2">
        <a href="partneredit.php">
          <button
            type="button"
            class="btn-sm btn-outline-success btn-rounded"
            data-mdb-ripple-color="dark"
          >
            Edit
          </button>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-4"></div>
      <div class="col-4 ml-3 mb-5">
        <a href="partnerpassword.php">
          <button
            type="button"
            class="btn-sm btn-outline-success btn-rounded"
            data-mdb-ripple-color="dark"
          >
            Change Password
          </button>
        </a>
      </div>
    </div>
    <br><br><br><br><br><br>
      <?php require_once'footer.php'; ?>
  </body>
</html>
