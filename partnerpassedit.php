<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>WIRED - Change password</title>
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

  <body style="background-image: url('img/homebg.jpg'); background-repeat: no-repeat; background-size: cover; overflow-x:hidden;">
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript"></script>

    <!-- START -->
    <?php if(isset($_SESSION['code'])) {
        ?>
    <div class="row align-content-center mt-5">
      <div class="col-4"></div>
      <!-- Form -->
      <form
        class="col-4 mt-5 mb-5 p-5 bg-black"
        action="../wired/includes/partneredit.inc.php"
        method="post"
        style="border-radius: 30px"
      >
        <div class="text-center mb-5">
          <a href="index.php"
            ><img src="img/WIRED(hz).png" style="height: 100px" alt=""
          /></a>
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="">
            <label class="visually-hidden" for="inlineFormSelectPref" >Preference</label>
            <select class="select btn-outline-white btn-md btn-rounded mb-3" name="peditpref">
            <option value="5" style="color: black;">Password</option> 
    </select>               
        </div>
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input
              type="text"
              id="form1Example1"
              class="form-control"
              name="peditval"
            />
            <label class="form-label text-white" for="form1Example1"
              >Enter new password</label
            >
          </div>

        <!-- Submit button -->
        <button type="submit" name="peditsubmit" class="btn btn-primary btn-block mb-4">
          UPDATE 
        </button>
        <div class="text-center">
          <p class="text-white">
            <a href="partnerprofile.php">Cancel</a>
          </p>
        </div>
        <?php 
      if(isset($_GET["error"])) {
        if($_GET["error"] == "emptyinput") {
            echo '<p class = "text-white text-center">Fill in all fields!</p>';
        }
        else if($_GET["error"] == "pwdmatchfail") {
          echo '<p class = "text-white text-center">The passwords entered do not match!</p>';
        }
        else if($_GET["error"] == "wronglogin") {
          echo '<p class = "text-white text-center">Login information incorrect</p>';
        }
      }
    ?>
      </form>
      <!-- Form End-->
    </div>
    <?php } 
    else {
        echo "ERROR: INVALID ACCESS";
    }
    ?>
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
