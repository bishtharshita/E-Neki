<?php
// Start the session and get the data
require_once "dbconnect.php";
session_start();
$user=$_SESSION['user'];
if(isset($_SESSION['user'])){
    //echo "Welcome 🙏🏻 doner ". $_SESSION['user'];
    
    
}

else{
    echo "not ok";
}

$sql = "DELETE FROM `doner` WHERE `doner_emailid`='$user'";
$sql2 = "DELETE FROM `donation` WHERE `emailid`='$user'";
$result=$conn->query($sql);
$result2=$conn->query($sql2);
if($result===TRUE && $result2===TRUE)
{
    echo "<h1 style='color:red; text-align:center'>Account Deleted Successfully</h1>";
    echo "<h1 style='text-align:center'>Loading...</h1>";
    header('Refresh: 2; URL=final.html');
    
}
else
{
    echo "Failed";
}
?>
