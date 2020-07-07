<?php

//checking if user forced url

if (isset($_POST['signup-submit'])) {

    //fetch s-vars
    $client_name = $_POST['cltname'];
    $client_username = $_POST['username'];
    $client_mailid = $_POST['mailid'];
    $client_password = $_POST['pwd'];
    $client_passwordRepeat = $_POST['pwd-repeat'];

    include ("/var/www/html/config_portfolio/DB-config.php");

    //connection
    $conn = mysqli_connect($host, $user, $passwd, 'portfolio');
    unset($host, $user, $passwd);

    //check connection

    //Error Handling
    //E1 - VAILDATION FOR EMPTYFIELDS
    if (empty($client_name) || empty($client_username) || empty($client_password) || empty($client_passwordRepeat)) {
        header("Location: /Portfolio/login_sys/signup.php?error=emptyfields");
        exit();
    }
    //E2 - VALIDATON USERNAME & PASSWORD
    elseif (!filter_var($client_mailid, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $client_username)) {
            header("Location: /Portfolio/login_sys/signup.php?error=invalidusernamemailid");
            exit(); 
    }
    //E3 - VALIDATION FOR MAILID
    elseif (!filter_var($client_mailid, FILTER_VALIDATE_EMAIL)) {
        header("Location: /Portfolio/login_sys/signup.php?error=invalidmailid&uid=".$client_username);
        exit();
    }
    //E4 - VALIDATION FOR USERNAME
    elseif (!preg_match("/^[a-zA-Z0-9]*$/", $client_username)) {
        header("Location: /Portfolio/login_sys/signup.php?error=invlaiduid&mail=".$client_mailid);
    }

    //E5 - PASSWORD - REPEAT MISMATCHED
    elseif ($client_password !== $client_passwordRepeat) {
        header("Location: /Portfolio/login_sys/signup.php?error=passwordcheck&userid".$client_username."&mailid=".$client_mailid);
        exit();
    }

    //E6 - CHECK IF USERNAME IS TAKEN
    else {
        //using prepared statements
        $sql = "SELECT clt_username FROM clients WHERE clt_username=?";

        //stmt
        $stmt = mysqli_stmt_init($conn);
        //check stmt_prepare
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: /Portfolio/login_sys/signup.php?error=sqlerror0");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $client_username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            
            //get num of rows to check if any username exists
            $resultCheck = mysqli_stmt_num_rows($stmt);

            if ($resultCheck > 0) {
                header("Location: /Portfolio/login_sys/signup.php?error=usertaken&mail=".$client_mailid);
                exit();
            }
            else {

                $sql = "INSERT INTO clients (clt_name, clt_username, clt_mail, clt_passwd)
                VALUES (?, ?, ?, ?)";

                $stmt = mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: /Portfolio/login_sys/signup.php?error=sqlerror1");
                    exit();
                }
                else {
                    //hashing before inserting passwd into db
                    $hashedPwd = password_hash($client_password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "ssss", $client_name, $client_username, $client_mailid, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);

                    header("Location: /Portfolio/index.html?signup=success");
                    exit();
                }

            }

        }

    }
    //close the conn

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

else {
    header("Location: /Portfolio/signup.php");
}