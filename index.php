<?php
include 'assets/app.php';
 ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Oracle Station</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel='stylesheet' type='text/css' href='css/normalize.css' />
    <link rel='stylesheet' type='text/css' href='css/skeleton.css' />
    <link href="https://fonts.googleapis.com/css?family=Raleway:300|Source+Sans+Pro" rel="stylesheet" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/preload.js" type="text/javascript"></script>
    <!-- Disable preloader for those with javascript disabled-->
    <noscript>
      <style>
        #preloader {
        display: none;
        }
      </style>
      </noscript>
</head>

<body>
    <!-- Briefly preload everything before showing the page -->
    <div id="preloader">
        <img src='images/oracle.svg' id="preload-image">
    </div>
    <!-- Background parallax -->
    <div class="layer1"></div>
    <div class="layer2"></div>
    <div class="layer3"></div>

    <div class="container">
        <div class="logo">
            <h1 id="textlogo">
                <img src="images/oracle.svg">ORACLE STATION</h1>
        </div>
        <!-- Navbar -->
        <nav>
            <a href="https://discord.gg/JbNpMuP"><i class="fab fa-discord"></i><span class='hackyspace'>Discord</span></a>
            <a href="https://github.com/OracleStation/OracleStation"><i class="fab fa-github"></i><span class='hackyspace'>Github</span></a>
            <a href="https://wiki.oraclestation.com/"><i class="fab fa-wikipedia-w"></i><span class='hackyspace'>Wiki</span></a>
            <a href="https://forums.oraclestation.com/"><i class="far fa-comment"></i><span class='hackyspace'>Forums</span></a>
        </nav>
        <!-- Information Panels -->
        <div class='server-info'>
            <span id="g1">
        <h2>Map: Omegastation</h2><br>
        <h2>Players: 0</h2>
        </span>
            <span id="g2">
        <h2>Round Status: In lobby</h2><br>
        <h2>Round Time: 12:00</h2>
        </span>
        </div>
        <div class='heading row'>
            <h1>Welcome to Oracle Station!</h1>
        </div>
        <div class='panel-numero-uno row'>
            <img src='https://i.imgur.com/HdySzhQ.png'>
            <div class="info">
                <p>
                    We are a medium RP Space Station 13 server running our own fork of the /tg/station code. Our server incorporates features both new and old, including:</p>
                <ul>
                    <li>A reworked brig system, where criminals are placed in a large holding cell called 'genpop'.</li>
                    <li>An in-depth medical system ported from Baystation 12. Features include</li>
                    <li>Movement speed more in line with Colonial Marines, allowing for more strategic play.</li>
                </ul>
                <p>Our planned features include:</p>
                <ul>
                    <li>Internal Affairs/Lawyer/HR rework.</li>
                    <li>Vox, a space-resistant nomadic avian species with a <s>mind-numbing</s> hilarious speech impediment.
                    </li>
                </ul>
                <p>
                    The Oracle codebase is maintained by a team of talented SS13 developers with help from the community. A delicious blend of roleplay, action, and standard SS13 silliness, Oracle Station is a station sure to please.
                </p>
            </div>
            <div class="recent-pr">
              <?php getClosedPRs();?>
            </div>
        </div>
        <div id='copyright'>
            <p>&copy; 2017-2018 Oracle Station, art by <a href="https://bkgs.tumblr.com/" style="color: lightblue;">Feih</a>
            </p>
        </div>
    </div>
</body>

</html>
