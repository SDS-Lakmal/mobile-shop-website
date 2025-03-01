<?php
    session_start();

    include("db.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Email = $_POST["Email"];
        $Password = $_POST["Password"];

        if (!empty($Email) && !empty($Password) && !is_numeric($Email)) {
            $query = "SELECT * FROM form WHERE Email = '$Email' LIMIT 1";
            $result = mysqli_query($con, $query);

            if ($result) {
                if ($result && mysqli_num_rows($result) > 0) {
                    $user_data = mysqli_fetch_assoc($result);

                    if ($user_data['Password'] == $Password) {
                        header("location: index.php");
                        die;
                    }
                }
            }
            echo "<script type='text/javascript'> alert('Wrong user name or password')</script>";
        } else {
            echo "<script type='text/javascript'> alert('Wrong user name or password')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <form method="POST">           
            <label>Email</label>
            <input type="email" name="Email" required>
            <label>Password</label>
            <input type="password" name="Password" required>
            <input type="submit" name="" value="Submit">
        </form>
        <p>Don't have an account? <a href="signup.php">Sign Up here</a></p>
    </div>
</body>
</html>
