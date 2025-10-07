<?php
include('config.php');

if (isset($_GET['id']) && is_numeric($_GET['id']))
{
$id = $_GET['id'];

$result = mysql_query("DELETE FROM voting WHERE id=$id")
or die(mysql_error());

header("Location: adminpage.php");
}
else

{
header("Location: adminpage.php");
}
?>
