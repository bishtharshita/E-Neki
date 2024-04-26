<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "eneki";

// Create a connection 
$conn = mysqli_connect($servername, $username, $password, $database);

// Code written below is a step taken
// to check that our Database is 
// connected properly or not. If our 
// Database is properly connected we
// can remove this part from the code 
// or we can simply make it a comment 
// for future reference.
if ($conn) {
    //echo "success"; 
} else {
    die("Error" . mysqli_connect_error()); 
} 

$email = $_POST["em"];

$sql = "SELECT * FROM `needy` WHERE `needy_emailid`='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        
        echo '
        <div class="container">
            <form action="needy_update.php" method="POST">
                <div class="row">
                    <div class="col-25">
                        <label for="fname">First Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="name" placeholder="Name.." value="' . $row["needy_name"] . '">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Mobile Number</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="mobno" placeholder="Mobile number.." value="' . $row["needy_mobno"] . '">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Email id</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="email" placeholder="Email id.." value="' . $row["needy_emailid"] . '">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">House Number</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="hno" placeholder="House number.." value="' . $row["needy_house_no"] . '">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Locality</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="loc" placeholder="Locality.." value="' . $row["needy_locality"] . '">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Landmark</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="land" placeholder="Landmark.." value="' . $row["needy_landmark"] . '">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Pincode</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="pin" placeholder="Pincode.." value="' . $row["needy_pincode"] . '">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">City</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="city" placeholder="City.." value="' . $row["needy_city"] . '">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">State</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="state" placeholder="State.." value="' . $row["needy_state"] . '">
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Update">
                </div>
            </form>
        </div>';
    }
} else {
    echo "Failed";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>
<body>
<script>
    document.body.style.zoom = "175%";
</script>
</body>
</html>
