<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
	<title>Image Slider</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Image Slider" />
	<meta name="keywords" content="Slider, css, image_slide_up" />
	<link rel="stylesheet" type="text/css" href="slide_style.css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Finger+Paint' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Caesar+Dressing' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
	<script src="_js/jquery-1.7.2.min.js"></script>
	<script src="_js/jquery.easing.1.3.js"></script>
	<script src="_js/jquery.color.js"></script>
	<script src="_js/jquery-ui.js"></script>
	<script>
	$(document).ready(function(){
	var flag=1;
	//$('.wrapper #demo').draggable({axis:"x",revert: true,containment: ".wrapper",scroll: false});
	$('.original,#disp,.disp2,#box-slider,.input-box,#msg').hide();
	$('.wrapper #logo').draggable({axis:"x",revert: true,containment: ".wrapper",scroll: false,
	drag: function(event,ui){
								if(ui.position.left>440)
								{
									$('.wrapper,#bg').fadeOut(700);
									$('.original,#disp').delay(700).fadeIn(500);
								}
		
							},
	stop: function(event,ui){
	
								$(this).animate(
									{
										left: '0px'
									},400);
							
							}
	
	
	
	
	});//end of draggable
	$('#login-logo a').click(function(){
	switch(flag)
	{
		case 1:
		var newimg=new Image();
		newimg.src="images/close.png";
		$('#login-box').slideDown(900);
		$('#sign img').attr('src',newimg.src);
		flag=2;
		break;
		
		case 2:
		var newimg=new Image();
		newimg.src="images/open.png";
		$('#login-box').slideUp(500);
		$('#sign img').attr('src',newimg.src);
		flag=1;
		break;
				
	
	
	}
	
	
	
	});//end of click
	$('.next a').click(function(){
	$('.original,#disp').fadeOut(700);
	$('.disp2').delay(1000).fadeIn(500);
	$('#box-slider').delay(1500).slideDown(500,'easeOutBounce');
	
	});//end of click
	$('#box-slider a').click(function(){
	$('#box-slider').slideUp(400,'easeOutBack');
	$('.input-box').delay(1000).slideDown(500);
	
	});//end of click
	$('.input-box form').submit(function(e){
	e.preventDefault();
	var str=$('input:text[name=txt]').val();
	$('#msg').html('<p>'+str+'</p>');
	$('#msg').fadeIn(500);
	
	});//end of submit
	});
	
	</script>
	</head>
	<body>
	<div id="bg">
	<img class="stretch" src="images/apple5.jpg">
	</div>
	<div class="wrapper">
		<div id="logo">
		<img width=146 height=98 src="images/arrow.png">
		</div>
		<div id="text">
		<h2>Slide to Unlock</h2>
		</div>
	</div>
	<div id="disp">
	<div class="original">
	<img  height=100% style="margin:0;overflow-x: hidden;" src="images/bg11.jpg" />
	</div>
	<div id="app">
	STEP : 1
	
	</div>
	<form id="form" action="#" method="post">
	<div id="form-box">
	<table>
	<tr>
	<td>
	Name 
	</td>
	<td>
	<input type=text name="nme">
	</td>
	</tr>
	<tr>
	<td>
	Mobile No.
	</td>
	<td>
	<input type=text name="mob">
	</td>
	</tr>
	<tr>
	<td>
	Email ID
	</td>
	<td>
	<input type=text name="emal">
	</td>
	</tr>
	</table>
	</div>
	<div id="button">
	<input type=submit name="sub" value="Submit"><input type=reset name="reset" value="Reset">
	</div>
	</form>
	<div id="login-logo">
		<a href="#"><img width=400 height=40 src="images/img13.png">
		Login</a><div id="sign"><img width=16 height=16 src="images/open.png"></div>
	</div>
	<div id="login-text">
	<div id="login-box">
	<form action="#" method="post">
		<table>
			<tr>
			<td>Mobile No.</td>
			<td><input type=text name="mob"></td>
			</tr>
			<tr>
			<td>Password</td>
			<td><input type=password name="pass" ></td>
			</tr>
		
		
		</table>
	<div id="login-button">
	<input type=submit name="sub" value="Login"><input type=reset name="reset" value="Reset">
	</div>
	</form>
	</div>
	
	</div>
	<div class="next">
		<a href="#"><p>=><p></a>
	</div>
	</div>
	<div class="disp2">
		<div class="next2">
		<img height=100% width=100% src="images/bg.jpg">
		</div>
		<div id="box-slider">
			<div id="demo">
				<div id="box-text">
				Welcome to the world of chatting...<br><br>
				Click Next..
				</div>
			</div>
			<div id="next-button">
			<a href="#">NEXT..<a>
			</div>
		</div>
		<div id="msg"></div>
		<div class="input-box">
		
		<form action="#" method="get">
		
		<input type=text name="txt" ><input type=submit name="sub" value="Post">
		
		</form>
		</div>
	</div>
	</body>




</html>