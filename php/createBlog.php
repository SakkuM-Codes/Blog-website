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
<form action="" method="POST" enctype="multipart/form-data">
    <div class="container">
        <h2>Create Blog</h2>
        <div class="input-box">
            <input type="text" placeholder="Title" name="title" required>
        </div>
        <div class="input-box main-container">
        <textarea id="message" name="editor" class="mySummernote" placeholder="Description"></textarea>
        </div>
        <div class="upload-image">
        <input name="images" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" aria-describedby="file_input_help" id="file_input" type="file">
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

<?php
    include 'connection.php';

     if(isset($_POST['submit'])) {
        $title = $_POST['title'];
        $descp = $_POST['descp'];
        if($_Files['images']['size']>0)
        {
            $images = $_Files['images']['name'];
            $path - ""
        }else{
            $FinalImage = NULL;
        }
        $images = $_POST['images'];

    $p = "INSERT INTO `blogs` (`title`,`descp`, `images`) VALUES('$title', '$descp' ,'$images')";

    $result = $conn->query($p);

    if($result === TRUE){
        redirect ('landingPage.php', Services Added Successfully!);
    }else{
         echo "Error: " . $p . "<br>" . $conn->error;
    }
        $conn->close;

}
?>



