<?php
session_start();
include_once "../databases/database.classes.php";

include_once "../classes/student-login.classes.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Dashboard</title>
</head>

<style>
    .hr1 {
        margin: 50px -8px 20px;
        border-top: 1px solid #c9c7c7;
    }

    .dash {
        position: absolute;
        top: 70px;
        left: 400px;
    }

    .name {
        font-size: 24px;
        position: absolute;
        top: 10px;
        font-weight: bold;
        padding: 14px 100px 14px 15px;

    }

    .line {
        position: relative;
        right: 400px;
        transform: rotate(90deg);
        max-width: 90%;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        max-width: 20%;
        font-size: 24px;

    }

    li a {
        display: block;
        color: #000;
        padding: 14px 100px 14px 15px;
        text-decoration: none;

    }

    li a:hover {
        background-color: royalblue;
        color: white;
        border-radius: 10px;
        padding: 15px;
        width: 310px;
    }

</style>


<body>
    <span class="name"><i class="bi bi-person-circle"></i>&nbsp;<?php echo $_SESSION["lname"] . " " . $_SESSION["fname"]; ?></span><br>
    <hr class="hr1">
    <hr class="line">
    <h1 class="dash">Dashboard</h1>

    <ul>
        <li><a href="#home"><span><i class="bi bi-house"></i>&nbsp;Home</span></a></li>
        <li><a href="#news"><span><i class="bi bi-journals"></i>&nbsp;Subjects</span></a></li>
        <li><a href="#contact"><span><i class="bi bi-bar-chart"></i>&nbsp;Student Info</span></a></li>
        <li><a href="#about"><span><i class="bi bi-door-open"></i>&nbsp;Rooms</span></a></li>
    </ul>


</body>

</html>