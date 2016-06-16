<?php

session_start();

session_unset();

session_destroy();

header("Location: /PHP_Login_Attempt_3");

?>