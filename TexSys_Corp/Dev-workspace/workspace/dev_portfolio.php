<?php 
    session_start();
    if (isset($_SESSION['userId'])) {
    }
    else {
        header("Location: /Companies/index.php?error=fatal_url");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer's Dashboard - Porfolio</title>
    <link rel="stylesheet" href="/Companies/TexSys_Corp/Dev-workspace/workspace/css/dev_portfolio_css.css">
</head>
<body>
<h1>TexSys Corp.</h1>
    <header>
        <nav>
            <ul id="nav-ul">
                <li><a href="#" class="nav-a"><img src="/Companies/TexSys_Corp/img/logo.jpg" alt="TexSys Corp. Logo" id="logo"></a></li>
                <li class="nav-li"><a href="/Companies/TexSys_Corp/Dev-workspace/workspace/dashboard.php" class="nav-a">Dashboard</a></li>
                <li class="nav-li" style="float: right;"><a href="/Companies/TexSys_Corp/Dev-workspace/Dev_loginSys/dev_logout.php" class="nav-a">Log out</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="section">
            <div class="section-block">
                <div class="block-img"><a href="/Companies/TexSys_Corp/Dev-workspace/workspace/dev-client_info.php"><img src="/Companies/TexSys_Corp/Dev-workspace/workspace/css/img/client_info_icon1.png" alt="Client Info" id="client_info_icon"></a></div>
                <h4 class="choice-title">Client Information</h4>
            </div>
            <div class="section-block">
                <div class="block-img"><a href="/Companies/TexSys_Corp/Dev-workspace/workspace/dev-client_query.php"><img src="/Companies/TexSys_Corp/Dev-workspace/workspace/css/img/client_query_icon.jpg" alt="client query" id="client_query_icon"></a></div>
                <h4 class="choice-title">Client_Query</h4>
            </div>
        </div>
    </main>
    <script src="/Companies/Portfolio/javascripts/add-content.js"></script>
    <footer>
        <span id="dtime">
            <span id="CT">Current Time: </span>
            <span id="Time">Time</span>
            <span>IST</span>
            <span id="fh5">Portfolio Inc. 2020</span>
        </span>
    </footer>
</body>
</html>