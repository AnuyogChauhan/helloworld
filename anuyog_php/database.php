<?php
mysql_connect('localhost','root','') or die("cannot connect");
mysql_select_db('signup') or die ("cannot connect");
$uname=anuyog93;
$sql="SELECT `First Name` from info WHERE username='$uname'";
$sql1="SELECT username as u,password as p,DOB as d,`First Name` as fn,`Last Name`as l from info";
$sql2="UPDATE users set password='jablu' where id=1";
$res=mysql_query($sql);
/*

while($r=mysql_fetch_array($res,MYSQL_ASSOC))
{
	echo '<table border=2><tr><td>'.$r['fn'].'</td><td>'.$r['l'].'</td><td>'.$r['u'].'</td><td>'.$r['p'].'</td><td>'.$r['d'].'</td></tr></table>';
}
*/
echo mysql_num_rows($res);
/*
$list=mysql_list_dbs();


print_r($db);	
while($db=mysql_fetch_row($list))
{echo "database found:".$db[0];
echo "<br>";
}


$n=mysql_result($res,0);
echo "$n<br>";
//var_dump($res);

*/
if($res)
{
echo "<script>alert('Information updated')</script>";
}
else echo "NO";

?>