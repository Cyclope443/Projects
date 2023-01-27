<?php include "connection.php";
//session_start();
 ?>
<?php include('home.php')?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Crimes</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container-expand-lg" >
		<div class="card-expand-lg " style="width:100%;font-family:Trebuchet MS;"><h1 align="center">All Crimes</h1></div>
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
			<th style="width:12%;" >Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
                    $query = "SELECT Id,Crime_Done,Criminal_Name,Gender,Date,Status FROM crime_rep";
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
                                <a href="crimeview.php?id=<?= $crime_rep['Id']; ?>" class="btn btn-primary btn-sm">View</a>
                                <a href="crimeedit.php?id=<?= $crime_rep['Id']; ?>" class="btn btn-warning btn-sm">Edit</a>
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

</body>
</html>

<?php include('footer.php') ?>