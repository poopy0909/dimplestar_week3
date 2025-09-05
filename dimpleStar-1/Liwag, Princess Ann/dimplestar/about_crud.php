<?php
include 'php_includes/connection.php';
session_start();

// Fetch about content from DB
$sql = "SELECT * FROM about_content LIMIT 1";
$result = mysqli_query($con, $sql);
$about = mysqli_fetch_assoc($result);

// Example admin check (customize as needed)
$is_admin = isset($_SESSION['is_admin']) && $_SESSION['is_admin'];
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
        <div class="about-container">
            <div class="about-header">
                <h1 class="about-title">ABOUT US</h1>
            </div>
            
            <div class="about-content">
                <div class="about-image">
                    <img src="<?php echo htmlspecialchars($about['image'] ?? 'images/oldbus.jpg'); ?>" alt="Dimple Star Transport History">
                </div>
                
                <div class="about-text">
                    <div class="about-section">
                        <h3 class="section-title">History</h3>
                        <div class="section-content">
                            <?php echo nl2br(htmlspecialchars($about['history'] ?? '')); ?>
                        </div>
                    </div>
                    
                    <div id="fb">
                        <?php include_once("php_includes/fblike.php"); ?>
                    </div>
                </div>
            </div>
            
            <div class="mission-vision">
                <div class="mission-card">
                    <h3 class="card-title">Mission</h3>
                    <p class="card-content"><?php echo htmlspecialchars($about['mission'] ?? ''); ?></p>
                </div>
                
                <div class="vision-card">
                    <h3 class="card-title">Vision</h3>
                    <p class="card-content"><?php echo htmlspecialchars($about['vision'] ?? ''); ?></p>
                </div>
            </div>
            <?php if ($is_admin): ?>
            <!-- Admin CRUD controls -->
            <div class="crud-controls">
                <form action="about_crud.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $about['id']; ?>">
                    <label>History:</label>
                    <textarea name="history"><?php echo htmlspecialchars($about['history'] ?? ''); ?></textarea>
                    <label>Mission:</label>
                    <input type="text" name="mission" value="<?php echo htmlspecialchars($about['mission'] ?? ''); ?>">
                    <label>Vision:</label>
                    <input type="text" name="vision" value="<?php echo htmlspecialchars($about['vision'] ?? ''); ?>">
                    <label>Image URL:</label>
                    <input type="text" name="image" value="<?php echo htmlspecialchars($about['image'] ?? ''); ?>">
                    <button type="submit" name="action" value="update">Update</button>
                    <button type="submit" name="action" value="delete" onclick="return confirm('Delete this content?')">Delete</button>
                </form>
                <form action="about_crud.php" method="post">
                    <h4>Add New Content</h4>
                    <label>History:</label>
                    <textarea name="history"></textarea>
                    <label>Mission:</label>
                    <input type="text" name="mission">
                    <label>Vision:</label>
                    <input type="text" name="vision">
                    <label>Image URL:</label>
                    <input type="text" name="image">
                    <button type="submit" name="action" value="create">Create</button>
                </form>
            </div>
            <?php endif; ?>
        </div>
    </div>
   
    <div id="footer">
        <a href="index.php"><img src="images/logo.png" alt="Dimple Star Transport" class="logo-img"></a>
        <p>&copy; Dimple Star Transport<br /></p>
    </div>
</div>
</body>
</html>