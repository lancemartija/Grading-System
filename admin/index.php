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
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <main class="flex flex-col items-center justify-center h-screen bg-gray-50">
    <header class="pb-8">
      <h1 class="mb-3 text-6xl font-light text-center text-gray-700"><b>S</b>ign in to your account</h1>
      <p class="text-base text-center text-gray-700 font-extralight">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </header>
    <section class="w-full bg-white shadow rounded-xl md:mt-0 sm:max-w-screen-sm xl:p-0">
      <div class="p-6 space-y-8 sm:p-8 lg:p-16">
        <h2 class="text-2xl font-bold text-gray-700 lg:text-3xl">Administrator Login</h2>
        <form class="mt-8 space-y-6" action="view/dashboard.php" method="post">
          <div>
            <label for="username" class="block mb-2 text-sm font-medium text-gray-700">Your username</label>
            <input type="text" name="username" class="bg-gray-50 border border-gray-300  text-gray-900 sm:text-sm rounded-lg block w-full p-2.5" placeholder="username" required>
          </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Your password</label>
            <input type="password" name="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5" required>
          </div>
          <button type="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white transition duration-200 bg-green-600 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-500 focus:ring-opacity-50 sm:w-auto">Login to account</button>
        </form>
      </div>
    </section>
  </main>
</body>

</html>