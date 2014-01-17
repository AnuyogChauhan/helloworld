<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link rel="stylesheet" href="home_jquery_style.css" type="text/css" media="screen">
	<style>
	 ul.menu {margin-top: 10px;margin-left: 45px;}
	</style>
</head>

<body>
<div class="header">
	<div class="logo">
	<img width=664 height=150 src="images/logo1.png">
	</div>
	
</div>

<ul class="menu">
	<li>
		<a href="#">
		<img src="images/home.jpg">
		<span class="active"></span>
		<span class="wrap">
		<span class="link">Home</span>
		<span class="below">Have a look</span>
		</span>
		</a>
	</li>
	<li>
		<a href="#">
		<img src="images/aboutus.jpg">
		<span class="active"></span>
		<span class="wrap">
		<span class="link">About us</span>
		<span class="below">Get to know us</span>
		</span>
		</a>
		<div class="box">
							<a href="#">History</a>
							<a href="#">Goals</a>
							<a href="#">Image Gallery</a>
		</div>
	</li>
	<li>
		<a href="#">
		<img src="images/departments.jpg">
		<span class="active"></span>
		<span class="wrap">
		<span class="link">Departments</span>
		<span class="below">Go for it</span>
		</span>
		</a>
		<div class="box">
							<a href="#">Computer Science</a>
							<a href="#">Electronics and Communication</a>
							<a href="#">Information Technology</a>
		</div>
	</li>
	<li>
		<a href="#">
		<img src="images/academics.jpg">
		<span class="active"></span>
		<span class="wrap">
		<span class="link">Academics</span>
		<span class="below">We make the future</span>
		</span>
		</a>
	</li>
	<li>
		<a href="#">
		<img src="images/placement.jpg">
		<span class="active"></span>
		<span class="wrap">
		<span class="link">Placement</span>
		<span class="below">Companies believe us</span>
		</span>
		</a>
	</li>
	<li>
		<a href="#">
		<img src="images/achieve.jpg">
		<span class="active"></span>
		<span class="wrap">
		<span class="link">Achievements</span>
		<span class="below">Have me made it large?</span>
		</span>
		</a>
	</li>
	<li>
		<a href="#">
		<img src="images/contactus.jpg">
		<span class="active"></span>
		<span class="wrap">
		<span class="link">Contact us</span>
		<span class="below">Always at your door</span>
		</span>
		</a>
		<div class="box">
					<a href="#">Location</a>
				    <a href="#">Phone</a>
					<a href="#">E-Mail</a>
		</div>
	</li>
</ul>	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="_js/jquery.easing.1.3.js"></script>
	<script src="_js/jquery.color.js"></script>
	<script>
	$(document).ready(function(){
	
	$('.menu>li').bind('mouseenter',
	function(){
	var $elem=$(this);
	$elem.find('img').stop().animate(
	{
		width: '180px',
		height: '180px',
		left: '0px'
	},
	500,
	'easeOutBack'
	).andSelf().find('.wrap').stop().animate(
	{
		
		top:'140px',
		left:'0px'
	},
	500,
	'easeOutBack'
	).andSelf().find('.active').stop().animate(
	{
		height: '180px'
	},200,
	function(){
	var $sub=$elem.find('.box');
	if($sub.length)
		{
			 var left='180px';
			 if($elem.parent().children().length==$elem.index()+1)
			 
				left= '-180px';
			 
			 $sub.show().animate({'left': left},200);
			 
		}
	//$('.menu li .box').stop().animate({'left': '170px'},400);
	});
	
	}).bind('mouseleave',
	function(){
	var $elem=$(this);
	var $sub=$elem.find('.box');
	if($sub.length)
	$sub.hide().css('left','0px');
	$elem.find('.active').stop().animate({height: '0px'})
	.andSelf().find('img').stop().animate(
	{
		width: '0px',
		height: '0px',
		left: '85px'
	},
	500,
	'easeOutBack'
	).andSelf().find('.wrap').stop().animate(
	{
		top: '25px',
		left: '0px'
	},500,'easeOutBack');
	});//end of bind
	
		
		
	
	
	
	});//end of ready
	</script>
</body>
</html>