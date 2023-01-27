<?php include "../connection.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faqs</title>
</head>
<body style="background: #87bbe6;background-image: linear-gradient(217deg, rgba(255,0,0,.8), rgba(255,0,0,0) 70.71%);">
<?php include 'navbar.php'?>
    <div class="page-content p-5" id="content">
        <?php include 'toggle.php'?>
        <h2 class="display-4 text-white"><b> Frequently Asked Questions(FAQS)</b></h2>
        <div class="separator"></div>

            <div class="mb-3 mx-5 card" >
            <?php include('message.php'); ?>
            <div class="card-header">
                <h4 style="font-family:Trebuchet MS">FAQS 
                    <a href="add_faq.php" class="btn btn-primary float-right">ADD FAQ</a>
                </h4>
            </div>
            <div class="card-body">
            <table class="table table-bordered table-hover" align="center" id="complaint-tbl" width="100%">
            <thead class="thead-light">
                <tr>
                <th>ID</th>
                <th>Question</th>
                <th>Answer</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                        $query = "SELECT * FROM faqs";
                        $query_run=mysqli_query($conn,$query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $faq)
                            {

                            ?>
                            <tr>
                                <td><?= $faq['id']; ?></td>
                                <td><?= $faq['question']; ?></td>
                                <td><?= $faq['answer']; ?></td>
                                
                                <td>
                                    <a href="edit_faq.php?id=<?= $faq['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                    
                                    <form action="code.php" method="POST" class="d-inline">
                                    <button type="submit" name="faq_delete" value="<?=$faq['id'];?>"class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>

                            <?php
                            }
                        }
                        else
                        {
                        echo "<h5>No records found</h5>";
                        }
                    ?>
                </tbody>
                </table>
                </div>		
            </div>


        
        </div>
    
</body>
</html>