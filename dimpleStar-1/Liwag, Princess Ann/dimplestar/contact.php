<?php
include 'php_includes/connection.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Dimple Star Transport</title>
<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="icon" href="images/icon.ico" type="image/x-con">
<style>
.submit{
	width:140px;
	padding:10px;
}
.submit:hover{
	background:#ECBD2F;
	border-radius:5px;
}
</style>

</head>
<body>
<div id="wrapper">
<?php include 'navbar.php'; ?>
    <div id="content">
        <div id="gallerycontainer">
            <div class="contact-page">    
            
                <div id="right">
                    <h3>Date today: <?php include_once("php_includes/date_time.php"); ?></h3>
                </div>
                
                <h1 class="about-title">CONTACT US</h1>
                
                <div class="contact-container">
                    <div class="contact-info-section">
                        <h2>Get in Touch</h2>
                        <div class="contact-details">
                            <div class="contact-detail">
                                <i class="fas fa-building"></i>
                                <span>Dimple Star Transport</span>
                            </div>
                            <div class="contact-detail">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Block 1 lot 10, Southpoint Subd.<br>Brgy Banay-Banay, Cabuyao, Laguna</span>
                            </div>
                            <div class="contact-detail">
                                <i class="fas fa-phone"></i>
                                <span>0929 209 0712</span>
                            </div>
                            <div class="contact-detail">
                                <i class="fas fa-clock"></i>
                                <span>24/7 Customer Support</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-form-section">
                        <h2>Message Form</h2>
                        <form class="validate" action="messageexec.php" method="POST">
                            <div class="form-group">
                                <label for="name" class="required">Name:</label>
                                <input id="name" class="contactform" type="text" name="name" required />
                            </div>
                            <div class="form-group">
                                <label for="email" class="required">Email:</label>
                                <input id="email" class="contactform" placeholder="Example: yourname@email.com" type="email" name="email" required />
                            </div>
                            <div class="form-group">
                                <label for="subject" class="required">Subject:</label>
                                <input id="subject" class="contactform" type="text" name="subject" required />
                            </div>
                            <div class="form-group">
                                <label for="message" class="required">Message:</label>
                                <textarea id="message" class="contactform" name="message" rows="5" required></textarea>
                            </div>
                            <div class="form-group">
                                <input class="submit" id="submit-button" type="submit" name="Submit" value="Send Message" />
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="column-clear"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    
<div id="footer">
    <a href="index.php"><img src="images/logo.png" alt="Dimple Star Transport" class="logo-img"></a>
    <p>&copy;Dimple Star Transport<br /></p>
</div>

</div>
</body>
</html>