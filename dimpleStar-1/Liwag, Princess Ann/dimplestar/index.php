<?php
include 'php_includes/connection.php';
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dimple Star Transport</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="icon" href="images/icon.ico" type="image/x-con">
<script src="slide/js/jquery.js"></script>
<script src="slide/js/amazingslider.js"></script>
<script src="slide/js/initslider-1.js"></script>
</head>
<body>
<?php include 'navbar.php'; ?>
<div id="wrapper">
    
    <div id="content">
        <div id="gallerycontainer">
            <div style="margin:10 auto; padding:30px 20px 20px 20px;">    
                <div class="login">
                    <div id="right">
                        <?php
                            if(isset($_SESSION['email'])){
                                $email = $_SESSION['email'];
                                echo "Welcome, ". $email. "!";
                                echo "<a href='logout.php'>Logout</a>";
                            }
                            if(empty($email)){
                                echo "<a href='signlog.php' class='sign-login-btn'>Login / Sign Up</a>";
                            }?>
                    </div>
                </div>
                <div style="margin:0px auto;max-width:1024px;">
                    <div id="amazingslider-1">
                        <ul class="amazingslider-slides">
                        <li><img src="slide/images/b1.png" /> </li>
                        <li><img src="slide/images/b2.png" /></li>
                        <li><img src="slide/images/b3.png" /></li>
                        <li><img src="slide/images/b4.png" /></li>
                        </ul>
                    </div>
                </div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <div class="contact-section">
    <h1 class="contact-heading">Contact us</h1>
    <div class="contact-info num">0929 209 0712</div>
    <div class="contact-info add">
        Block 1 lot 10, southpoint Subd.<br>
        Brgy Banay-Banay, Cabuyao, Laguna
    </div>
</div>  


<div id="footer">
    <a href="index.php"><img src="images/logo.png" alt="Dimple Star Transport" class="logo-img"></a>
    <p>&copy;Dimple Star Transport<br /></p>
</div>

</div>
</body>
</html>