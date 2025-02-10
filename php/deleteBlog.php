<?php

include('connection.php');

if (isset($_GET['blog_Id'])) {
    $blog_Id = $_GET['blog_Id']; 
} else {
    die("No ID specified.");
}


$sql = "DELETE FROM blogs WHERE blog_Id = ?";


$stmt = $conn->prepare($sql);
if ($stmt) {
    
    $stmt->bind_param("i", $blog_Id);
    
    if ($stmt->execute()) {
        echo "Blog post deleted successfully!";
        header('Location: landingPage.php');
    } else {
        echo "Error deleting blog post: " . $stmt->error;
    }
    
    $stmt->close();
} else {
    echo "Error preparing statement: " . $conn->error;
}
// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include  'F:/New folder/htdocs/Blog website/CSS/signUp.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    

    <title>Create Blog</title>
</head>

<body>
<form action="code-createBlog.php" method="POST" enctype="multipart/form-data">
    <div class="container">
        <h2>Create Blog</h2>
        <div class="input-box">
            <input type="text" placeholder="Title" required name="title" required>
        </div>
        <div class="input-box main-container">
        <textarea id="message" name="editor" required class="mySummernote" placeholder="Description"></textarea>
        </div>
        <div class="upload-image">
        <input name="images" required class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" aria-describedby="file_input_help" id="file_input" type="file">
        <p class="mt-1 text-sm text-gray-500" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
        </div>
            <button class="btn" type="submit" name="submit">Submit</button>
        </div>
    </form> 


    <!---JQuery Cdn----->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

   <!---Tailwind Css-->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
   <script>
    $(document).ready(function() {
        $(".mySummernote").summernote({
            height: 250
        });
        $('.dropdown-toggle').dropdown();
    });
</script>





