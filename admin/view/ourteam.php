<?php
session_start();

if (!isset($_SESSION['userid']) && !isset($_SESSION['useruid'])) {
  header('Location: ../../index.php');
  exit;
}

$user = $_SESSION['useruid'];
$currentpage = 'Our Team';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Team - Group 1</title>
  <link rel="stylesheet" href="../../src/css/tailwind.css">
</head>

<body>
  <?php include_once '../templates/navbar.php'; ?>
  <div class="flex pt-16 overflow-hidden bg-white">
    <?php include_once '../templates/sidebar.php'; ?>
    <main id="main-content" class="relative w-full ml-64 overflow-y-auto bg-gray-50">
      <div class="m-6 bg-white rounded-lg shadow">
        <div class="container flex justify-center mx-auto">
          <div>
            <p class="pb-3 mt-6 text-lg font-normal text-center text-gray-700">OUR TEAM - GROUP 1</p>
            <h1 class="w-5/6 pb-6 mx-auto text-3xl font-extrabold text-center text-gray-900 xl:text-4xl sm:w-4/6">The Talented People Behind This Project</h1>
          </div>
        </div>
        <div class="w-auto px-10 pt-10">
          <div class="container mx-auto">
            <div class="grid items-center grid-cols-2">
              <div class="relative mt-16 mb-32">
                <div class="overflow-hidden rounded ">
                  <div class="absolute flex justify-center w-full -mt-20">
                    <div class="w-32 h-32">
                      <img src="../../src/img/lance.jpg" alt="Display Picture of Lance Martija" role="img" class="object-cover w-full h-full rounded-full " />
                    </div>
                  </div>
                  <div class="px-6 mt-16">
                    <h1 class="mb-1 text-3xl font-bold text-center">Lance Martija</h1>
                    <p class="text-sm text-center text-gray-700">Lead Frontend/Backend Developer</p>
                  </div>
                </div>
              </div>
              <div class="relative mt-16 mb-32">
                <div class="overflow-hidden rounded ">
                  <div class="absolute flex justify-center w-full -mt-20">
                    <div class="w-32 h-32">
                      <img src="../../src/img/alistaire.jpg" alt="Display Picture of Alistaire" role="img" class="object-cover w-full h-full rounded-full " />
                    </div>
                  </div>
                  <div class="px-6 mt-16">
                    <h1 class="mb-1 text-3xl font-bold text-center">Alistaire Carandang</h1>
                    <p class="text-sm text-center text-gray-700">Backend Developer</p>
                  </div>
                </div>
              </div>
              <div class="relative mt-16 mb-32">
                <div class="overflow-hidden rounded ">
                  <div class="absolute flex justify-center w-full -mt-20">
                    <div class="w-32 h-32">
                      <img src="../../src/img/carl.jpg" alt="Display Picture of Carl" role="img" class="object-cover w-full h-full rounded-full " />
                    </div>
                  </div>
                  <div class="px-6 mt-16">
                    <h1 class="mb-1 text-3xl font-bold text-center">Carl Gonzales</h1>
                    <p class="text-sm text-center text-gray-700">Tester / Quality Assurance</p>
                  </div>
                </div>
              </div>
              <div class="relative mt-16 mb-32">
                <div class="overflow-hidden rounded ">
                  <div class="absolute flex justify-center w-full -mt-20">
                    <div class="w-32 h-32">
                      <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="Display Picture of Diosdado" role="img" class="object-cover w-full h-full rounded-full " />
                    </div>
                  </div>
                  <div class="px-6 mt-16">
                    <h1 class="mb-1 text-3xl font-bold text-center">Diosdado Umali Jr.</h1>
                    <p class="text-sm text-center text-gray-700">Frontend Developer</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="mt-10 mb-6">
        <p class="text-sm text-center text-gray-400">&#169; 2021 Webdvt SA3 <b>Group 1</b>. All rights reserved.</p>
      </footer>
    </main>
  </div>
</body>

</html>