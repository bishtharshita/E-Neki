<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  E-NEKI </title>
    <link rel="icon" type="x-icon" href= "fmf.jpg.png" >

   <link rel="stylesheet" href="profile.css">

</head>
<body>
   
  

    <div class="form-center">
    <?php
// Start the session and get the data
require_once "dbconnect.php";
session_start();
$user=$_SESSION['username'];
if(isset($_SESSION['username'])){
    //echo "Welcome 🙏🏻 needy ". $_SESSION['username'];
    
    
}

else{
    echo "not ok";
}

$sql = "SELECT * FROM `needy` WHERE `needy_emailid`='$user'";
$result=$conn->query($sql);


if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {

       echo '<form action="needy_profileupdate.php" method="POST" id="myForm">
    <h1><b> Profile<b></h1>
             <div class="border">


                      <div class="profile">
                        <img src="user test 4.png" alt="User" class="center">
                      </div>

                            
    <div class="first">
        <div class="wrap">
          <label> Name:</label>
            <input type="text" name="name" class="in" value="' . $row["needy_name"] . '" readonly>
            
             </div>

        <div class="wrap">
            <label> Mobile-No:</label>
         <input type="text" name="mno" class="in" value="' . $row["needy_mobno"] . '" readonly>
        </div>

        <div class="wrap">
            <label> Email-Id:</label>
             <input type="text" name="email"  class="in" value="' . $row["needy_emailid"] . '" readonly>
        </div>
        
        <div class="wrap">
          <label> House-No:</label>
           <input type="text" name="hno"  class="in" value="' . $row["needy_house_no"] . '" readonly>
      </div>

      <div class="wrap">
        <label> Locality:</label>
         <input type="text" name="loc"  class="in" value="' . $row["needy_locality"] . '" readonly>
    </div>

    <div class="wrap">
      <label> Landmark:</label>
       <input type="text" name="land"  class="in" value="' . $row["needy_landmark"] . '" readonly>
  </div>
  
  <div class="wrap">
    <label> Pincode:</label>
     <input type="text" name="pin"  class="in" value="' . $row["needy_pincode"] . '" readonly>
</div>

<div class="wrap">
  <label> City:</label>
   <input type="text" name="city"  class="in" value="' . $row["needy_city"] . '" readonly>
</div>

<div class="wrap">
  <label> State:</label>
   <input type="text" name="state" class="in" value="' . $row["needy_state"] . '" readonly>
</div>







          
        
     <div class="wrap3  ">
                    <button type="button" id="del" class="button" value="Delete" onclick="remove()">Delete</button>
                    <button type="button" id="edit" class="button" value="Edit" onclick="test(); test2();">Edit</button>
                    <button  id="btn" class="button" type="submit">Update</button>
                    
                  
     </div>
     </form>
    
      </div>';
      
    }
  }
      ?>     
         
</body>
<script>
  function test()
  {
    var inputElements = document.querySelectorAll("input");

// Loop through each input element and set the border style
  inputElements.forEach(function(inputElement) {
  inputElement.style.border = "1px solid black";
  inputElement.style.background = "white";
  inputElement.style.outline = "1px solid black";
  inputElement.readOnly=false;
  if (inputElements.length > 0) {
  var firstInputElement = inputElements[0];
  firstInputElement.focus();
  firstInputElement.setSelectionRange(firstInputElement.value.length, firstInputElement.value.length);
}

   // Customize the border style here
});

  }
  function test2()
  {
     var b1=document.getElementById("edit");
     var b2=document.getElementById("del");
     var b3=document.getElementById("btn");
     b1.style.display="none";
     b2.style.display="none";
     b3.style.display="inline";
    
  }
  function remove()
  {
    var res=confirm("Are you sure you want to delete your account");
    if(res)
    {
      document.getElementById('myForm').action = 'needy_profiledelete.php';
      document.getElementById('myForm').submit();
    }
    else
    {
      header('Refresh: 2; URL=needy_profile.php');
    }
    
  }
</script>

</html>