<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.CSS">
 
</head>

<body>
<?php 
include_once("templates/nav.php");
require_once("includes/db_connect.php");

if(isset($_POST["save_details"])){
$firstname = mysqli_real_escape_string($conn, addslashes ($_POST["firstname"]));
$lastname =  mysqli_real_escape_string($conn, addslashes ($_POST["lastname"]));
$gender =  mysqli_real_escape_string($conn, addslashes ( $_POST["gender"]));
$mobilenumber = mysqli_real_escape_string($conn, addslashes ($_POST["mobilenumber"]));
$email =  mysqli_real_escape_string($conn, addslashes ($_POST["emailaddress"]));


$insert_message = "INSERT INTO contact (FirstName, LastName, Gender, MobileNo, email)
VALUES ('$firstname', '$lastname', '$gender', '$mobilenumber', '$email'  )";

if ($conn->query($insert_message) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $insert_message . "<br>" . $conn->error;
}

$conn->close();
}
?>

    
        <h1><img src="images/Call.png" width="5%"> Reach us:</h1>
   
   <p>Kenya: 0805 543 222 (Toll Free)</p> 
   <p>International: +254 730 500 000</p>
   <h1>Request a callback</h1>
   <p>You can also fill in the details below so as to request for a call back, book and save your spot.</p>
   <p>Required fields indicated by (*)</p>
    <!--FORMS-->
   
 <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method= "POST" class="contact_form" >
    <label for="FN">First Name*</label><br>
    <input type="text" name = "firstname" id="FN" placeholder="First Name" required><br><br>

    <label for="LN"> Last Name* </label><br>
    <input type="text" name = "lastname "id="LN" placeholder="Last Name" required><br><br>

    <label for="sex">Gender:</label><br>
    <select name="gender" id="sex" required>
        <option value="">---Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
    <br><br>
 
    <label for="MN">Mobile Number*</label><br>
    <input type="text" name ="mobilenumber" id="MN" placeholder="Mobile Number" required><br><br>

    <label for="eml">Email*</label><br>
    <input type="text" name = "emailaddress" id="Email" placeholder="Email" required><br><br>

    <input type="submit" name = "save_details" value="Save Details" required><br><br>
    <p>You can also find us on all social media platforms .</p>
    <p>We will be happy to attend to you.</p>



</form>

<div class="footer">
        &copy; 2024.Nyumbani Student Residences.All rights reserved.

    </div>
</body >
</html>