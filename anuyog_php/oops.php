<?php
class abc
{
	var $name="Anuyog";
	 function __construct()
	{
		echo $this->name;
		
	}
	function abc()
	{
		echo "<br>","Constructor using same name";
	}
}
/*class def extends abc
{
	function def()
	{	#abc::out();
		echo $this->name,'is in derived class';
	}
}*/
//echo "<br>",abc::$name;
$obj=new abc();
#$obj1->out();
#echo $obj1->name;
//echo abc::out();
?>
<?php
$name=Anuyog;
echo "$name";
?>