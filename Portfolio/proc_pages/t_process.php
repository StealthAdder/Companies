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
        if($result){
        } else {
            echo "An error occured during processing the file: The data entry didnt happen.";
        }
        mysqli_free_result($result);

        //close
        mysqli_close($conn);
    }
    else {
        header("Location: /Companies/Portfolio/contact.php?error=SUCKER");
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
            <h2 id="rp">Requested Processed....!</h2>
            <p id="info">Our Developers will contact you soon.</p>
        </div>
        <div id=mdiv2>
            <h2 id="smy">Summary</h2>
            <p id="dsum">Detailed Summary about your Query:</p>
            <div id="summary">
                <?php
                    echo "Your Name: ".$_POST["flName"];
                    echo "<br>";
                    echo "Your Mail id: ".$_POST["mail"];
                    echo "<br>";
                    echo "Your Phone No: ".$_POST["phoneNo"];
                    echo "<br>";
                    echo "Your Message: ".$_POST["msg"];
                    echo "<br>";
                ?>
                <p id="thanks">Thanks for contacting Tech Support</p>
            </div>
        </div>
    </main>
    <footer>
        <h5 id="fh5">Portfolio Inc. 2020</h3>
    </footer>
    <script src="/Companies/Portfolio/javascripts/goHome.js"></script>
</body>
</html>