<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>WIRED - Edit Products</title>
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

  <body style="background-image: url('img/homebg.jpg'); background-repeat: no-repeat; background-size: cover;">
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript"></script>

    <!-- START -->

    <div class="row align-content-center mt-5">
      <div class="col-4"></div>
      <!-- Form -->
      <?php $directory = "../wired/includes/productsedit.inc.php?pid=".$_GET['pid']; ?>
      <form
        class="col-4 mt-5 mb-5 p-5 bg-black"
        action="<?= $directory ?>"
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
            <select class="select btn-outline-white btn-md btn-rounded mb-3" name="prodeditpref">
            <option value="1" style="color: black;">Name</option>
            <option value="2"style="color: black;">Price</option>
            <option value="3"style="color: black;">Desription</option>
            <option value="4"style="color: black;">Image</option>
    </select>               
        </div>

        <!-- change input -->
        <br>
        <div class="form-outline mb-3" style="width: 22rem;">
  <input
    class="form-control"
    id="formControlDisabled"
    type="text"
    placeholder="Disabled input"
    aria-label="disabled input example"
    style="background-color: black"
    disabled
  />
  <label class="form-label" for="formControlDisabled" style="color: white;"><?php $pidedit = $_GET['pid']; echo "PID : ".$pidedit;?></label>
</div>

        <!-- change input -->
        <div class="form-outline mb-4">
            <input
              type="text"
              id="form1Example1"
              class="form-control"
              name="prodeditval"
            />
            <label class="form-label text-white" for="form1Example1"
              >Enter new value</label
            >
          </div>

          <label class="form-label" for="customFile" style="color: grey; font-size: 15px;">Upload only for image edit</label>
            <input name="prodeditpic" type="file" class="form-control" id="customFile" style="background-color: black; color: white;" />

        <!-- Submit button -->
        <button type="submit" name="prodeditsubmit" class="btn btn-primary btn-block mb-4">
          UPDATE 
        </button>
        <div class="text-center">
          <p class="text-white">
            <a href="products.php">Cancel</a>
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
