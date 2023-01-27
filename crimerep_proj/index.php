<?php 
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Crime Portal</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>    
<body>
<?php include 'home.php' ?>
<div class="mx-1">


  <!-- adrotator       -->
  <div id="carouselExampleCaptions" class="carousel slide px-4" data-ride="carousel" align="center">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/3.jpg" style="height:350px;width:1200px" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/2.jpg" style="height:350px;width:1200px" class="d-block w-100" alt="...">
      </div>      
      <div class="carousel-item">
        <img src="images/1.webp" style="height:350px;width:1200px" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>
  <!-- adrotator closed -->
    <div class="container col-sm text-white my-1 px-4" style="background-image:url('images/crime_back1.jpg');width:1680px; height:600px">
    <h2 align="center" class="py-4" style="font-family:Trebuchet MS;font-size:50px"><u><b>Crime Reports Management Portal</b></u></h2>
    <p class=" my-5" align="center" style="font-family:Trebuchet MS;font-size:25px;color:">
    This project keeps the records of FIR, Criminals, and detail of victims.
    The proposed crime records management system can overcome all the limitations of the existing system. The system provides proper security and reduces the manual work. The efficiency of the police function and the effectiveness with which it tackles crime depend on what quality of information it can derive from its existing records and how fast it can have access to it. The existing system has several disadvantages and many more difficulties to work well. The proposed system tries to eliminate or reduce these difficulties up to some extent. It is proposed to centralize Information Management in Crime for the purposes of fast and efficient sharing of critical information across all Police Stations across the territory. The proposed system helps the user to work user friendly and he can easily do his jobs without time lagging.
    </p>
    </div>
</div> 
<?php include 'footer.php' ?>  
</body>
</html>