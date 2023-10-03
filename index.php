<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/index.css">
    <title>Co</title>
</head>
<body>
    <!-- <header class="header">
        <nav class="navbar">
            <div class="navbar__logo">
                <a href="">CO</a>
            </div>
            <div class="navbar__links">
                <ul>
                    <li><a href="">Color Oracle</a></li>
                    <li><a href="">How To</a></li>
                    <li><a href="">Manual</a></li>
                    <li><a href="">Design Tips</a></li>
                    <li><a href="">Useful Links</a></li>
                </ul>
            </div>
        </nav>
    </header> -->
    <?php
$navbar__logo = "CO";
$color__oracle = "Color Oracle";
$how__to = "How To";
$manual= "Manual";
$design__tips = "Design Tips";
$usefulLinks = "Useful Links";
$maintopHeading = "Design for the color impaired";
$mainTopParagraph = "Color Oracle is a free color blindness simulator for Windows, Mac and Linux. It takes the guesswork out of designing for color blindness by showing you in real time what people with common color vision impairments will see."
$downloadForMac ="Download for Mac";
$downloadForWindows ="Download for Windows";

?>

<header class="header">
    <nav class="navbar">
        <div class="navbar__logo">
            <a href=""><?php echo $navbar__logo; ?></a>
        </div>
        <div class="navbar__links">
            <ul>
                <li><a href=""><?php echo $color__oracle; ?></a></li>
                <li><a href=""><?php echo $how__to; ?></a></li>
                <li><a href=""><?php echo $manual; ?></a></li>
                <li><a href=""><?php echo $design__tips; ?></a></li>
                <li><a href=""><?php echo $usefulLinks; ?></a></li>
            </ul>
        </div>
    </nav>
</header>

    <main class="main">
        <div class="container">
            <div class="main__top">
                <h1><?php echo $maintopHeading; ?></h1>
                <p><?php echo $mainTopParagraph?></p>
            </div>

            <div class="main__wrapper">
                <div class="column">
                    <div>
                        <a href="">$<?php echo downloadForMac ?></a>
                        <span></span>
                    </div>
                </div>
                  <div class="column">
                    <div>
                        <a href=""> <?php echo $DownloadForWindows ?></a>
                        <span>Requires Java 6 or higher</span>
                    </div>
                </div>
                  <div class="column">
                    <div>
                        <a href="">Download for Linux</a>
                        <span>Requires Java 6 or higher</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <ul>
            <li>
                <h5>About</h5>
                <p>Development: Bernie Jenny, Monash University, Australia. Ideas, testing and icon: Nathaniel Vaughn Kelso, California.</p>
            </li>
               <li>
                <h5>Feedback</h5>
                <p>Color Oracle is a work in progress and will improve with time and your input. Please share your Color Oracle testimonial with us and send us an email.</p>
            </li>
               <li>
                <h5>Source</h5>
                <p>Color Oracle is open source, available on GitHub for Mac and Windows/Java.</p>
            </li>
        </ul>
        <p class="copy">© 2006–2018 by Bernie Jenny, Monash University, Melbourne, Australia. Last site update: 5 May 2018.</p>
    </footer>
  
</body>
</html>