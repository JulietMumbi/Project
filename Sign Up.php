<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.csS">
</head>
<body>
<?php include_once("templates/nav.php");?>
<?php require_once("includes/db_connect.php");?>
      
    </div>
    <div class= "form">
    <section id="signup">
        <h1>Sign Up</h1>
        <form action="">
            <label for="name">Name:</label><br>
            <input type="text"id="name"name="name"required><br><br>

            <label for="email">Email:</label><br>
            <input type="email"id="email"name="email"required><br><br>

            <label for="password">Password:</label><br>
            <input type="password"id="password"name="password"required><br><br>

            <label for="confirm-password">Confirm your Password:</label><br>
            <input type="password"id="confirm-password"name="confirm-password"required><br><br>

           <label><br>
            <input type="checkbox"name="terms"required>I agree to the <a href="Terms and Conditions.php">Terms and Conditions</a>

           </label><br>
           <button type="submit">Sign Up</button>
            
        </form>
</div>
    </section>
</body>
</html>