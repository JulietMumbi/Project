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

$First_Name = $_POST["First_Name"];
$Last_Name = $_POST["Last_Name"];
$gender = $_POST["gender"];
$Mobile_Number = $_POST["Mobile_Number"];
$email_address = $_POST["email_address"];


$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

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
    <input type="text" name = "First_Name" id="FN" placeholder="First Name"><br><br>

    <label for="LN"> Last Name* </label><br>
    <input type="text" name = "Last_Name "id="LN" placeholder="Last Name"><br><br>

    <label for="sex">Gender:</label><br>
    <select name="gender" id="sex">
        <option value="">---Select Gender</option>
        <option value="1">Male</option>
        <option value="2">Female</option>
    </select>
    <br><br>
 
    <label for="MN">Mobile Number*</label><br>
    <input type="text" name ="Mobile_Number" id="MN" placeholder="Mobile Number"><br><br>

    <label for="eml">Email*</label><br>
    <input type="text" name = "email_address" id="Email" placeholder="Email"><br><br>

    <input type="submit" name = "save details" value="Save Details"><br><br>
    <p>You can also find us on all social media platforms .</p>
    <p>We will be happy to attend to you.</p>



</form>

<div class="footer">
        &copy; 2024.Nyumbani Student Residences.All rights reserved.

    </div>
</body >
</html>