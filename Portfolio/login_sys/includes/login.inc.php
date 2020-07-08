<?php

//check if user force url accesed this site.

if (isset($_POST['login-submit'])) {
    
    //connection
    include ("/var/www/html/config_portfolio/DB-config.php");

    $conn = mysqli_connect($host, $user, $passwd, 'portfolio');
    unset($host, $user, $passwd);

    //s-var for mail/username & password
    $mailuid = $_POST['username'];
    $password = $_POST['pwd'];
    
    //E1 - empty fields
    if (empty($mailuid) || empty($password)) {
        header("Location: /Portfolio/Portfolio/login_sys/login.php?error=emptyfields");
        exit();
    }
    //V1 - CHECK IF USER EXISTS
    else {
        $sql = "SELECT * FROM clients WHERE clt_username=? OR clt_mail=?;";
        
        $stmt = mysqli_stmt_init($conn);

        //check stmt prep
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: /Portfolio/Portfolio/login_sys/login.php?error=sqlerror0");
        }
        //no error so continue
        else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            //fetch the results as assoc array
            if ($row = mysqli_fetch_assoc($result)) {
                //getting password and verify
                $pwdCheck = password_verify($password, $row['clt_passwd']);

                //checking password
                if ($pwdCheck == false) {
                    header("Location: /Portfolio/Portfolio/login_sys/login.php?error=wrongpwd0");
                    exit();
                }
                else if ($pwdCheck == true) {
                    //password matched so allow user
                    //so start a session
                    session_start();
                    //get data for session elements client_id and client_uname
                    $_SESSION['client_id'] = $row['clt_id'];
                    $_SESSION['client_uname'] = $row['clt_username'];

                    header("Location: /Portfolio/Portfolio/index.php?login=SUCCESS");
                    exit();
                }
                else {
                    header("Location: /Portfolio/Portfolio/index.php?error=seriouswrongpwd1");
                    exit();
                }
            }
            // user doesn't exist
            else {
                header("Location: /Portfolio/Portfolio/index.php?error=nouser");
                exit();
            }


        }

    }

}
else {
    header("Location: /Portfolio/Portfolio/login_Sys/login.php");
    exit();
}