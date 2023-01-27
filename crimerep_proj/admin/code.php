<?php

session_start();
require '../connection.php';


//for complaints
if(isset($_POST['update_comp']))
{
    $crime_id = mysqli_real_escape_string($conn,$_POST['crime_id']);

    $crime = mysqli_real_escape_string($conn,$_POST['crime']);
    $crim_name = mysqli_real_escape_string($conn,$_POST['crim_name']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $vict_name = mysqli_real_escape_string($conn,$_POST['victname']);
    $state = mysqli_real_escape_string($conn,$_POST['state']);
    $location = mysqli_real_escape_string($conn,$_POST['location']);
    $officinch = mysqli_real_escape_string($conn,$_POST['officinch']);
    $date = mysqli_real_escape_string($conn,$_POST['date']);
    $desc = mysqli_real_escape_string($conn,$_POST['desc']);
    $options = mysqli_real_escape_string($conn,$_POST['options']);
    $imgdoc = mysqli_real_escape_string($conn,$_POST['imgdoc']);
    unlink("../evidence/".$imgdoc);
    $evidence = $_FILES['evidence']['name'];
    $temp_name= $_FILES['evidence']['tmp_name'];
    $loc = '../evidence/';

    $query = "UPDATE crime_rep SET Crime_Done='$crime', Criminal_Name='$crim_name',Gender='$gender',VictimTestimonial_Name='$vict_name',State='$state',Location='$location',Officer_Incharge='$officinch',Date='$date',Description='$desc',Evidence='$evidence',Status='$options' WHERE Id='$crime_id'";

    $query_run = mysqli_query($conn,$query);

    if(move_uploaded_file($temp_name, $loc.$evidence))
	{
        
		echo "<div class='alert alert-success md-4 col-md-4 mx-auto'>Document uploaded successfully</div>";
	}
	else
	{
			echo "<div class='alert alert-danger md-4 col-md-4 mx-auto'>Error</div>";
	}

    if($query_run)
    {
        $_SESSION['message']="Complaint Updated sucessfully";
        header("Location: complaints.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="Complaint not Updated ";
        header("Location: complaints.php");
        exit(0);
    }
}

if(isset($_POST['complaint_delete']))
{
    $crime_id = mysqli_real_escape_string($conn,$_POST['complaint_delete']);
    $imgdoc = mysqli_real_escape_string($conn,$_POST['imgdoc']);
    $query= "DELETE FROM crime_rep WHERE Id='$crime_id'";

    $query_run= mysqli_query($conn,$query);

    if($query_run)
    {
        unlink("../evidence/".$imgdoc);
        $_SESSION['message']="Complaint Deleted Sucessfully";
        header("Location: complaints.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="Complaint not Deleted ";
        header("Location: complaints.php");
        exit(0);
    }
}



//for users

if(isset($_POST['update_usrs']))
{
    $usr_id = mysqli_real_escape_string($conn,$_POST['usr_id']);

    $uname = mysqli_real_escape_string($conn,$_POST['uname']);
    $fname = mysqli_real_escape_string($conn,$_POST['fname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $cont = mysqli_real_escape_string($conn,$_POST['cont']);
    $state = mysqli_real_escape_string($conn,$_POST['state']);
    $regid = mysqli_real_escape_string($conn,$_POST['regid']);
    $imgdoc = mysqli_real_escape_string($conn,$_POST['imgdoc']);
    unlink("../document/".$imgdoc);
    $iddoc = $_FILES['iddoc']['name'];
    $temp_name= $_FILES['iddoc']['tmp_name'];
    $loc = '../document/';


    $query = "UPDATE users SET  fname='$fname',uname='$uname',email='$email',contact='$cont',state='$state',regid='$regid',iddocname='$iddoc' WHERE id='$usr_id'";

    $query_run = mysqli_query($conn,$query);

    if(move_uploaded_file($temp_name, $loc.$iddoc))
	{
        
		echo "<div class='alert alert-success md-4 col-md-4 mx-auto'>Document uploaded successfully</div>";
	}
	else
	{
			echo "<div class='alert alert-danger md-4 col-md-4 mx-auto'>Error</div>";
	}

    if($query_run)
    {
        $_SESSION['message']="User Details Updated sucessfully";
        header("Location: users.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="User Details not Updated ";
        header("Location: users.php");
        exit(0);
    }
}

if(isset($_POST['user_delete']))
{
    $usr_id = mysqli_real_escape_string($conn,$_POST['user_delete']);
    $imgdoc = mysqli_real_escape_string($conn,$_POST['imgdoc']);
    $query= "DELETE FROM users WHERE id='$usr_id'";

    $query_run= mysqli_query($conn,$query);

    if($query_run)
    {
        unlink("../document/".$imgdoc);
        $_SESSION['message']="Complaint Deleted Sucessfully";
        header("Location: users.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="Complaint not Deleted ";
        header("Location: users.php");
        exit(0);
    }
}

// for faq

if(isset($_POST['save_faq']))
{
    $question = mysqli_real_escape_string($conn,$_POST['question']);
    $answer = mysqli_real_escape_string($conn,$_POST['answer']);

    $query = "INSERT INTO faqs(id,question,answer) VALUES('','$question','$answer')";

    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['message']="FAQ added sucessfully";
        header("Location: faqs.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="FAQ not added ";
        header("Location: faqs.php");
        exit(0);
    }
}


if(isset($_POST['edit_faq']))
{
    $faq_id = mysqli_real_escape_string($conn,$_POST['faq_id']);

    $question = mysqli_real_escape_string($conn,$_POST['question']);
    $answer = mysqli_real_escape_string($conn,$_POST['answer']);

    $query = "UPDATE faqs SET question='$question', answer='$answer' WHERE id='$faq_id'";

    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['message']="FAQ updated sucessfully";
        header("Location: faqs.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="FAQ not Updated ";
        header("Location: faqs.php");
        exit(0);
    }
}

if(isset($_POST['faq_delete']))
{
    $faq_id = mysqli_real_escape_string($conn,$_POST['faq_delete']);
    $query= "DELETE FROM faqs WHERE id='$faq_id'";

    $query_run= mysqli_query($conn,$query);

    if($query_run)
    {

        $_SESSION['message']="FAQ Deleted Sucessfully";
        header("Location: faqs.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="FAQ not Deleted ";
        header("Location: faqs.php");
        exit(0);
    }
}




// for feedback

if(isset($_POST['edit_feed']))
{
    $feed_id = mysqli_real_escape_string($conn,$_POST['feed_id']);

    $user = mysqli_real_escape_string($conn,$_POST['user']);
    $rating = mysqli_real_escape_string($conn,$_POST['rating']);
    $feedback = mysqli_real_escape_string($conn,$_POST['feed']);

    $query = "UPDATE feedback SET user='$user', rating='$rating', feedback='$feedback' WHERE id='$feed_id'";

    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['message']="Feedback updated sucessfully";
        header("Location: feedbacks.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="Feedback not Updated ";
        header("Location: feedbacks.php");
        exit(0);
    }
}

if(isset($_POST['feed_delete']))
{
    $feed_id = mysqli_real_escape_string($conn,$_POST['feed_delete']);
    $query= "DELETE FROM feedback WHERE id='$feed_id'";

    $query_run= mysqli_query($conn,$query);

    if($query_run)
    {

        $_SESSION['message']="Feedback Deleted Sucessfully";
        header("Location: feedbacks.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="Feedback not Deleted ";
        header("Location: feedbacks.php");
        exit(0);
    }
}
?>