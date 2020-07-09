<?php
//Creating session
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Corp</title>
    <link rel="stylesheet" href="/Portfolio/css/style.css">
</head>
<body>
    <header>
        <h1>Portfolio Inc.</h1>
        <nav id="dh1">
            <span><a href="/Portfolio/index.php" class="menu1">Home</a></span> <span><a href="/Portfolio/contact.html" class="menu1">Tech Support</a></span>
            <span><a href="/Portfolio/colorFlip/colorflip.html" class="menu1">Random Color</a></span>
            <span>
            <?php
            if(isset($_SESSION['client_id'])) {
                //logout
                echo '<a class="menu1" href="/Portfolio/login_sys/includes/logout.inc.php">logout</a>';
            }
            else {
                echo '<a class="menu1" href="/Portfolio/login_sys/login.php">Sign In</a>';
            }
        ?>
            </span>
        </nav>
        <div id="gret">
            <span id="greetings"></span>
            <span id="dtime">
                <span>Current Time: </span>
                <span id="Time">Time</span>
                <span>IST</span>
            </span>
            <?php
                    //check if we have session var
                    if (isset($_SESSION['client_id'])) {
                        echo "<p>You are logged in</p>";
                    } 
                    else {
                        echo "<p>You are logged out</p>";
                    }
            ?>
        </div>
    </header>
    <main>
        <div id="prodiv1">
            <h2 id="fp">Featured Profiles</h2>
            <img id="imgelon" src="/Portfolio/img/Elon.jpg" alt="Elon Musk Photo"><br>
            <a href="/Portfolio/pages/ElonMusk/elon.html" id="pt1">Elon Musk</a>
        </div>
        <div id="sdiv">
            <h3 id="Ah3">About us</h3>
            <p id="ap">We are a potfolio Hosting Company. We start this one as a html project. Try with interest and time this grow into a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda libero, exercitationem veritatis consequatur, voluptas perspiciatis pariatur illum repellat explicabo fugit distinctio, doloribus eligendi aperiam necessitatibus eum. Expedita amet perspiciatis aut? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, at numquam ut quae, officiis autem excepturi reiciendis assumenda maiores nesciunt aspernatur nulla. Asperiores mollitia alias vero molestiae voluptates rerum non?. LoL</p>
            <div id="ssdiv">
                <h3 id="sh3">Services (Sites-UnderConstruction)</h3>
                <ul id="sul">
                    <li class="uli" id="ulis">Portfolio Services</li>
                    <li class="uli">Ad Creations</li>
                    <li class="uli">Media Services</li>
                </ul>
            </div>
        </div>
    </main>
    <script src="/Portfolio/javascripts/add-content.js"></script>
    <footer>
        <h5 id="fh5">Portfolio Inc. 2020</h3>
    </footer>
</body>
</html>