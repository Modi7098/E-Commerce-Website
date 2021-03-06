<?php 
session_start();

	include("connection.php");
	include("functions.php");

    $user_data = check_login($con);
    $product_data=product_detail($con);
   
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/scripts/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="index.css">
    <title>lifestyle store!</title>
</head>

<body>

   <!-- navbar stuff -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Lifestyle Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar navbar-inverse navbar-fixed-top">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php"><?php if(!empty($user_data['Name'])){echo "Hello, ".strval($user_data['Name']);} ?> &nbsp; &nbsp; &nbsp; &nbsp;Home</a>
          </li>
          <li class="nav-item">
		  <?php if(!empty($user_data['Name'])){
			echo '<a class="nav-link " aria-current="page" href="product.php">product</a>';
		  }?>
          </li>
          <li class="nav-item">
		  <?php if(!empty($user_data['Name'])){
			echo '<a class="nav-link active" aria-current="page" href="cart.php">cart</a>';
		  }?>
          </li>
          <li class="nav-item">
		  <?php if(!empty($user_data['Name'])){
			echo '<a class="nav-link " aria-current="page" href="setting.php">setting</a>';
		  }?>
          </li>
          
          <li class="nav-item">
		  <?php if(empty($user_data['Name'])){
			echo '<a class="nav-link " aria-current="page" href="signup.php">sign up</a>';
		  } ?>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href=<?php if(!empty($user_data['Name'])){echo "logout.php";}else{echo "login.php";}; ?>><?php if(!empty($user_data['Name'])){echo "Logout";}else{echo "Login";}; ?></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- cart stuff -->

    <div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Item Number</th>
            <th scope="col">Item Name</th>
            <th scope="col">Price</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            <?php
            $count=0.00;
            if(!empty($product_data)>0){
        for($x=0;$x<sizeof($product_data);$x++){
            $count=$count+ (float) $product_data[$x]['Price'];
        echo "<tr><th scope='row'>".strval($x+1)."</th><td>".$product_data[$x]['Product_Name']."</td><td>".$product_data[$x]['Price']."</td><td></td>";
            
            }}
            else{
                echo "<tr><th scope='row'>0</th><td></td><td></td><td></td></tr>";
            }
        ?>
          
          
          <tr>
            <th scope="row"></th>
            <td><b>Total</b></td>
            <td><b>Rs <?php echo $count ?>/-</b></td>
            <td><a href="success.php" class="btn btn-primary">Confirm Order</a></td>
          </tr>
        </tbody>
      </table>
      </div>

    <!-- footer stuff -->

    <footer class="center">
        <div class="container">
            <p>?? Lifestyle Store All Rights Reserved Contact Us: +91 90000 00000</p>
        </div>
    </footer>

</body>

</html>