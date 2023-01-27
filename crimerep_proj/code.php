<?php

session_start();
require 'connection.php';

if(isset($_POST['update_comp']))
{
    $crime_id = mysqli_real_escape_string($conn,$_POST['crime_id']);

    
    $desc = mysqli_real_escape_string($conn,$_POST['desc']);
    $options = mysqli_real_escape_string($conn,$_POST['options']);

    $query = "UPDATE crime_rep SET Description='$desc',Status='$options' WHERE Id='$crime_id'";

    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['message']="Status Updated sucessfully";
        header("Location: crimes.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="Status not Updated ";
        header("Location: crimes.php");
        exit(0);
    }
}



//for user

if(isset($_POST['update_usr']))
{
    $usr_id = mysqli_real_escape_string($conn,$_POST['usr_id']);
    $fname = mysqli_real_escape_string($conn,$_POST['fname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $cont = mysqli_real_escape_string($conn,$_POST['cont']);
    $state = mysqli_real_escape_string($conn,$_POST['state']);

    $query = "UPDATE users SET fname='$fname',email='$email',contact='$cont',state='$state' WHERE uname='$usr_id'";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['message']="User Details Updated sucessfully";
        header("Location: manage_usr.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="User Details not Updated ";
        header("Location: manage_usr.php");
        exit(0);
    }
}

if(isset($_POST['update_usr_pass']))
{
    $usr_id = mysqli_real_escape_string($conn,$_POST['usr_id']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $pass = mysqli_real_escape_string($conn,$_POST['pass']);
    $n_pass = mysqli_real_escape_string($conn,$_POST['n_pass']);
    $enc_pass= md5($n_pass);

    if(md5($password)==$pass){
        $query = "UPDATE users SET password='$enc_pass' WHERE uname='$usr_id'";
        $query_run = mysqli_query($conn,$query);

        if($query_run)
        {
            $_SESSION['message1']="Your Password Has Been Updated Sucessfully";
            header("Location: change_pass.php");
            exit(0);
        }
        else
        {
            $_SESSION['message']="Your Password Has Not Been Updated ";
            header("Location: change_pass.php");
            exit(0);
        }
    }
    else{
        $_SESSION['message']="User Password not Updated. Please Enter Correct Password ";
        header("Location: change_pass.php");
        exit(0);
    }
    
}


// for feedback

if(isset($_POST['sub_feedback']))
{
    $usr_id = mysqli_real_escape_string($conn,$_POST['usr_id']);
    $rating = mysqli_real_escape_string($conn,$_POST['editList']);
    $feedback = mysqli_real_escape_string($conn,$_POST['feedback']);

    $query = "INSERT INTO feedback(id,user,rating,feedback) VALUES('','$usr_id','$rating','$feedback')";

    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['message1']="Feedback submitted sucessfully";
        header("Location: feedback.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="Feedback not submitted ";
        header("Location: feedback.php");
        exit(0);
    }
}
?>