<?php 
    session_start();
    if (!isset($_SESSION['userId'])) {
        header("Location: /Companies/TexSys_Corp/Dev-workspace/Dev_Login.html?error=fatal_url");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Companies/TexSys_Corp/Dev-workspace/workspace/css/dev-client_info_css.css">
</head>
<body>
<h1>TexSys Corp.</h1>
    <header>
        <nav>
        <ul id="nav-ul">
                <li><a href="#" class="nav-a"><img src="/Companies/TexSys_Corp/img/logo.jpg" alt="TexSys Corp. Logo" id="logo"></a></li>
                <li class="nav-li"><a href="/Companies/TexSys_Corp/Dev-workspace/workspace/dev_portfolio.php" class="nav-a">Portfolio - Dashboard</a></li>
                <li class="nav-li" style="float: right;"><a href="/Companies/TexSys_Corp/Dev-workspace/Dev_loginSys/dev_logout.php" class="nav-a">Log out</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h3 style="text-align: center;">CLIENT INFORMATION</h3>
        <div class="block">
            <!-- <div class="block-1"> -->
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th>Client ID</th>
                                <th>Client Name</th>
                                <th>Client Username</th>
                                <th>Client Mail ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if (isset($_SESSION['userId'])) {
                                    
                                    //Connection
                                    include ("/var/www/html/config_portfolio/DB-config.php");

                                    $conn = mysqli_connect($host, $user, $passwd, 'portfolio');
                                    unset($host, $user, $passwd);

                                    $sql = 'SELECT * FROM clients';

                                    $result = mysqli_query($conn, $sql);
                                    $num_row = mysqli_num_rows($result);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>{$row['clt_id']}</td>";
                                        echo "<td>{$row['clt_name']}</td>";
                                        echo "<td>{$row['clt_username']}</td>";
                                        echo "<td>{$row['clt_mail']}</td>";
                                        echo "</tr>";
                                        
                                    }
                                }
                                else {
                                    header("Location: /Companies/TexSys_Corp/Dev-workspace/Dev_Login.html?error=fatal_url");
                                    exit();
                                }
                            ?>
                        </tbody>
                    </table>    
                <!-- </div> -->
            </div>
    </main>
    <script src="/Companies/Portfolio/javascripts/add-content.js"></script>
    <footer>
        <span id="dtime">
            <span id="CT">Current Time: </span>
            <span id="Time">Time</span>
            <span>IST</span>
            <span id="fh5">TexSys Corp. 2020</span>
        </span>
    </footer>
</body>
</html>