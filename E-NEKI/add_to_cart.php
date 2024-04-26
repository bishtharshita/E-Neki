<?php
include 'dbconnect.php';
// include 'logout.php';
session_start();
$user_id = $_SESSION['username'];
$items = $_POST['items'];
$size = $_POST['size'];
$quantity = $_POST['quantity'];


if (isset($_POST['add_to_cart'])) {

   $items = $_POST['items'];
   $size = $_POST['size'];
   $quantity = $_POST['quantity'];

   $sql="SELECT `item_qty` FROM `products` WHERE `item_name`='$items' AND `item_size`='$size'";
   $result=$conn->query($sql);


    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $qtyy=$row['item_qty'];
        }
    }
     
    if($qtyy>0)
    {
        $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE `item_name` = '$items' AND `emailid` = '$user_id' AND `item_size`='$size'") or die('query failed  1');
        

  
        if (mysqli_num_rows($select_cart) >0) {
            //mysqli_query($conn, "UPDATE `cart` SET `item_qty` = $quantity  WHERE `item_name` = '$items' AND `emailid` = '$user_id' AND `item_size`='$size'") or die('query failed 2');
            //$message[] = 'Cart Updated Successfully!';
            echo "<h1 style='color:red; text-align:center'>Already Added!</h1>";
            echo "<h1 style='text-align:center'>Loading...</h1>";
            header('Refresh: 2; URL=needy_category.html');
            // $message[] = 'Product already added to cart!';
   } else {
      
    mysqli_query($conn, "INSERT INTO `cart`(`emailid`, `item_name`, `item_size`, `item_qty`) VALUES('$user_id', '$items', '$size', $quantity)") or die('query failed');
    //mysqli_query($conn,"UPDATE `products` SET `item_qty`=`item_qty`-$quantity WHERE `item_name`='$items' AND `item_size`='$size'");
    //$message[] = 'product added to cart!';
    echo "<h1 style='color:green; text-align:center'>Product Added to Cart!</h1>";
    echo "<h1 style='text-align:center'>Loading...</h1>";
    header('Refresh: 2; URL=needy_category.html');
      
   }

    }
    else
    {
        echo "<h1 style='color:red; text-align:center'>Out of Stock</h1>";
        echo "<h1 style='text-align:center'>Loading...</h1>";
        header('Refresh: 2; URL=needy_category.html');
    }


   
}
?>