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
    <?php
$navbar__logo = "CO";
$color__oracle = "Color Oracle";
$how__to = "How To";
$manual= "Manual";
$design__tips = "Design Tips";
$usefulLinks = "Useful Links";
$maintopHeading = "Design for the color impaired";
$mainTopParagraph = "Color Oracle is a free color blindness simulator for Windows, Mac and Linux. It takes the guesswork out of designing for color blindness by showing you in real time what people with common color vision impairments will see.";
$downloadForMac ="Download for Mac";
$downloadForWindows ="Download for Windows";
$downloadForLinux = "Download for Linux";
$columnSpan = "Requires Java 6 or higher";
$about = "About";
$developmentParagraph ="Development: Bernie Jenny, Monash University, Australia. Ideas, testing and icon: Nathaniel Vaughn Kelso, California.";
$feedBack = "Feedback";
$source = "Source";
$color__oracle_p = "Color Oracle is a work in progress and will improve with time and your input. Please share your Color Oracle testimonial with us and send us an email.";
$mac_p = "Color Oracle is open source, available on GitHub for Mac and Windows/Java.";
$copy_p = "© 2006–2018 by Bernie Jenny, Monash University, Melbourne, Australia. Last site update: 5 May 2018.";
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
                        <a href=""><?php echo $downloadForMac ?></a>
                        <span></span>
                    </div>
                </div>
                  <div class="column">
                    <div>
                        <a href=""> <?php echo $downloadForWindows ?></a>
                        <span><?php echo $columnSpan ?></span>
                    </div>
                </div>
                  <div class="column">
                    <div>
                        <a href=""><?php echo $downloadForLinux ?></a>
                        <span><?php echo $columnSpan ?></span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <ul>
            <li>
                <h5><?php echo $about?></h5>
                <p><?php echo $developmentParagraph ?></p>
            </li>
               <li>
                <h5><?php echo $feedBack ?></h5>
                <p><?php echo $color__oracle_p?></p>
            </li>
               <li>
                <h5><?php echo $source ?></h5>
                <p><?php echo $mac_p?></p>
            </li>
        </ul>
        <p class="copy"> <?php echo $copy_p?></p>
    </footer>
  
</body>
</html>