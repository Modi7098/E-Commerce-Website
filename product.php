<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

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
			echo '<a class="nav-link active" aria-current="page" href="product.php">product</a>';
		  }?>
          </li>
          <li class="nav-item">
		  <?php if(!empty($user_data['Name'])){
			echo '<a class="nav-link " aria-current="page" href="cart.php">cart</a>';
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

    <!-- product stuff -->

    <div class="container p-4 mb-3">
        <div class="jumbortron btn-secondary text-center p-4">
            <h1>Welcome to our Lifestyle Store!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.
            </p>
        </div>
        <div class="row text-center mt-4">
            <div class="col-sm-3">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="img/5.jpg" alt="error in loading">
                    <div class="card-body">
                        <h5 class="card-title">Canon EOS</h5>
                        <p class="card-text">Price: rs. 36000.00</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="img/2.jpg" alt="error in loading">
                    <div class="card-body">
                        <h5 class="card-title">Sony DSLR</h5>
                        <p class="card-text">Price: rs. 40000.00</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="img/3.jpg" alt="error in loading">
                    <div class="card-body">
                        <h5 class="card-title">Sony DSLR</h5>
                        <p class="card-text">Price: rs. 50000.00</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="img/4.jpg" alt="error in loading">
                    <div class="card-body">
                        <h5 class="card-title">Olympus DSLR</h5>
                        <p class="card-text">Price: rs. 80000.00</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center mt-4">
            <div class="col-sm-3">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="img/9.jpg" alt="error in loading">
                    <div class="card-body">
                        <h5 class="card-title">Titan Model #301</h5>
                        <p class="card-text">Price: rs. 13000.00</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="img/10.jpg" alt="error in loading">
                    <div class="card-body">
                        <h5 class="card-title">Titan Model #201</h5>
                        <p class="card-text">Price: rs. 3000.00</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="img/11.jpg" alt="error in loading">
                    <div class="card-body">
                        <h5 class="card-title">HMT Milan</h5>
                        <p class="card-text">Price: rs. 8000.00</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="img/12.jpg" alt="error in loading">
                    <div class="card-body">
                        <h5 class="card-title">Faber Luba #111</h5>
                        <p class="card-text">Price: rs. 18000.00</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center mt-4">
            <div class="col-sm-3">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="img/8.jpg" alt="error in loading">
                    <div class="card-body">
                        <h5 class="card-title">H&W</h5>
                        <p class="card-text">Price: rs. 800.00</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="img/6.jpg" alt="error in loading">
                    <div class="card-body">
                        <h5 class="card-title">Luis Phil</h5>
                        <p class="card-text">Price: rs. 1000.00</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="img/13.jpg" alt="error in loading">
                    <div class="card-body">
                        <h5 class="card-title">John Zok</h5>
                        <p class="card-text">Price: rs. 1500.00</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="img/14.jpg" alt="error in loading">
                    <div class="card-body">
                        <h5 class="card-title">Jhalsani</h5>
                        <p class="card-text">Price: rs. 1300.00</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer stuff -->

    <footer class="center">
        <div class="container">
            <p>© Lifestyle Store All Rights Reserved Contact Us: +91 90000 00000</p>
        </div>
    </footer>

</body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".btn").click(function(){
    var productName=$(this).prev().prev().html();
    var price=$(this).prev().html();
    $(this).off('click');
 
  $.ajax({
        url:'insert.php',
        method:'POST',
        data:{
            productName:productName,
            price:price
        },
        success:function(data){
        
        }
        });
    });
});
</script>