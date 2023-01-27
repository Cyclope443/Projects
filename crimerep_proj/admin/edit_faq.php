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

    <title>Edit FAQ</title>
  </head>
  <body>
    <div class="container mt-5">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>FAQ Edit 
                            <a href="faqs.php" class="btn btn-danger float-right">BACK</a>
                        </h4> 
                    </div>
                    <div class="card-body">
                    <?php
                        if($_GET['id'])

                        {
                            $faq_id=mysqli_real_escape_string($conn,$_GET['id']);
                            $query= "SELECT * FROM faqs WHERE id ='$faq_id'";

                            $query_run=mysqli_query($conn,$query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $faq=mysqli_fetch_array($query_run);
                                ?>
                        <form action="code.php" method="POST">
                            <input type="hidden" name="faq_id" value="<?= $faq_id;?>">
                            <div class="mb-3">
                                <label><b>Question :</b></label>
                                <input type="text" name="question" value="<?= $faq['question']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label><b>Answer :</b></label>
                                <input type="text" name="answer" value="<?= $faq['answer']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="edit_faq"class="btn btn-primary">UPDATE</button>
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