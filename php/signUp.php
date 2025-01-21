<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="signUp.css">
    <title>Sign Up</title>
</head>
<body>
    <form action="" method="POST">
    <div class="container">
        <h2>Register</h2>
        <div class="input-box">
            <input type="text" placeholder="Username" name="username">
        </div>
        <div class="input-box">
        <input type="email" placeholder="Email" name="email">
    </div>
    <div class="input-box">
        <input type="password" placeholder="Password" name="passwd">
    </div>
    <div class="input-box">
        <input type="number" placeholder="Mobile No." name="phone_number">
    </div>
        <button class="btn">Register</button>
        <p class="forget"><a href="#">Already User</a> Or <a href="login.html">Login</a></p>
    </div>
</form>
</body>
</html>



<?php
    include "connection.php";
    if(isset($_POST['Register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $passwd = $_POST['passwd'];
        $phone_number = $_POST['phone_number'];
        $sql = "INSERT INTO `users` (`username`, `email`, `passwd`, `phone_number`) VALUES ('$username','$email','$passwd','$phone_number')";
        $result = $conn->query($sql);
        if($result == TRUE){
            echo "New record created successfully";
            header('Location: signUp-view.php');
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>