<html>
<head>
<style>
body{background-image: url('calc4.jpg');}
.wrapper{
			position: relative;
			width: 500px;
			height: 100%;
			margin: 0 auto;
			padding: 10px;
		}
.wrapper .head{
				width: 500px;
				height: 100px;
				background-color: #f9f9f9;
				border-bottom: 2px solid #e5e5e5;
				border-top: 2px solid #e5e5e5;
			}
.wrapper .head .leftlogo{
							float: left;
						
						}
.wrapper .head .rightlogo{
							float: right;
						}
 .text{
		float:left;
		font: 81.25% lucida console, helvetica, sans-serif;
		color: #333;
		line-height: 4;
		margin: 0 35;
		font-size:30;
		font-style:normal;
		
	}
.calc_box{
			width: 400px;
			height: 400px;
			background-color:#f9f9f9;
			border: 1px solid #e5e5e5;
			border-radius: 4px;
			margin: 50 55;
		}
.calc_box .box{
				width:200px;
				height:250px;
				margin: 60 auto;
				font-family: 'Advent Pro', sans-serif;
			}
input{
		margin: 10 auto;width=300;
	}
#size_textbox{
				width: 249px;
			}
#submitbutton{
						border: 2px groove ;
						border-radius: 3px;
						background-color: #f1f1f1;
						font-family: lucida console, sans-serif;
					}
		
</style>


</head>

<body>
	<div class="wrapper">
		<div class="head">
			<div class="leftlogo">
			<img  height=100px src="calc1.png">
			</div>
			<div class="text">
				Calculator
			</div>
			<div class="rightlogo">
			<img height=100px src="clac3.png">
			</div>
		</div>
		<form action="" method="post">
		<div class="calc_box">
			<div class="box">
				Operand 1:<br>
				<input type="text" name="op1">
				Operator :<br>
				<input type=text name="op">
				Operand 2:<br>
				<input type=text name="op2">
				<?php
				if(isset($_POST['sub']))
				{
				$op1=$_POST['op1'];
				$optr=$_POST['op'];
				$op2=$_POST['op2'];
				$flag=0;
				$eq="=" ;
				switch($optr)
				{
					case "+":$x=$op1+$op2;
							break;
					case "-":$x=$op1-$op2;
							break;
					case "*":$x=$op1*$op2;
							break;
					case "/":$x=$op1/$op2;
							break;
					default: $flag=1;break;
				}
				}
				?>
				<br>Result :<br>
				<input id="size_textbox" type=text name="result" value= "<?php if($flag==0)echo "$op1 $optr $op2 $eq $x";else echo "<--Undefined Operator-->"; ?>">
				<input id="submitbutton" type=submit name="sub" value="Calculate">
				<input id="submitbutton" type=reset name="rst" value="Reset">
			</div>
		</div>
		</form>
	</div>
</body>
</html>