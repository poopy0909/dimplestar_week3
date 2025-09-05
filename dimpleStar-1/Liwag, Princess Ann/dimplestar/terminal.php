<?php
include 'php_includes/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimple Star Transport</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/terminal.css" />
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <link rel="icon" href="images/icon.ico" type="image/x-con">
</head>

<body>
    <div id="wrapper">
        <?php include 'navbar.php'; ?>
        <div id="content">
            <div id="gallerycontainer">
                <div class="terminal-container">
                    <div id="right">
                        <h3>Date today: <?php include_once("php_includes/date_time.php"); ?></h3>
                    </div>
                    <br><br><br>
                    <div class="about-header">
                <h1 class="about-title">TERMINALS</h1>
            </div>

                    <div class="terminal-section">
                        <h3>Espana Terminal</h3>
                        <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.com.ph/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Dimple+Star,+836BAntipoloStSampaloc,521,Manila,&amp;aq=0&amp;oq=Metro+Manila&amp;sll=14.6125312,120.9948033&amp;sspn=0.011772,0.021136&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Dimple+Star&amp;ll=14.6125312,120.9948033&amp;spn=0.011772,0.021136&amp;z=14&amp;output=embed"></iframe>
                        <div class="map-button-container">
                            <a href="https://www.google.com/maps/place/Dimple+Star/@14.6125312,120.9948033,770m/data=!3m2!1e3!4b1!4m2!3m1!1s0x3397b60300001d5d:0xd30645794daddf84?hl=en;z=14"
                                class="view-map-btn" target="_blank">View Larger Map</a>
                        </div>
                        <div class="contact-info">Contact: +63.02.985.1451 / +63.908.926.9163</div>
                    </div>

                    <hr>

                    <div class="terminal-section">
                        <h3>San Jose Terminal</h3>
                        <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.com.ph/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Dimple+Star+Transport,+BonifacioSt,SanJose,OccidentalMindoro,&amp;aq=0&amp;oq=&amp;sll=12.3540632,121.0618653&amp;sspn=0.011772,0.021136&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Dimple+Star+Transport&amp;ll=12.3540632,121.0618653&amp;spn=0.011772,0.021136&amp;z=14&amp;output=embed"></iframe>
                        <div class="map-button-container">
                            <a href="https://www.google.com/maps/place/Dimple+Star+Transport/@14.6143711,120.9841972,458m/data=!3m2!1e3!4b1!4m2!3m1!1s0x3397b5fe6f7ebf6b:0xc34baa5ed38261eb?hl=en;z=14"
                                class="view-map-btn" target="_blank">View Larger Map</a>
                        </div>
                        <div class="contact-info">Contact: +63.02.6684151 / +63.921.568.6449</div>
                    </div>

                    

        <div id="footer">
            <a href="index.php"><img src="images/logo.png" alt="Dimple Star Transport" class="logo-img" /></a>
            <p>&copy;Dimple Star Transport<br /></p>
        </div>

    </div>
</body>

</html>