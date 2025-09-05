
<!DOCTYPE html>
<?php
	include 'php_includes/connection.php';
	include 'php_includes/book.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Dimple Star Transport</title>
<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="icon" href="images/icon.ico" type="image/x-con">
<style>

</style>

</head>
<body>
<body>
<div id="wrapper">
<?php include 'navbar.php'; ?>
    <div id="content">
        <div id="gallerycontainer">
            <div class="booking-container">      
                </div>
                <div id="right">
                    <h3>Date today: <?php include_once("php_includes/date_time.php"); ?></h3>
                </div>
                
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <h1 class="about-title">BOOK NOW!</h1>
                    
                    <div class="booking-form">
                        <div class="form-group form-group-full">
                            <label>Trip Type:</label>
                            <div class="radio-group">
                                <div class="radio-option">
                                    <input type="radio" id="one-way" name="way" value="1" checked 
                                           onclick="document.getElementById('datepick2').disabled=true">
                                    <label for="one-way">One Way</label>
                                </div>
                                <div class="radio-option">
                                    <input type="radio" id="two-way" name="way" value="2"
                                           onclick="document.getElementById('datepick2').disabled=false">
                                    <label for="two-way">Round Trip</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="Origin">Origin:</label>
                                <select id="Origin" name="Origin" required>
                                    <option value="">Select Origin</option>
                                    <option value="San Lazaro">San Lazaro</option>
                                    <option value="Espana">Espana</option>
                                    <option value="Alabang">Alabang</option>
                                    <option value="Cabuyao">Cabuyao</option>
                                    <option value="Naujan">Naujan</option>
                                    <option value="Victoria">Victoria</option>
                                    <option value="Pinamalayan">Pinamalayan</option>
                                    <option value="Gloria">Gloria</option>
                                    <option value="Bongabong">Bongabong</option>
                                    <option value="Roxas">Roxas</option>
                                    <option value="Mansalay">Mansalay</option>
                                    <option value="Bulalacao">Bulalacao</option>
                                    <option value="Magsaysay">Magsaysay</option>
                                    <option value="San Jose">San Jose</option>
                                    <option value="Pola">Pola</option>
                                    <option value="Soccoro">Soccoro</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="Destination">Destination:</label>
                                <select id="Destination" name="Destination" required>
                                    <option value="">Select Destination</option>
                                    <option value="San Lazaro">San Lazaro</option>
                                    <option value="Espana">Espana</option>
                                    <option value="Alabang">Alabang</option>
                                    <option value="Cabuyao">Cabuyao</option>
                                    <option value="Naujan">Naujan</option>
                                    <option value="Victoria">Victoria</option>
                                    <option value="Pinamalayan">Pinamalayan</option>
                                    <option value="Gloria">Gloria</option>
                                    <option value="Bongabong">Bongabong</option>
                                    <option value="Roxas">Roxas</option>
                                    <option value="Mansalay">Mansalay</option>
                                    <option value="Bulalacao">Bulalacao</option>
                                    <option value="Magsaysay">Magsaysay</option>
                                    <option value="San Jose">San Jose</option>
                                    <option value="Pola">Pola</option>
                                    <option value="Soccoro">Soccoro</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="no_of_pass">Number of Passengers:</label>
                                <input type="number" id="no_of_pass" name="no_of_pass" min="1" max="50" required />
                            </div>
                            
                            <div class="form-group">
                                <label for="bustype">Bus Type:</label>
                                <select id="bustype" name="bustype" required>
                                    <option value="">Select Bus Type</option>
                                    <option value="Air Conditioned">Air Conditioned</option>
                                    <option value="Ordinary">Ordinary</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="datepick1">Departure Date:</label>
                                <input type="text" id="datepick1" name="Departure" required />
                            </div>
                            
                            <div class="form-group">
                                <label for="datepick2">Return Date:</label>
                                <input type="text" id="datepick2" name="Return" disabled />
                            </div>
                        </div>
                        
                        <div class="form-group form-group-full" style="text-align: center;">
                            <input type="submit" name="submit" id="submit" value="Book Now" class="submit-btn">
                        </div>
                    </div>
                </form>
                
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

<script type="text/javascript" src="js/datepickr.js"></script>
<script type="text/javascript">
    new datepickr('datepick1', {
        'dateFormat': 'Y-m-d'
    });
    
    new datepickr('datepick2', {
        'dateFormat': 'Y-m-d'
    });
</script>
</body>
</html>