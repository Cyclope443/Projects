<?php
include "connection.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

<div>
       
<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;height:85px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="mx-2"> <img src="images/logo.jpg" style="height:50px;width:60px" alt="...."></div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		<a class="navbar-brand" href="index.php"><h6 style="font-size:22px">Home</h6></a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="crimereg.php"><h6 style="font-size:22px">Register Crime</h6><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="crimes.php"><h6 style="font-size:22px">All Crimes</h6><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="feedback.php"><h6 style="font-size:22px">Feedback</h6></a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="about.php"><h6 style="font-size:22px">About Us</h6></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faq.php"><h6 style="font-size:22px">FAQ's</h6></a>
            </li>
          </ul>
          
        </div>
        <div float="right">
        <ul class="navbar-nav mr-5 mt-2 mt-lg-0">
		<li class="nav-item">
              <a class="nav-link" href="login.php"><h6 style="font-size:22px">Log in</h6><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php"><h6 style="font-size:22px">Sign up</h6><span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>


<!-- navbar end -->


	<div class="container my-5">
		
		<form method="POST">
			<div class="col-md-5 mx-auto">
		<div class="card">
			<div class="card-header">
				<h5 align="center">Login Form</h5>
			</div>

			<div class="card-body">
				
					<input type="text" name="username" placeholder="Username" class="form-control mb-4">

					<input type="password" name="password" placeholder="Password" class="form-control">
					
			</div>
			<div class="card-footer">
				<input type="submit" name="sub" value="Login" class="btn btn-success">
			</div>
			<div align="center">Don't have an account? <a class="sign-link" href="register.php">Sign up</a>
			</div>
		</div>
		</form>
	</div>
	</div>
</body>
</html>
<?php
	if(isset($_POST['sub']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$enc_password= md5($password);
		
		$checkUser = "select * from users where uname='$username' and password='$enc_password'";
		
		$execQuery = mysqli_query($conn,$checkUser);

		if(mysqli_num_rows($execQuery) == 1)
		{
			session_start();
			$_SESSION['user'] = $username;
			if ($username == "admin")
			{
				header('Location:admin/index.php');
			}
			else
			{
				header('Location:index.php');
			}
			
		}
		else
		{
			echo "<div class='alert alert-danger md-4 col-md-4 mx-auto' align='center'>Invalid User !</div>";
		}
	}
?>
<?php include('footer.php') ?>