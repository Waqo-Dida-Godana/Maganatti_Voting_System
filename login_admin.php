<?php
if(!isset($_SESSION))
{
session_start();
}
if(isset($_GET['Submit']))
{
$mycurrent=$_GET['txtidnumber'];
$_SESSION['actives']=$mycurrent;

}
$link=mysql_connect("localhost","root","");
mysql_select_db("votingsystem");
$Email=$_GET['email'];
$Password=($_GET['pwd']);

$query=mysql_query("SELECT * FROM voter_registration WHERE email='$Username' AND password='$Password'") or die("wwww");

$total=mysql_num_rows($query);
if($total>0)
{
	session_start();
	$_SESSION['EmailAddress']='';
	header('location:Loginwelcome.php');
}
else
{
	die("Provide correct data");
}
?>

 










