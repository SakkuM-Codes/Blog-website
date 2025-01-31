<?php
session_start();

// Authentication code
function validate($data) {
    // Validation function (implement as needed)
    return htmlspecialchars(trim($data));
}

function logoutSession() {
    unset($_SESSION['auth']);
    unset($_SESSION['loggedInUserRole']);
    unset($_SESSION['loggedInRole']);
}

if (isset($_SESSION['auth'])) {
    if (isset($_SESSION['loggedInUserRole'])) {
        $role = validate($_SESSION['loggedInUserRole']);
        $email = validate($_SESSION['loggedInRole']['email']);     

        
        $id = validate($_SESSION['loggedInRole']['Id']); 

        $query = "SELECT * FROM users WHERE email = '$email' AND id = '$id' LIMIT 1";

        $result = mysqli_query($conn, $query);

        if ($result) {
            if (mysqli_num_rows($result) == 0) {
                logoutSession();
                header('Location: login.php');
                exit;
            }
        } else {
            logoutSession();
            header('Location: login.php');
            exit;
        }
    }
} else {
    header('Location: home.php');
    exit;
}

?>
