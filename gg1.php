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
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fame book</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
<?php
    $email=$_SESSION['email'] ;
	echo "$email"; ?>
	<div id="page">
		<div id="header">
			<div>
				<a href="index.html" class="logo"></a>
				<ul id="navigation">
					<li class="selected">
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="about.html">About Us</a>
					</li>
					<li class="menu">
						<a href="projects.html">Chats</a>
						<ul class="primary">
							<li>
								<a href="proj1.html">Log out</a>
							</li>
						</ul>
					</li>
					<li class="menu">
						<a href="blog.html">Blog</a>
						<ul class="secondary">
							<li>
								<a href="singlepost.html">Single post</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="body" class="home">
			
			
			
		</div>
		
			
		</div>
	</div>
	<?php
    $email=$_SESSION['email'] ;
	echo "$email"; 
	//echo "<img src='getImage.php?id=$email' width=175' height='200' />";
	
	?>
	<form action="" method="post">
	<input type="file" ID="file1" name="file1" />
	<input type="submit" ID="upload" value="upload"/>
	</form>
</body>
</html>


