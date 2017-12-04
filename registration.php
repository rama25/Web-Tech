
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Registration</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;

</style>
<body>
<h2>Successfuly registered</h2>
<center><b></b> <br></b><a href="login.php">Login here</a></center>
</body>
<?php

include("database/db_conection.php");//make connection here
if(isset($_POST['register']))
{
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.
    $user_pass=$_POST['pass'];//same
    $user_email=$_POST['email'];//same
    $user_phone=$_POST['phone'];//same
    $user_address=$_POST['address'];//same


    if($user_name=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the name')</script>";
exit();//this use if first is not work then other will not show
    }

    if($user_pass=='')
    {
        echo"<script>alert('Please enter the password')</script>";
exit();
    }

    if($user_email=='')
    {
        echo"<script>alert('Please enter the email')</script>";
    exit();
    }
     if($user_phone=='')
    {
        echo"<script>alert('Please enter the phone_no')</script>";
exit();
    }

    if($user_address=='')
    {
        echo"<script>alert('Please enter the address')</script>";
    exit();
    }
//here query check weather if user already registered so can't register again.
  //  $check_email_query="select * from users WHERE user_email='$user_email'";
    //$run_query=mysqli_query($dbcon,$check_email_query);

    //if(mysqli_num_rows($run_query)>0)
    //{
//echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
//exit();
  //  }
//insert the user into the database.
    $insert_user="insert into users (user_name,user_pass,user_email,Phone_no,Address) VALUE ('$user_name','$user_pass','$user_email','$user_phone','$user_address')";
    mysqli_query($dbcon,$insert_user);
    //{
      //  echo"<script>window.open('welcome.php','_self')</script>";
    //}

}

?>