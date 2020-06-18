<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-Us</title>
    <link rel="stylesheet" href="/css/contact_site.css">
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
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SLEF"]);?>" method="post">
                Full Name :<input type="text" name="flName"><br>
                Maild Id : <input type="text" name="mail"><br>
                Phone No: <input type="text" name="phoneNo"><br>
                <span id="lym">Leave your message</span><br>
                <textarea name="msg" id="" cols="30" rows="5"></textarea><br>
                <input type="submit" value="Send" id="submit">
                </form>
            </div>  
        </div>
        <h2 id="cb">Tech Support</h2>
        <div id="md1">
            <h2 id="cb1">TexSys Corp. Tech Support:</h2>
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