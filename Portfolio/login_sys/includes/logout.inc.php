<?php 

session_start();
session_unset();
session_destroy();

header("Location: /Companies/Portfolio/index.php");