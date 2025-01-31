
<?php

include 'connection.php';

// Fetch categories and search query
$category = isset($_POST['category']) ? $_POST['category'] : '';
$search = isset($_POST['search']) ? $_POST['search'] : '';

// Build query
$query = "SELECT * FROM blogs WHERE 1";

if (!empty($category)) {
    $query .= " AND category = '$category'";
}

if (!empty($search)) {
    $query .= " AND (title LIKE '%$search%' OR content LIKE '%$search%')";
}

$result = $conn->query($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include  'F:/New folder/htdocs/Blog website/CSS/'; ?></style>
    <title>Filter Data</title>
</head>
<body>
<form class="max-w-lg mx-auto">
    <div class="flex relative">
        <button id="dropdown-button" data-dropdown-toggle="dropdown" class="shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center bg-indigo-900 text-white border border-gray-300 rounded-s-lg hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-gray-100" type="button"> All categories <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></button>
        <div id="dropdown" class="z-10 hidden bg-indigo-900 divide-y divide-gray-100 rounded-lg shadow-sm w-44">
            <ul class="py-2 text-sm text-white" aria-labelledby="dropdown-button">
            <li>
                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-slate-800">Technology</button>
            </li>
            <li>
                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-slate-800">Travelly</button>
            </li>
            <li>
                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-slate-800">Food</button>
            </li>
            <li>
                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-slate-800">Sports</button>
            </li>
            </ul>
        </div>
        <div class="relative w-full">
            <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Search Blogs" required />
            <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium bg-indigo-900 h-full text-white rounded-e-lg border border-white hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </div>
    </div>
</form>




<!---Flowbite---->
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>

<!---Tailwind Css-->
  <script src="https://cdn.tailwindcss.com"></script>


</body>
</html>

<?php
$conn->close();
?>