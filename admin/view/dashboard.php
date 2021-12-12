<?php
session_start();

if (!isset($_SESSION['userid']) && !isset($_SESSION['useruid'])) {
  header('Location: ../../index.php');
}

$user = $_SESSION['useruid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="../../css/tailwind.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
  <main>
    <nav class="fixed z-30 w-full bg-white border-b border-gray-200">
      <div class="p-3">
        <div class="flex items-center justify-between">
          <div class="flex items-center justify-start">
            <a href="#" class="ml-3 font-bold text-gray-700 uppercase transition duration-200 hover:text-gray-900">Student Grading System</a>
          </div>
          <div class="flex items-center">
            <div class="relative inline-block mr-3 text-left group">
              <button type="button" class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <?= $user; ?>
              </button>
              <div class="mt-2">
                <ul class="absolute right-0 hidden w-32 origin-top-right bg-white rounded-md shadow-lg group-hover:block ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                  <li class="py-1 hover:bg-gray-400">
                    <a href="#" class="flex items-center justify-center px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-2"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                      </svg>
                      Sign out</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </main>
</body>

</html>