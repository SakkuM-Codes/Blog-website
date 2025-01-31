<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style><?php include  'F:/New folder/htdocs/Blog website/CSS/signUp.css'; ?></style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <title>Home</title>
</head>

<body class="p-0 m-0 border-box flex-col relative">
    <?php include 'header.php'?>
    

<div id="gallery" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden  ease-in-out" data-carousel-item>
            <img src="http://localhost/Blog website/Images/image1.jpg" class="absolute block max-w-50 h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 2 -->
        <div class="hidden  ease-in-out" data-carousel-item="active">
            <img src="http://localhost/Blog website/Images/image2.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 3 -->
        <div class="hidden  ease-in-out" data-carousel-item>
            <img src="http://localhost/Blog website/Images/image3.webp" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 4 -->
        <div class="hidden ease-in-out" data-carousel-item>
            <img src="http://localhost/Blog website/Images/image4.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="http://localhost/Blog website/Images/image5.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50  group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>


  <div class="flex flex-wrap justify-center gap-7	mx-4 my-12">
    <!-- Card-1 -->
    <div
      class="card w-64 items-start overflow-hidden text-white shadow-md flex-col cursor-pointer rounded-md border-2 border-solid border-white">
      <img class="w-full h-1/2" src="http://localhost/Blog website/Images/image1.jpg" alt="">
      <div class="box">
        <h3 class="text-2xl font-normal pl-2">Vadodara Garden</h3>
        <p class="text-lg pl-2">Vadodara Garden is a best garden and has many structures formed with flowers</p>
        <button class="text-base absolute cursor-pointer pb-1"><a
            class="bg-gradient-to-r from-violet-500 to-fuchsia-500 rounded-sm m-1 transition-colors"
            href="detail.php">Read More</a></button>
      </div>
    </div>

    <!---Card2-->
    <div
      class="card w-64 items-start overflow-hidden text-white shadow-md flex-col cursor-pointer rounded-md border-2 border-solid border-white">
      <img class="w-full h-1/2" src="http://localhost/Blog website/Images/image2.jpg" alt="">
      <div class="box">
        <h3 class="text-2xl font-normal pl-2">Amazon Forest</h3>
        <p class="text-lg pl-2">Amazon Forest is one of the largest forest in the world and It has many species</p>
        <button class="text-base absolute cursor-pointer pb-1"><a
            class="bg-gradient-to-r from-violet-500 to-fuchsia-500 rounded-sm m-1 transition-colors" href="">Read
            More</a></button>
      </div>
    </div>

      <div class="text-2xl font-normal pl-2">
          <button class="bg-gradient-to-r from-violet-500 to-fuchsia-500 rounded-sm m-4 transition-colors text-white"><a href="landingPage.php" class="hover:"></a>  Explore More</button>
      </div>
  </div>



  <footer class="bg-indigo-900 w-full h-0 mt-5">
    <div class="bg-indigo-900 w-full mt-8">
      <div class="sm:flex sm:items-center sm:justify-between">
        <a href="#" class="flex items-center mb-1 sm:mb-0 space-x-3 rtl:space-x-reverse">
          <img src="http://localhost/Blog website/Css/logo.png" class="rounded-full h-20" alt="WanderWords Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">WanderWords</span>
        </a>
        <ul class="flex flex-wrap items-center text-base font-medium text-white sm:mb-0">
          <li>
            <a href="#" class="hover:underline me-4 md:me-6">About</a>
          </li>
          <li>
            <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
          </li>
          <li>
            <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
          </li>
          <li>
            <a href="#" class="hover:underline">Contact</a>
          </li>
        </ul>
      </div>
      <hr class="my-2 border-gray-200 sm:mx-auto dark:border-gray-900 lg:my-9 h-0" />
      <span class="block text-sm text-white sm:text-center dark:text-gray-400">© 2023 <a href="#"
          class="hover:underline">WanderWords™</a>. All Rights Reserved.</span>
    </div>
  </footer>









  <!---Tailwind Css-->
  <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>