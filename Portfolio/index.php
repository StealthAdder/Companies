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
            <span><a href="/Companies/Portfolio/colorFlip/colorflip.html" class="menu1">Random Color</a></span>
            <span>
            <?php
            if(isset($_SESSION['client_id'])) {
                //logout
                echo '<a class="menu1" href="/Companies/Portfolio/login_sys/includes/logout.inc.php">logout</a>';
            }
            else {
                echo '<a class="menu1" href="/Companies/Portfolio/login_sys/login.php">Sign In</a>';
            }
        ?>
            </span>
        </nav>
        <div id="gret">
            <!-- User name is displayed -->
            <?php
                echo $_SESSION['client_name'];
            ?>
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
            <img id="imgelon" src="/Companies/Portfolio/img/Elon.jpg" alt="Elon Musk Photo"><br>
            <a href="/Companies/Portfolio/pages/ElonMusk/elon.html" id="pt1">Elon Musk</a>
        </div>
        <div id="sdiv">
            <h3 id="Ah3">About us</h3>
            <p id="ap">We are a potfolio Hosting Company. We start this one as a html project. Try with interest and time this grow into a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda libero, exercitationem veritatis consequatur, voluptas perspiciatis pariatur illum repellat explicabo fugit distinctio, doloribus eligendi aperiam necessitatibus eum. Expedita amet perspiciatis aut? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, at numquam ut quae, officiis autem excepturi reiciendis assumenda maiores nesciunt aspernatur nulla. Asperiores mollitia alias vero molestiae voluptates rerum non?. LoL</p>
        </div>
    </main>
    <script src="/Companies/Portfolio/javascripts/add-content.js"></script>
    <footer>
        <h5 id="fh5">Portfolio Inc. 2020</h3>
    </footer>
</body>
</html>