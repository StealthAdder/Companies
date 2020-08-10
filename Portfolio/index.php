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
    <link rel="stylesheet" href="/Companies/Portfolio/css/style.css">
</head>
<body>
    <header>
        <h1>Portfolio Inc.</h1>
        <nav id="dh1">
            <span><a href="/Companies/Portfolio/index.php" class="menu1">Home</a></span>
            <span>
                <?php
                    if(isset($_SESSION['client_name'])) {
                        echo '<a href="/Companies/Portfolio/contact.php" class="menu1">Tech Support</a>';
                    }
                ?>
            </span>
            <span><a href="/Companies/index.html" class="menu1">TexSys Corp.</a></span>
            <span>
                <?php
                    if(isset($_SESSION['client_id'])) {
                        //logout
                        echo '<a class="menus" href="/Companies/Portfolio/login_sys/includes/logout.inc.php" style="float:right">Log out</a>';
                    }
                    else {
                        echo '<a class="menus" href="/Companies/Portfolio/login_sys/login.php" style="float:right">Sign In</a>';
                    }
                ?>
            </span>
        </nav>
        <div id="gret">
            <span id="greetings">Loading.....</span>
            <!-- User name is displayed -->
            <?php
                if (isset($_SESSION['client_name'])) {
                    echo '<span id="namelisting" style="float:right">'.strtoupper($_SESSION['client_name']).'</span>';
                }
                else {
                    echo '<span id="namelisting" style="float:right"><strong>GUEST</strong></span>';
                }
            ?>
        </div>
    </header>
    <main>
        <?php if(isset($_SESSION['client_id'])) {?>
            <div id="prodiv1">
                <h2 id="fp">Featured Profiles</h2>
                <img id="imgelon" src="/Companies/Portfolio/img/Elon.jpg" alt="Elon Musk Photo"><br>
                <a href="/Companies/Portfolio/pages/ElonMusk/elon.php" id="pt1">Elon Musk</a>
            </div>
        <?php }?>
        <div id="sdiv">
            <h3 id="Ah3">About us</h3>
            <img src="/Companies/TexSys_Corp/img/Portfolio_icon.png" alt="Portfolio Logo" id="portfolio-logo">
                <p id="ap">We are a potfolio Hosting Company. We start this one as a html project. Try with interest and time this grow into a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda libero, exercitationem veritatis consequatur, voluptas perspiciatis pariatur illum repellat explicabo fugit distinctio, doloribus eligendi aperiam necessitatibus eum. Expedita amet perspiciatis aut? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, at numquam ut quae, officiis autem excepturi reiciendis assumenda maiores nesciunt aspernatur nulla. Asperiores mollitia alias vero molestiae voluptates rerum non?. LoL</p>
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