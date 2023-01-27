<?php 
include "connection.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Feedback</title>
  </head>
  <body>
  <?php include 'home.php' ?>
    <div class="container mt-5">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 align="center">Feedback Form</h3> 
                    </div>

                    <?php
                        $user=$_SESSION['user'];

                        
                    ?>
                    <form action="code.php" method="POST">
                    <div class="card-body">
                    <div align="center" style="background-color:#cdffcd" class="py-3">
                        <input type="hidden" name="usr_id" value="<?= $user;?>">
                        <h4>We value your feedback !</h4>
                        <h5>Please complete the following form and help us improve our customer experience.</h5>
                    </div><br>
                    <Label><h5>Your overall satisfaction with this app.</h5></label><br>
                    <label>
                        <input type="radio" name="editList" value="Very Good"/>&nbspVery Good
                    </label>&nbsp&nbsp&nbsp&nbsp
                    <label>
                        <input type="radio" name="editList" value="Good"/>&nbspGood
                    </label>&nbsp&nbsp&nbsp&nbsp
                    <label>
                        <input type="radio" name="editList" value="Fair"/>&nbspFair
                    </label>&nbsp&nbsp&nbsp&nbsp
                    <label>
                        <input type="radio" name="editList" value="Poor"/>&nbspPoor
                    </label>&nbsp&nbsp&nbsp&nbsp
                    <label>
                        <input type="radio" name="editList" value="Very Poor"/>&nbspVery Poor
                    </label>
                    <div class="mb-3"><br>
                        <label><h5>Describe your feedback. Tell us how we can improve.</h5></label>
                            <textarea name="feedback" cols="30" rows="5" class="form-control"></textarea>
                    </div> 
                    </div>
                    <div class="mb-3 card-footer">
                        <button type="submit" name="sub_feedback"class="btn btn-primary">SUBMIT</button>
                    </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <?php include 'footer.php' ?>
  </body>
</html>