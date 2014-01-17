<?php
$d=10;
$m=12;
$y=1987;
$date=sprintf("%d-%d-%d",$m,$d,$y);
var_dump($date);
$name=array(anuyog,chauhan,27,8,1993,anuyog,8,16);
$result=print_r ($name,TRUE);
echo "<br>";
var_dump($result);
echo"<br>";
print_r($result);
print_r (array_unique($name));
echo"<br>";
print_r(array_count_values($name));
$arr=array(one=>1,two=>2,three=>3,four=>anuyog);
echo"<br>Array Slice..<br>";
print_r(array_slice($arr,1,2));
echo"<br>";
print_r($arr);
unset($value);
echo sizeof($arr);
$bar=each($arr);
print_r($bar);
reset($arr);

$arr2=array(
			array("Yogendra","Anubha","Anuyog"),
			array("Father","Mother","Child"),
			array(10,11,27),
			array(6,2,8),
			array(1964,1969,1993),
			array(10,11,27),
			array(1964,1969,1994)
			);
			/*echo"<br>";
			print_r(array_count_values($arr2));
			echo "<br>Array unique...<br>";*/
foreach($arr2 as $value)
{echo "<br>";
vprintf("%s %s %s",$value);
$x=vsprintf("%s %s %s",$value);
echo "<br> var dump starts....";
var_dump($x);

}
echo"<br>",'$arr2 is array: ',is_array($arr2);
unset($value);	
echo "<br>";print_r($value);	

function divby2(&$val,$fun)
{
		$val/=2;
}
$data=array(12,25,36,94,51,35,78,74);
array_walk($data,'divby2');
print_r($data);
if(file_exists("C:\Users\Anuyog\Documents\html\logo.png"))
echo 1;
else
echo 0;
$d=array('10-10-2011','2-17-2010','2-16-2011','1-01-2013','10-10-2012');
echo"<br>";
print_r($d);
list($month,$date,$year)=explode('-',$d[1]);
echo $month,$date,$year;
echo"<br>Checks directory...<br>";
if(is_dir('../../../xampp'))
echo YES;
else
echo NO;
echo"<br>Pathinfo...<br>";
$info=pathinfo("C:\xampp\htdocs\anuyog_php\q2.php");
printf("Directory : %s \nBase Name : %s \nExtension : %s \nFilename : %s",$info['dirname'],$info['basename'],$info['extension'],$info['filename']);
$file="index.php";
$rpath=filesize($file);
echo "<br>Size of index.php : ",$rpath/1024;
echo"<br>Determining Access and Modification times...<br>";
echo date("m-d-y g:i:sa",fileatime("q2.php")),"<br>";
echo date("m-d-y g:i:sa",filectime("q2.php")),"<br>";
echo date("m-d-y g:i:sa",filemtime("q2.php")),"<br>";
echo phpinfo();
?>
