<?php
include 'dbconnect.php';
// include 'logout.php';
session_start();
$user_id = $_SESSION['username'];

if (isset($_POST['add_to_cart'])) {

   $items = $_POST['items'];
   $size = $_POST['size'];
   $quantity = $_POST['quantity'];


   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE `item_name` = '$items' AND `emailid` = '$user_id' AND `item_size`='$size'") or die('query failed');

  
   if (mysqli_num_rows($select_cart) >0) {
      mysqli_query($conn, "UPDATE `cart` SET `item_qty` = $quantity  WHERE `item_name` = '$items' AND `emailid` = '$user_id' AND `item_size`=$size") or die('query failed');
      $message[] = 'Cart Updated Successfully!';
      // $message[] = 'Product already added to cart!';
   } else {
      mysqli_query($conn, "INSERT INTO `cart`(`emailid`, `item_name`, `item_size`, `item_qty`) VALUES('$user_id', '$items', '$size', $quantity)") or die('query failed');
      $message[] = 'product added to cart!';
      
   }
}

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
// if (isset($_GET['logout'])) {
//    unset($user_id);
//    session_destroy();
//    header('location:index.php');
//    exit;
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Plant Purchase</title>

   <!-- Custom CSS file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css\navbar.css"/>
   <link rel="stylesheet" type="text/css"  href="css\footer.css"/> 
   
   <script>
      function checkQuantity(input) {
         var stockQuantity = input.getAttribute('data-stock');
         var addButton = input.parentNode.querySelector('[type="submit"]');
         if (parseInt(input.value) > parseInt(stockQuantity)) {
            addButton.disabled = true;
            
            alert("Out of Stock.Reduce the quantity please else product will not been added to cart.");
         } else {
            addButton.disabled = false;
         }
      }

    
   </script>
</head>
<body>
   
<?php
if (isset($message)) {
   foreach ($message as $message) {
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
<div class="navbar" style="height:2%;">
      <img src="images\logo.png" alt="Logo" id="logo" style="margin-top: .7px;">
      <a href="pot.php?">Pots</a>
      <a href="#">About Us</a>
      <a href="#">Call Us</a>
      <a href="#">FAQ</a>
      <a href="cart.php?cart" class="n1">Cart &#128722;</a>
      <a href="logout.php">Logout</a>
      
    </div>

<div class="container">

<div class="products">

   <h1 class="heading">Shop the Best Indoor Plants</h1>

   <div class="box-container">

   <?php
   $select_product = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
   if (mysqli_num_rows($select_product) > 0) {
      while ($fetch_product = mysqli_fetch_assoc($select_product)) {
         $product_quantity = $fetch_product['quantity'];
   ?>
      <form method="post" class="box" action="">
         <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="555 error">
         <div class="name"><?php echo $fetch_product['name']; ?></div>
         <div class="quantity"><?php echo "In Stock ($product_quantity)"; ?></div>
         <div class="price">₹<?php echo $fetch_product['price']; ?>/-</div>
         <input type="number" min="1" name="product_quantity" value="1" data-stock="<?php echo $product_quantity; ?>" onchange="checkQuantity(this)">
         <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
         <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
         <input type="submit" value="Add to Cart" name="add_to_cart" class="btn">
      </form>
   <?php
      }
   } else {
      echo '<p>No products available</p>';
   }
   ?>

   </div>

</div>

</div>

<footer>
        <div class="container">
          <div class="address">
        <label>Address:</label>
        <address>21\356 opposite of Middle Tower.<br/>
        Marine\Drive\Mumbai Central  </address>
      </div>
          <div class="links">
            <a href="#">About Us</a>
            <a href="#">FAQ</a>
            <a href="#">Terms & Conditions</a>
          </div>
          <div class="contact">
            <span>Contact Us:</span>&nbsp;
            <div class="numbers">
              <a href="tel:+1234567890">
                <span class="icon">&#x260F;</span>
                <span>123-456-7890</span>
              </a>
              <a href="tel:+0987654321">
                <span class="icon">&#x260F;</span>
                <span>098-765-4321</span>
              </a>
            </div>
          </div>
        </div>
      </footer>

</body>
</html>


