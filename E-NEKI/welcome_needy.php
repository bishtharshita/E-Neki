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

$sql = "SELECT * FROM `needy` WHERE `needy_emailid`='$user'";
$result=$conn->query($sql);


if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        echo '<div class="container">
        <div class="card">
        <h1>Needy Profile:-</h1>
        <h2>Name: '.$row["needy_name"].'<h2>
        <h2>Mobile no: '.$row["needy_mobno"].'<h2>
        <h2>Emailid: '.$row["needy_emailid"].'<h2>
        <h2>Address:-</h2>
        <h2>House no: '.$row["needy_house_no"].'<h2>
        <h2>Locality: '.$row["needy_locality"].'<h2>
        <h2>Landmark: '.$row["needy_landmark"].'<h2>
        <h2>Pincode: '.$row["needy_pincode"].'<h2>
        <h2>City: '.$row["needy_city"].'<h2>
        <h2>State: '.$row["needy_state"].'<h2>
        </div>
        </div>';
    }
}

?>
<html>
<body>
<head>
<style>
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  
}

.card {
  border-style: solid;
  border-width: 5px;
  /*border-color: green;*/  
  padding: 20px;
  background-color: rgb(137, 230, 230);
  box-shadow: 5px 5px 10px gray;
  
  
}
.btn{
  background-color: rgb(137, 230, 230);
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  font-weight:bold;
  
}

</style>
</head>
<form action="needy_logout.php" method="post"> 
<center>
<input type="submit" value="Logout" class="btn">
</center>
</form>
</body>
</html>