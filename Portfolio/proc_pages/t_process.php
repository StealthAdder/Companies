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
        //declare short vars
        $fname = $_POST['flName'];
        $mail= $_POST['mail'];
        $phoneNo = $_POST['phoneNo'];
        $msg = $_POST['msg'];


        include ("/var/www/html/config_portfolio/DB-config.php");
        
        // //connection
        $conn = mysqli_connect($host, $user, $passwd, 'portfolio');
        unset($hostname, $username, $passwd);

        //checking con
        if(mysqli_connect_errno()){
            echo "Error in connection Please check the connection" . mysqli_connect_errno();
        }

        $sql = "INSERT INTO Client_Msg (flname, mail, phoneNo, msg)
        VALUES ('".$fname."','".$mail."','".$phoneNo."','".$msg."')";

        $result = mysqli_query($conn, $sql);

        $rows_affected = mysqli_affected_rows($result);

        if($result){
        } else {
            echo "An error occured during processing the file: The data entry didnt happen.";
        }
        
        mysqli_free_result($result);

        //close
        mysqli_close($conn);
        
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