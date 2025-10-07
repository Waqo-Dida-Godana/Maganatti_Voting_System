<?php
$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('votingsystem', $con);

$sql=("INSERT INTO voter_registration (fname,lname,studentid,email,password,gender)
VALUES
('$_POST[First_Name]','$_POST[Last_Name]','$_POST[sid]','$_POST[Email]','$_POST[Password]','$_POST[Gender]') ");

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }


header("Location:login_form.html");
mysql_close($con);
?> 