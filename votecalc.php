<?php
session_start();
$email = $_SESSION['email'];
$connect = mysql_connect("localhost","root","");
$dbase = mysql_select_db("votingsystem",$connect);
if(!$connect){
echo"eror";
}
$result = mysql_query("SELECT * FROM voter_registration WHERE email ='$email'") 
								or die(mysql_error());  
								// loop through results of database query, displaying them in the table
								while($row = mysql_fetch_array( $result )) {
								
								if($row['votes'] != 'voted')
								{
								$voted= "UPDATE  voter_registration SET  votes = 'voted' WHERE email ='$email'";
				$result = mysql_query("SELECT * FROM `voting` WHERE `LastName` ='$_POST[president]'") 
								or die(mysql_error());  
								// loop through results of database query, displaying them in the table
								while($row = mysql_fetch_array( $result )) {
								
								$add = 1;
								$vote = $row['Votes'] + $add;	
								$sql= "UPDATE `voting` SET `Votes`=$vote  WHERE `LastName`='$_POST[president]'";
								mysql_query($sql,$connect);
								
				
														   }
				$result = mysql_query("SELECT * FROM `voting` WHERE `LastName` ='$_POST[vpres]'") 
								or die(mysql_error());  
								// loop through results of database query, displaying them in the table
								while($row = mysql_fetch_array( $result )) {
								
								$add = 1;
								$vote = $row['Votes'] + $add;	
								$sql= "UPDATE `voting` SET `Votes`=$vote  WHERE `LastName`='$_POST[vpres]'";
								mysql_query($sql,$connect);
								
							
														   }	
				$result = mysql_query("SELECT * FROM `voting` WHERE `LastName` ='$_POST[treash]'") 
								or die(mysql_error());  
								// loop through results of database query, displaying them in the table
								while($row = mysql_fetch_array( $result )) {
								
								$add = 1;
								$vote = $row['Votes'] + $add;	
								$sql= "UPDATE `voting` SET `Votes`=$vote  WHERE `LastName`='$_POST[treash]'";
								mysql_query($sql,$connect);
								
							
														   }
				$result = mysql_query("SELECT * FROM `voting` WHERE `LastName` ='$_POST[sec]'") 
								or die(mysql_error());  
								// loop through results of database query, displaying them in the table
								while($row = mysql_fetch_array( $result )) {
								
								$add = 1;
								$vote = $row['Votes'] + $add;	
								$sql= "UPDATE `voting` SET `Votes`=$vote  WHERE `LastName`='$_POST[sec]'";
								mysql_query($sql,$connect);
						

														   									   

								header("location: voted_successful.php");
								mysql_query($voted,$connect);
														   }
								}
								else
								{
									header("location:already_voted.php");
								}
								
								}
								mysql_close($connect);
?>
