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
<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<style type="text/css">
</head>




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
  <div id="bodyarea" align="center">
    <p>&nbsp;</p>
  </div>
  <div id="footer" style="margin-left:150px" align="center">
    <p>&nbsp;</p>
    
  	<article>
					<p>
					<?php
							

									// connect to the database
									$connect = mysql_connect("localhost","root","");
									$dbase = mysql_select_db("votingsystem",$connect);
									if(!$connect){
									echo"eror";
									}	

									// get results from database
									$result = mysql_query("SELECT * FROM voting WHERE Position ='Chairperson'") 
											or die(mysql_error());  
											
									echo '<script type="text/javascript">';
									echo "google.load('visualization', '1.0', {'packages':['corechart']});";
									echo 'google.setOnLoadCallback(drawChart);';
									echo 'function drawChart() {';
									echo 'var data = new google.visualization.DataTable();';
									echo "data.addColumn('string', 'Topping');";
									echo "data.addColumn('number', 'Slices');";
									
									// loop through results of database query, displaying them in the table
									while($row = mysql_fetch_array( $result )) {
											
											// echo out the contents of each row into a table
											echo "data.addRows([['". $row['FirstName'] ."',". $row['Votes'] ."]]);";
											
									} 
									echo "var options = {'title':'Chairperson','width':400,'height':300};";
									echo "var chart = new google.visualization.PieChart(document.getElementById('chart_div4'));";
									echo 'chart.draw(data, options);';
									echo '}';
									echo'</script>';
							?>

					</p>
					 
					<!--Div that will hold the pie chart-->
					<div id="chart_div4"></div>
				</article>
				
				
				
				 	<article>
					<p>
					<?php
							

									// connect to the database
									$connect = mysql_connect("localhost","root","");
									$dbase = mysql_select_db("votingsystem",$connect);
									if(!$connect){
									echo"eror";
									}	

									// get results from database
									$result = mysql_query("SELECT * FROM voting WHERE Position ='Vice Chairperson'") 
											or die(mysql_error());  
											
									echo '<script type="text/javascript">';
									echo "google.load('visualization', '1.0', {'packages':['corechart']});";
									echo 'google.setOnLoadCallback(drawChart);';
									echo 'function drawChart() {';
									echo 'var data = new google.visualization.DataTable();';
									echo "data.addColumn('string', 'Topping');";
									echo "data.addColumn('number', 'Slices');";
									
									// loop through results of database query, displaying them in the table
									while($row = mysql_fetch_array( $result )) {
											
											// echo out the contents of each row into a table
											echo "data.addRows([['". $row['FirstName'] ."',". $row['Votes'] ."]]);";
											
									} 
									echo "var options = {'title':'Vice Chairperson','width':400,'height':300};";
									echo "var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));";
									echo 'chart.draw(data, options);';
									echo '}';
									echo'</script>';
							?>

					</p>
					 
					<!--Div that will hold the pie chart-->
					<div id="chart_div1"></div>
				</article>
				
				
								<article>
					<p>
					<?php
							

									// connect to the database
									$connect = mysql_connect("localhost","root","");
									$dbase = mysql_select_db("votingsystem",$connect);
									if(!$connect){
									echo"eror";
									}	

									// get results from database
									$result = mysql_query("SELECT * FROM voting WHERE Position ='Secretary'") 
											or die(mysql_error());  
											
									echo '<script type="text/javascript">';
									echo "google.load('visualization', '1.0', {'packages':['corechart']});";
									echo 'google.setOnLoadCallback(drawChart);';
									echo 'function drawChart() {';
									echo 'var data = new google.visualization.DataTable();';
									echo "data.addColumn('string', 'Topping');";
									echo "data.addColumn('number', 'Slices');";
									
									// loop through results of database query, displaying them in the table
									while($row = mysql_fetch_array( $result )) {
											
											// echo out the contents of each row into a table
											echo "data.addRows([['". $row['FirstName'] ."',". $row['Votes'] ."]]);";
											
									} 
									echo "var options = {'title':'Secretary','width':400,'height':300};";
									echo "var chart = new google.visualization.PieChart(document.getElementById('chart_div3'));";
									echo 'chart.draw(data, options);';
									echo '}';
									echo'</script>';
							?>

					</p>
					 
					<!--Div that will hold the pie chart-->
					<div id="chart_div3"></div>
				</article>
					<article>
					<p>
					<?php
							

									// connect to the database
									$connect = mysql_connect("localhost","root","");
									$dbase = mysql_select_db("votingsystem",$connect);
									if(!$connect){
									echo"eror";
									}	

									// get results from database
									$result = mysql_query("SELECT * FROM voting WHERE Position ='Treasurer'") 
											or die(mysql_error());  
											
									echo '<script type="text/javascript">';
									echo "google.load('visualization', '1.0', {'packages':['corechart']});";
									echo 'google.setOnLoadCallback(drawChart);';
									echo 'function drawChart() {';
									echo 'var data = new google.visualization.DataTable();';
									echo "data.addColumn('string', 'Topping');";
									echo "data.addColumn('number', 'Slices');";
									
									// loop through results of database query, displaying them in the table
									while($row = mysql_fetch_array( $result )) {
											
											// echo out the contents of each row into a table
											echo "data.addRows([['". $row['FirstName'] ."',". $row['Votes'] ."]]);";
											
									} 
									echo "var options = {'title':'Treasurer','width':400,'height':300};";
									echo "var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));";
									echo 'chart.draw(data, options);';
									echo '}';
									echo'</script>';
							?>

					</p>
					 
					<!--Div that will hold the pie chart-->
					<div id="chart_div2"></div>
				</article		
				
</div>
</div>
</div>
    <p>&nbsp;</p>
    <p>COPYRIGHT (C) 2011 MAVIN. ALL RIGHTS RESERVED</p>
  </div>
<script type="text/javascript">

var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
