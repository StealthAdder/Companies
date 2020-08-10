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
    <title>Client Query Information</title>
    <link rel="stylesheet" href="/Companies/TexSys_Corp/Dev-workspace/workspace/css/dev-client_query_css.css">
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
        <div>
            <h4 style="display: inline">Choose Type</h4>
                <form action="/Companies/TexSys_Corp/Dev-workspace/workspace/dev-client_query.php" method="POST" style="display: inline;">
                    <select name="queryType" style="font-weight: bold;">
                        <option value="" disabled selected>Query Type</option>
                        <option value="tech" style="font-weight: bold;">Techincal Query</option>
                        <option value="sales" style="font-weight: bold;">Sales Query</option>
                        <option value="others" style="font-weight: bold;">Other Query</option>
                    </select>
                    <button type="submit" name="query-submit">Search</button>
                </form>
        </div>
        <h3 id="cquery-title">CLIENT QUERY</h3>
        <?php 
            if(!isset($_POST['queryType'])) {
                ?> 
                <div class="block">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Query Number</th>
                        <th>Clinet Name</th>
                        <th>Client Mail ID</th>
                        <th>Query Type</th>
                        <th>Message</th>
                        <th>Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if (isset($_SESSION['userId'])) {
                                    
                            //Connection
                                include ("/var/www/html/config_portfolio/DB-config.php");

                                $conn = mysqli_connect($host, $user, $passwd, 'portfolio');
                                unset($host, $user, $passwd);

                                $sql = 'SELECT * FROM Client_query ORDER BY query_id DESC';

                                $result = mysqli_query($conn, $sql);
                                $num_row = mysqli_num_rows($result);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>{$row['query_id']}</td>";
                                    echo "<td>{$row['person_name']}</td>";
                                    echo "<td>{$row['person_mail']}</td>";
                                    echo "<td>{$row['query_type']}</td>";
                                    echo "<td>{$row['msg']}</td>";
                                    echo "<td>{$row['time_stamp']}</td>";
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
        </div>
                <?php
            }
        ?>
        <!-- tech -->
        <?php 
            $op = $_POST['queryType'];
            if (isset($_POST['query-submit'])) {
                if ($op == "tech") {
                    ?>
                        <div class="block">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Query Number</th>
                        <th>Clinet Name</th>
                        <th>Client Mail ID</th>
                        <th>Query Type</th>
                        <th>Message</th>
                        <th>Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if (isset($_SESSION['userId'])) {
                                    
                            //Connection
                                include ("/var/www/html/config_portfolio/DB-config.php");

                                $conn = mysqli_connect($host, $user, $passwd, 'portfolio');
                                unset($host, $user, $passwd);

                                $sql = 'SELECT * FROM Client_query WHERE query_type = "TechEnquiry"  ORDER BY query_id DESC';

                                $result = mysqli_query($conn, $sql);
                                $num_row = mysqli_num_rows($result);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>{$row['query_id']}</td>";
                                    echo "<td>{$row['person_name']}</td>";
                                    echo "<td>{$row['person_mail']}</td>";
                                    echo "<td>{$row['query_type']}</td>";
                                    echo "<td>{$row['msg']}</td>";
                                    echo "<td>{$row['time_stamp']}</td>";
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
        </div>
                    <?php 
                }
                // sales
                else if ($op == "sales") {
                    ?> 
                    <div class="block">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Query Number</th>
                        <th>Clinet Name</th>
                        <th>Client Mail ID</th>
                        <th>Query Type</th>
                        <th>Message</th>
                        <th>Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if (isset($_SESSION['userId'])) {
                                    
                            //Connection
                                include ("/var/www/html/config_portfolio/DB-config.php");

                                $conn = mysqli_connect($host, $user, $passwd, 'portfolio');
                                unset($host, $user, $passwd);

                                $sql = 'SELECT * FROM Client_query WHERE query_type = "Sales" ORDER BY query_id DESC';

                                $result = mysqli_query($conn, $sql);
                                $num_row = mysqli_num_rows($result);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>{$row['query_id']}</td>";
                                    echo "<td>{$row['person_name']}</td>";
                                    echo "<td>{$row['person_mail']}</td>";
                                    echo "<td>{$row['query_type']}</td>";
                                    echo "<td>{$row['msg']}</td>";
                                    echo "<td>{$row['time_stamp']}</td>";
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
        </div>
                    <?php
                }   //others
                else if ($op == "others") {
                    ?> 
                        <div class="block">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Query Number</th>
                        <th>Clinet Name</th>
                        <th>Client Mail ID</th>
                        <th>Query Type</th>
                        <th>Message</th>
                        <th>Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if (isset($_SESSION['userId'])) {
                                    
                            //Connection
                                include ("/var/www/html/config_portfolio/DB-config.php");

                                $conn = mysqli_connect($host, $user, $passwd, 'portfolio');
                                unset($host, $user, $passwd);

                                $sql = 'SELECT * FROM Client_query WHERE query_type = "Others" ORDER BY query_id DESC';

                                $result = mysqli_query($conn, $sql);
                                $num_row = mysqli_num_rows($result);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>{$row['query_id']}</td>";
                                    echo "<td>{$row['person_name']}</td>";
                                    echo "<td>{$row['person_mail']}</td>";
                                    echo "<td>{$row['query_type']}</td>";
                                    echo "<td>{$row['msg']}</td>";
                                    echo "<td>{$row['time_stamp']}</td>";
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
        </div>
                    <?php 
                } else {
                    header("Location: /Companies/TexSys_Corp/Dev-workspace/workspace/dev-client_query.php");
                    exit();
                }
            }
        ?>
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