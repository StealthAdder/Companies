<?php
    session_start();

    if(isset($_SESSION['client_id'])) {
    }
    else {
        header("Location: /Companies/Portfolio/index.php?error=redirected_fatal_url");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortFolio - Elon Musk</title>
    <link rel="stylesheet" href="/Companies/Portfolio/css/Elon_CSS/style_ElonMusk.css">
</head>
<body>
    <header>
        <h1 id="mh1">Portfolio Inc.</h1>
        <div id="dh1">
            <span><a href="/Companies/Portfolio/index.php" class="menu1">Home</a></span>
        </div>
        <h1 id="pph1">Portfolio Profile</h1>
    </header>
    <div id="dborder">
        <main id="main1">
            <img src="/Companies/Portfolio/img/Elon.jpg" alt="Image of Elon Musk">
            <h3 id="Etitle">Elon Musk</h3><br>
            <div id="mdiv1">
                <span><a id="awards" class="ops1" href="/Companies/Portfolio/pages/ElonMusk/Elon_Awards.html">Awards</a></span>
                 <span><a class="ops1" href="">Inventions</a></span>
            </div>
            <div id="mdiv2">
                <span><a class="ops2" href="">Personal</a></span> <span><a class="ops2" href="">Career</a></span>
            </div>
        </main>
        <main id="main2">
            <p> <b>About:</b> <br>Elon Musk FRS (/ˈiːlɒn/; born June 28, 1971) is an engineer, industrial designer, technology entrepreneur and philanthropist. He is a citizen of South Africa, Canada, and the United States. He is the founder, CEO and chief engineer/designer of SpaceX; early investor, CEO and product architect of Tesla, Inc.; founder of The Boring Company; co-founder of Neuralink; and co-founder and initial co-chairman of OpenAI. He was elected a Fellow of the Royal Society (FRS) in 2018. In December 2016, he was ranked 21st on the Forbes list of The World's Most Powerful People, and was ranked joint-first on the Forbes list of the Most Innovative Leaders of 2019. A self-made billionaire, as of June 2020 his net worth was estimated at $38.8 billion and he is listed by Forbes as the 31st-richest person in the world. He is the longest tenured CEO of any automotive manufacturer globally.</P>
        </main>
    </div>
    <script src="/Companies/Portfolio/javascripts/award-object.js"></script>
    <footer>
        <h5 id="fh5">Portfolio Inc. 2020</h5>
    </footer>
</body>
</html>