<?php

$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("votingsystem",$con) or die ('Error()');

$id=$_POST['id'];
$FName=$_POST['fname'];
$LName=$_POST['lname'];
$idno=$_POST['sid'];
$Pos=$_POST['pos'];

$sqlfn="UPDATE voting SET FirstName='$FName' WHERE id='$id' ";
$result =mysql_query($sqlfn) or die("error");
$sqlln="UPDATE voting SET  LastName='$LName' WHERE id='$id' ";
$result =mysql_query($sqlln) or die("error");
$sqlid="UPDATE voting SET IdNo='$idno' WHERE id='$id' ";
$result =mysql_query($sqlid) or die("error");
$sqlpos="UPDATE voting SET Position='$Pos' WHERE id='$id' ";
$result =mysql_query($sqlpos) or die("error");

//
//if (!mysql_query($sql,$con))
//  {
//  die('Error: ' . mysql_error());
//  }


header("Location:adminpage.php");
mysql_close($con);
?> 

