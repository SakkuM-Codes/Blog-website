<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include  'F:/New folder/htdocs/Blog website/CSS/landingPage.css'; ?></style>
    <title>View Cards</title>
</head>
    <?php include 'connection.php'?>

<body class="m-0 p-0">

<div class = "relative flex flex-wrap rounded-lg gap-6">

    <!-- Card-1 -->
    <div class="card w-64 items-start overflow-hidden text-white flex flex-wrap cursor-pointer rounded-md border-2 border-solid border-white">
      <img class="w-full" src="http://localhost/Blog website/Images/image1.jpg" alt="flower image">
      <div class="">
        <h3 class="text-xl font-normal pl-2 text-white">Vadodara Garden</h3>
        <p class="text-lg pl-2 text-white">Vadodara Garden is a best garden and has many structures formed with flowers</p>
        <button class="text-base relative cursor-pointer pb-1 ">
        <a class="bg-gradient-to-r from-violet-500 to-fuchsia-500 rounded-sm m-2 transition-colors"
            href="detail.php">Read More</a></button>
      </div>
    </div>


    
    <!--Dynamic Card-->
    <div class="card w-64 items-start flex flex-wrap text-white cursor-pointer overflow-hidden rounded-md border-2 border-solid border-white">  
    <?php 
        $cardView = "SELECT * FROM blogs WHERE status = 0"; 
        $resultCard = $conn->query($cardView);
        if($resultCard)
        {
            if(mysqli_num_rows($resultCard)>0)
            {
                forEach($resultCard as $row)
                {
                    ?>
                        
                                <?php if($row['images']!= '') : ?>
                                    <img class="w-full rounded" src="<?= $row['images']; ?>" alt="image">
                                <?php else: ?>
                                    <img class="w-full" src="http://localhost/Blog website/Images/no-image.png" alt="image">
                                <?php endif; ?>
                                        <div class="m-3 p-2">
                                        <h3 class="text-xl font-normal pl-2 text-white"><?= $row['title']; ?></h3>
                                        <p class="text-lg pl-2 text-white overflow-hidden whitespace-nowrap text-ellipsis max-w-xs">
                                           <?= substr(strip_tags($row['editor']), 0, 100) . '...'; ?>
                                        </p>    
                                        <button class="text-base absolute cursor-pointer pb-1">
                                            <a class="bg-gradient-to-r from-violet-500 to-fuchsia-500 rounded-sm m-1 transition-colors"
                                            href="detail.php?slug=<?= $row['slug']; ?>">Read More</a>
                                        </button>
                                            <div class="text-white">
                                            <div class="text-xl hover:underline">
                                            <a class="" href="edit-card">Edit</a>
                                            <a class="" href="update-card">Update</a>
                                            </div>
                                            </div>
                                    </div>
                            <?php
                            }
                        }
                        else
                            {
                                echo "<h4>No Record Found</h4>";
                            }
                    }else
                        {
                            echo "<h4>Something Went wrong+!</h4>";
                        }
                
                ?>
</div>


    
       
    <!---Card2-->
    <div class="card w-64 items-start overflow-hidden text-white flex flex-wrap cursor-pointer rounded-md border-2 border-solid border-white">
      <img class="w-full" src="http://localhost/Blog website/Images/image2.jpg" alt="flower image">
      <div class="box">
        <h3 class="text-xl font-normal  text-white">Amazon Forest</h3>
        <p class="text-lg pl-2 text-white">Amazon Forest is one of the largest forest in the world and It has many species</p>
        <button class="text-base absolute cursor-pointer pb-1"><a
            class="bg-gradient-to-r from-violet-500 to-fuchsia-500 rounded-sm m-1 transition-colors" href="detail.php">Read More</a></button>
      </div>
    </div>

</div>

  <!---Tailwind Css-->
  <script src="https://cdn.tailwindcss.com"></script>


  </body>
  </html>