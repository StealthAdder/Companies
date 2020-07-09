<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="/Companies/Portfolio/css/css_login/login_style.css">
</head>
<body>
    <header>
    <h1 class="headh1">Portfolio Inc.</h1>
        <nav id="dh1">
            <span><a href="/Companies/Portfolio/index.php" class="menu1">Home</a></span>
            <span><a href="/Companies/Portfolio/login_sys/signup.php" class="menus" style="float:right">Sign Up</a></span>
        </nav>
    </header>
    <div class="block">
            <div class="block-div">
                <h3 id="logintext">Log In</h3>
                <form action="/Companies/Portfolio/login_sys/includes/login.inc.php" method="post" autocomplete="off">
                <div class="inp-elements">
                    <img src="/Companies/Portfolio/img/loginlogo.png" alt="image" id="signup-logo">
                </div>
                <div class="inp-elements">
                    <input type="text" name="username" placeholder="Username/Mail ID">
                </div>
                <div class="inp-elements">
                    <input type="password" name="pwd" placeholder="Password">
                </div>
                <div class="inp-elements">
                    <button type="submit" name="login-submit">Log In</button>
                </div>
                </form>
            </div>
    </div>
    <footer>
        <h5 id="fh5">Portfolio Inc. 2020</h3>
    </footer>
</body>
</html>