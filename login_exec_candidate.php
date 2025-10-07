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
$Sid=$_GET['sid'];
$Password=($_GET['pwd']);

$query=mysql_query("SELECT * FROM candidate_registration WHERE studentid='$Sid' AND password='$Password'") or die("wwww");

$total=mysql_num_rows($query);
if($total>0)
{
	session_start();
	$_SESSION['EmailAddress']='';
	header('location:successfull_registered.html');
}
else
{
	//die("Provide correct data");
	//Login failed
	header("location: login_failed.php");
	exit();
}
?>