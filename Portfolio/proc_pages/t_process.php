<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Support</title>
    <link rel="stylesheet" href="/Companies/Portfolio/css/t_process.css">
</head>
<body>
    <?php
    if (isset($_POST['contact-submit'])) {

        //declare short vars
        $name = $_SESSION['client_name'];
        $mail= $_SESSION['client_mail'];
        $qtype = $_POST['querytype'];
        $msg = $_POST['msg'];
        $time_stamp = date("d-m-Y H:i:s");


        include ("/var/www/html/config_portfolio/DB-config.php");
        
        // //connection
        $conn = mysqli_connect($host, $user, $passwd, 'portfolio');
        unset($hostname, $username, $passwd);

        //checking con
        if(mysqli_connect_errno()){
            echo "Error in connection Please check the connection" . mysqli_connect_errno();
        }

        if (empty($qtype) || empty($msg)) {
            header("Location: /Companies/Portfolio/contact.php?error=emptyfields");
            exit();
        }

        //running prepared stmts
        $sql = "INSERT INTO Client_query (person_name, person_mail, query_type, msg, time_stamp)
        VALUES (?, ?, ?, ?, ?)";

        $stmt = mysqli_stmt_init($conn);
        //checking Prep
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: /Companies/Portfolio/contact.php?error=sqlerror0");
            exit();
        }
        else {
            //no issues
            mysqli_stmt_bind_param($stmt, "sssss", $name, $mail, $qtype, $msg, $time_stamp);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_store_result($stmt);
        }
    }
    else {
        header("Location: /Companies/Portfolio/contact.php?error=fatalurl");
        exit();
    }
    ?>
    <header>
        <h1 id="th1">Tech Support</h1>
        <div id="dh1">
            <span><a href="/Companies/Portfolio/index.php" class="menu1">Home</a></span> 
        </div>
    </header>
    <main id="cont">
        <div id="mdiv1">
            <?php if ($result) { ?>
                <h2 class ="rp">Requested Processed....!</h2>
                <p class="info">Our Developers will contact you soon.</p>
                <div id=mdiv2>
                    <h2 id="smy">Summary</h2>
                    <p id="dsum">Detailed Summary about your Query:</p>
                    <div id="summary">
                        <?php 
                            echo '<span id="info"><strong>Query Type: <strong></span>'. $qtype; 
                            echo '<br>';
                            echo '<span id="info"><strong>Your message/Query: </strong></span>'. $msg;
                        ?>
                        <p id="thanks">Thanks for contacting Tech Support</p>
                    </div>
                </div>
            <?php } else {?>
                <h2 class ="rp">Requested Failed..</h2>
                <p class = "info">An error occured during processing the file: The data entry didnt happen.</p>
                <p class= "info">Report this with <a href="https://github.com/StealthAdder/Companies/issues/new/choose">Github/Companies</a> Raise a Issue</p>
                <?php 
                    mysqli_free_result($result);
                    mysqli_close($conn);    
                ?>
            <?php }?>
        </div>
    </main>
    <footer>
        <h5 id="fh5">Portfolio Inc. 2020</h3>
    </footer>
    <script src="/Companies/Portfolio/javascripts/goHome.js"></script>
</body>
</html>