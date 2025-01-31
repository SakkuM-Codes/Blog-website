<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include 'Css/landingPage.css'; ?></style>
    <title>Landing Page</title>
</head>

  <body class="bg-slate-950 p-0 m-0 border-box flex-col relative">
      <?php include 'header.php'?>
      <?php include 'filter-data.php'?>

  <div class="flex flex-wrap justify-center gap-7	mx-4 my-12">
    <!-- Card-1 -->
    <div
      class="card w-64 items-start overflow-hidden text-white flex-col cursor-pointer rounded-md border-2 border-solid border-white">
      <img class="w-full" src="http://localhost/Blog website/Images/image1.jpg" alt="flower image">
      <div class="box">
        <h3 class="text-2xl font-normal pl-2 text-white">Vadodara Garden</h3>
        <p class="text-lg pl-2 text-white">Vadodara Garden is a best garden and has many structures formed with flowers</p>
        <button class="text-base absolute cursor-pointer pb-1">
        <a class="bg-gradient-to-r from-violet-500 to-fuchsia-500 rounded-sm m-1 transition-colors"
            href="detail.php">Read More</a></button>
      </div>
    </div>

    <!---Card2-->
    <div
      class="card w-64 items-start overflow-hidden text-white flex-col cursor-pointer rounded-md border-2 border-solid border-white">
      <img class="w-full" src="http://localhost/Blog website/Images/image2.jpg" alt="flower image">
      <div class="box">
        <h3 class="text-2xl font-normal pl-2 text-white">Amazon Forest</h3>
        <p class="text-lg pl-2 text-white">Amazon Forest is one of the largest forest in the world and It has many species</p>
        <button class="text-base absolute cursor-pointer pb-1"><a
            class="bg-gradient-to-r from-violet-500 to-fuchsia-500 rounded-sm m-1 transition-colors" href="detail.php">Read More</a></button>
      </div>
    </div>
  </div>

  <div class="row flex items-center justify-items-center">
  <button  value="page" class="items-center  rounded-md rounded-r-none border border-r-0 border-white-300 py-2 px-3 text-center text-sm transition-all shadow-sm hover:shadow-lg text-white hover:text-white hover:bg-indigo-800 hover:border-indigo-800 focus:text-white focus:bg-indigo-800 focus:border-indigo-800 active:border-indigo-800 active:text-white active:bg-indigo-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-4 h-4">
      <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
    </svg>
  </button>
  <button value="page"  class="rounded-md rounded-r-none rounded-l-none border border-r-0 border-white py-2 px-3 text-center text-sm transition-all shadow-sm hover:shadow-lg text-white hover:text-white hover:bg-indigo-800 hover:border-indigo-800 focus:text-white focus:bg-indigo-800 focus:border-indigo-800 active:border-indigo-800 active:text-white active:bg-indigo-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
    1
  </button>
  <button value="page"  class="rounded-md rounded-r-none rounded-l-none border border-r-0 border-white py-2 px-3 text-center text-sm transition-all shadow-sm hover:shadow-lg text-white hover:text-white hover:bg-indigo-800 hover:border-indigo-800 focus:text-white focus:bg-slate-800 focus:border-indigo-800 active:border-indigo-800 active:text-white active:bg-indigo-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
    2
  </button>
  <button  value="page"  class="rounded-md rounded-r-none rounded-l-none border border-r-0 border-white py-2 px-3 text-center text-sm transition-all shadow-sm hover:shadow-lg text-white hover:text-white hover:bg-slate-800 hover:border-indigo-800 focus:text-white focus:bg-indigo-800 focus:border-indigo-800 active:border-indigo-800 active:text-white active:bg-indigo-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
    3
  </button>
  <button  value="page"  class="rounded-md rounded-r-none rounded-l-none border border-r-0 border-white py-2 px-3 text-center text-sm transition-all shadow-sm hover:shadow-lg text-white hover:text-white hover:bg-indigo-800 hover:border-indigo-800 focus:text-white focus:bg-indigo-800 focus:border-indigo-800 active:border-indigo-800 active:text-white active:bg-indigo-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
    4
  </button>
  <button  value="page"  class="rounded-md rounded-r-none rounded-l-none border border-r-0 border-white py-2 px-3 text-center text-sm transition-all shadow-sm hover:shadow-lg text-white hover:text-white hover:bg-indigo-800 hover:border-indigo-800 focus:text-white focus:bg-indigo-800 focus:border-indigo-800 active:border-indigo-800 active:text-white active:bg-indigo-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
    5
  </button>
  <button value="page" class="rounded-md rounded-l-none border border-slate-300 py-2 px-3 text-center text-sm transition-all shadow-sm hover:shadow-lg text-slate-600 hover:text-white hover:bg-indigo-800 hover:border-indigo-800 focus:text-white focus:bg-indigo-800 focus:border-indigo-800 active:border-indigo-800 active:text-white active:bg-indigo-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-4 h-4">
      <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
    </svg>
  </button>
</div>


  <?php
        include "connection.php";

        // variable to store number of rows per page
        $limit = 10;

        // query to retrieve all rows from the table users
        $getQuery = "SELECT * FROM users";

        // get the result
        $result = mysqli_query($conn, $getQuery);
        $total_rows = mysqli_num_rows($result);

        // get the required number of pages
        $total_pages = ceil($total_rows / $limit);

        // update the active page number
        if (!isset($_GET['page'])) {
            $page_number = 1;
        } else {
            $page_number = $_GET['page'];
        }

        // get the initial page number
        $initial_page = ($page_number - 1) * $limit;

        // get data of selected rows per page
        $getQuery = "SELECT * FROM users LIMIT $initial_page, $limit";
        $result = mysqli_query($conn, $getQuery);

        // display the retrieved result on the webpage
        while ($row = mysqli_fetch_array($result)) {
            echo $row['Id'] . ' ' . $row['username'] . '</br>';
        }

        // show page number with link
        for ($i = 1; $i <= $total_pages; $i++) {
            echo '<a href="landingPage.php?page=' . $i . '">' . $i . ' </a>';
        }
    ?>










   <footer class="bg-indigo-900 w-full mt-52 h-0">
    <div class="bg-indigo-900 w-full">
      <div class="flex items-center justify-between">
        <a href="#" class="flex items-center mb-1 ">
          <img src="http://localhost/Blog website/Css/logo.png" class="rounded-full h-20" alt="WanderWords Logo" />
          <span class="self-center text-2xl font-semibold text-white">WanderWords</span>
        </a>
        <ul class="flex flex-wrap items-center text-base font-medium text-white block p-1">
          <li class="ml-4 p-2">
            <a href="#" class="hover:underline me-3 md:me-5">About</a>
          </li>
          <li class="ml-4 p-2">
            <a href="#" class="hover:underline me-3 md:me-5">Privacy Policy</a>
          </li>
          <li class="ml-4 p-2">
            <a href="#" class="hover:underline me-3 md:me-5">Licensing</a>
          </li>
          <li class="ml-4 p-2">
            <a href="#" class="hover:underline">Contact</a>
          </li>
        </ul>
      </div>
      <hr class="border-gray-200 lg:my-4 mt:0" />
      <span class="block text-sm text-white text-center">© 2023 <a href="#"
          class="hover:underline">WanderWords™</a>. All Rights Reserved.</span>
    </div>
  </footer>

   <!---Tailwind Css-->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.0.0/dist/flowbite.min.js"></script>

</body>
</html>