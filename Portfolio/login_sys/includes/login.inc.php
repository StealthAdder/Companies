<?php

//check if user force url accesed this site.

if (isset($_POST['login-submit'])) {
    
    //connection
    include ("/var/www/html/access/companies_access.php");
        
        // //connection
        $conn = mysqli_connect($host, $user, $passwd, $db);
        unset($hostname, $username, $passwd, $db);
        

        //checking con
        if(mysqli_connect_errno()){
            echo "Error in connection Please check the connection" . mysqli_connect_errno();
        }

    //s-var for mail/username & password
    $mailuid = $_POST['username'];
    $password = $_POST['pwd'];
    
    //E1 - empty fields
    if (empty($mailuid) || empty($password)) {
        header("Location: /Companies/Portfolio/login_sys/login.php?error=emptyfields");
        exit();
    }
    //V1 - CHECK IF USER EXISTS
    else {
        $sql = "SELECT * FROM clients WHERE clt_username=? OR clt_mail=?;";
        
        $stmt = mysqli_stmt_init($conn);

        //check stmt prep
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: /Companies/Portfolio/login_sys/login.php?error=sqlerror0");
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
                    header("Location: /Companies/Portfolio/login_sys/login.php?error=wrongpwd0");
                    exit();
                }
                else if ($pwdCheck == true) {
                    //password matched so allow user
                    //so start a session
                    session_start();
                    //get data for session elements client_id and client_uname others
                    $_SESSION['client_id'] = $row['clt_id'];
                    $_SESSION['client_uname'] = $row['clt_username'];
                    $_SESSION['client_name'] = $row['clt_name'];
                    $_SESSION['client_mail'] = $row['clt_mail'];

                    header("Location: /Companies/Portfolio/index.php?login=SUCCESS");
                    exit();
                }
                else {
                    header("Location: /Companies/Portfolio/index.php?error=seriouswrongpwd1");
                    exit();
                }
            }
            // user doesn't exist
            else {
                header("Location: /Companies/Portfolio/login_sys/login.php?error=nouser");
                exit();
            }


        }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    header("Location: /Companies/Portfolio/login_Sys/login.php");
    exit();
}