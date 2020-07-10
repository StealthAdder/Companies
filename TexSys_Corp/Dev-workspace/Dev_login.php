<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Workspace Login</title>
    <link rel="stylesheet" href="/Companies/TexSys_Corp/Dev-workspace/Dev_css/dev_login.css">
    <link rel="icon" href="/Companies/TexSys_Corp/img/logo.jpg">
</head>
<body>
    <h1>TexSys Corp.</h1>
    <header>
        <nav>
            <ul id="nav-ul">
                <li><a href="/Companies/index.php" class="nav-a"><img src="/Companies/TexSys_Corp/img/logo.jpg" alt="TexSys Corp. Logo" id="logo"></a></li>
                <li class="nav-li"><a href="/Companies/index.php" class="nav-a">Home</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="main-div">
            <h2 class="welcome-dev">Welcome Developer</h2>
            <div class="login-block">
                <div class="login-block-sub">
                    <h3>Log In as Developer</h3>
                    <div class="inp-elements">
                        <img src="/Companies/TexSys_Corp/Dev-workspace/Dev_css/img/dev_icon1.jpg" alt="Dev Icon" id="dev-icon">
                    </div>
                    <form action="/Companies/TexSys_Corp/Dev-workspace/Dev_loginSys/dev_login.inc.php" method="POST">
                        <div class="inp-elements">
                            <input type="text" name="username" placeholder="Username/Emp ID">
                        </div>
                        <div class="inp-elements">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="inp-elements">
                            <button type="submit" name="login-submit">Log In</button>
                        </div>
                    </form>
                </div>
            </div>    
    </main>
    <footer>
        <span id="dtime">
            <span id="CT">Current Time: </span>
            <span id="Time">Time</span>
            <span>IST</span>
            <span id="fh5">TexSys Corp. 2020</span>
        </span>
    </footer>
    <script src="/Companies/Portfolio/javascripts/add-content.js"></script>
</body>
</html>