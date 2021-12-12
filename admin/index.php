<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="../css/tailwind.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
  <main class="flex flex-col items-center justify-center h-screen bg-gray-50 font-inter">
    <header class="pb-8">
      <h1 class="mb-3 text-5xl text-center text-gray-700">Sign in to your account</h1>
    </header>
    <section class="w-full bg-white shadow rounded-xl md:mt-0 sm:max-w-screen-sm xl:p-0">
      <div class="p-6 space-y-8 sm:p-8 lg:p-16">
        <h2 class="text-2xl font-bold text-gray-700 lg:text-3xl">Administrator Login</h2>
        <form class="mt-8 space-y-6" action="includes/admin-login.inc.php" method="post">
          <div>
            <label for="username" class="block mb-2 text-sm font-medium text-gray-700">Your username</label>
            <input type="text" name="username" class="bg-gray-50 border border-gray-300  text-gray-900 sm:text-sm rounded-lg block w-full p-2.5" placeholder="username" required>
          </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Your password</label>
            <input type="password" name="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5" required>
          </div>
          <div class="flex items-start">
            <!-- <div class="flex items-center h-5">
              <input id="remember" aria-describedby="remember" name="remember" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50" required="">
            </div>
            <div class="ml-3 text-sm">
              <label for="remember" class="font-medium text-gray-700">Remember me</label>
            </div> -->
            <a href="#" onclick="alert('Please contact other administrators for further instructions.');" class="ml-auto text-sm text-green-600 hover:underline">Lost Password?</a>
          </div>
          <button type="submit" name="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white transition duration-200 bg-green-500 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-4 focus:ring-green-500 focus:ring-opacity-50 sm:w-auto">Login to account</button>
        </form>
        <div class="text-sm text-gray-500">
          Not an admin?<br><a href="../" class="text-green-600 hover:underline">Return to selection menu</a>
        </div>
      </div>
    </section>
    <footer class="absolute bottom-0 left-0 right-0 pb-6">
      <p class="text-sm text-center text-gray-400">&#169; 2021 Webdvt SA3 Group 1. All rights reserved.</p>
    </footer>
  </main>
</body>

</html>