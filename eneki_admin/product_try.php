<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";

$database = "table_try";

 // Create a connection 
 $conn = mysqli_connect($servername, 
     $username, $password, $database);

// Code written below is a step taken
// to check that our Database is 
// connected properly or not. If our 
// Database is properly connected we
// can remove this part from the code 
// or we can simply make it a comment 
// for future reference.

if($conn) {
    //echo "success"; 
} 
else {
    die("Error". mysqli_connect_error()); 
} 
$sql="SELECT * FROM `product`";
$result=mysqli_query($conn,$sql);
$productNames = array();

if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        $productNames[] = $row['pro_name'];
        
        
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="myform">
    <label for="product">Select a product:</label>
    <select name="product" id="product" onchange="sub()">
        <?php foreach ($productNames as $productName): ?>
            <option value="<?php echo $productName; ?>"><?php echo $productName; ?></option>
        <?php endforeach; ?>
    </select>
        </form>
<script>
    function sub()
    {
        document.getElementById("myform").submit();
    }
</script>

</body>
</html>