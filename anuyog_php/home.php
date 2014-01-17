<?php
session_start();
if(isset($_POST['logout']))
{
	session_destroy();
	unset($_SESSION['user']);
	header('location:login.php');
	
}
else if(!empty($_SESSION['user'])&& !isset($_POST['logout']))
{
?>

<html>
	<head>
	<link rel="stylesheet" href="home_style.css" type="text/css" media="screen">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
		$('.abc').hide();
		$('#nav ul li').mouseover(function(){
		
		$('.abc').show();
		})
		});
	
	</script>
	</head>
<body >
	<div class="button">
	<form action="#" method="post">
	<input type=submit name="logout" value="Logout">
	</form>
	</div>
	
	
	<ul class="nav">
      <li><a href="#" title="Home">Home</a>
	  <div class="abc">
		<ul >
			<li><a href="#">Menu 1</a></li>
			<li><a href="#">Menu 2</a></li>
			<li><a href="#">Menu 3</a></li>
			<li><a href="#">Menu 4</a></li>
		</ul>
		</div>
		</li>	
      <li><a href="#" title="Blog" class="active">Blog</a>
	  <div class="abc">
		<ul >
			<li><a href="#">Menu 1</a></li>
			<li><a href="#">Menu 2</a></li>
			<li><a href="#">Menu 3</a></li>
			<li><a href="#">Menu 4</a></li>
		</ul>
		</div>
		</li>
      <li><a href="#" title="About">About</a>
	  <div class="abc">
		<ul >
			<li><a href="#">Menu 1</a></li>
			<li><a href="#">Menu 2</a></li>
			<li><a href="#">Menu 3</a></li>
			<li><a href="#">Menu 4</a></li>
		</ul>
		</div>
		</li>
      <li><a href="#" title="Register">Register</a>
	  <div class="abc">
		<ul >
			<li><a href="#">Menu 1</a></li>
			<li><a href="#">Menu 2</a></li>
			<li><a href="#">Menu 3</a></li>
			<li><a href="#">Menu 4</a></li>
		</ul>
		</div>
		</li>
      <li><a href="#" title="Contact">Contact</a>
	  <div class="abc">
	  <ul>
			<li><a href="#">Menu 1</a></li>
			<li><a href="#">Menu 2</a></li>
			<li><a href="#">Menu 3</a></li>
			<li><a href="#">Menu 4</a></li>
		</ul>
		</div>
		</li>
   </ul>


</body>
</html>
<?php
session_start();
}
else if(empty($_SESSION['user']))
{
	header('location:login.php');
}
?>

