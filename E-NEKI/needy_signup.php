<?php
    
$showAlert = false; 
$showError = false; 
$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include 'dbconnect.php';   
    
    $name = $_POST["name"]; 
    $mno=$_POST["mno"];
    $email = $_POST["email"]; 
    $password = $_POST["password"];
    $cpassword=$_POST["cpassword"];
    $hno=$_POST["hno"];
    $loc=$_POST["loc"];
    $land=$_POST["land"];
    $pin=$_POST["pin"];
    $city=$_POST["city"];
    $state=$_POST["state"];

   
    
    $sql = "SELECT * FROM `needy` WHERE `needy_emailid`='$email'";
    
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result); 
    
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if($num == 0) {
        if(($password == $cpassword) && $exists==false) {
    
            $hash = password_hash($password, 
                                PASSWORD_DEFAULT);
                
            // Password Hashing is used here. 
            $sql = "INSERT INTO `needy`(`needy_name`, `needy_mobno`, `needy_emailid`, `needy_password`, `needy_house_no`, `needy_locality`, `needy_landmark`, `needy_pincode`, `needy_city`, `needy_state`) VALUES ('$name','$mno','$email','$hash','$hno','$loc','$land','$pin','$city','$state')";
    
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                $showAlert = true; 
            }
        } 
        else { 
            $showError = "Passwords do not match"; 
        }      
    }// end if 
    
   if($num>0) 
   {
      $exists="Username not available"; 
   } 
    
}//end if   
    
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
    
    if($showAlert) {
    
       
        echo ' <div class="alert alert-success 
            alert-dismissible fade show" role="alert">
    
            <strong>Success!</strong> Your account is 
            now created and you can login. 
            
        </div> 
        <center>
        <button class="btn btn-primary" type="button" style="background-color:green;">
        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
        Loading...
      </button>
</center>';
        header('Refresh: 2; URL=needy login.html');
    }
    
    if($showError) {
    
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '. $showError.'
    
       
     </div> 
     <center>
     <button class="btn btn-primary" type="button" style="background-color:red;">
  <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
  Loading...
</button>
</center>';
     header('Refresh: 2; URL=needy signin.html');
   }
        
    if($exists) {
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert">
    
        <strong>Error!</strong> '. $exists.'
        
       </div>
       <center>
       <button class="btn btn-primary" type="button" style="background-color:red;">
       <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
       Loading...
     </button>
</center>'; 
       header('Refresh: 2; URL=needy signin.html');
     }
   
?>
  