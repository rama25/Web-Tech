<?php
	ob_start();
?>
	<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: login/login/login.php");//redirect to login page to secure the welcome page without login access.
}

?>

<html>
<head>
<title>User profile</title>

</head>
<body>
 <?php
                             $email=$_SESSION['email'] ;
	echo "$email"; 
	echo "<img src='getImage.php?id=$email' width=175' height='200' />";
	
	?>
	<form action="" method="post">
	<input type="file" ID="file1" name="file1" />
	<input type="submit" ID="upload" value="upload"/>
	</form>
	
	
</body>