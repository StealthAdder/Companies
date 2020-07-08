<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
    <h1>Portfolio Inc</h1>
    <div>
        <section>
            <h3>Sign In</h3>
            <form action="/Portfolio/login_sys/includes/login.inc.php" method="post" autocomplete="off">
                <input type="text" name="username" placeholder="Username/MailID">
                <br>
                <input type="password" name="pwd" placeholder="Password">
                <br>
                <button type="submit" name="login-submit">Sign In</button>
                or
                <button><a href="/Portfolio/login_sys/signup.php" style="text-decoration: none;">Sign up</a></button>
            </form>
        </section>
    </div>
</body>
</html>