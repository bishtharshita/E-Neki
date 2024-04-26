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

$sql = "SELECT * FROM `doner` WHERE `doner_emailid`='$user'";
$result=$conn->query($sql);


if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        // echo '<div class="container">
        // <div class="card">
        // <h1>Doner Profile:-</h1>
        // <h2>Name: '.$row["doner_name"].'<h2>
        // <h2>Mobile no: '.$row["doner_mobno"].'<h2>
        // <h2>Emailid: '.$row["doner_emailid"].'<h2>
        // <h2>Address:-</h2>
        // <h2>House no: '.$row["doner_house_no"].'<h2>
        // <h2>Locality: '.$row["doner_locality"].'<h2>
        // <h2>Landmark: '.$row["doner_landmark"].'<h2>
        // <h2>Pincode: '.$row["doner_pincode"].'<h2>
        // <h2>City: '.$row["doner_city"].'<h2>
        // <h2>State: '.$row["doner_state"].'<h2>
        // </div>
        // </div>';

       

        echo '<div class="container">
        <h2> UPDATE PROFILE </h2>
        <form action="doner_profileUpdate.php" method="post">
            <div class="first">
                <div class="wrap">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Name" class="name" name="name" value='.$row["doner_name"].'>
                </div>

                <div class="wrap">
                    <i class="fa fa-phone-square"></i>
                    <input type="tel" placeholder="Mobile Number" class="name" name="mno" value='.$row["doner_mobno"].'>
                </div>

                <div class="wrap">
                    <i class="fa fa-envelope email"></i>
                    <input type="email" placeholder=" Email" class="name" name="email" value='.$row["doner_emailid"].'>
                </div>

                
            </div>

            <div class="wrap3">

                <div class="wrap2">
                    <legend> <b> Address <b></legend>
                    <input type="text" placeholder="House No" name="hno" value='.$row["doner_house_no"].'>
                    <input type="text" placeholder="Locality/street" name="loc" value='.$row["doner_locality"].'>
                    <div class="wrap1">
                        <input type="text" placeholder="Landmark" name="land" value='.$row["doner_landmark"].'>
                        <input type="text" placeholder="Pincode" name="pin" value='.$row["doner_pincode"].'>
                    </div>

                    <div class="wrap1">
                        <input type="text" placeholder="City" name="city" value='.$row["doner_city"].'>
                        <input type="text" placeholder="State" name="state" value='.$row["doner_state"].'>
                    </div>
                </div>

            </div>

            <div class="wra">
            <center>
                <input type="submit" id="submit" class="button" value="UPDATE">
            </center>
            </div>

        </form>
        </div>';
    }
    
}

?>


<!DOCTYPE html>

<head>
    <title> E-NEKI</title>
    <link rel="stylesheet" type="text/css" href="donersignin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="x-icon" href="fmf.jpg.png">

</head>

<!-- <body>
    <div id="nav">
        <ul>
            <div id="logo"><img src="fmf.jpg.png" alt="logo" height="60" width="100">

            </div>
            <li><a href="needy login.html"> NEEDY LOGIN</a></li>
            <li><a href="needy signin.html"> NEEDY SIGNUP</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="final.html">HOME</a></li>
        </ul>
    </div> 

    <div class="container">
        <h2> UPDATE PROFILE </h2>
        <form action="doner_signup.php" method="post">
            <div class="first">
                <div class="wrap">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder=" Name" class="name" name="name">
                </div>

                <div class="wrap">
                    <i class="fa fa-phone-square"></i>
                    <input type="tel" placeholder="Mobile Number" class="name" name="mno">
                </div>

                <div class="wrap">
                    <i class="fa fa-envelope email"></i>
                    <input type="email" placeholder=" Email" class="name" name="email">
                </div>

                <div class="wrap">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" placeholder="Password" class="name" name="password">
                </div>

                <div class="wrap">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" placeholder="Confirm Password" class="name" name="cpassword">
                </div>
            </div>

            <div class="wrap3">

                <div class="wrap2">
                    <legend> <b> Address <b></legend>
                    <input type="text" placeholder="House No" name="hno">
                    <input type="text" placeholder="Locality/street" name="loc">
                    <div class="wrap1">
                        <input type="text" placeholder="Landmark" name="land">
                        <input type="text" placeholder="Pincode" name="pin">
                    </div>

                    <div class="wrap1">
                        <input type="text" placeholder="City" name="city">
                        <input type="text" placeholder="State" name="state">
                    </div>
                </div>

            </div>

            <div class="wra">
            <center>
                <input type="submit" id="submit" class="button" value="UPDATE">
            </center>
            </div>

        </form>
    </div>
</body> -->

</html>