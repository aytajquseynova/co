    <?php
$about = "About";
$developmentParagraph ="Development: Bernie Jenny, Monash University, Australia. Ideas, testing and icon: Nathaniel Vaughn Kelso, California.";
$feedBack = "Feedback";
$source = "Source";
$color__oracle_p = "Color Oracle is a work in progress and will improve with time and your input. Please share your Color Oracle testimonial with us and send us an email.";
$mac_p = "Color Oracle is open source, available on GitHub for Mac and Windows/Java.";
$copy_p = "© 2006–2018 by Bernie Jenny, Monash University, Melbourne, Australia. Last site update: 5 May 2018.";
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