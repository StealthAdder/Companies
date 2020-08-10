<?php

session_start();
session_unset();
session_destroy();

header("Location: /Companies/TexSys_Corp/Dev-workspace/Dev_Login.html?logout=success");