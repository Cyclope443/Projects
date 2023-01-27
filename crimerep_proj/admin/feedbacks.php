<?php include "../connection.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedbacks</title>
</head>
<body style="background: #87bbe6;background-image: linear-gradient(217deg, rgba(255,0,0,.8), rgba(255,0,0,0) 70.71%);">
<?php include 'navbar.php'?>
    <div class="page-content p-5" id="content">
        <?php include 'toggle.php'?>
        <h2 class="display-4 text-white"><b> Feedbacks</b></h2>
        <div class="separator"></div>

            <div class="mb-3 mx-5 card" >
            <?php include('message.php'); ?>
            <div class="card-header">
                <h4 style="font-family:Trebuchet MS">Feedbacks 
                </h4>
            </div>
            <div class="card-body">
            <table class="table table-bordered table-hover" align="center"  width="100%">
            <thead class="thead-light">
                <tr>
                <th>ID</th>
                <th>User</th>
                <th>Rating</th>
                <th>Feedback</th>
                <th >Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                        $query = "SELECT * FROM feedback";
                        $query_run=mysqli_query($conn,$query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $feed)
                            {

                            ?>
                            <tr>
                                <td><?= $feed['id']; ?></td>
                                <td><?= $feed['user']; ?></td>
                                <td><?= $feed['rating']; ?></td>
                                <td><textarea name="" id="" cols="60" rows="5" disabled><?= $feed['feedback']; ?></textarea></td>
                                <td>
                                    <a href="edit_feedback.php?id=<?= $feed['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                    
                                    <form action="code.php" method="POST" class="d-inline">
                                    <button type="submit" name="feed_delete" value="<?=$feed['id'];?>"class="btn btn-danger btn-sm">Delete</button>
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