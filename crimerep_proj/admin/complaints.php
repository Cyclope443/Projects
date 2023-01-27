<?php include "../connection.php"; 
//session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints</title>
</head>
<body style="background: #87bbe6;background-image: linear-gradient(217deg, rgba(255,0,0,.8), rgba(255,0,0,0) 70.71%);">
<?php include 'navbar.php'?>
    <div class="page-content p-5" id="content">
        <?php include 'toggle.php'?>
        <h2 class="display-4 text-white"><b> Complaints Page</b></h2>
        <div class="separator"></div>
		<div class="container-expand-lg">

	<div class="container-expand-lg" >
	
		<div class="card-expand-lg py-2" style="width:100%;background-color:white"><h1 align="center" style="font-family:Trebuchet MS">All Complaints</h1>
        <div class="mb-3 mx-5" align="center">
        <?php include('message.php'); ?>

		<table class="table table-bordered table-hover" align="center" id="complaint-tbl" width="100%">
		<thead class="thead-light">
			<tr>
			<th>ID</th>
			<th>Crime Done</th>
			<th>Criminal Name</th>
			<th>Gender</th>
			<th>Date</th>
			<th>Status</th>
			<th style="width:22%">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
                    $query = "SELECT * FROM crime_rep";
                    $query_run=mysqli_query($conn,$query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $crime_rep)
                        {

                          ?>
                          <tr>
                            <td><?= $crime_rep['Id']; ?></td>
                            <td><?= $crime_rep['Crime_Done']; ?></td>
                            <td><?= $crime_rep['Criminal_Name']; ?></td>
                            <td><?= $crime_rep['Gender']; ?></td>
                            <td ><?= $crime_rep['Date']; ?></td>
							              <td ><?= $crime_rep['Status']; ?></td>
                            <td>
                                <a href="complaintview.php?id=<?= $crime_rep['Id']; ?>" class="btn btn-primary btn-sm">View</a>
                                <a href="complaintedit.php?id=<?= $crime_rep['Id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                
                                <form action="code.php" method="POST" class="d-inline">
                                  <input type="hidden" name="imgdoc" value="<?= $crime_rep['Evidence'];?>">
                                  <button type="submit" name="complaint_delete" value="<?=$crime_rep['Id'];?>"class="btn btn-danger btn-sm">Delete</button>
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
	</div>	
	</div>
</body>
</html>






