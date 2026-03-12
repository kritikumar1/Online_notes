<?php
include "db.php";
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// Registration Logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check password match
    if ($password != $confirm_password) {
        echo "<script>alert('Passwords do not match');</script>";
    } else {

        // Check if email exists
        $check = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $check);

        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Email already registered');</script>";
        } else {

            // Hash password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert user
            $sql = "INSERT INTO users (name, email, password) 
                    VALUES ('$name', '$email', '$hashed_password')";

            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Registration Successful'); window.location.href='login.php';</script>";
                header("location:index.php");
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Register</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    width: 100%;
    max-width: 400px;
}

.register-box {
    background: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.register-box h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.input-group {
    margin-bottom: 15px;
}

.input-group label {
    font-weight: 600;
    display: block;
    margin-bottom: 5px;
    color: #555;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    outline: none;
    transition: 0.3s;
}

.input-group input:focus {
    border-color: #4facfe;
    box-shadow: 0 0 5px rgba(79,172,254,0.5);
}

.btn {
    width: 100%;
    padding: 12px;
    border: none;
    background: #4facfe;
    color: white;
    font-size: 16px;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s;
}

.btn:hover {
    background: #00c6ff;
}

.login-link {
    text-align: center;
    margin-top: 15px;
}

.login-link a {
    text-decoration: none;
    color: #4facfe;
    font-weight: 600;
}
</style>

</head>
<body>

<div class="container">
    <div class="register-box">
        <h2>Create Account</h2>

        <form method="POST" action="">
            <div class="input-group">
                <label>Full Name</label>
                <input type="text" name="fullname" required>
            </div>

            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <div class="input-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" required>
            </div>

            <button type="submit" class="btn">Register</button>

            <p class="login-link">
                Already have an account? <a href="login.php">Login</a>
            </p>
        </form>
    </div>
</div>

</body>
</html>