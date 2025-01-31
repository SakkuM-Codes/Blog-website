<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include 'CSS/landingPage.css'; ?></style>
    <title>Header Page</title>
</head>

    <body class="bg-slate-950 p-0 m-0 border-box flex-col relative">
  <div class="bg-indigo-900">
    <nav class="list-none overflow-hidden">
      <ul class="flex flex-wrap w-full block py-4 px-3 text-white ">
        <li class="text-center px-3"><a class="hover:underline" href="#">Home</a></li>
        <li class="text-center px-3"><a class="hover:underline" href="#">About</a></li>
        <li class="text-center px-3"><a class="hover:underline" href="#">Contact</a></li>
        <li class="text-center px-3" id="dropdownNavbarLink"> 
          <div>
              <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover"  data-dropdown-trigger="hover" class="flex items-center justify-between w-full py-2 px-3 text-white rounded-sm md:hover:underline md:border-0 md:p-0 md:w-auto">Blogs<svg class="w-2.5 h-2.5 ms-3" aria-hidden="false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
              </svg></button>
              <!-- Dropdown menu -->
            <div id="dropdownHover" class="z-10 hidden font-normal bg-indigo-900 divide-y divide-gray-100 rounded-lg shadow-sm w-44">
                <ul class="py-2 text-sm text-white" aria-labelledby="dropdownHoverButton">
                  <li>
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white px-12 py-3 bg-indigo-900 text-center " type="button">
                    <a href="createBlog.php" class="hover:underline">Create Blog</a>
                    </button>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:underline">View Blog</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:underline">Bookmark</a>
                  </li>
                </ul>
          </div>
        </li>
       <div>
          <li>
            <?php $isLoggedIn = isset($_SESSION['auth']);?>
            <?php if (!$isLoggedIn): ?>
                <button class="flex flex-wrap justify-between w-full py-2 px-3 text-white rounded-sm bg-indigo-900 md:hover:underline md:border-0 md:p-0 md:w-auto">
                    <a href="/login.php" class="hover:underline">LogIn</a>
                </button>
                <a href="/signup.php" class="text-white hover:underline">Sign Up</a>
            <?php endif; ?>
          </li>
        </div>
      </ul>
    </nav>
  </div>

  <!---Tailwind Css-->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.0.0/dist/flowbite.min.js"></script>


  </body>
  </html>