<?php
session_start();
if(empty($_SESSION['user'])){
//if(isset($_POST['submit'])){
mysql_connect('localhost','root','');
mysql_select_db('signup');
$user=$_POST['un'];
$pass=$_POST['pd'];
$epwd=$pass;
$sql_querry="SELECT `First Name` FROM info WHERE `Username`='$user' AND `password`='$epwd'";
$res=mysql_query($sql_querry);
$c=mysql_num_rows($res);
if($c==0)
$err='<div class="err_class">
										<div id="cross">
											<img width=10 height=10 src="cross.jpg">
										</div>
										<div id="err_text">
											Invalid Username or Password.
										</div>
									</div>';
else{
$_SESSION['user']=$user;
$_SESSION['pass']=$pass;
header('location:animate.php');
}
//}
}
else
{
	header('location:animate.php');

}
?>


<html>
<head>
<link rel="stylesheet" href="login_style.css" type="text/css" media="screen" />

</head>
<body>
	<div class="head">
	<div class="box">
	<img src="img13.png">
	</div>
	</div>
	<p style="text-align:center;font-family: lucida console, sans-serif;margin: 50px auto;font-size: 40px;">Login</p>
	<div class="wrapper">
		<div class="wrapper-box">
		<?php if(isset($err)) echo $err; ?>
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
	
</body>
</html>
