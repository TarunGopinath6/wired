<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>WIRED - Sign Up</title>
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

  <body style="background-image: url('img/homebg.jpg'); background-repeat: no-repeat; background-size: cover; max-width: 100%; overflow-x: hidden; overflow-y: hidden">
   
    <!-- START -->

    <div class="row align-content-center mt-1">
      <div class="col-4"></div>
      <!-- Form -->
      <form class="col-4 mt-0 mb-0 p-5 bg-black needs-validation" novalidate style="border-radius: 30px" action="../wired/includes/partnersignup.inc.php" method="post">
        <div class="text-center mb-5">
          <a href="index.php"><img src="img/WIRED(hz).png" style="height: 100px" alt="" /></a>
        </div>
        
        <!-- Name input -->
        <div class="form-outline mb-4">
          <input type="text" id="form4Example1" class="form-control" name="name"/>
          <label class="form-label text-white" for="form4Example1">Name</label>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" id="form1Example1" class="form-control" name="email"/>
          <label class="form-label text-white" for="form1Example1"
            >Email address</label
          >
        </div>

        <!-- Number input -->
        <div class="form-outline mb-4">
          <input type="number" id="form6Example6" class="form-control" name="phone"/>
          <label class="form-label text-white" for="form6Example6">Phone</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="password" id="form1Example2" class="form-control" name="password"/>
          <label class="form-label text-white" for="form1Example2"
            >Password</label
          >
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="password" id="form1Example2" class="form-control" name="repeatpassword"/>
          <label class="form-label text-white" for="form1Example2"
            >Confirm Password</label
          >
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4">
          <textarea class="form-control" id="form4Example3" rows="4" name="address"></textarea>
          <label class="form-label text-white for="form4Example3">Address</label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-2" name="submit">
          Sign Up
        </button>
        <div class="text-center pt-2">
          <p class="text-white">
            Already a Partner?<a href="partnerlogin.php"> Log In</a>
          </p>  
        </div>
        <?php 
      if(isset($_GET["error"])) {
        if($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        }
        else if($_GET["error"] == "pwdmatchfail") {
          echo "<p>The passwords entered don't match!</p>";
        }
        else if($_GET["error"] == "emailerror") {
          echo '<p class = "text-white text-center">User with the same email/phone already exists!</p>';
        }
        else if($_GET["error"] == "stmtfail") {
          echo '<p class = "text-white text-center">Something went wrong! Please try again</p>';
        }
        else if($_GET["error"] == "userstmtfail") {
          echo '<p class = "text-white text-center">Something went wrong! Please try again</p>';
        }
        else if($_GET["error"] == "none") {
          echo '<p class = "text-white text-center">You have signed up!</p>';
          header("location: login.php");
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
   <script type="text/javascript" src="js/mdb.min.js"></script>
   <script type="text/javascript"></script>

    
  </body>
</html>
