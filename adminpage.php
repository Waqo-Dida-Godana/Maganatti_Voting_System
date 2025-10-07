<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>voter</title>
<style type="text/css">
body {
	width:100%;
	text-align:center;
	background: url('images/bg3.jpg');
}
</style>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<style type="text/css">
a:link {
	color: #F90;
	text-decoration: none;
}
a:visited {
	color: #F90;
	text-decoration: none;
}
a:hover {
	color: #06F;
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
#layer1{
	background: url('images/bg2.jpg');
	-moz-border-radius:5px; /* Firefox */
    border-radius:5px;
	-webkit-box-shadow: 3px 3px 3px #00FFFF; /* Safari and Chrome */
}
#logo{
	background: url('images/logo.png') center;
	background-repeat:no-repeat;
	margin-top:30px;
	padding:70px;
	
	
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper" >
  <div id="logo">
		</div>
		<div id = "layer1">
		<header id="top_header">
			<h1>ONLINE VOTING SYSTEM</h1>
			<h2>AFRICA NAZARENE UNIVERSITY STUDENT COUNCIL</h2>
		</header>
		</div>
  <div style="margin-left:270px" id="navigation">
  
    <ul id="MenuBar1" class="MenuBarHorizontal" >
      <li><a href="home.html">HOME</a></li>
      <li><a href="#" class="MenuBarItemSubmenu">VOTER</a>
        <ul>
          <li><a href="login_form.html">Login</a></li>
          <li><a href="registration1.html">Register</a></li>
        </ul>
      </li>
      <li><a class="MenuBarItemSubmenu" href="#">CANDIDATE</a>
        <ul>
          <li><a href="candidate_registration.html">Register</a></li>
        </ul>
      </li>
      <li><a href="#" class="MenuBarItemSubmenu">ADMIN</a>
        <ul>
          <li><a href="admin_login.html">Login</a></li>
        </ul>
      </li>
      <li><a href="aboutus.php">RESULTS</a></li>
      <li><a href="#">ABOUT US</a></li>
    </ul>
  </div>
  <div id="bodyarea">
    <p>&nbsp;</p>
  </div>
  <div id="footer" style="margin-left:150px">
    <p>&nbsp;</p>

	<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("votingsystem",$con);
$result=mysql_query("select * from voting");
?>
<form action="" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<table width="605" border="1" cellspacing="2" align="center" >
<tr> <td colspan="8" align="center">ELECTION PACITIPANTS</td></tr>
<?php

$con=mysql_connect("localhost","root","");
mysql_select_db("votingsystem",$con);
$result = mysql_query("SELECT * FROM voting")
or die(mysql_error());

echo "<tr>
<th><font color='Yellow'>ID</font></th>
<th><font color='Yellow'>FIRST NAME</font></th>
<th><font color='Yellow'>LAST NAME</font></th>
<th><font color='Yellow'>STUDENT NO</font></th>
<th><font color='Yellow'>POSITION</font></th>
<th><font color='Yellow'>VOTES</font></th>
<th><font color='Yellow'>EDIT</font></th>
<th><font color='Yellow'>Delete</font></th>
</tr>";

while($row = mysql_fetch_array( $result ))
{

echo "<tr>";
echo '<td><b><font color="#663300">' . $row['id'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['FirstName'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['LastName'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['IdNo'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['Position'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['Votes'] . '</font></b></td>';
echo '<td><b><font color="#663300"><a href="edit.php?id=' . $row['id'] . '">Edit</a></font></b></td>';
echo '<td><b><font color="#663300"><a href="delete.php?id=' . $row['id'] . '">Delete</a></font></b></td>';
echo "</tr>";

}
?>
</table>
<!--<form action="edit1.php" method="post">
<table border="0">
<tr>
<td>id:&nbsp;<input type="text" name="id"/></td>
<td>First name:&nbsp;<input type="text" name="fname" required/></td>
<td>Lastname:&nbsp;<input type="text" name="lname" required/></td>
<td>Studetn is:&nbsp;<input type="text" name="sid" required/></td>
<td>Position:&nbsp;<input type="text" name="pos" required/></td>
<td></td>
<td></td>
<td><input type="submit" value="Update"/>&nbsp;&nbsp;&nbsp;<input type="reset" value="Cancel"/></td>
</tr>

</table>
</form>
-->
</br>
</br>
<?php
 $con=mysql_connect("localhost","root","");
mysql_select_db("votingsystem",$con);
$result = mysql_query("SELECT * FROM `comment`")
?>

</form>
<table width="605" border="1" cellspacing="2" align="center">
	<tr>
		<th  colspan="2"><font color='Yellow'> VOTERS COMMENTS</th>
	</tr>
	<tr>
		<th> <font color="#663300">NAME</th>
		<th> <font color="#663300">COMMENTS</th>
	</tr>
<?php
$connect = mysql_connect("localhost", "root", "");

mysql_select_db("votingsystem");

$quey1="select * from comment";

$result=mysql_query($quey1) or die(mysql_error());

while($row=mysql_fetch_array($result)){

echo "<tr>";
echo "<td>" . $row['name']."</td>";
echo "<td>" . $row['comment']."</td>";
echo "</tr>";
}
?>
</table>
    <p>&nbsp;</p>
    <p>COPYRIGHT (C) 2011 MAVIN. ALL RIGHTS RESERVED</p>
  </div>
<script type="text/javascript">

var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>