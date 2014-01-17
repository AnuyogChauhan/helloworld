

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Slider</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="description" content="Animate Slider"/>
		<meta name="keywords" content="navigation,css3,jquery,slider"/>
		<link rel="stylesheet" href="animate_style.css" type="text/css" media="screen">
		<link rel="stylesheet" href="login_animate.css" type="text/css" media="screen" />
	</head>
	
	<body>
	<div id="header"></div>
	<!--<div class="h-button">
			<p>Edit Profile<p>
			<a  class="h-button-red"  href="login.php">Edit</a>
		</div>-->
	<div class="nav">
	<div class="nav_open"><a href="#">
		<div class="open">
		<a href="#"><img src="images/arrow4.jpg" width=50 height=50 alt="arrow"></a>
		</div>
	</div>
	<div id="design">
	<a href="#"><img id="left" src="images/home.jpg" width=100 height=100 alt="home"></a>
	<a href="#"><img id="left" src="images/aboutus.jpg" width=100 height=100 alt="aboutus"></a>
	<a href="#"><img id="left" src="images/departments.jpg" width=100 height=100 alt="departments"></a>
	
	<a href="#"><img id="left" src="images/contactus.jpg" width=100 height=100 alt="contact us"></a>
	</div>
	</div>
	<?php
session_start();
if(empty($_SESSION['user'])){
if(isset($_POST['submit'])){
mysql_connect('localhost','root','');
mysql_select_db('signup');
$user=$_POST['un'];
$pass=$_POST['pd'];
$epwd=$pass;
$sql_querry="SELECT `First Name` FROM info WHERE `Username`='$user' AND `password`='$pass'";
$res=mysql_query($sql_querry);
$c=mysql_num_rows($res);
if($c==0){
$err='<div class="err_class">
										<div id="cross">
											<img width=10 height=10 src="cross.jpg">
										</div>
										<div id="err_text">
											Invalid Username or Password.
										</div>
									</div>';
		}
else{
$_SESSION['user']=$user;
$_SESSION['pass']=$pass;
header('location:home_jquery.php');
}
}
}
else
{
	header('location:home_jquery.php');

}
?>
	<div id="box1">
	<a href="#"><img src="img13.png" width=500 height=40></a>
	<p style="text-align:center;font-family: lucida console, sans-serif;margin: 0px auto;font-size: 20px;">Login</p>
	<?php if(isset($err)) echo $err; ?>
	<div class="wrapper">
		<div class="wrapper-box">
		
		<form action="#" method="post" autocomplete="off">
		Username <br>
		<input class="w-effect" type=text name="un">
		<br>Password <br>
		<input class="w-effect" type=password name="pd">
		<br>
		<input class="w-effect" id="sub" type=submit name="submit" value="Submit">
		</form>
		</div>
	</div>
	
	</div>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script type="text/javascript"src="_js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="_js/jquery.color.js"></script>
	<script>
		$(document).ready(function(){
		var $c=1;var $cl=1;
		$('.nav .open a').click(
		function(){
		switch($c)
		{
		case 1:
		var closeimg=new Image();
		closeimg.src='images/arrow4r.jpg';
		$('.nav').stop().animate(
		{
			left: '0px'
		},500,
		'easeOutBack'
		);
		$('.open a img').attr('src',closeimg.src);
		
		$c=2;break;
		case 2:
		var openimg=new Image();
		openimg.src='images/arrow4.jpg';
		$('.nav').stop().animate(
		{
			left: '-150px'
		},500,
		'easeOutBack');
		$('.open a img').attr('src',openimg.src);
		$c=1;break;
		}
		
		});//end of click
		$('#design a').hover(function(){
		$(this).find('img').stop().animate(
		{
			width: '170px',
			height: '170px'
		},500,
		'easeOutBack'
		);
		},
		function(){
		$(this).find('img').stop().animate(
		{
			width: '100px',
			height: '100px',
		
		},500,
		'easeOutBack'
		);
		});//end of hover
		$('#box1 a').click(function()
			{
			switch($cl)
			{
				case 1:
						$('#box1 .wrapper').show().stop().animate(
						{
							height: '150px',
							width: '500px',
							top: '8px'
						},500);
						/*var newimg=new Image();
						newimg.src='images/uparrow.jpg';
						var nimg=$('<img syle=" top: 350px;left: 250px;"  width=50 height=50 src="'+newimg.src+'">');
						$('#box').prepend(nimg);
						nimg.show();*/
						$cl=2;
						break;
				case 2:
						$('#box1 .wrapper').hide().stop().animate(
						{
							height: '0px',
							width: '0px'
						},400,
						'easeOutBack');
						$cl=1;
						//$('#image').remove();
						break;
			}
			});
						
		});
	</script>
	</body>
</html>