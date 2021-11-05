<?php
session_start();

session_unset();
session_destroy();

header("Location: /fastplate/frontend/mainpage/main.php");
