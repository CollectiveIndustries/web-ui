<?php 
include 'include/function.php';
//include 'include/mysql.php';
include 'include/pagesetup.php';


$tf='0';
$si='0';

//Determines if "Register" will show on the linking menu or not
reg($tf)
{
	if($tf='1')
	{	
		$register='';
	}
	if($tf='0')
	{
		$register='Register';
	}
}

sign($si)
{
	if($si='1')
	{
		$signin=$uname;
	}
	if($si='1')
	{
		$signin='Sign In';
	}
}

?>