<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name  = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass  = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Email already exists check
    $check = mysqli_query($conn, "SELECT id FROM users WHERE email='$email'");
    if (mysqli_num_rows($check) > 0) {
        echo "<script>alert('Email already registered');</script>";
    } else {
        $sql = "INSERT INTO users (name, email, password)
                VALUES ('$name', '$email', '$pass')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>
                    alert('Account created successfully!');
                    window.location='login.php';
                  </script>";
        } else {
            echo "<script>alert('Something went wrong');</script>";
        }
    }
}
?>
