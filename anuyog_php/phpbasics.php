<?php $date=anuyogchauhan;?>
<?php
$d=md5($date);
var_dump($d);
echo '$date=',md5($date);
?>
<?php
$str="My name is Anuyog chauhan";
printf("\nString using printf()=%0.10s",$str);
$x=0x29;
echo "<br>",gettype($x),"  $x";

?>
<?php
$abc=AnuyogChauhan;
echo "<br>",gettype($abc);
?>
<?php
$x=10;
$y=Anb;
function foo($z)
{	$capital=array(india=>delhi,maharashtra=>bombay);
	//global $x,$y;
	printf("\n%s   %s",$z.$GLOBALS["x"],$z.$GLOBALS["y"]);
	print 'This is another string.\\';
	echo "<br>","The capital of India is $capital[india]";
echo<<<ABC
	<br>Hello may name is anuyog chauhan.<br>
	I am currently pursuing Bachelor in Technology in<br>
	Computer Science and Engineering.
ABC;
}
foo(abc);
?>
