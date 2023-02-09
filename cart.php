<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>WIRED - Products</title>
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

  <body style="background-color: black; overflow-x:hidden">
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

    <?php require_once ('header.php'); 
          //if(empty($_SESSION['id'])) {
            //header("location: ../index.php");
          //}
       ?>

    <div class="row mt-5 mb-5">
      <div class="col-4"></div>
      <div class="col-4 text-center">
        <button
          type="button"
          class="btn-md btn-outline-success"
          data-mdb-ripple-color="dark"
        >
          CART
        </button>
      </div>
    </div>

    <button
      onclick="history.back()"
      type="button"
      class="btn btn-outline-success mt-1 mb-0 ms-5"
      data-mdb-ripple-color="dark"
    >
      Back
    </button>
    <?php
                $totalprice =0;
                require_once 'includes/conn.inc.php';
                //$profile = require_once ('includes/products.inc.php');
                $id = $_SESSION['id'];
                $query="SELECT * FROM cart WHERE cid = '".$id."';";
                $result = mysqli_query($conn, $query);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck >0) { ?>
    <div class="m-5 bg-white text-center" style="border-radius: 30px">
      <table class="table">
        <thead>
          
          <tr class="text-center">
            <th scope="col"></th>
            <th scope="col">NAME</th>
            <th scope="col">CATEGORY</th>
            <th scope="col">PARTNER</th>
            <th scope="col">QTY</th>
            <th scope="col">PRICE</th>
            <th scope="col">TOTAL</th>
          </tr>
        </thead>
        <tbody>
           <?php while($row = mysqli_fetch_assoc($result))
          { ?>
          <tr>
            <td class="font-weight-bold table-dark">
              <?php $pid=$row['pid'];
                $queryp = "SELECT * FROM product where pid = '".$pid."';";
                $resultp = mysqli_query($conn, $queryp);
                $rowp = mysqli_fetch_assoc($resultp);
                $querys = "SELECT * FROM seller where id = '".$rowp['sid']."';";
                $results = mysqli_query($conn, $querys);
                $rows = mysqli_fetch_assoc($results);
                $totalprice += ($rowp['price']*$row['qty']);
                echo '<img height=150px src="data:image/jpeg;base64,' . base64_encode($rowp['image']) . '" />';
              ?>
            </td>
            <td class="font-weight-bold table-dark">
              <?php echo $rowp['name'] ?>
              <?php echo "<br><br />" ?>
              <?php //echo $rowp['description']; ?>
            </td>
            <td class="font-weight-bold table-dark">
              <?php echo $rowp['category'] ?>
            </td>
            <td class="font-weight-bold table-dark">
              <?php echo $rows['name'] ?>
            </td>
            <td class="font-weight-normal table-dark">
              <?php echo $row['qty'] ?>
            </td>
            <td class="font-weight-normal table-dark">
              <?php echo $rowp['price'] ?>
            </td>
            <td class="font-weight-normal table-dark">
              <?php echo $rowp['price']*$row['qty'];?>
            </td>
            <td>
              <div class="col-4">
              <?php $directory = "includes/deletecart.inc.php?pid=".$row['pid']; ?>
                <a href="<?= $directory?>" name="cartdelete"><i class="fas fa-trash"></i></a>
              </div>
            </td>
          </tr>
          <?php }
                } 
          else {
          ?>
          <br><br><br><br><br>
          <div class="text-center">
            <p
          style="
            color: white;
            font-family: 'Poppins';
            font-size: 50px;
            line-height: 1.2;
          "
        >
            NO ITEMS IN CART
        </p>
          </div> 
         <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="row text-center">
          <?php 
          if($resultCheck > 0) {
          echo '<p
          style="
          color: white;
          font-family: "Poppins";
          font-size: larger;
          font-weight : bold;
          line-height: 1.2;
          "
        >' . "GRAND TOTAL :  " . $totalprice .'</p>';
        ?>          
    </div>
    <form action="checkout.php">
    <div class="text-center">
      <button type="submit" name="checkout"class="btn btn-primary">PLACE ORDER</button>
    </div>
    <?php } ?>
    </form>
    <br>
    <br>

    <br><br><br><br><br><br>
      <?php require_once'footer.php'; ?>
  </body>
</html>

