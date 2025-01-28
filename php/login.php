<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include  'F:/New folder/htdocs/Blog website/CSS/signUp.css'; ?></style>
    <title>Login Form</title>
    <!---Google font CDN link-->
</head>
<body>
    <form action="" method="POST">
    <div class="container">
        <h2>Login</h2>
        <div class="input-box">
        <input type="email" placeholder="Email" name="email">
    </div>
    <div class="input-box">
        <input type="password" placeholder="Password" name="passwd">
    </div>
        <button class="btn" type="submit" name="submit">Login</button>
        <p class="forget"><a href="#">Forget your password?</a> Or <a href="signUp.php">Register</a></p>
    </div>
    </form>
</body>
</html>

<?php
include "connection.php";

if (isset($_POST['submit'])) {
    $email = htmlspecialchars($_POST['email']);
    $passwd = htmlspecialchars($_POST['passwd']);

    // Ensure the connection is established properly
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `users` WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Compare plaintext password directly
        if ($passwd === $user['passwd']) {
            // Login successful, redirect to home page
            header("Location: home.php");
            exit();
        } else {
            echo "Invalid credentials";
        }
    } else {
        // Redirect to registration page if user is new
        header("Location: signUp.php");
        exit();
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Form not submitted.";
}
?>

