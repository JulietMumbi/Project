<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.CSS">
 
</head>

<body>
<?php include_once("templates/nav.php");?>
    <div class="header">
        <h1><img src="images/Call.png" width="5%"> Reach us:</h1>
   </div>
   <p>Kenya: 0805 543 222 (Toll Free)</p> 
   <p>International: +254 730 500 000</p>
   <h1>Request a callback</h1>
   <p>You can also fill in the details below so as to request for a call back, book and save your spot.</p>
   <p>Required fields indicated by (*)</p>
    <!--FORMS-->
 <form action="" >
    <label for="FN">First Name*</label><br>
    <input type="text" id="First Name" placeholder="First Name"><br><br>

    <label for="LN"> Last Name* </label><br>
    <input type="text" id="First Name" placeholder="Last Name"><br><br>

    <label for="sex">Gender:</label><br>
    <select name="" id="sex">
        <option value="">---Select Gender</option>
        <option value="1">Male</option>
        <option value="2">Female</option>
    </select>
    <br><br>
 
    <label for="MN">Mobile Number*</label><br>
    <input type="text" id="Mobile Number" placeholder="Mobile Number"><br><br>

    <label for="eml">Email*</label><br>
    <input type="text" id="Email" placeholder="Email"><br><br>

    <input type="submit"value="Save Details"><br><br>
    <p>You can also find us on all social media platforms .</p>
    <p>We will be happy to attend to you.</p>



</form>
</body >
</html>