<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hide{
            border:none;
            outline:none;
        } 
        #b1,#b2{
            border:none;
            outline:none;
            /* background-color: #009879; */
            background:none;
            padding:12px 15px;
            /* color:white;
            font-weight:bold;
            border-radius:50px; */

        }
        .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
    
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.container{
    display:flex;
    justify-content: center;
    
}


    </style>
</head>
<body>
   
</body>
</html>
<?php
   
    $servername = "localhost"; 
    $username = "root"; 
    $password = "";
   
    $database = "eneki";
   
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

    $search=$_POST["search"];

    $sql = "SELECT * FROM `doner` WHERE `doner_name`='$search' OR `doner_emailid`='$search'";
$result=$conn->query($sql);
$rowCount=mysqli_num_rows($result);
if($result->num_rows>0)
{
   
    
    echo "<div class='container'>
    
          <table class='styled-table'>
          <thead>
          <tr>
          
          <th>NAME</th>
          <th>EMAIL ID</th>
          <th>VIEW</th>
          <th>DELETE</th>
          </tr>
          </thead>";
    while($row=$result->fetch_assoc())
    {
        echo '<tbody>
        <tr class="active-row">
        <td><form action="doner_view.php" method="POST"><input type="text" name="nm" class="hide" value="'.$row["doner_name"].'" readonly>
        
        <td><input type="text" name="em" class="hide" value="'.$row["doner_emailid"].'" readonly></td>
        
        <td><button type="submit" id="b1"><img src="view.gif" height="24px" width="24px"></button></form></td>
        <td><form action="doner_delete.php" method="POST"><input type="text" style="display:none;" name="em" value="'.$row["doner_emailid"].'"><button type="submit" id="b2"><img src="delete.gif" height="24px" width="24px"></button></form></td>
        </tr></tbody>';
    }
    echo "</table>";
    
    echo "</div>";
    echo "<center>Users Count:$rowCount</center>";
    
}
else{
    
    echo "<h1 style='color:red; text-align:center;'>No results</h1>";
}
?>