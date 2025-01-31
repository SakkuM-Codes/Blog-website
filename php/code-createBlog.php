<?php
    include 'connection.php';

     if(isset($_POST['submit'])) {
        $title = $_POST['title'];
        $editor = $_POST['editor'];
        $slug = str_replace(' ','-',strtolower($name));
        $status = $_POST['status']==true ?'1':'0';
        
        if($_FILES['images']['size'] > 0)
        {

            $images = $_FILES['images']['name'];

            $imageFileTypes = strtolower(pathinfo($images, PATHINFO_EXTENSION));
            

            if($imageFileTypes != 'jpg' && $imageFileTypes != 'jpeg' && $imageFileTypes != 'svg'  && $imageFileTypes != 'png')
            {
                header('Location:landingPage.php');
               echo "Sorry only JPG, JPEG, PNG, SVG,GIF UPLOADED only!";
            } 
            
            
            $path = "../uploads/upload_images_user/";

            $imgExt = pathinfo($images, PATHINFO_EXTENSION);
        

            $filename = time().'.'.$imgExt;

            $finalImage = 'uploads/upload_images_user/'.$filename;

        }else{
            $finalImage = NULL;
        }

    $p = "INSERT INTO blogs (title,slug,editor, images) VALUES('$title','$slug','$editor','$finalImage')";

    $result = $conn->query($p);

    if($result === TRUE)
    {

                if($_FILES['images']['size'] > 0)
                {
                    
                    move_uploaded_file($_FILES['images']['tmp_name'], $path.$filename);
                }

                     header('Location:landingPage.php');
                     echo "Services Added Successfully!";
                }else
                
                {

                    echo "Error: " . $p . "<br>" . $conn->error;

                }

                $conn->close();

}

?>
