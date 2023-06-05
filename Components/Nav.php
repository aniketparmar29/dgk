<?php 
require './header.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
 
  
<nav class="bg-white fixed w-full border-gray-200 z-50 dark:bg-gray-900 pb-500 ">
<div class="text-white   font-semibold  border-gray-200 z-50 p-2 h-12 w-full" style="background-color: rgb(101 163 13);" > Welcome to our Organic store jay ho village!</div>
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 py-3 text-lg">
    <a href="./index.php" class="flex items-center">
        <img class="h-24" src="data:image/jpeg;base64,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" class="h-8 mr-3" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Jay Ho Vilage</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"  aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="./index.php" class="block py-2 pl-3 pr-4 text-white  rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark "style="color: rgb(101 163 13)" aria-current="page">Home</a>
        </li>
        <li>
          <a href="./about" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
        </li>
        <li>
          <a href="./product.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Products</a>
        </li>
        <li>
          <a href="./farmers" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Meet our farmers</a>
        </li>
        <li>
          <a href="./contect" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
        </li>
        <?php
              if (isset($_SESSION['auth'])) {
              ?>
               
               
<button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="flex flex-row gap-x-1 items-center" type="button"><p class="nav-item"> <?= $_SESSION['username']; ?></p><i class="fa-solid fa-caret-down ps-1"></i></button>
<!-- Dropdown menu -->
<div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">My Order</a>
      </li>
      <?php
if (isset($_SESSION['role']) && $_SESSION['role'] === "admin") {
?>
  <li>
    <a href="./Admin" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Admin</a>
  </li>
<?php 
}
?>

      <li>
        <a href="./logout.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</a>
      </li>
    </ul>
</div>

               <?php
              } else {
              ?>
        <li>
          <a href="./login.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>
        </li>
        <?php
              }
              ?>
      </ul>
    </div>
  </div>
</nav>

</body>
</html>