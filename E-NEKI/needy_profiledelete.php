<?php
// Start the session and get the data
require_once "dbconnect.php";
session_start();
$user=$_SESSION['username'];
if(isset($_SESSION['username'])){
    //echo "Welcome 🙏🏻 doner ". $_SESSION['username'];
    
    
}

else{
    echo "not ok";
}

$sql = "DELETE FROM `needy` WHERE `needy_emailid`='$user'";
$sql2 = "DELETE FROM `cart` WHERE `emailid`='$user'";
$sql3 = "DELETE FROM `orders` WHERE `emailid`='$user'";
$result=$conn->query($sql);
$result2=$conn->query($sql2);
$result3=$conn->query($sql3);
if($result===TRUE && $result2===TRUE && $result3===TRUE)
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
