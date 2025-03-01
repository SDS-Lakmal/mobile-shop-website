<?php
    session_start();

    include("db.php");

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $FirstName = $_POST["FirstName"];
        $LastName = $_POST["LastName"];
        $Gender = $_POST["Gender"];
        $ContactAddress = $_POST["ContactAddress"];
        $Address = $_POST["Address"];
        $Email = $_POST["Email"];
        $Password = $_POST["Password"];

        if(!empty($Email) && !empty($Password) && !is_numeric($Email))
        {
          $query = "insert into form (FirstName, LastName, Gender, ContactAddress, Address, Email, Password) values ('$FirstName', '$LastName', '$Gender', '$ContactAddress', '$Address', '$Email', '$Password')";

          mysqli_query($con, $query);

          echo "<script type='text/javascript'> alert('Successfully Register')</script>";

        }
        else
        {
            echo "<script type='text/javascript'> alert('Please enter same valid information')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loging and Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="signup">
        <h1>Sign Up</h1>
        <form method="POST">
            <label>First Name</label>
            <input type="text" name="FirstName" required>
            <label>Last Name</label>
            <input type="text" name="LastName" required>
            <label>Gender</label>
            <input type="text" name="Gender" required>
            <label>Contact Address</label>
            <input type="tel" name="ContactAddress" required>
            <label>Address</label>
            <input type="text" name="Address" required>
            <label>Email</label>
            <input type="email" name="Email" required>
            <label>Password</label>
            <input type="password" name="Password" required>
            <input type="submit" name="" value="submit">
        </form>
        <P>By clicking the sign up button, you agree to our<br>
        <a href="">Terms and conditions</a> and <a href="#">Policy privacy</a>
        </P>
        <p>Alrady have an account? <a href="login.php">Loging Here</a></p>
    </div>
</body>
</html>