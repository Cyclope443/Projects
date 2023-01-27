<?php
session_start();
require 'connection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Complaint Edit</title>
  </head>
  <body>
    <div class="container mt-5">
    <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    
                        <h4 align="center">Edit Account </h4> 
                    </div>
                    <div class="card-body">


                    <?php
						$user=$_SESSION['user'];

						if($_SESSION['user'])
                        {
                            $usr_id=mysqli_real_escape_string($conn,$user);
                            $query= "SELECT * FROM users WHERE uname ='$usr_id'";

                            $query_run=mysqli_query($conn,$query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $usr=mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="usr_id" value="<?= $user;?>">
                                    
                                    
									<div class="row col-4 ">
                                        <b>Enter Old Password : </b>
										<input type="password" name="password"  placeholder="Enter Old Password" class="form-control"> 
                                        <input type="hidden" name="pass" value="<?= $usr['password']; ?>" placeholder="Register Id" class="form-control">      
                                    </div>
									<br>
									<div class="row">
                                        <div class="col-4">
                                            <b>New Password :</b><br>
                                            <input type="password" name="n_pass" id="n_pass" placeholder="Enter New Password" class="form-control">
                                        </div>
                                        <div class="col-4">
                                            <b>Confirm New Password :</b><br>
                                            <input type="password" name="c_pass" id="c_pass" placeholder="Confirm New Password"  class="form-control">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row card-footer">
                                            <button type="submit" name="update_usr_pass" id="button" class="btn btn-primary float-right">Update</button>
                                            <a href="manage_usr.php" class="btn btn-danger float-right mx-2">BACK</a>
                                    </div> 

                                    <script>
										document.querySelector('#button').onclick = function(){
											var password = document.querySelector('#n_pass').value,
											    confirmPassword = document.querySelector('#c_pass').value;
											if(password == ""){
												alert("Field cannot be empty.");
											}
											else if(password != confirmPassword){
												alert("Password didn't match try again.");
												return false
											}
										}
									</script>
                                </form>
                                <?php

                            }
                            else
                            {
                                echo "<h5>No Such Id Found  </h5>";
                            }
                        }
                        ?>
                         
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    
  </body>
</html>