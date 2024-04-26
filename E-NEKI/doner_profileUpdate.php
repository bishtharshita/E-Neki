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
    //$password = $_POST["password"];
    //$cpassword=$_POST["cpassword"];
    $hno=$_POST["hno"];
    $loc=$_POST["loc"];
    $land=$_POST["land"];
    $pin=$_POST["pin"];
    $city=$_POST["city"];
    $state=$_POST["state"];

    session_start();
    $user=$_SESSION['user'];
    if(isset($_SESSION['user'])){
    //echo "Welcome 🙏🏻 doner ". $_SESSION['user'];
    
    
    }

    else{
      echo "not ok";
    }


    $sql="UPDATE `doner` SET `doner_name`='$name',`doner_mobno`='$mno',`doner_emailid`='$email',`doner_house_no`='$hno',`doner_locality`='$loc',`doner_landmark`='$land',`doner_pincode`='$pin',`doner_city`='$city',`doner_state`='$state' WHERE `doner_emailid`='$user'";
    $sql2="UPDATE `donation` SET `emailid`='$email' WHERE `emailid`='$user'";
    

   
    
//     $sql = "SELECT * FROM `doner` WHERE `doner_emailid`='$email'";
    
     $result = mysqli_query($conn, $sql);
     $result2 = mysqli_query($conn, $sql2);
    
//     $num = mysqli_num_rows($result); 
    
//     // This sql query is use to check if
//     // the username is already present 
//     // or not in our Database
//     if($num == 0) {
//         if(($password == $cpassword) && $exists==false) {
    
//             $hash = password_hash($password, 
//                                 PASSWORD_DEFAULT);
                
//             // Password Hashing is used here. 
//             $sql = "INSERT INTO `doner`(`doner_name`,`doner_mobno`,`doner_emailid`,`doner_password`, `doner_house_no`, `doner_locality`, `doner_landmark`, `doner_pincode`, `doner_city`, `doner_state`) VALUES ('$name','$mno','$email','$hash','$hno','$loc','$land','$pin','$city','$state')";
    
//             $result = mysqli_query($conn, $sql);
    
             if ($result && $result2) {
               $showAlert = true; 
            }
//        } 
    else { 
            $showError = "Error while updating"; 
         }      
//     }// end if 
    
//    if($num>0) 
//    {
//       $exists="Username not available"; 
//    } 
    
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
    
            <strong>Success!</strong> Details have been updated successfully.
            
        </div> 
        <center>
        <button class="btn btn-primary" type="button" style="background-color:green;">
        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
        Loading...
      </button>
</center>';
        header('Refresh: 2; URL=doner login.html');
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
     header('Refresh: 2; URL=final product.html');
   }
        
//     if($exists) {
//         echo ' <div class="alert alert-danger 
//             alert-dismissible fade show" role="alert">
    
//         <strong>Error!</strong> '. $exists.'
        
//        </div>
//        <center>
//        <button class="btn btn-primary" type="button" style="background-color:red;">
//        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
//        Loading...
//      </button>
// </center>'; 
//        header('Refresh: 4; URL=signin for donner.html');
//      }
   
?>
  