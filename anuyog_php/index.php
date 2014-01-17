<?php
# phpinfo();
$name =anuyog;
if(ctype_alpha($name))
echo "YES";
$array0=array(anuyog,0,1,5.88585125454456741,3,2);
echo similar_text(anuyog,anu);
//print_r ($array0);
sort($array0);
print_r ($array0);echo "<br>";
echo "<br>Size of Array0 =",sizeof($array0);//sizeof() inbuilt array function
$x=array_pop($array0);//array_pop()
echo "<br>popped : ",$x;
print_r($array0);
array_push($array0,Chauhan);//array_push()
print_r($array0);
echo "<br>Array Shift =",array_shift($array0);

print_r($array0);
array_unshift($array0,Anuyog);//array_unshift()
print_r($array0);
foreach($array0 as $arrayElement)
{
	echo "<br>",$arrayElement;
}
print "<br>$name";
echo "<br>$name";
print "<br>";
print gettype($array0);
echo "<br>",$array[0];
$array=array("zero"=>"anuyog","one"=>"90","two"=>43,"three"=>"xyz");
array_reverse($array);
echo "Array Reverse .... <br>";
print_r($array);
echo "Array Flip<br>";
array_flip($array);
print_r($array);
print_r (array_keys($array));
foreach($array as $arrayP=>$arrayelement)
{
	echo "<br>",$arrayP=$arrayelement;
}
echo "<br>";
$array1=array(
				array(a,b,c),
				$array

				);
//print $array1[0][0];
echo 'Random 2D Array',"<br>";
print ($array1[1][array_rand($array)]);
echo "<br>Associative array...<br>";
sort($array1[1]);echo "<br>";
echo "<br>Size of Array1 = ",sizeof($array1);
foreach($array1 as $ele)
{
	foreach($ele as $pos=>$arrayele)
	{
	echo "<br>",$pos=$arrayele;
	}
}
print "<br>";
echo"Anu","Chauhan";
$c="Yog"."Chauhan";
echo "<br>$c<br>",gettype($c);
echo "<br>",gettype($array0[0]);
echo "<br>",$array0[3]+$array1[1][2],"<br>",$array0[0];
$d=1/2;
print $d;
if($name<11)
echo "<br>",Yes,"<br>";
else
echo "<br>",No,"<br>";
switch($name)
{
	case 100 : echo integer;break;
	case "anuyog" : echo string;break;
	default : echo "default";break;
}
echo "<br>",($name==100)?"name is 100":"Otherwise";
$name=5;
while($name>=0)
{
echo "<br>",$name;
$name--;
}
$name=anuyog;
do
{
	echo "<br>",$name;
	
}while($name!=anuyog);
for($x=1;$x<=10;$x++)
{echo "<br>",$x*2;
if($x==5)
continue;
echo $x;
}
echo "<br>Function Starts ...................";
function flag($n=AnuyogChauhan)
{	global $c;
echo "<br>$n",$c;
}
flag();
?>