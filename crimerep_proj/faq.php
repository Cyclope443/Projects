<?php include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faq Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>
<?php include('home.php') ?>
    <div class="container mb-2">
        <h1 align="center" style="font-family:Trebuchet MS;">Online Crime Reporting FAQ's</h1>
        <div class="card">
            <div class="card-header">
                FAQ's
            </div>
            <div class="card-body">
            <?php
                $query = "SELECT * FROM faqs";
                $query_run=mysqli_query($conn,$query);
                
                if($query_run)
                {
                    
                    foreach($query_run as $f)
                            {
                        ///echo $f['question'];
                        
            ?>
                <blockquote class="blockquote mb-0">
                <p><?= $f['question']; ?></p>
                <footer class="blockquote-footer"><?= $f['answer']; ?><cite title="Source Title"></cite></footer>
                </blockquote></br>
            <?php
                        }
                    }
            ?>
            </div>
        </div>

    </div>
</body>
</html>
<?php include('footer.php') ?>