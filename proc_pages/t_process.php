<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Support</title>
    <link rel="stylesheet" href="/css/t_process.css">
</head>
<body>
    <header>
        <h1 id="th1">Tech Support</h1>
        <div id="dh1">
            <span><a href="/index.html" class="menu1">Home</a></span> 
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
                <?php 
                    $dump = fopen("dumps/tech_dd.txt" , "a+") or die("Unable to access file");

                    $name = "client Name: ".$_POST["flName"]."\n";
                    fwrite($dump,$name);

                    $mail = "client Mail-ID: ".$_POST["mail"]."\n";
                    fwrite($dump,$mail);

                    $phone = "client Phone-No: ".$_POST["phoneNo"]."\n";
                    fwrite($dump,$phone);

                    $msg = "client Message/Query: ".$_POST["msg"]."\n________________________________________________\n";
                    fwrite($dump,$msg);
                    fclose($dump);
                ?>
            </div>
        </div> 
    </main>
    <footer>
        <h5 id="fh5">Portfolio Inc. 2020</h3>
    </footer>
</body>
</html>