<?php 
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crime Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
</head>
<body>
<?php include 'home.php' ?>
    <div class="container my-2 mb-2">
    <form method="POST" enctype="multipart/form-data">
        <div class="card">
		    <div class="card-header">
			    <h4 align="center">Crime Registration</h4>
		    </div>
		    <div class="card-body">
                <div  class=" row mb-3">
                    <div class="col-4">	
                        <label for="crime"><h6>Crime Type : </h6></label>
                        <select name="crime">
                        <option value="Murder">Murder</option>
                        <option value="Robbery">Robbery</option>
                        <option value="Abusement">Abusement</option>
                        <option value="Accident">Accident</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3 ">
                    <div class="col-4">
                        <h6>Criminal Name :</h6><input type="text" name="crimname" placeholder="Full name" class="form-control" required>
                    </div>
                    <div class="mx-3">
                        <p><h6>Gender:</p>
                        <input type="radio" id="male" name="gender" value="Male" checked="checked">
                        <label for="male" >Male</label>
                        <input type="radio" id="female" name="gender" value="Female">
                        <label for="female">Female</label>
                        <input type="radio" id="trans" name="gender" value="Transgender">
                        <label for="trans">Transgender</label>
                    </div>   
                </div>
                <div class="col-4 row mb-3 ">
                    <h6>Victim/Testimonial Name :</h6><input type="text" name="victname" placeholder="Full name" class="form-control" required>
                </div>
                <div class=" row mb-3 ">
                    <div  class="col-4 mt-3">	
                        <label for="state"><h6>State : </h6></label>
                        <select name="state">
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Goa">Goa</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Delhi">Delhi</option>
                        </select>
                    </div>
                    <div class="col-6 ">
                        <h6>Location of Incident : </h6><input type="text" name="location" placeholder="Location" class="form-control" required>
                    </div>
                </div>
                <div class=" row col-4 mb-2">
                    <h6>Officer Incharge :</h6><input type="text" name="officinch" placeholder="Full Name" class="form-control" required>
                </div>
                <div class="col-4 row mb-3">
                    <h6>Date :</h6><input type="date" name="date" placeholder="" class="form-control" required>
                </div>
                <div class=" row mb-3">
                    <div class="col-6">
                        <h6>Description :</h6><textarea name="desc" id="" cols="50" rows="5" class="form-control" required></textarea>
                    </div>
                    <div class="col-6">
                        <h6>Evidence : </h6><br><input type="file" name="evidence" class="form-control">
                    </div>
                </div>
            </div>
            
            <div class="card-footer">
                <div class="row mb-3" >
                    <input type="submit" name="sub" value="Register" class="btn btn-success mr-3">
                    <input type="reset" name="res" value="Reset" class="btn btn-info">
                </div>
            </div>
        </div>              
        </form>         
    </div>

<?php include('footer.php') ?>
</body>
</html>

<?php

if(isset($_POST['sub']))
{
	$crime =$_POST['crime'];
	$crim_name =$_POST['crimname'];
	$gender =$_POST['gender'];
	$vict_name =$_POST['victname'];
	$state=$_POST['state'];
	$location =$_POST['location'];
	$offic_inch =$_POST['officinch'];
    $date =$_POST['date'];
    $desc =$_POST['desc'];
    $evidence = $_FILES['evidence']['name'];
	$temp_name= $_FILES['evidence']['tmp_name'];
	$loc = 'evidence/';

	$ins_query = "INSERT INTO crime_rep (Crime_Done,Criminal_Name,Gender,VictimTestimonial_Name,State,Location,Officer_Incharge,Date,Description,Evidence,Status) VALUES ('$crime','$crim_name','$gender','$vict_name','$state','$location','$offic_inch','$date','$desc','$evidence','Pending')";

	$res = mysqli_query($conn,$ins_query);

    if(move_uploaded_file($temp_name, $loc.$evidence))
	{
		echo "<div class='alert alert-success md-4 col-md-4 mx-auto'>Document uploaded successfully</div>";
	}
	else
	{
			echo "<div class='alert alert-danger md-4 col-md-4 mx-auto'>Error</div>";
	}

	if($res)
	{
		echo '<div class="alert alert-success" role="alert">Crime Registered Sucessfully!</div>';
	}
	else
	{
		echo "Error";
	}
}

?>
