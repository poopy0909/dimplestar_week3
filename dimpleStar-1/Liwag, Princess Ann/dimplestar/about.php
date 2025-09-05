<?php
include 'php_includes/connection.php';

// Get latest about text
$about_text = '';
$sql = "SELECT about_text FROM about_audit ORDER BY edited_at DESC LIMIT 1";
$result = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_assoc($result)) {
    $about_text = $row['about_text'];
} else {
    $about_text = "Photo taken on October 16, 1993. Napat Transit (now Dimple Star Transport) NVR-963
    (fleet No 800) going to Alabang and jeepneys under the Light Rail Line in Taft Ave near
    United Nations Avenue, Ermita, Manila, Philippines.
    <br><br>
    Year 2004 of May changes has been made, Napat Transit became Dimple Star Transport.";
}

// Check login status
$is_logged_in = isset($_SESSION['email']) && !empty($_SESSION['email']);
$fullname = '';
$email = '';

if ($is_logged_in) {
    $email = $_SESSION['email'];
    // Fetch user's full name from members table
    $sql = "SELECT fname, lname FROM members WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($fname, $lname);
    if ($stmt->fetch()) {
        $fullname = $fname . ' ' . $lname;
    }
    $stmt->close();
}

// Handle edit submission
if (isset($_POST['edit_about']) && $is_logged_in) {
    $new_text = $_POST['about_text'];
    $stmt = $conn->prepare("INSERT INTO about_audit (about_text, edited_by, edited_email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $new_text, $fullname, $email);
    $stmt->execute();
    header("Location: about.php");
    exit;
}

// Get audit trail if logged in
$audit_trail = [];
if ($is_logged_in) {
    $sql = "SELECT edited_by, edited_email, edited_at, about_text FROM about_audit ORDER BY edited_at DESC";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $audit_trail[] = $row;
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Dimple Star Transport</title>
<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="icon" href="images/icon.ico" type="image/x-con">
<style>
.audit-table { border-collapse: collapse; width: 100%; margin-top: 20px; }
.audit-table th, .audit-table td { border: 1px solid #ccc; padding: 8px; text-align: left; }
.audit-table th { background: #eee; }
.edit-form textarea { width: 100%; height: 120px; }
.edit-form button { margin-top: 10px; }
</style>
</head>
<body>
<div id="wrapper">
<?php include 'navbar.php'; ?>
    <div id="content">
        <div class="about-container">
            <div class="about-header">
                <h1 class="about-title">ABOUT US</h1>
            </div>
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
            <div class="about-content">
                <div class="about-image">
                    <img src="images/oldbus.jpg" alt="Dimple Star Transport History">
                </div>
                
                <div class="about-text">
                    <div class="about-section">
                        <h3 class="section-title">History</h3>
                        <div class="section-content">
                            <?php if ($is_logged_in): ?>
                                <form method="post" class="edit-form">
                                    <textarea name="about_text"><?php echo htmlspecialchars($about_text); ?></textarea>
                                    <button type="submit" name="edit_about">Save</button>
                                </form>
                            <?php else: ?>
                                <?php echo $about_text; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <div id="fb">
                        <?php include_once("php_includes/fblike.php"); ?>
                    </div>
                </div>
            </div>
            
            <?php if ($is_logged_in): ?>
            <div class="audit-trail">
                <h3>Audit Trail</h3>
                <table class="audit-table">
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Date & Time</th>
                        <th>Edited Content</th>
                    </tr>
                    <?php foreach ($audit_trail as $audit): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($audit['edited_by']); ?></td>
                        <td><?php echo htmlspecialchars($audit['edited_email']); ?></td>
                        <td><?php echo htmlspecialchars($audit['edited_at']); ?></td>
                        <td><?php echo htmlspecialchars($audit['about_text']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <?php endif; ?>
        </div>
        <div class="mission-vision">
                <div class="mission-card">
                    <h3 class="card-title"> Mission</h3>
                    <p class="card-content">To provide superior transport service to Metro Manila and Mindoro Province commuters.</p>
                </div>
                
                <div class="vision-card">
                    <h3 class="card-title">Vision</h3>
                    <p class="card-content">To lead the bus transport industry through its innovation service to the riding public.</p>
                </div>
            </div>
    </div>
   
    <div id="footer">
        <a href="index.php"><img src="images/logo.png" alt="Dimple Star Transport" class="logo-img"></a>
        <p>&copy; Dimple Star Transport<br /></p>
    </div>
</div>
</body>
</html>