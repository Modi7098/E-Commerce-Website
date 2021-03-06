<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['Email'];
		$password = $_POST['Password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where Email = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['Password'] === $password)
					{

						$_SESSION['id'] = $user_data['id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

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
<style>
	#button{
		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}
</style>

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
            <a class="nav-link active" aria-current="page" href=<?php if(!empty($user_data['Name'])){echo "logout.php";}else{echo "login.php";}; ?>><?php if(!empty($user_data['Name'])){echo "Logout";}else{echo "Login";}; ?></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- login stuff -->
	
    <div class="container px-5">
        <div class="container px-5">
            <div class="container px-5">
                <div class="container px-5">
                    <div class="container p-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading p-3 btn-primary"><h4>LOGIN</h4></div>
                            <div class="panel-body">
                                <p class="text-warning p-2 pt-4">Login to make a purchase</p>
                                <form method="post" class="form-group form-control p-5">
                                    <div class="row mb-3 p-2">
                                        <input type="email" class="p-2" name="Email" placeholder="Email">
                                    </div>
                                    <div class="row mb-3 p-2">
                                        <input type="password" class="p-2" name="Password" placeholder="Password">
                                    </div>
                                    <input id="button" type="submit" value="Login" class="btn btn-primary"></input>
                                </form>
                            </div>
                            <div class="panel-footer pt-4">Don't have an account? <a href="signup.php" class="text-primary">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>

    <!-- footer stuff -->

    <footer class="center">
        <div class="container">
            <p>?? Lifestyle Store All Rights Reserved Contact Us: +91 90000 00000</p>
        </div>
    </footer>

</body>

</html>