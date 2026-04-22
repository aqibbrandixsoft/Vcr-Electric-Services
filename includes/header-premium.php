<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header>
    <a class="logo" href="index.php">VOLT <span>MASTER</span></a>
    <nav id="mainNav">
        <a href="index.php" class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a>
        <a href="about-us.php" class="<?php echo ($current_page == 'about-us.php') ? 'active' : ''; ?>">About Us</a>
        <a href="service.php" class="<?php echo ($current_page == 'service.php') ? 'active' : ''; ?>">Services</a>
        <a href="gallery.php" class="<?php echo ($current_page == 'gallery.php') ? 'active' : ''; ?>">Gallery</a>
        <a href="contact.php" class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact</a>
        <a href="#" class="nav-cta">Get a Quote</a>
    </nav>
    <div class="hamburger" id="hamburger" onclick="toggleMenu()">
        <span></span><span></span><span></span>
    </div>
</header>
