<?php

if (isset($_POST["submit"])) {
    #Grabbing data
    $studentUid = $_POST["studentid"];

    include_once "../databases/database.classes.php";
    include_once "../classes/student-login.classes.php";
    include_once "../controller/student-login.contr.php";

    $login = new LoginCtr($studentUid);

    $login->loginUser();

    header('Location: ../view/dashboard.php');
}
