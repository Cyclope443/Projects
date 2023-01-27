<?php
session_start();
require '../connection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title> View User Details</title>
  </head>
  <body>
    <div class="container mt-5">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 align="center">View User Details </h4> 
                    </div>
                    <div class="card-body">


                        <?php
                        if($_GET['id'])

                        {
                            $usr_id=mysqli_real_escape_string($conn,$_GET['id']);
                            $query= "SELECT * FROM users WHERE id ='$usr_id'";

                            $query_run=mysqli_query($conn,$query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $usr=mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="usr_id" value="<?= $usr_id;?>">
                                    
                                    <div class="row">
                                        <div class="col-4">
                                            <b>Username :</b>
                                            <input type="text" value="<?= $usr['uname']; ?>" placeholder="Enter Username" name="user_name" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-4">
                                            <b>Full Name:</b>
                                            <input type="text" value="<?= $usr['fname']; ?>" placeholder="Enter Full Name" name="fname" class="form-control" disabled>
                                        </div>
                                        <div class="col-4">
                                            <b>Email :</b><br>
                                            <input type="email" value="<?= $usr['email']; ?>" placeholder="Email" name="email" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-4">
                                            <b>Contact :</b><br>
                                            <input type="number"  name="cont" value="<?= $usr['contact']; ?>" placeholder="Contact" class="form-control" disabled>
                                        </div>
                                        <div class="col-4">
                                            <b>State :</b><br>
                                            <input type="text" value="<?= $usr['state']; ?>" placeholder="State" name="state" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row col-4 ">
                                        <b>Register ID : </b>
                                        <input type="text" name="regid" value="<?= $usr['regid']; ?>" placeholder="Register Id" class="form-control" disabled >      
                                    </div>
                                    <br>
                                    <div class=" row ">
                                        <div class="col-4">
                                            <b>ID :</b>
                                            <img src='../document/<?= $usr['iddocname'];?>' height=80  width=120 class='img-thumbnail' class="form-control" >
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row card-footer">
                                            <a href="users.php" class="btn btn-danger float-right px-4">BACK</a>
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