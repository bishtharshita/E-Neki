<?php
include 'dbconnect.php';
session_start();
$user_id = $_SESSION['username'];

if (!isset($user_id)) {
   header('location:needy login.html');
   exit;
}

// if (isset($_POST['add_to_cart'])) {

//    $items = $_POST['items'];
//    $size = $_POST['size'];
//    $quantity = $_POST['quantity'];

//    $select_cart = mysqli_query($conn, "SELECT * FROM `orders` WHERE `item_name` = '$items' AND `emailid` = '$user_id' AND `item_size`='$size'") or die('query failed');

//    // if (mysqli_num_rows($select_cart) > 0) {
//    //    $message[] = 'Product already added to cart!';
//    // } else {
//    //    mysqli_query($conn, "INSERT INTO `cart`(`emailid`, `item_name`, `item_size`, `item_qty`) VALUES('$user_id', '$items', '$size', '$quantity')") or die('query failed');
//    //    $message[] = 'Product added to cart!';
//    // }

// }

// if (isset($_POST['update_cart'])) {
//    $update_quantity = $_POST['cart_quantity'];
//    $update_id = $_POST['cart_id'];
//    mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
//    $message[] = 'Cart quantity updated successfully!';
// }

// if (isset($_GET['remove'])) {
//    $remove_id = $_GET['remove'];
//    mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
//    header('location:cart.php');
//    exit;
// }
  
// if (isset($_GET['delete_all'])) {
//    mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
//    header('location:cart.php');
//    exit;
// }

// if (isset($_GET['redirect']) && $_GET['redirect'] === 'true') {
//    // Perform any necessary actions before redirection

//    // Redirect to user profile page
//    header('Location: update_profile.php');
//    exit;
// }



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Orders</title>

   <!-- Custom CSS file link  -->
   <link rel="stylesheet" href="style.css">
   <link rel="icon" type="x-icon" href="fmf.jpg.png" >

</head>
<body>
   
<?php
// if (isset($message)) {
//    foreach ($message as $message) {
//       echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
//    }
// }
?>

<div class="container">

<div class="shopping-cart">

   <h1 class="heading">Orders</h1>

   <table>
      <thead>
         <th>Item Name</th>
         <th>Item Size</th>
         <th>Item Quantity</th>
         <!-- <th>Remove</th> -->
         <!-- <th>Test 2</th>
         <th>Test 3</th> -->
      </thead>
      <tbody>
      <?php
      $cart_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE `emailid` = '$user_id'") or die('query failed');
      $grand_total = 0;
      $sub_total=0;
      if (mysqli_num_rows($cart_query) > 0) {
         while ($fetch_cart = mysqli_fetch_assoc($cart_query)) {
            //$sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']);
            //$grand_total += $sub_total;
            $sub_total = ($fetch_cart['item_qty']);
            $grand_total += $sub_total;
      ?>
            <tr>
               <!-- <td><img src="uploaded_img/<?php //echo $fetch_cart['image']; ?>" height="100" alt=""></td> -->
               <form action="remove.php" method="POST" id="myform">
               <td><input type="text" name="item" value="<?php echo $fetch_cart['item_name']; ?>" class="hide" readonly></td>
               <td><input type="text" name="size" value="<?php echo $fetch_cart['item_size']; ?>" class="hide" readonly></td>
               <td><input type="text" name="qty" value="<?php echo $fetch_cart['item_qty']; ?>" class="hide" readonly></td>
                <!-- <td><?php //echo $sub_total; ?>/-</td>  -->
               <!-- <td><a href="cart.php?remove=<?php //echo $fetch_cart['id']; ?>" class="delete-btn" onclick="return confirm('Remove item from cart?');">Remove</a></td> -->
               <!-- <td><button class="delete-btn" onclick="return confirm('Remove item from cart?');">Remove</button></td> -->
               </form>
            </tr>
            
   
      <?php
         }
      } else {
         echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">No Orders</td></tr>';
      }
      ?>
      <tr class="table-bottom">
            <td colspan="2">Total Quantity:</td>
            <td><?php echo $grand_total; ?></td>
            <!-- <td><a href="deleteall.php" onclick="return confirm('Delete all from cart?');" class="delete-btn <?php //echo ($grand_total == 0) ? 'disabled' : ''; ?>">Delete All</a></td> -->
            </tr>
            </tbody>
      </table>

   <div class="cart-btn">  
      <a href="needy_category.html" class="btn  ?>">Back to Categories</a>
      <a href="cart.php"  class="btn <?php //echo ($grand_total == 0) ? 'disabled' : '' ; ?>">Go to Cart</a>
      <!-- <a href="user_profile.php?redirect=true" class="btn" >Go to User Profile</a> -->
      <!-- <a href="cart.php?delete_all" onclick="return confirm('Delete all from cart?');" class="delete-btn <?php //echo ($grand_total > 1) ? '' : 'disabled'; ?>">Delete All</a> -->

   </div>
   
  

</div>

</div>
<!-- <script>
   function test()
   {
      document.getElementById("myform").action="checkout.php";
      document.getElementById("myform").submit();
      

   }
</script> -->
</body>
</html>