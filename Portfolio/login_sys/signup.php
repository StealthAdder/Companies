<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/Companies/Portfolio/css/css_login/signup_style.css">
</head>
<body>
    <header>
        <h1 class="headh1">Portfolio Inc.</h1>
            <nav id="dh1">
                <span><a href="/Companies/Portfolio/index.php" class="menu1">Home</a></span>
            </nav>
    </header>
        <div class="block">
            <div class="block-div">
                <h3 id="signtext">Sign Up</h3>
                <form action="/Companies/Portfolio/login_sys/includes/signup.inc.php" method="POST" autocomplete="off">
                    <div class="signup-link-div">
                        <img src="/Companies/Portfolio/img/loginlogo.png" alt="image" id="signup-logo">
                    </div>
                    <div class="signup-link-div">
                        <input type="text" name="cltname" placeholder="Full Name">
                    </div>
                    <div class="signup-link-div">
                        <input type="text" name="username" placeholder="Username">
                    </div>
                    <div class="signup-link-div">
                        <input type="text" name="mailid" placeholder="E-mail">
                    </div>
                    <div class="signup-link-div">
                        <input type="password" name="pwd" placeholder="Password"><br>
                    </div>
                    <div class="signup-link-div">
                        <input type="password" name="pwd-repeat" placeholder="Password-Repeat">
                    </div>
                    <div class="signup-link-div">
                        <button type="submit" name="signup-submit">REGISTER</button>
                    </div>
                    
                </form>
            </div>
        </div>
    <footer>
        <h5 id="fh5">Portfolio Inc. 2020</h3>
    </footer>
</body>
</html>