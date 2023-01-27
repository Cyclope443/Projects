<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background: #87bbe6;background-image: linear-gradient(217deg, rgba(255,0,0,.8), rgba(255,0,0,0) 70.71%);">
<?php include 'navbar.php'?>
<!-- Page content holder -->
<div class="page-content p-5" id="content">
  <!-- Toggle button -->
  <?php include 'toggle.php' ?>

  <!-- Demo content -->
  <h2 class="display-4 text-white">Admin Controls</h2>
  
  <div class="separator"></div>
  <h3>Welcome Admin !</h3>
  <div class="row ">
    <div class="col-lg-7">
      <p class="lead">The Managing Project right is available only to Administrators or those with delegated Admin permissions and enables you to see the plans that are being managed into the planning database from projects.  The form is launched from Main Menu - Admin - manage project Controls.
Here the administrator can see the list of plans, risk and issue registers which are providing data to the database.  Columns can be ordered to help with finding the info you want.</p>
      <p class="lead">A project administrator is a professional who organizes the necessary team members and specializes in facilitating, reporting and analyzing projects under the supervision of a project manager. This position requires great responsibility and proper time management because the job entails constant monitoring and control of all project variables. The project administrator's role is not only to ensure that the project is finished on time and on budget, but also may involve acquiring more contracts.
      </p> 
      
    </div>
  </div>

</div>
<!-- End demo content -->


</body>
</html>
