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
  <div id="bodyarea">
    <p>&nbsp;</p>
  </div>
  <div id="footer" style="margin-left:150px">
    <p>&nbsp;</p>
    
  <div id="text">
<h1 align="center" style="color:#0F3"><blink>VOTE WISELY</blink></h1>

 <div class="panel" id="gallery" align="center">
                   <ul class="portfolio_list"</ul>
                    <h2>Voting Process</h2> 
                    <div>
                    <form name="Vform" action="votecalc.php" method="post" onsubmit="return validate(this)">
                    <table>
                    <tr>
                    <td>
                    <p>President</p>
                    <p>
                    <?php
						

								// connect to the database
								$connect = mysql_connect("localhost","root","");
								$dbase = mysql_select_db("votingsystem",$connect);
								if(!$connect){
								echo"error";
								}	
								// get results from database
								$result = mysql_query("SELECT * FROM `voting` WHERE `Position`='Chairperson'") 
										or die(mysql_error()); 
								echo "<table>";
								echo "<tr>";
								echo '<td>Choose Here:</td>';
								echo '<td><select id ="president" name ="president">';		
								while($row = mysql_fetch_array( $result )) {
									echo '<option value ="'. $row['LastName'] . '">'. $row['LastName'] . '</option>' ;										
								}
								echo "</select></td>";
								echo "</tr>";		
								// close table>
								echo "</table>";
						?>
                    </p>
                    </td>
                    <td>
                    <p>Vice Chairperson</p>
                    <p>
                    <?php
						

								// connect to the database
								$connect = mysql_connect("localhost","root","");
								$dbase = mysql_select_db("votingsystem",$connect);
								if(!$connect){
								echo"error";
								}	
								// get results from database
								$result = mysql_query("SELECT * FROM `voting` WHERE `Position`='Vice Chairperson'") 
										or die(mysql_error()); 
								echo "<table>";
								echo "<tr>";
								echo '<td>Choose Here:</td>';
								echo '<td><select id ="vpres" name ="vpres">';		
								while($row = mysql_fetch_array( $result )) {
									echo '<option value ="'. $row['LastName'] . '">'. $row['LastName'] . '</option>' ;										
								}
								echo "</select></td>";
								echo "</tr>";		
								// close table>
								echo "</table>";
						?>
                    </p>
                    </td>
                    <tr>
                    <td>
                    <p>Treasurer</p>
                    <p>
                    <?php
						

								// connect to the database
								$connect = mysql_connect("localhost","root","");
								$dbase = mysql_select_db("votingsystem",$connect);
								if(!$connect){
								echo"error";
								}	
								// get results from database
								$result = mysql_query("SELECT * FROM `voting` WHERE `Position`='Treasurer'") 
										or die(mysql_error()); 
								echo "<table>";
								echo "<tr>";
								echo '<td>Choose Here:</td>';
								echo '<td><select id ="treash" name ="treash">';		
								while($row = mysql_fetch_array( $result )) {
									echo '<option value ="'. $row['LastName'] . '">'. $row['LastName'] . '</option>' ;										
								}
								echo "</select></td>";
								echo "</tr>";		
								// close table>
								echo "</table>";
						?>
                    </p>
                    </td>
                    <td>
                    <p>Secretary</p>
                    <p>
                    <?php
						

								// connect to the database
								$connect = mysql_connect("localhost","root","");
								$dbase = mysql_select_db("votinsystem",$connect);
								if(!$connect){
								echo"error";
								}	
								// get results from database
								$result = mysql_query("SELECT * FROM `voting` WHERE `Position`='Secretary'") 
										or die(mysql_error()); 
								echo "<table>";
								echo "<tr>";
								echo '<td>Choose Here:</td>';
								echo '<td><select id ="sec" name ="sec">';		
								while($row = mysql_fetch_array( $result )) {
									echo '<option value ="'. $row['LastName'] . '">'. $row['LastName'] . '</option>' ;										
								}
								echo "</select></td>";
								echo "</tr>";		
								// close table>
								echo "</table>";
						?>
                    </p>
                    </td>
                    </tr>
                    </table>
                    <input type="submit" value="Vote" id="submit" name="submit"/> 
                    </form>
                    </div>
                  </div>
                  <!-- end of gallery -->
                  
                
                       
                       </div>
                      
				
            	</div>
			</div>
</table>
</form>
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
