<?php
include "dbconnect.php";
session_start();
$user=$_SESSION['user'];
if(isset($_SESSION['user'])){
    //echo "Welcome 🙏🏻 doner ". $_SESSION['user'];
    
    
}

else{
    echo "not ok";
}
$items=$_POST["items"];
$size=$_POST["size"];
$quantity=$_POST["quantity"];
$image = $_FILES['image']['name'];
$image_tmp_name = $_FILES['image']['tmp_name'];
$image_folder = 'images/'.$image;

$sql="UPDATE `products_admin` SET `item_qty`=`item_qty`+$quantity WHERE `item_name`='$items' AND `item_size`='$size'";
$sql2="INSERT INTO `donation`(`emailid`, `item_name`, `item_size`, `item_qty`,`image`) VALUES ('$user','$items','$size','$quantity','$image')";
move_uploaded_file($image_tmp_name, $image_folder);
$result=mysqli_query($conn,$sql);
$result2=mysqli_query($conn,$sql2);
if($result===TRUE && $result2===TRUE)
{
    echo ' <div class="alert alert-success 
            alert-dismissible fade show" role="alert">
            <strong>Thank You for Donating Our Agent will Collect the Items from your home within 7 working days!</strong><br> 
            <strong>Check Donations Section for Donated Items</strong> 
           </div>';
    echo '<center>
           <button class="btn btn-primary" type="button">
           
           <a href="show_donation.php" style="color:white; text-decoration:none">Go to Donations</a>
         </button>
    </center>'; 

}
else
{
    echo "Failed";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=
    "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity=
    "sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
            crossorigin="anonymous">
    <title>Donation</title>
</head>
<body>
    
</body>
</html>