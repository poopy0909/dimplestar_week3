<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="modern-navbar">
    <div class="nav-container">
        <div class="nav-logo">
            <a href="index.php">
                <img src="images/logo.png" alt="Dimple Star Transport" class="logo-img">
            </a>
        </div>

        <ul class="nav-menu">
            <li class="nav-item">
                <a href="index.php" class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                    <span class="nav-icon"></span>
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a href="about.php" class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">
                    <span class="nav-icon"></span>
                    About Us
                </a>
            </li>
            <li class="nav-item">
                <a href="terminal.php" class="nav-link <?php echo ($current_page == 'terminal.php') ? 'active' : ''; ?>">
                    <span class="nav-icon"></span>
                    Terminals
                </a>
            </li>
            <li class="nav-item">
                <a href="routeschedule.php" class="nav-link <?php echo ($current_page == 'routeschedule.php') ? 'active' : ''; ?>">
                    <span class="nav-icon"></span>
                    Routes/Schedules
                </a>
            </li>
            <li class="nav-item">
                <a href="contact.php" class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">
                    <span class="nav-icon"></span>
                    Contact
                </a>
            </li>
        </ul>

        <div class="nav-book">
            <a href="book.php" class="book-btn <?php echo ($current_page == 'book.php') ? 'active' : ''; ?>">
                <span class="btn-icon"></span>
                BOOK NOW
            </a>
        </div>

        <div class="hamburger" id="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
</nav>

<div class="mobile-menu-overlay" id="mobileMenuOverlay">
    <div class="mobile-menu">
        <div class="mobile-menu-header">
            <img src="images/logo.png" alt="Dimple Star Transport" class="mobile-logo">
            <button class="close-btn" id="closeBtn">&times;</button>
        </div>
        <ul class="mobile-nav-list">
            <li><a href="index.php" class="mobile-nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a></li>
            <li><a href="about.php" class="mobile-nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">About Us</a></li>
            <li><a href="terminal.php" class="mobile-nav-link <?php echo ($current_page == 'terminal.php') ? 'active' : ''; ?>">Terminals</a></li>
            <li><a href="routeschedule.php" class="mobile-nav-link <?php echo ($current_page == 'routeschedule.php') ? 'active' : ''; ?>">Routes/Schedules</a></li>
            <li><a href="contact.php" class="mobile-nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
            <li><a href="book.php" class="book-btn-mobile <?php echo ($current_page == 'book.php') ? 'active' : ''; ?>">BOOK NOW</a></li>
        </ul>
    </div>
</div>

<style>
/* Import Poppins font from Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

body {
    padding-top: 5.5rem;
    font-family: 'Poppins', sans-serif;
}

:root {
    --primary-yellow: #FFD700;
    --primary-green: #2E8B57;
    --gradient-start: #FFD700;
    --gradient-mid: #ADFF2F;
    --gradient-end: #2E8B57;
    --glass-light: rgba(255, 255, 255, 0.2);
    --glass-border: rgba(255, 255, 255, 0.3);
    --text-dark: #2C3E50;
    --shadow-light: 0 8px 32px rgba(31, 38, 135, 0.15);
}

.modern-navbar {
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border-bottom: 1px solid var(--glass-border);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
}

.nav-container {
    max-width: 1300px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 80px;
    padding: 0 20px;
}

/* Left Side */
.nav-logo {
    flex-shrink: 0;
    display: flex;
    align-items: center;
}

.logo-img {
    height: 60px;
    width: auto;
    transition: transform 0.3s ease;
}

.logo-img:hover {
    transform: scale(1.05);
}

/* Middle */
.nav-menu {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    gap: 5px;
}

.nav-item {
    position: relative;
}

.nav-link {
    text-decoration: none;
    color: var(--text-dark);
    font-weight: 500;
    font-size: 15px;
    padding: 12px 18px;
    transition: all 0.3s ease;
    border-radius: 10px;
    letter-spacing: 0.2px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.nav-link:hover {
    background: rgba(255, 215, 0, 0.15);
    color: var(--text-dark);
}

.nav-link.active {
    font-weight: 600;
    background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
    color: white;
    box-shadow: 0 4px 12px rgba(46, 139, 87, 0.3);
}

.nav-icon {
    font-size: 18px;
}

/* Right Side */
.nav-book {
    flex-shrink: 0;
}

.book-btn {
    background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
    color: white;
    text-decoration: none;
    padding: 14px 28px;
    border-radius: 10px;
    font-weight: 600;
    font-size: 15px;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(46, 139, 87, 0.3);
    display: flex;
    align-items: center;
    gap: 8px;
    position: relative;
    overflow: hidden;
}

.book-btn::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(
        to bottom right,
        rgba(255, 255, 255, 0) 0%,
        rgba(255, 255, 255, 0.8) 50%,
        rgba(255, 255, 255, 0) 100%
    );
    transform: rotate(30deg);
    transition: all 0.7s ease;
    opacity: 0;
}

.book-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(46, 139, 87, 0.4);
}

.book-btn:hover::before {
    animation: shimmer 1.2s ease;
    opacity: 1;
}

.book-btn.active {
    background: linear-gradient(135deg, var(--gradient-end) 0%, var(--gradient-start) 100%);
}

.btn-icon {
    font-size: 18px;
}

@keyframes shimmer {
    0% {
        transform: translateX(-100%) translateY(-100%) rotate(30deg);
    }
    100% {
        transform: translateX(100%) translateY(100%) rotate(30deg);
    }
}

/* Mobile Hamburger */
.hamburger {
    display: none;
    flex-direction: column;
    cursor: pointer;
    padding: 8px;
    background: rgba(255, 215, 0, 0.1);
    border-radius: 8px;
    transition: all 0.3s ease;
}

.hamburger:hover {
    background: rgba(255, 215, 0, 0.2);
}

.bar {
    width: 28px;
    height: 3px;
    background: var(--text-dark);
    margin: 4px 0;
    transition: 0.3s;
    border-radius: 2px;
}

.hamburger.active .bar:nth-child(1) {
    transform: rotate(-45deg) translate(-6px, 6px);
    background: var(--primary-green);
}

.hamburger.active .bar:nth-child(2) {
    opacity: 0;
}

.hamburger.active .bar:nth-child(3) {
    transform: rotate(45deg) translate(-6px, -6px);
    background: var(--primary-green);
}

/* Mobile Menu */
.mobile-menu-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background: rgba(0, 0, 0, 0.7);
    backdrop-filter: blur(5px);
    z-index: 2000;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}

.mobile-menu-overlay.active {
    opacity: 1;
    visibility: visible;
}

.mobile-menu {
    position: absolute;
    top: 0;
    right: 0;
    width: 300px;
    height: 100vh;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(15px);
    transform: translateX(100%);
    transition: transform 0.3s ease;
    box-shadow: -5px 0 25px rgba(0, 0, 0, 0.15);
    display: flex;
    flex-direction: column;
}

.mobile-menu-overlay.active .mobile-menu {
    transform: translateX(0);
}

.mobile-menu-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.5rem;
    border-bottom: 1px solid var(--glass-border);
}

.mobile-logo {
    height: 55px;
}

.close-btn {
    background: rgba(255, 215, 0, 0.1);
    border: none;
    font-size: 2rem;
    cursor: pointer;
    color: var(--text-dark);
    padding: 0;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: all 0.3s ease;
}

.close-btn:hover {
    background: var(--primary-yellow);
    color: white;
}

.mobile-nav-list {
    list-style: none;
    padding: 1.5rem 0;
    margin: 0;
    display: flex;
    flex-direction: column;
}

.mobile-nav-link {
    display: block;
    color: var(--text-dark);
    text-decoration: none;
    padding: 1.2rem 2rem;
    font-weight: 500;
    font-size: 16px;
    transition: all 0.3s ease;
    border-left: 4px solid transparent;
}

.mobile-nav-link:hover {
    background: rgba(255, 215, 0, 0.1);
    border-left-color: var(--primary-yellow);
    padding-left: 2.5rem;
}

.mobile-nav-link.active {
    background: linear-gradient(135deg, rgba(255, 215, 0, 0.2) 0%, rgba(46, 139, 87, 0.2) 100%);
    color: var(--primary-green);
    border-left-color: var(--primary-green);
    font-weight: 600;
}

.book-btn-mobile {
    display: block;
    background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
    color: white;
    text-decoration: none;
    margin: 2rem 2rem 1rem;
    padding: 14px 20px;
    border-radius: 10px;
    font-weight: 600;
    font-size: 16px;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(46, 139, 87, 0.3);
}

.book-btn-mobile:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 18px rgba(46, 139, 87, 0.4);
}

/* Responsive */
@media (max-width: 1000px) {
    .nav-menu {
        display: none;
    }
    
    .nav-book {
        display: none;
    }
    
    .hamburger {
        display: flex;
    }
    
    body {
        padding-top: 5rem;
    }
    
    .nav-container {
        height: 70px;
    }
}

@media (max-width: 480px) {
    .mobile-menu {
        width: 100%;
    }
    
    .nav-container {
        padding: 0 15px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('hamburger');
    const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
    const closeBtn = document.getElementById('closeBtn');

    function openMobileMenu() {
        mobileMenuOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
        hamburger.classList.add('active');
    }

    function closeMobileMenu() {
        mobileMenuOverlay.classList.remove('active');
        document.body.style.overflow = 'auto';
        hamburger.classList.remove('active');
    }

    hamburger.addEventListener('click', openMobileMenu);
    closeBtn.addEventListener('click', closeMobileMenu);

    mobileMenuOverlay.addEventListener('click', function(e) {
        if (e.target === mobileMenuOverlay) {
            closeMobileMenu();
        }
    });

    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link, .book-btn-mobile');
    mobileNavLinks.forEach(link => {
        link.addEventListener('click', closeMobileMenu);
    });
});
</script>