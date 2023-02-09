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

    <div class="row mt-4 mb-5">
      <div class="col-4"></div>
      <div class="col-4 text-center">
        <button
          type="button"
          class="btn-md btn-outline-success"
          data-mdb-ripple-color="dark"
        >
          PRODUCTS
        </button>
      </div>
    </div>

    <div class="row mt-3 text-center">
      <div class="col-4">
        <button
          type="button"
          class="btn-sm btn-outline-success btn-rounded"
          data-mdb-ripple-color="dark"
        >
          Edit
        </button>
      </div>
      <div class="col-4">
        <button
          type="button"
          class="btn-sm btn-outline-success btn-rounded"
          data-mdb-ripple-color="dark"
        >
          Delete
        </button>
      </div>
      <div class="col-4">
        <button
          type="button"
          class="btn-sm btn-outline-success btn-rounded"
          data-mdb-ripple-color="dark"
        >
          Add
        </button>
      </div>
    </div>

    <div class="m-5 text-center bg-white" style="border-radius: 30px">
      <table class="table table-striped">
        <thead>
          <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">PRICE</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col">PICTURE</th>
          </tr>
        </thead>
        <tbody>
          <?php 
                $profile = require_once ('includes/products.inc.php');
                $id = $profile['id'];
                $query="SELECT * FROM product WHERE sid = '".$id."';";
                $result = mysqli_query($conn, $query);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck >0) { while($row = mysqli_fetch_assoc($result))
          { ?>
          <tr>
            <th scope="row"><?php echo $row['pid'] ?></th>
            <td class="font-weight-bold"><?php echo $row['name'] ?></td>
            <td class="font-weight-bold"><?php echo $row['price'] ?></td>
            <td class="font-weight-normal"><?php echo $row['description'] ?></td>
            <td class="font-weight-normal">
              <?php echo '<img height=150px src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" />' ?>
            </td>
            <td>
              <div class="col-4 pb-1">
              <?php $directory = "productsedit.php?pid=".$row['pid']; ?>
                <a href="<?= $directory ?>"><i class="fas fa-pencil-alt"></i></a>
              </div>
              <div class="col-4">
                <a href=""><i class="fas fa-trash"></i></a>
              </div>
            </td>
          </tr>
          <?php }
                } ?>
        </tbody>
      </table>
    </div>
    <br><br><br><br><br><br>
      <?php require_once'footer.php'; ?>
  </body>
</html>
}
