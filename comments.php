<?php
$con = mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('votingsystem', $con);

$sql=("INSERT INTO comment
VALUES
('$_POST[id]','$_POST[comment]') ");

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }


header("Location:comment_successful.php");
mysql_close($con);
?> 