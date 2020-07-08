<?php 

session_start();
session_unset();
session_destroy();

header("Location: /Portfolio/Portfolio/index.php");