<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <section class="#">
        <h1>Portfolio</h1>
        <a href="/Portfolio/index.php">HOME</a>
        <br>
        <h3>Register</h1>
        <form action="/Portfolio/login_sys/includes/signup.inc.php" method="POST" autocomplete="off">
            <input type="text" name="cltname" placeholder="Full Name">
            <br>
            <input type="text" name="username" placeholder="Username">
            <br>
            <input type="text" name="mailid" placeholder="E-mail">
            <br>
            <input type="password" name="pwd" placeholder="Password"><br>
            <input type="password" name="pwd-repeat" placeholder="Password-Repeat">
            <br>
            <button type="submit" name="signup-submit">REGISTER</button>
        </form>
    </section>
</body>
</html>