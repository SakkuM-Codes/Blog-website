<?php
    session_start(); 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $title = $_POST['title'];
    $editor = $_POST['editor'];
    $userid = $_POST['user_id']; 
    
    if (empty($title) || empty($editor)) {
        die("Title and description are required.");
    }
    
    if (!isset($_FILES['images']) || $_FILES['images']['error'] !== UPLOAD_ERR_OK) {
        die("Please upload an image.");
    }
    
    $uploadDir = '../uploads/upload_image_user/';
    $uploadFile = $uploadDir . basename($_FILES['images']['name']);
    if (move_uploaded_file($_FILES['images']['tmp_name'], $uploadFile)) {
        echo "File uploaded successfully.";
    } else {
        die("File upload failed.");
    }
    
    require 'connection.php'; 
    
    $sql = "INSERT INTO blogs (title, editor, images, userid) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        
        $stmt->bind_param("sssi", $title, $editor, $uploadFile, $userid);
        
        if ($stmt->execute()) {
            echo "Blog post created successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
   
    $conn->close();
}
?>

