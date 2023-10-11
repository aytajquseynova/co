    <?php
$maintopHeading = "Design for the color impaired";
$mainTopParagraph = "Color Oracle is a free color blindness simulator for Windows, Mac and Linux. It takes the guesswork out of designing for color blindness by showing you in real time what people with common color vision impairments will see.";
$downloadForMac ="Download for Mac";
$downloadForWindows ="Download for Windows";
$downloadForLinux = "Download for Linux";
$columnSpan = "Requires Java 6 or higher";
    ?>
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
    include './partials./nav.php';
    ?>
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
</body>
</html>