<?php

    if (isset($_POST['login-submit'])) {

        //connection
        include ("/var/www/html/config_portfolio/DB-config.php");

        $conn = mysqli_connect($host, $user, $passwd, 'portfolio');
        unset($host, $user, $passwd);

        //short vars
        $username = $_POST['username'];
        $userpassword = $_POST['password'];

        //E1 - EMPTY FIELDS
        if (empty($username) || empty($userpassword)) {
            header("Location: /Companies/TexSys_Corp/Dev-workspace/Dev_login.php?error=emptyfields");
            exit();
        }
        //v1 - AUTH
        else {
            //SQL
            $sql = 'SELECT * FROM developers WHERE dev_username=? OR dev_uid=?;';

            //STMT INIT
            $stmt = mysqli_stmt_init($conn);

            //CONNECT VERIFICATION
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: /Companies/TexSys_Corp/Dev-workspace/Dev_login.php?error=sqlerror0");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt, "ss", $username, $username);
                mysqli_stmt_execute($stmt);
                //get results into a var
                $result = mysqli_stmt_get_result($stmt);


                //Fetch row
                if ($row = mysqli_fetch_assoc($result)) {
                    //checking password
                    $passwdCheck = password_verify($userpassword, $row['dev_password']);

                    //checking password verification
                    if ($passwdCheck == false) {
                        header("Location: /Companies/TexSys_Corp/Dev-workspace/Dev_login.php?error=wrongpwd");
                        exit();
                    }
                    elseif ($passwdCheck == true) {
                        //CREATE SESSION
                        session_start();
                        
                        //STORE dev_uid and dev_username as SESSION VALUES
                        $_SESSION['userId'] = $row['dev_uid'];
                        $_SESSION['userName'] = $row['dev_username'];

                        //redirect to dashboard 
                        header("Location: /Companies/TexSys_Corp/Dev-workspace/workspace/dashboard.php?login=Success");
                        exit();
                    }
                    //safe securing loop
                    else {
                        header("Location: /Companies/TexSys_Corp/Dev-workspace/workspace/Dev_login.php?error=wrongpwd1");
                        exit();
                    }
                }
                //NO USER
                else {
                    header("Location: /Companies/TexSys_Corp/Dev-workspace/workspace/dashboard.php?error=nouser");
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    else {
        header("Location: /Companies/TexSys_Corp/Dev-workspace/Dev_login.php?error=accessdenied");
        exit();
    }