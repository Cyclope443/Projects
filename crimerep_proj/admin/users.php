<?php include "../connection.php"; 
//session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body style="background: #87bbe6;background-image: linear-gradient(217deg, rgba(255,0,0,.8), rgba(255,0,0,0) 70.71%);">
<?php include 'navbar.php'?>
    <div class="page-content p-5" id="content">
        <?php include 'toggle.php'?>
        <h2 class="display-4 text-white"><b> Users Page</b></h2>
        <div class="separator"></div>
		<div class="container-expand-lg">

	<div class="container-expand-lg" >
	
		<div class="card-expand-lg py-2" style="width:100%;background-color:white;"><h1 align="center" style="font-family:Trebuchet MS">All Users</h1>
        <div class="mb-3 mx-5" align="center">
        <?php include('message.php'); ?>

		<table class="table table-bordered table-hover" align="center" id="complaint-tbl" width="100%">
		<thead class="thead-light">
			<tr>
			<th>ID</th>
			<th>Full Name</th>
			<th>User Name</th>
			<th>Email</th>
			<th>Contact</th>
			<th>State</th>
			<th>Register ID</th>
			<th>ID Image</th>
			<th style="width:20%">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
                    $query = "SELECT * FROM users";
                    $query_run=mysqli_query($conn,$query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $users)
                        {
                          //echo $comp['name'];

                          ?>
                          <tr>
                            <td><?= $users['id']; ?></td>
                            <td><?= $users['fname']; ?></td>
                            <td><?= $users['uname']; ?></td>
                            <td><?= $users['email']; ?></td>
                            <td ><?= $users['contact']; ?></td>
                            <td ><?= $users['state']; ?></td>
                            <td ><?= $users['regid']; ?></td>
                            <td ><?= "<img src='../document/$users[iddocname]' height=80  width=120 class='img-thumbnail' >" ?></td>
                            <td align="center">
                                <a href="userview.php?id=<?= $users['id']; ?>" class="btn btn-primary btn-sm my-1">View</a>
                                <a href="useredit.php?id=<?= $users['id']; ?>" class="btn btn-success btn-sm my-1">Edit</a>
                                
                                <form action="code.php" method="POST" class="d-inline">
                                  <input type="hidden" name="imgdoc" value="<?= $users['iddocname'];?>">
                                  <button type="submit" name="user_delete" value="<?=$users['id'];?>"class="btn btn-danger btn-sm my-1">Delete</button>
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






