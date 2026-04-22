<footer>
    <div class="footer-grid">
        <div>
            <span class="footer-logo">VOLT <span>MASTER</span></span>
            <p class="footer-about">Providing elite electrical engineering solutions for industrial, commercial, and premium residential properties since 1999.</p>
        </div>
        <div class="footer-col">
            <h4>Services</h4>
            <a href="service.php#residential">Residential</a>
            <a href="service.php#industrial">Industrial</a>
            <a href="service.php#maintenance">Maintenance</a>
            <a href="service.php#emergency">Emergency</a>
        </div>
        <div class="footer-col">
            <h4>Company</h4>
            <a href="about-us.php">About Us</a>
            <a href="gallery.php">Gallery</a>
            <a href="privacy.php">Privacy Policy</a>
            <a href="terms.php">Terms of Service</a>
        </div>
        <div class="footer-col">
            <h4>Newsletter</h4>
            <div class="footer-newsletter">
                <input type="email" placeholder="Email Address" />
                <button><span class="material-symbols-outlined" style="font-size:20px;">send</span></button>
            </div>
            <p style="font-size:11px; color:rgba(255,255,255,0.25); margin-top:12px; letter-spacing:0.05em;">Subscribe for maintenance tips and updates.</p>
        </div>
    </div>
    <div class="footer-bottom">
        <span>© <?php echo date('Y'); ?> Volt Master Engineering. All rights reserved.</span>
        <span>Engineered with Precision</span>
    </div>
</footer>

<script>
    // Mobile menu
    function toggleMenu() {
        const nav = document.getElementById('mainNav');
        nav.classList.toggle('open');
    }

    // Scroll reveal
    const reveals = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.12 });
    reveals.forEach(el => observer.observe(el));
</script>
