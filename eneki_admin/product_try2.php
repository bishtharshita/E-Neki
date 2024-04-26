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
$sizes = array();

if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        $sizes[] = $row['size'];
        
        
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
<form>
    <label for="size">Select a size:</label>
    <select name="size" id="size">
        <?php foreach ($sizes as $size): ?>
            <option value="<?php echo $size; ?>"><?php echo $size; ?></option>
        <?php endforeach; ?>
    </select>
        </form>
<!-- <script>
    function sub()
    {
        document.getElementById("myform").submit();
    }
</script> -->

</body>
</html>