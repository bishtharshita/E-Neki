<?php
require_once "dbconnect.php";

$isLogin=false;


$uname=$_POST["uname"];
$pass=$_POST["pass"];

$sql="SELECT * FROM `doner` WHERE `doner_emailid`='$uname'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0)
{
    $row=mysqli_fetch_assoc($result);

    if(password_verify($pass,$row['doner_password']))
    {
        $isLogin=true;
        session_start();
        $_SESSION['user']=$uname;
        
    }
    else
    {
        $isLogin=false;
    }
}
else
{
    $isLogin=false;
}

$conn->close();

?>
<!doctype html>
    
    <html lang="en">
      
    <head>
        
        <!-- Required meta tags --> 
        <meta charset="utf-8"> 
        <meta name="viewport" content=
            "width=device-width, initial-scale=1, 
            shrink-to-fit=no">
        
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href=
    "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity=
    "sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
            crossorigin="anonymous">  
    </head>
    <body>
    <?php
    if($isLogin)
    {
        echo ' <div class="alert alert-success 
        alert-dismissible fade show" role="alert">

        <strong>Success!</strong> Login Successful 
        
    </div>
    <center>
        <button class="btn btn-primary" type="button" style="background-color:green;">
        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
        Loading...
      </button>
</center>';

        header('Refresh: 2; URL=final product.html');
     
    }
    else
    {
        echo ' <div class="alert alert-danger 
        alert-dismissible fade show" role="alert">

    <strong>Login Failed!</strong> Invalid email or password
    
   </div>
   <center>
       <button class="btn btn-primary" type="button" style="background-color:red;">
       <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
       Loading...
     </button>
</center>'; 
       header('Refresh: 2; URL=doner login.html');
    }
    ?>