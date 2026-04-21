    <!-- Footer Start -->
    <?php $base = isset($base_path) ? $base_path : '/'; ?>
    <footer class="footer-section pt-5 pt-lg-5" style="background: #1a1a1a; color: #fff; position: relative; overflow: hidden;">
        <div class="container py-4">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 footer-col">
                    <a href="/" class="footer-logo-wrap d-flex align-items-center mb-4 text-decoration-none">
                        <img src="<?php echo $base; ?>optimised/vcr-logo-update copy.png" alt="VCR Electric Services" style="height: 70px; object-fit: contain;">
                    </a>
                    <p class="mb-4">Professional, reliable electrical services across London and surrounding areas.</p>
                </div>
                <div class="col-lg-3 col-md-6 footer-col">
                    <h4 class="footer-title mb-4">Quick Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="/" class="text-white text-decoration-none">+ Home</a></li>
                        <li><a href="/about.html" class="text-white text-decoration-none">+ About Us</a></li>
                        <li><a href="/service.html" class="text-white text-decoration-none">+ Services</a></li>
                        <li><a href="/contact-us.html" class="text-white text-decoration-none">+ Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-5 col-md-6 footer-col">
                    <h4 class="footer-title mb-4">Contact Info</h4>
                    <p><i class="fas fa-phone-alt me-2"></i> <a href="tel:07446111951" class="text-white text-decoration-none">07446 111 951</a></p>
                    <p><i class="fas fa-envelope me-2"></i> <a href="mailto:info@vcrelectricservices.uk" class="text-white text-decoration-none">info@vcrelectricservices.uk</a></p>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-3 text-center border-top border-secondary">
            <p class="mb-0">&copy; 2026 VCR Electric Services. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    
    <script>
        new WOW().init();
        (function ($) {
            "use strict";
            setTimeout(function () {
                if ($('#spinner').length > 0) {
                    $('#spinner').removeClass('show');
                }
            }, 1);
        })(jQuery);
    </script>
    
    <script src="<?php echo $base; ?>js/whatsapp-button.js" defer></script>
</body>
</html>
