<?php
include "dbconnect.php";
$items=$_POST["items"];
$quantity=$_POST["quantity"];

$sql="UPDATE `products_admin` SET `item_qty`=`item_qty`+$quantity WHERE `item_name`='$items'";
$result=mysqli_query($conn,$sql);
if($result===TRUE)
{
    echo "Updated";

}
else
{
    echo "Failed";
}

?>