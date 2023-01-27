<?php
session_start();
if($_SESSION['user']=="")
{
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>
    <div>
    <form method="POST">   
<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
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
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="login.php"><h6 style="font-size:22px">Log in</h6><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php"><h6 style="font-size:22px">Sign up</h6><span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>

        
        <div class="dropdown dropleft mx-2">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
            <img src="images/account.png" alt="account">
          </button>
          <div class="dropdown-menu " style="<?php if($_SESSION['user']=="admin"){echo "width:300px;height:160px;";} else{echo "width:300px;height:120px;";}?>">
          <!-- style="width:300px;height:120px;" -->
            <div class="row mx-2">
              <div class="col-2"><img src="images/manage_account.png" alt="account"></div>
              <div class="col-10"><button type="submit" name="acc" value="account" class="btn dropdown-item float-end"><h6>Manage Account</h6></button></div>
            </div>
            <div class="row mx-2" style="display:<?php if($_SESSION['user']!="admin"){echo "none";}?>">
              <div class="col-2"><img src="images/dashboard.png" ></div>
              <div class="col-10" ><button type="submit" name="dash" value="Dashboard" class="btn dropdown-item float-end"><h6>Dashboard</h6></button></div>
            </div>
            <div class="row mx-2">
              <div class="col-2"><img src="images/logout.png" ></div>
              <div class="col-10"><button type="submit" name="logout" value="Logout" class="btn dropdown-item float-end"><h6>Logout</h6></button></div>
            </div>
            
          </div>
        </div>
      </nav>
      </form>
    </div>
</body>
</html>
<?php
 if(isset($_POST['logout']))
 {
 	  session_unset();
 	  session_destroy();
?>
<script>
  window.location.href='login.php';
</script>
<?php
 }
?>
<?php
if(isset($_POST['acc']))
 {
?>
<script>
  window.location.href='manage_usr.php';
</script>
<?php
 }
?>
<?php
if(isset($_POST['dash']))
 {
?>
<script>
  window.location.href='admin/index.php';
</script>
<?php
 }
?>