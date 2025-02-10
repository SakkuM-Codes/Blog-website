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



  <div class="row flex flex-wrap items-center justify-items-center">
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

$limit = 10;

$getQuery = "SELECT * FROM users";
$result = mysqli_query($conn, $getQuery);
$total_rows = mysqli_num_rows($result);

$total_pages = ceil($total_rows / $limit);

if (!isset($_GET['page'])) {
    $page_number = 1;
} else {
    $page_number = $_GET['page'];
}

$initial_page = ($page_number - 1) * $limit;

$getQuery = "SELECT * FROM users LIMIT $initial_page, $limit";
$result = mysqli_query($conn, $getQuery);

while ($row = mysqli_fetch_array($result)) {
    echo $row['Id'] . ' ' . $row['username'] . '</br>';
}

echo '<div class="pagination">';
for ($i = 1; $i <= $total_pages; $i++) {
    $active_class = ($i == $page_number) ? 'class="active"' : '';
    echo '<a href="landingPage.php?page=' . $i . '" ' . $active_class . '>' . $i . '</a>';
}
echo '</div>';
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