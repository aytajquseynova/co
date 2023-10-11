<?php
$navbar__logo = "CO";
$color__oracle = "Color Oracle";
$how__to = "How To";
$manual= "Manual";
$design__tips = "Design Tips";
$usefulLinks = "Useful Links";
?>

<header class="header">
    <nav class="navbar">
        <div class="navbar__logo">
            <a href=""><?php echo $navbar__logo; ?></a>
        </div>
        <div class="navbar__links">
            <ul>
                <li><a href="index.php"><?php echo $color__oracle; ?></a></li>
                <li><a href="index.php"><?php echo $how__to; ?></a></li>
                <li><a href="index.php"><?php echo $manual; ?></a></li>
                <li><a href="main.php"><?php echo $design__tips; ?></a></li>
                <li><a href="footer.php"><?php echo $usefulLinks; ?></a></li>
            </ul>
        </div>
    </nav>
</header>