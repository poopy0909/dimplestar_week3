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
</head>
<body>
<div id="wrapper">
<?php include 'navbar.php'; ?>

    <div id="content">
        <div id="gallerycontainer">
            <div class="schedule-container">
                <div class="login">
                    <div id="right">
                        <?php
                            if(isset($_SESSION['email'])){
                                $email = $_SESSION['email'];
                                echo "Welcome, ". $email. "!  ";
                                echo "<a href='logout.php'>Logout</a>";
                            }
                            if(empty($email)){
                                echo "<a href='signlog.php' class='sign-login-btn'>SignUp / Login</a>";
                            }?>
                    </div>
                </div>
                
                <div id="right">
                    <h3>Date today: <?php include_once("php_includes/date_time.php"); ?></h3>
                </div>
                
                <h1 class="about-title">Route Schedule</h1>
                
                <img src="images/route.png" alt="Dimple Star Transport Routes" class="route-map">
                
                <div class="schedule-note">
                    <h2>(All trips are vice versa)</h2>
                </div>
                
                <div class="schedule-section">
                    <table class="schedule-table">
                        <tr>
                            <th>Origin</th>
                            <th>Regular Schedule</th>		
                            <th>Destination</th>
                        </tr>
                        <tr>
                            <td class="terminal-highlight">Ali Mall Cubao Terminal</td>
                            <td class="schedule-time">9:00 am / 10:00 am / 1:00 pm / 4:00pm</td>		
                            <td class="terminal-highlight">San Jose</td>
                        </tr>
                        <tr>
                            <td class="terminal-highlight">Alabang Terminal</td>
                            <td class="schedule-time">6:00 am / 7:00 am / 2:00 pm / 6:00 pm / 10:00 pm</td>	
                            <td class="terminal-highlight">San Jose</td>
                        </tr>
                        <tr>
                            <td class="terminal-highlight">Cabuyao Terminal</td>
                            <td class="schedule-time">8:00 am / 9:00 am / 4:00 pm / 8:00 pm</td>		
                            <td class="terminal-highlight">San Jose</td>
                        </tr>
                        <tr>
                            <td class="terminal-highlight">Espana Terminal</td>
                            <td class="schedule-time">4:30 am / 5:30 am / 12:00 am / 4:00 pm / 8:00 pm</td>	
                            <td class="terminal-highlight">San Jose</td>
                        </tr>
                        <tr>
                            <td class="terminal-highlight">San Lazaro Terminal</td>
                            <td class="schedule-time">3:00 am / 4:30 am / 11:00 am / 3:00 pm / 7:00 pm</td>	
                            <td class="terminal-highlight">San Jose</td>
                        </tr>
                        <tr>
                            <td class="terminal-highlight">Pasay Terminal</td>
                            <td class="schedule-time">5:00 am / 6:00 am / 1:00 pm / 3:00pm</td>	
                            <td class="terminal-highlight">San Jose</td>
                        </tr>
                    </table>
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