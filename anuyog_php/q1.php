<?php
$y=6;
if($y<5)
$flag=0;
elseif($y>5)
$flag=1;
else
$flag=2;
switch($flag)
{
	case 1 : for($x=1;$x<=10;$x++)
			{echo "<br>","5*$x=",$x*5;}
			break;
	case 0: echo 5*5;
			break;
	case 2: echo 5*5*5;
			break;
	default : echo "Wrong Input";
}
?>