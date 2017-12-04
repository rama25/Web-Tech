<?php
    include("database/db_conection.php");
	extract($_GET);
	$st =1;
	$check_email_query="select * from users WHERE user_email='$email'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "Email-id already registered";
}
	else
		echo "";
	?>