<?php
    session_start();
    if (isset($_SESSION['userId'])) {
    }
    else {
        header("Location: /Companies/TexSys_Corp/Dev-workspace/Dev_Login.html?error=fatal_url");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Dashboard</title>
    <link rel="icon" href="/Companies/TexSys_Corp/img/logo.jpg">
    <link rel="stylesheet" href="/Companies/TexSys_Corp/Dev-workspace/workspace/css/dashboard.css">
</head>
<body>
<h1>TexSys Corp.</h1>
    <header>
        <nav>
            <ul id="nav-ul">
                <li><a href="#" class="nav-a"><img src="/Companies/TexSys_Corp/img/logo.jpg" alt="TexSys Corp. Logo" id="logo"></a></li>
                <li class="nav-li"><a href="#" class="nav-a">Developer Dashboard</a></li>
                <li class="nav-li" style="float: right;"><a href="/Companies/TexSys_Corp/Dev-workspace/Dev_loginSys/dev_logout.php" class="nav-a">Log out</a></li>
            </ul>
        <!-- Could had some dynamic message -->
        </nav>
    </header>
    <main>
    <h2 class="welcome-dev">Select Organization</h2>
        <div class="company">
            <div class="sub-company">
                <div class="company-img">
                    <a href="/Companies/TexSys_Corp\Dev-workspace\workspace\dev_portfolio.php"><img src="/Companies/TexSys_Corp/img/Portfolio_icon.png" alt="Portfolio Corp Logo" id="portfolio-logo"></a>
                </div>
                <h5 class="company-title">Portfolio Corp.</h5>
            </div>
            <div class="sub-company">
                <div class="company-img">
                    <a href="#"><img src="/Companies/TexSys_Corp/img/Aether Corp icon.png" alt="Aether Corp logo" id="Aether-logo"></a>
                </div>
                <h5 class="company-title">AETHER Corp.</h5>
            </div>
            <div class="sub-company">
                <div class="company-img">
                    <a href="#"><img src="/Companies/TexSys_Corp/img/aero-tex.jpg" alt="Aero-tex logo" id="aero-tex-logo"></a>
                </div>
                <h5 class="company-title">AeroTex Corp.</h5>
            </div>
        </div>
    </main>
    <script src="/Companies/Portfolio/javascripts/add-content.js"></script>
    <footer>
        <span id="dtime">
            <span id="CT">Current Time: </span>
            <span id="Time">Time</span>
            <span>IST</span>
            <span id="fh5">TexSys Corp. 2020</span>
        </span>
    </footer>
</body>
</html>