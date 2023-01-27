<?php
//session_start();
require 'connection.php';
?>
<?php include('home.php')?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title> View Complaint</title>
  </head>
  <body>
    <div class="container mt-5">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 align="center">View Complaint </h4> 
                    </div>
                    <div class="card-body">


                        <?php
                        if($_GET['id'])

                        {
                            $crime_id=mysqli_real_escape_string($conn,$_GET['id']);
                            $query= "SELECT * FROM crime_rep WHERE Id ='$crime_id'";

                            $query_run=mysqli_query($conn,$query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $crime_rep=mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="crime_id" value="<?= $crime_id;?>">
                                    
                                    <div class="row">
                                        <div class="col-4">
                                            <b>Crime Type:</b>
                                            <input type="text" value="<?= $crime_rep['Crime_Done']; ?>" placeholder="Enter Crime" name="crime" disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <b>Criminal Name :</b>
                                            <input type="text" value="<?= $crime_rep['Criminal_Name']; ?>" placeholder="Full Name" name="crim_name" disabled>
                                        </div>
                                        <div class="col-4">
                                            <b>Gender :</b>
                                            <input type="text" value="<?= $crime_rep['Gender']; ?>" placeholder="Gender" name="gender" disabled>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-4">
                                            <b>Victim/Testimonial Name :</b><input type="text"  name="victname" value="<?= $crime_rep['VictimTestimonial_Name']; ?>" placeholder="Full Name" disabled>
                                        </div>
                                        <div class="col-4">
                                            <b>State :</b>
                                            <input type="text" value="<?= $crime_rep['State']; ?>" placeholder="State" name="state" disabled>
                                        </div>
                                    </div>
                                    <div class="row col-8 ">
                                        <b>Location of Incident : </b>
                                        <input type="text" name="location" value="<?= $crime_rep['Location']; ?>" placeholder="Location" class="form-control" disabled >      
                                    </div>
                                    
                                    <div class=" row ">
                                        <div class="col-4">
                                            <b>Officer Incharge :</b>
                                            <input type="text" name="officinch" value="<?= $crime_rep['Officer_Incharge']; ?>" placeholder="Full Name" class="form-control" disabled>
                                        </div>
                                        
                                        <div class="col-4 mb-3">
                                            <b>Date :</b>
                                            <input type="date" name="date" value="<?= $crime_rep['Date']; ?>" placeholder="" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class=" row mb-3">
                                        <div class="col-6">
                                            <b>Description :</b>
                                            <textarea name="desc" cols="50" rows="5" name="desc" class="form-control" disabled><?= $crime_rep['Description']; ?></textarea>
                                        </div>
                                        <div class="col-6">
                                            <b>Evidence :</b> <br>
                                            <img src='evidence/<?= $crime_rep['Evidence'];?>' height=80  width=120 class='img-thumbnail' >
                                        </div>

                                    </div>
                                    <div class="row mb-3 mx-5">
                                        <div class="col-3">
                                            <b>Status :</b>
                                            <input type="text" name="status" value="<?= $crime_rep['Status']; ?>" placeholder="" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="row card-footer">
                                            <a href="crimes.php" class="btn btn-danger float-right px-4">BACK</a>
                                    </div>    
                                    
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
<?php include('footer.php') ?>