<?php
header( "refresh:2;url=book_stall" );
include_once ("../z_db.php");
// Inialize session
session_start();
// Check, if username session is NOT set then this page will jump to login page

$todedit= mysqli_real_escape_string($con,$_GET["id"]);

$result=mysqli_query($con,"UPDATE FROM book_stall set   stalls_3x3 ='".$stalls_3x3. "' WHERE id='$toedit'");
if ($result)
{
print "<center>Registrat<br/>Redirecting in 2 seconds...</center>";
} 
else
{
print "<center>Action could not be performed, check back again<br/>Redirecting in 2 seconds...</center>";
}

?>
