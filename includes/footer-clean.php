<!-- Footer Start -->
    <?php $base = isset($base_path) ? $base_path : '/'; ?>
    <footer class="footer-section pt-5 pt-lg-5"
        style="background: #1a1a1a; color: #fff; position: relative; overflow: hidden;">
        <!-- Decorative Background Elements -->
        <div class="footer-decor-1"></div>
        <div class="footer-decor-2"></div>

        <div class="container py-0">
            <div class="row g-0 g-lg-5 pb-lg-3 pb-0">
                <!-- Column 1: Logo & About -->
                <div class="col-lg-4 col-md-6 footer-col">
                    <a href="/" class="footer-logo-wrap d-flex align-items-center mb-4 text-decoration-none">
                        <img src="/optimised/vcr-logo-update copy.png" alt="VCR Electric Services"
                            style="height: 70px; object-fit: contain;">
                    </a>
                    <p class="mb-4 footer-about-text">
                        VCR Electric Services is your number one choice for certified, reliable electricians. We provide
                        24/7 support across the region, ensuring your safety and satisfaction.
                    </p>
                    <div class="footer-social-wrap d-flex gap-3">
                        <a href="#" class="social-box"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-box"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-box"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="col-lg-3 col-md-6 mt-6 footer-col">
                    <h4 class="footer-title mb-4">Quick Links</h4>
                    <ul class="list-unstyled footer-links">
                        <li><a href="/articles.html">+ Recent News</a></li>
                        <li><a href="/service.html">+ Main Services</a></li>
                        <li><a href="/faq.html">+ FAQ</a></li>
                        <li><a href="/gallery.html">+ Our Work</a></li>
                        <li><a href="/contact-us.html">+ Contact Us</a></li>
                    </ul>
                </div>

                <!-- Column 3: Contact Info -->
                <div class="col-lg-5 col-md-6 footer-col">
                    <h4 class="footer-title mb-4">Contact Links</h4>
                    <div class="contact-details">
                        <div class="contact-item mb-lg-4 mb-1">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h6 class="text-white mb-1">Office Location:</h6>
                                <p class="mb-0" style="color: #aaa;">Harrow and Surrounding Areas</p>
                            </div>
                        </div>
                        <div class="contact-item mb-4">
                            <div class="contact-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h6 class="text-white mb-1">24/7 Emergency:</h6>
                                <p class="mb-0" style="color: #aaa;">
                                    <a href="tel:07446111951" style="color: inherit; text-decoration: none;">07446 111
                                        951</a>
                                </p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h6 class="text-white mb-1">Email Support:</h6>
                                <p class="mb-0" style="color: #aaa;">
                                    <a href="mailto:info@vcrelectricservices.uk"
                                        style="color: inherit; text-decoration: none;">info@vcrelectricservices.uk</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="footer-bottom py-2 py-lg-4 mt-2"
            style="border-top: 1px solid rgba(255,255,255,0.05); position: relative;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 text-center text-md-start">
                        <p class="mb-0 copyright-text">
                            VCR Electric Services <span style="color: #f4c430;">©</span> All Rights Reserved - 2026 - <a
                                href="/" class="text-decoration-none" style="color: #f4c430;">VCR Electric</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="bottom-accent-shape"></div>
        </div>
    </footer>

    <!-- Clean Footer Styles (No Conflicts) -->
    <style>
        /* Footer Styles - Scoped to prevent conflicts */
        .footer-section {
            margin-top: 0 !important;
        }
        
        .footer-title {
            color: #f4c430;
            font-weight: 700;
            font-size: 24px;
            letter-spacing: -0.5px;
        }

        .social-box {
            width: 45px;
            height: 45px;
            background: #f4c430;
            color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-box:hover {
            background: #fff;
            color: #000;
            transform: translateY(-3px);
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            color: #f4c430;
            padding-left: 5px;
        }

        .contact-item {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
        }

        .contact-icon {
            flex-shrink: 0;
            width: 24px;
            color: #f4c430;
            font-size: 18px;
            margin-top: 3px;
            margin-right: 14px;
        }

        .contact-text {
            flex: 1;
        }

        .footer-about-text {
            color: #aaa;
            line-height: 1.8;
            font-size: 15px;
        }

        .copyright-text {
            color: #fff;
            font-size: 14px;
            font-weight: 400;
        }

        .footer-decor-2 {
            position: absolute;
            top: -50px;
            right: -50px;
            width: 300px;
            height: 300px;
            border: 1px solid rgba(244, 196, 48, 0.1);
            border-radius: 50%;
            pointer-events: none;
        }

        .bottom-accent-shape {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 250px;
            height: 100%;
            background: linear-gradient(135deg, transparent 50%, #f4c430 50%);
            opacity: 0.1;
            pointer-events: none;
        }
    </style>
