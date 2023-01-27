<?php 
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<!--navbar-->
</div>
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
          <ul class="navbar-nav mt-2 mt-lg-0 mr-5 ">
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


<div class="container my-2" style="width:800px">
<?php include('message.php'); ?>
	<form method="POST" enctype="multipart/form-data">
	<div class="mb-3">
    <div class="card">
		  <div class="card-header">
			  <h5 align="center">Registration Page</h5>
		  </div>
		  <div class="card-body mx-3">
        <div  class="col-8 row mb-3 ">	
          <input type="text" name="fname" placeholder="Full Name" class="form-control" required>
        </div>
			  <div class="col-8 row mb-3" >
          <input type="text" name="uname" placeholder="Username" class="form-control" required>
        </div>
        <div class="col-8 row mb-3" >
          <input type="email" name="email" placeholder="Email" class="form-control" required>
        </div>
        <div class="col-6 row mb-3">
          <input type="number" name="contact" placeholder="Contact" class="form-control" required>
        </div>
        <div  class="col-6 row mb-3">	
          <label for="state">State : &nbsp</label>
          <select name="state">
            <option value="Maharashtra">Maharashtra</option>
            <option value="Goa">Goa</option>
            <option value="Karnataka">Karnataka</option>
            <option value="GujaSrat">Gujarat</option>
            <option value="Delhi">Delhi</option>
          </select>
        </div>
        <div class="col-6 row mb-3">
          <input type="number" name="regid" placeholder="Register No." class="form-control" required>
        </div>
        <div class="col-6 row mb-3">
				ID Card :
          <input type="file" name="id_doc" placeholder="Image" class="form-control" required>
        </div>
        <div class="col-6 row mb-3">
          <input type="password" id="password" name="pass" placeholder="Password" class="form-control" required>
        </div>
        <div class="col-6 row mb-3">
          <input type="password" id="confirmPassword" name="cpass" placeholder="Confirm Password" class="form-control" required>
        </div>
        <div class="form-group checkbox">
          <label><input type="checkbox" required><a href="terms.html"> I accept terms & conditions</a></label>
        </div>
      </div>
        
		  <div class="card-footer">
        <div class="row mb-3" >
          <button type="submit" name="sub" id="button" value="Register" class="btn btn-success mr-3">Register</button>
          <input type="reset" name="res" value="Reset" class="btn btn-info">
        </div>
        <div align="center">Already have an account? <a class="sign-link" href="login.php">Log In</a>
        </div>
		  </div>
		</div>      
	</div>	
	</form>		
</div>


<script>
  document.querySelector('#button').onclick = function(){
    var password = document.querySelector('#password').value,
    confirmPassword = document.querySelector('#confirmPassword').value;
    if(password == ""){
      alert("Field cannot be empty.");
    }
    else if(password != confirmPassword){
      alert("Confirm Password didn't match try again.");
      return false
    }
  }
</script>

</body>
</html>
<?php include('footer.php') ?>
<?php

if(isset($_POST['sub']))
{
	$full_name =$_POST['fname'];
	$user_name =$_POST['uname'];
	$email =$_POST['email'];
	$contact =$_POST['contact'];
	$state=$_POST['state'];
	$reg_id =$_POST['regid'];
	$id_doc = $_FILES['id_doc']['name'];
	$temp_name= $_FILES['id_doc']['tmp_name'];
	$loc = 'document/';
	$password =$_POST['pass'];
  $enc_password = md5($password);

  $sel_query = "SELECT * FROM users WHERE uname ='$user_name'";

	$res = mysqli_query($conn,$sel_query);

  if(mysqli_num_rows($res) > 0)
  {
    echo "<div class='alert alert-success md-4 col-md-4 mx-auto'>Username already exists</div>";

  }
  else
  {
    $ins_query = "insert into users values('','$full_name','$user_name','$email','$contact','$state','$reg_id','$id_doc','$enc_password')";

    $res1 = mysqli_query($conn,$ins_query);

    if(move_uploaded_file($temp_name, $loc.$id_doc))
    {
      //echo "<div class='alert alert-success md-4 col-md-4 mx-auto'>Document uploaded successfully</div>";
    }
    else
    {
        echo "<div class='alert alert-danger md-4 col-md-4 mx-auto'>Document not uploaded </div>";
    }


    if($res1)
    {
      //$_SESSION['message1']="User Registered Sucessfully!";
      
      echo '<div class="alert alert-success md-4 col-md-4 mx-auto" role="alert">User Registered Sucessfully!</div>';
      
    }
    else
    {
      echo '<div class="alert alert-success md-4 col-md-4 mx-auto" role="alert">User Not Registered!</div>';
    }
  }

	
}

?>

