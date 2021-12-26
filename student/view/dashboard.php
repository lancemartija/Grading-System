<?php
session_start();

if (!isset($_SESSION['student']) && !isset($_SESSION['studentid'])) {
  header('Location: ../../index.php');
  exit;
}

?>

<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student's Dashboard</title>
  <link rel="stylesheet" href="../../src/css/tailwind.css">
</head>

<body class="h-full">
  <div class="min-h-full">
    <nav class="bg-gray-800">
      <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-indigo-400" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
              </svg>
            </div>
            <div class="hidden md:block">
              <div class="flex items-baseline ml-10 space-x-4">
                <a href="#" class="px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-md" aria-current="page">Dashboard</a>
                <a href="#" class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Subjects</a>
                <a href="#" class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Grades</a>
              </div>
            </div>
          </div>
          <div class="hidden md:block">
            <div class="flex items-center ml-4 md:ml-6">
              <div class="relative group">
                <div class="flex items-center">
                  <span class="mr-3 text-sm font-semibold text-gray-300 cursor-pointer group-hover:text-white"><?= $_SESSION['student']; ?></span>
                  <button type="button" class="flex items-center max-w-xs text-sm bg-gray-800 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                    <span class="sr-only">Open user menu</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-300 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </button>
                </div>
                <div class="absolute right-0 hidden w-48 pt-3 origin-top-right rounded-md shadow-lg group-hover:block">
                  <a href="../includes/logout.inc.php" class="flex px-4 py-2 text-sm text-gray-700 bg-white rounded-md hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Sign out</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <header class="bg-white shadow">
      <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">
          <?= $_SESSION['lname']; ?>'s Dashboard
        </h1>
      </div>
    </header>
    <main>
      <div class="py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <!-- Replace with your content -->
        <div class="px-4 py-6 sm:px-0">
          <div class="border-4 border-gray-200 border-dashed rounded-lg h-96"></div>
        </div>
        <!-- /End replace -->
      </div>
    </main>
  </div>

</body>

</html>