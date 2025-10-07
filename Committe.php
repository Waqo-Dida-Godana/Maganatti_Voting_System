<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="images/project.css" rel="stylesheet" type="text/css">

<title>Current Projects</title>
</head>

<body>
<div id="allproject">

<div id="header">

<ul>
<li><a href="index.html">Home</a></li>
<li><a href="cdf.html">CDF</a></li>
<li><a href="projects.html">Projects</a></li>
<li><a href="about.html">AboutUs</a></li>
<li><a href="education.html"> Education</a></li>
<li><a href="contact.html">Contact Us</a></li>

</ul>
<div class="Visual"> <img src="images/flash2.png" alt="images/flash2.png" width="760" height="170" /></div> 
</div>

<div id="allcontent">
<div class="wrapper">
<div id="sidebar">

<div id="drop">
<div id="navMenu">
<ul>
<ol><a href="currentProject.html">Current Projects</a></ol>
<ol><a href="completeProject.html">Complete-Projects</a></ol>
<ol><a href="Committe.php">CDF Committee</a></ol>
<ol><a href="login1.html">Suggest Project</a></ol>
<ol><a href="cdf.html">Back</a></ol>


</ul>
</div>
</div>



</div>


<div id="text">
<h1><blink>CDF COMMITTEE</blink></h1>

<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("votingsystem",$con);
$result=mysql_query("select * from president");
?>

<table width="605" border="1" cellspacing="2" align="center">
<tr> <td colspan="4" align="center">PRESIDENT POSITION</td></tr>
<th>NO. </th><th>NAME</th><th>STUDENT NO. </th></tr>

<?php
while($row=mysql_fetch_array ($result))
{
echo "</td><td>";

echo $row['no'];

echo "</td><td>";

echo $row['name'];

echo "</td><td>";

echo $row['studentid'];
echo "</td><td>";

echo "</td><td>";

echo $row['vote'];

echo "</td></tr>";
}
mysql_free_result($result);
mysql_close($con);
?>



</table>

The numbers represent the candidates:
<table>
<tr><td>1:</td><td><input type="radio" name="radio" value="1"/></td></tr>
<tr><td>2:</td><td><input type="radio" name="radio" value="2"/></td></tr>
<tr><td></td><td><input type="submit" value="Submit"/><input type="reset" value="Reset"/></tr></table>


</div>
</div>
</div>


<div id="footer">
<div class="wrap">
<p>copyright &copy;All Rights Reserved for Kajiado CDF</p>
<p><a href="kajiado.org">www.kajiadocounty.org</a></p>

</div>
</div>
</div>
</body>
</html>
