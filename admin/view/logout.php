<?php

# change this and put it on includes next time

session_start();
session_unset();
session_destroy();

header('Location: ../../index.php');
