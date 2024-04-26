<?php
include "dbconnect.php";
session_start();
$user_id = $_SESSION['username'];

if (!isset($user_id)) {
   header('location:needy login.html');
   exit;
}

$flag=0;
$flag2=0;
$sql = mysqli_query($conn, "SELECT * FROM `cart` WHERE `emailid` = '$user_id'") or die('query failed');
if (mysqli_num_rows($sql) > 0) {
    
    while ($row = mysqli_fetch_assoc($sql)) {
        $item=$row["item_name"];
        $size=$row["item_size"];
        $qty1=$row["item_qty"];
        $sql2 = mysqli_query($conn, "SELECT * FROM `products` WHERE `item_name`='$item' AND `item_size`='$size'") or die('query failed');
        if (mysqli_num_rows($sql2) > 0) {
        
        while ($row2 = mysqli_fetch_assoc($sql2)) {
            $qty2=$row2["item_qty"];
            if($qty1<=$qty2)
            {
                
                  $flag=1;
                    
                $a = mysqli_query($conn, "INSERT INTO `orders`(`emailid`, `item_name`, `item_size`, `item_qty`) VALUES ('$user_id','$item','$size','$qty1')") or die('query failed');
                $b = mysqli_query($conn, "UPDATE `products` SET `item_qty`=`item_qty`-$qty1 WHERE `item_name`='$item' AND `item_size`='$size'") or die('query failed');
                $c = mysqli_query($conn, "DELETE FROM `cart` WHERE `emailid`='$user_id' AND `item_name`='$item' AND `item_size`='$size' AND `item_qty`='$qty1'") or die('query failed');
                
                

                
            }
            
            else
            {
                $flag2=1;
               
                
              
            }
        }
        }
        else
        {
            echo "Error 2";
        }

        
        
        

        
    }
    
    
    
    
}
else
{
    echo "Error 1";
}
if($flag==1 && $flag2==0)
{
    echo ' <div class="alert alert-success 
            alert-dismissible fade show" role="alert">
            <strong>Thank You for Ordering Collect your Items from NGO within 7 Working Days!</strong><br> 
            <strong>Check Orders Section for Ordered Items</strong> 
           </div>';
    echo '<center>
           <button class="btn btn-primary" type="button">
           
           <a href="show_orders.php" style="color:white; text-decoration:none">Go to Orders</a>
         </button>
    </center>'; 
    
    
               

}
elseif($flag==1 && $flag2==1)
{
    echo ' <div class="alert alert-success 
            alert-dismissible fade show" role="alert">
            <strong>Thank You for Ordering Collect your Items from NGO within 7 Working Days!</strong><br> 
            <strong>Check Orders Section for Ordered Items</strong> 
           </div>';

    echo ' <div class="alert alert-danger 
           alert-dismissible fade show" role="alert">
   
       <strong>Some items not ordered due to low stock or out of stock!</strong><br>
       <strong>Check Cart Section for Unordered Items</strong>
       
      </div>';
      echo '<center>
      <button class="btn btn-primary" type="button">
      
      <a href="show_orders.php" style="color:white; text-decoration:none">Go to Orders</a>
    </button>
    <button class="btn btn-primary" type="button">
       
       <a href="cart.php" style="color:white; text-decoration:none">Go to Cart</a>
     </button>
</center>'; 


    

}
elseif($flag=0 || $flag2==1)
{
    echo ' <div class="alert alert-danger 
           alert-dismissible fade show" role="alert">
   
       <strong>Some items not ordered due to low stock or out of stock!</strong><br>
       <strong>Check Cart Section for Unordered Items</strong>
       
      </div>';
     echo '<center>
       <button class="btn btn-primary" type="button">
       
       <a href="cart.php" style="color:white; text-decoration:none">Go to Cart</a>
     </button>
</center>'; 
    

}
else
{
    echo "No Items";
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
</head>
<body>
    
</body>
</html>