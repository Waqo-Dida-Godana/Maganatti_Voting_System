 <?php

$Mary = $_POST['Mary'];
$Sheldon = $_POST['Sheldon'];
$Rajesh = $_POST['Rajesh'];
$Penny = $_POST['Penny'];
$Selina = $_POST['Selina'];
$Pirlo = $_POST['Pirlo '];
$Howard = $_POST['Howard'];
$Warlowates = $_POST['Warlowates'];
$Didier = $_POST['Didier'];
$Tergat = $_POST['Tergat'];

if ($Mary && $Sheldon && $Rajesh && $Penny && $Selina && $Pirlo && $Howard && $Warlowates && $Didier && $Tergat)
{

$connect=mysql_connect("localhost","root","") or die ("couldn't connect!");

mysql_select_db("voting") or die ("couldn't find db");

$query = mysql_query("SELECT * FROM vote WHERE Mary='$Mary'");

$numrows = mysql_num_rows($query);

if ($numrows!=0)
{

while ($row = mysql_fetch_assoc($query))
{
  
   $dbMary = $row['Mary'];
   $dbSheldon = $row['Sheldon'];
   $dbRajesh = $row['Rajesh'];
   $dbPenny = $row['Penny'];
   $dbSelina = $row['Selina'];
   $dbPirlo = $row['Pirlo '];
   $dbHoward = $row['Howard'];
   $dbWarlowates = $row['Warlowates'];
   $dbDidier = $row['Didier'];
   $dbTergat = $row['Tergat'];
}
if ($Mary==$dbMary&&$Sheldon==$dbSheldon&&$Rajesh==$dbRajesh&&$Penny==$dbPenny&&$Selina==$dbSelina&&$Pirlo==$dbPirlo&&$Howard==$dbHoward&&$Warlowates==$dbWarlowates&&$Didier==$dbDidier&&$Tergat==$dbTergat)
{
    echo "THANKYOU FOR VOTING!";
}
else 
    echo "PLEASE FILL IN ALL THE BLANKS";
}
else
   die("That user doesn't exist!");

}
else 
   die ("please enter username and password!");
?>