<?php
session_start();

if (!isset($_SESSION['userid']) && !isset($_SESSION['useruid'])) {
  header('Location: ../../index.php');
  exit;
}

$user = $_SESSION['useruid'];
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
            <p class="pb-3 mt-6 text-lg font-normal text-center text-gray-500">OUR TEAM - GROUP 1</p>
            <h1 class="w-5/6 pb-6 mx-auto text-3xl font-extrabold text-center text-gray-700 xl:text-4xl sm:w-4/6">The Talented People Behind This Project</h1>
          </div>
        </div>
        <div class="w-auto px-10 pt-10">
          <div class="container mx-auto">
            <div class="grid items-center grid-cols-2">
              <div class="relative mt-16 mb-32">
                <div class="overflow-hidden rounded ">
                  <div class="absolute flex justify-center w-full -mt-20">
                    <div class="w-32 h-32">
                      <img src="https://scontent.fmnl6-2.fna.fbcdn.net/v/t39.30808-6/269843269_4886920621330049_1244534225231057519_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeGmWr8AA36YsAQ5yByocf_A3uW3Kh7yx87e5bcqHvLHzswAlSOaS48l2ezpBsOWwFOll8w7QfNsV8BxBAG7EVCO&_nc_ohc=IiKoVcDv5JwAX-lLE6p&_nc_ht=scontent.fmnl6-2.fna&oh=00_AT-ieaLYEHGNkfUwOE1tQyKciYFYAlY0DZcI5atmtFchwg&oe=61CDF281" alt="Display Picture of Lance Martija" role="img" class="object-cover w-full h-full rounded-full " />
                    </div>
                  </div>
                  <div class="px-6 mt-16">
                    <h1 class="mb-1 text-3xl font-bold text-center">Lance Martija</h1>
                    <p class="text-sm text-center text-gray-700">Frontend / Backend Developer / Leader</p>
                  </div>
                </div>
              </div>
              <div class="relative mt-16 mb-32">
                <div class="overflow-hidden rounded ">
                  <div class="absolute flex justify-center w-full -mt-20">
                    <div class="w-32 h-32">
                      <img src="https://scontent.fmnl6-2.fna.fbcdn.net/v/t1.6435-9/80500970_3231758290232862_7857426678421651456_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeEBdsdE71C6d3I2yiVrJLkmh5KCR71YV2SHkoJHvVhXZAKKKk31gM5YJhy91SiTPmMH6HYk7zG_Ykakz4NsYI2K&_nc_ohc=WTlodiSI_VkAX9koVcl&tn=jSUmIEfNXXr1zfXL&_nc_ht=scontent.fmnl6-2.fna&oh=00_AT8-PcWk21_yez991z2Q-96Rb1BltRxqYUroI4J3H0qlvg&oe=61EC8270" alt="Display Picture of Alistaire" role="img" class="object-cover w-full h-full rounded-full " />
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
                      <img src="https://scontent.fmnl6-2.fna.fbcdn.net/v/t1.6435-9/131965553_4169432756418956_2705444025583127046_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=174925&_nc_eui2=AeE9abIkYAzcSiw2kHb47eSKdM6TTz0EH5h0zpNPPQQfmJ-LKvEZI6OnQp520BS2Z_C6Ps-zE4PAcjjP8e5IaKig&_nc_ohc=BB8FMFH-hCMAX-jaLSO&_nc_ht=scontent.fmnl6-2.fna&oh=00_AT-fX4sNv7JLmaRhZfRsWmJP2I6c69eC9QlzOed5zdnUbg&oe=61ECAC4D" alt="Display Picture of Carl" role="img" class="object-cover w-full h-full rounded-full " />
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