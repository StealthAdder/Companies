<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-Us</title>
    <link rel="stylesheet" href="/css/contact_site.css">
    <script src="\javascripts\validation.js"></script>
</head>
<body>
    <header>
        <h1 id="mh1">Portfolio Inc.</h1>
        <div id="dh1">
            <span><a href="/index.html" class="menu1">Home</a></span> 
        </div>
    </header>
    <main>
        <div id="md2">
            <h2 id="gint">Queries</h2>
            <div id="frm">
                <form action="/proc_pages/t_process.php" method="post" autocomplete="off" onsubmit="return validation()">
                <span id="name">Full Name :<input type="text" name="flName"></span><span class="error">*<?php echo $_POST["flNameErr"]?></span><br>
                <span id="mail">Maild Id : <input type="text" name="mail"></span><span class="error">*<?php echo $_POST["mailErr"]?></span><br>
                <span id="phone">Phone No: <input type="text" name="phoneNo"></span><span class="error">*<?php echo $_POST["phoneNoErr"]?></span><br>
                <span id="lym">Leave your message: </span><br>
                    <textarea name="msg" id="msg" cols="80" rows="8"></textarea>
                    <span class="error">*<?php echo $_POST["msgErr"]?></span>
                <br>
                <input type="submit" value="Send" id="sumbit">
                </form>
                <?php 
                $flName = $mail = $phoneNo = $msg = "";
                $flNameErr = $mailErr = $phoneNoErr = $msgErr = "";

                //
                if ($_SERVER["REQUESTED METHOD"] == "POST") {
                    
                    if ($flName){       //if (empty($_POST["flName"]))
                        $flNameErr = "Required";
                    }
                    else {
                        $flName = test_input($_POST["flName"]);
                    }

                    if (empty($_POST["mail"])){
                        $mailErr = "Required";
                    }
                    else {
                        $mail = test_input($_POST["mail"]);
                    }
                    
                    if (empty($_POST["phoneNo"])){
                        $phoneNoErr = "Required";
                    }
                    else {
                        $phoneNo = test_input($_POST["phoneNo"]);
                    }

                    if (empty($_POST["msg"])){
                        $msgErr = "Required";
                    }
                    else {
                        $msg = test_input($_POST["msg"]);
                    }
                }

                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
            ?>
            </div>
        </div>

        <h2 id="cb">Tech Support</h2>
        <div id="md1">
            <h2 id="cb1">Tech Support - TexSys Corp.</h2>
            <h3 id="dcih3">Developer's - Contact info:</h3>
            <div id="devgit">
                <span id="SAspan">StealthAdder<a href="https://github.com/StealthAdder" target="_blank" class="adevgit"> : GitHub &</a><span>
                <span id="DSspan">DarkSchokolade<a href="https://github.com/DarkSchokolade" target="_blank" class="adevgit"> : GitHub</a></span>
            </div>
            <h4 id="about_h5">Developed by TexSys Corp.</h4>
        </div>
    </main>
    <footer>
        <h5 id="fh5">Portfolio Inc. 2020</h3>
    </footer>
</body>
</html>