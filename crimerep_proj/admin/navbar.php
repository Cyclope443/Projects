<?php
session_start();
if($_SESSION['user']=="")
{
    header('Location: ../login.php');
}
elseif($_SESSION['user']!="admin")
{
    header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- Vertical navbar -->
<div class="vertical-nav border border-primary" id="sidebar" style="background-color: #8F00FF;">
<!-- background-image: linear-gradient(to top, #48c6ef 0%, #6f86d6 100%); -->
  <div class="py-4 px-3 mb-4 ">
    <div class="media d-flex align-items-center">
      <img loading="lazy" src="account.png" alt="..." width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h4 class="m-0" ><a href="index.php" style="color:#00008B;">Admin</a></br><a href="../index.php"><img src="../images/home.svg" alt="account"></a></h4>
      </div>
    </div>
  </div>

  <p class=" font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

  <ul class="nav flex-column mb-0" style="background-image: linear-gradient(to top, #fff1eb 0%, #ace0f9 100%);">
    <li class="nav-item">
      <a href="complaints.php" class="nav-link text-dark ">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Complaints
            </a>
    </li>
    <li class="nav-item">
      <a href="users.php" class="nav-link text-dark">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                Users
            </a>
    </li>
    <li class="nav-item">
      <a href="faqs.php" class="nav-link text-dark">
      <i class="fa fa-question-circle mr-3 text-primary fa-fw"></i>
                FAQS
            </a>
    </li>
    <li class="nav-item">
      <a href="feedbacks.php" class="nav-link text-dark">
                <i class="fa fa-commenting mr-3 text-primary fa-fw"></i>
                Feedbacks
            </a>
    </li>
    <li class="nav-item" style="display:none">
      <a href="complaintreports.php" class="nav-link text-dark">
      <i class="fa fa-archive mr-3 text-primary fa-fw"></i>
                Complaint Reports
            </a>
    </li>
    
  </ul>
</div>
<!-- End vertical navbar -->


</body>
</html>