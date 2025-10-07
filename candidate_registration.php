<?php
$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('votingsystem', $con);

$sql=("INSERT INTO voting(FirstName,LastName,IdNo,Position,Password,CPassword)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[id]','$_POST[pos]','$_POST[password]','$_POST[cpassword]') ");

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }


header("Location:successfull_registered.html");
mysql_close($con);
?> 