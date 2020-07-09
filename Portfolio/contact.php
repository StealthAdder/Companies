<?php
//start session
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
    <title>Contact-Us</title>
    <link rel="stylesheet" href="/Companies/Portfolio/css/contact_site.css">
    <script src="/Companies/Portfolio/javascripts/validation.js">  </script>
</head>
<body>
    <header>
        <h1 id="mh1">Portfolio Inc.</h1>
        <div id="dh1">
            <span><a href="/Companies/Portfolio/index.php" class="menu1">Home</a></span> 
        </div>
    </header>
    <main>
        <div id="md2">
            <h2 id="gint">Queries</h2>
            <div id="frm">
                <form name="RegForm" action="/Companies/Portfolio/proc_pages/t_process.php" onsubmit="return validation()" method="post" autocomplete="off">
                    <table>
                        <tr>
                            <td>
                                <span><label for="">Subject</label></span>
                            </td>
                            <td>
                                <select name="querytype">
                                    <option value="" disabled selected>Query Type</option>
                                    <option value="TechEnquiry">Techincal Enquiry</option>
                                    <option value="Sales">Sales-Related</option>
                                    <option value="Others">Others</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Message:</td>
                            <td><textarea name="msg" id="msg" cols="80" rows="8" placeholder="Message / Query"></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" name="contact-submit">Send</button>
                            </td><br>
                        </tr>
                    </table>                
                </form>
                <p><strong>Note: </strong>We usually don't respond.. </p>
            </div>
        </div>
        <!-- <h2 id="cb">Tech Support</h2>
        <div id="md1">
            <h2 id="cb1">Tech Support - TexSys Corp.</h2>
            <h3 id="dcih3">Developer's - Contact info:</h3>
            <div id="devgit">
                <span id="SAspan">StealthAdder<a href="https://github.com/StealthAdder" target="_blank" class="adevgit"> : GitHub &</a><span>
                <span id="DSspan">DarkSchokolade<a href="https://github.com/DarkSchokolade" target="_blank" class="adevgit"> : GitHub</a></span>
            </div>
            <h4 id="about_h5">Developed by TexSys Corp.</h4>
        </div> -->
    </main>
    <footer>
        <h5 id="fh5">Portfolio Inc. 2020</h3>
    </footer>
</body>
</html>