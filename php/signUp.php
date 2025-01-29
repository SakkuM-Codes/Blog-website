<?php
      include "connection.php";
       if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $passwd = $_POST['passwd'];
        $phone_number = $_POST['phone_number'];

        $sql = " INSERT INTO `users` (`username`, `email`, `passwd`, `phone_number`) VALUES ('$username','$email','$passwd','$phone_number')";

        $result = $conn->query($sql);

        if($result === TRUE){
            echo "New record created successfully";
            header('Location: login.php');
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include  'F:/New folder/htdocs/Blog website/CSS/signUp.css'; ?></style>
    <title>Sign Up</title>
</head>
<body>
    <form action="" method="POST">
    <div class="container">
        <h2>Register</h2>
        <div class="input-box">
            <input type="text" placeholder="Username" name="username" required>
        </div>
        <div class="input-box">
        <input type="email" placeholder="Email" name="email" required>
    </div>
    <div class="input-box">
        <input type="password" placeholder="Password" name="passwd" required>
    </div>
    <div class="input-box">
        <input type="number" placeholder="Mobile No." name="phone_number" required>
    </div>
        <button class="btn" type="submit" name="submit">Register</button>
        <p class="forget"><a href="#">Already User</a> Or <a href="login.php">Login</a></p>
    </div>
</form> 
</body>
</html>



