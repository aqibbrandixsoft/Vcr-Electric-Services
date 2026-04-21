<?php
require_once __DIR__ . '/../../includes/mailer-helper.php';

// Form Handling Logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Honeypot spam protection
    if (!empty($_POST['available_check'])) {
        die("Spam detected.");
    }

    $to = SMTP_TO_EMAILS;
    $from_email = filter_var($_POST['email_address'], FILTER_SANITIZE_EMAIL);
    $first_name = htmlspecialchars($_POST['first_name']);
    $phone_number = htmlspecialchars($_POST['phone_number']);
    $subject_input = htmlspecialchars($_POST['subject'] ?? '');
    $message_body = htmlspecialchars($_POST['enquiry']);

    $subject = "New Contact Form Submission (Greenford): " . ($subject_input ? $subject_input : "General Enquiry");

    $email_content = "Name: $first_name\n";
    $email_content .= "Email: $from_email\n";
    $email_content .= "Phone: $phone_number\n";
    $email_content .= "Subject: $subject_input\n\n";
    $email_content .= "Message:\n$message_body\n";

    if (vcr_send_email($to, $subject, $email_content, $from_email, $first_name)) {
        $success_msg = "Thank you! Your message has been sent successfully.";
    } else {
        $error_msg = "Sorry, there was an issue sending your message. Please try again later.";
    }
}

// Header Configuration
$base_path = "../../";
$page_title = "Electricians in Greenford | VCR Electrical Services";
$page_description = "VCR Electrical Services provides complete electrical services in Greenford, from installation and repair to EICR testing and 24-hour emergency call-outs.";
$extra_css = "vcr-greenford.css";
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Banner Start -->
<div class="container-fluid premium-hero">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="hero-content wow fadeInLeft" data-wow-delay="0.1s">
                    <h6 class="hero-tag">Rapid Response Electricians</h6>
                    <h1 class="hero-title" style="font-size: 46px; font-weight: 600; line-height: 1.2; color: #fff;">
                        Emergency Electricians <br>
                        <span style="color: #f4c430;">in Greenford</span>
                    </h1>
                    <h4 style="color: #f4c430;">Qualified Electricians Near You.</h4>
                    <p class="hero-subtitle">
                        VCR Electrical Services delivers safe, reliable, and efficient electrical services in
                        Greenford for both residential and commercial clients. Whether you need modern lighting,
                        consumer unit upgrades, fault-finding, or rewiring, our electricians in Greenford provide
                        reliable workmanship and professional service. We are committed to excellence in every
                        project, ensuring your electrical systems are safe and up to code.
                    </p>
                    <a href="tel:07446111951" class="btn btn-hero-cta">
                        <i class="fas fa-bolt"></i> GET A QUOTE
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Banner End -->

<!-- Contact & Feature Section Start -->
<div class="container-fluid py-5" style="background: #ffffff;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="feature-content pe-lg-5">
                    <h6 class="hero-tag">Trusted Support</h6>
                    <h2 class="display-5 fw-bold mb-4">Our Comprehensive Electrical Services</h2>

                    <h3 class="h5 fw-bold mb-2">Installation</h3>
                    <p class="text-muted mb-4">Our experts install new wiring, lighting fixtures, and electrical panels
                        efficiently and carefully. We plan each installation to cater to your specific requirements,
                        ensuring optimal performance and safety.</p>

                    <h3 class="h5 fw-bold mb-2">Maintenance</h3>
                    <p class="text-muted mb-4">Regular electrical inspections prevent costly faults and breakdowns. We
                        identify hazardous conditions early, ensuring your systems run safely and efficiently for years
                        to come.</p>

                    <h3 class="h5 fw-bold mb-2">Repairs</h3>
                    <p class="text-muted mb-4">Our technicians quickly diagnose and repair electrical faults, restoring
                        power with minimal disruption. We handle anything from tripping circuits to complex wiring
                        repairs.</p>

                    <a href="tel:07446111951" class="btn btn-hero-cta">
                        <i class="fas fa-phone-alt"></i> CALL AN EXPERT
                    </a>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="contact-form-wrapper p-4 bg-light rounded shadow-sm">
                    <h4 class="mb-3">Request an Emergency Call-Out</h4>
                    <p class="mb-4">Get Professional <span class="text-primary">Help Fast</span> and Secure.</p>

                    <?php if (isset($success_msg)): ?>
                        <div class="alert alert-success"><?php echo $success_msg; ?></div>
                    <?php endif; ?>
                    <?php if (isset($error_msg)): ?>
                        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
                    <?php endif; ?>

                    <form action="" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="first_name" class="form-control" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email_address" class="form-control" placeholder="Your Email"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="phone_number" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="subject" class="form-control" placeholder="Subject (Optional)">
                            </div>
                            <div class="col-12">
                                <textarea name="enquiry" class="form-control" placeholder="How can we help?"
                                    style="height: 120px;" required></textarea>
                            </div>
                            <div class="col-12">
                                <input type="text" name="available_check" style="display:none;">
                                <button type="submit" class="btn btn-hero-cta w-100 py-3">SUBMIT REQUEST</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact & Feature Section End -->

<!-- About Section Start -->
<div class="container-fluid py-5" style="background: #f8f9fa;">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <img src="../img/68150.jpg" class="img-fluid rounded shadow" alt="Electrician Professional">
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                <h6 class="hero-tag">Top Electrician Expert</h6>
                <h2 class="display-5 fw-bold mb-4">What Stands VCR Electrical Services Apart?</h2>
                <p class="mb-4">With years of dedicated service, VCR Electrical Services has built a reputation for
                    excellence in Greenford. We are committed to providing professional electrical services that
                    prioritise safety, reliability, and customer satisfaction.</p>
                <div class="row g-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-3">
                            <div class="btn-sm-square bg-primary rounded-circle me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <span class="fw-bold">Certified Experts</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-sm-square bg-primary rounded-circle me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <span class="fw-bold">Transparent Pricing</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-3">
                            <div class="btn-sm-square bg-primary rounded-circle me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <span class="fw-bold">24/7 Support</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-sm-square bg-primary rounded-circle me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <span class="fw-bold">Reliable Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services Start -->
<div class="container-fluid py-5" style="background: #ffffff;">
    <div class="container py-5 text-center">
        <h6 class="hero-tag">Premium Solutions</h6>
        <h2 class="display-5 fw-bold mb-5">Professional Electrical Solutions</h2>

        <div class="row g-4">
            <!-- Residential -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="premium-service-card">
                    <div class="service-card-image">
                        <img src="../img/8632.jpg" alt="Residential Electrical">
                    </div>
                    <div class="service-card-content">
                        <h3 class="service-card-title">Residential Electrical</h3>
                        <p class="service-card-description">From lighting design and installation to full house rewiring
                            and consumer unit upgrades, we provide comprehensive services for homeowners. Ensuring your
                            family's safety is our top priority.</p>
                        <a href="tel:07446111951" class="btn btn-hero-cta w-100">Contact Us</a>
                    </div>
                </div>
            </div>
            <!-- Commercial -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="premium-service-card">
                    <div class="service-card-image">
                        <img src="../img/8626.jpg" alt="Commercial Electrical">
                    </div>
                    <div class="service-card-content">
                        <h3 class="service-card-title">Commercial Electrical</h3>
                        <p class="service-card-description">We offer tailored electrical solutions for businesses,
                            including retail outlets, offices, and restaurants. Our services include lighting, power
                            distribution, and data cabling.</p>
                        <a href="tel:07446111951" class="btn btn-hero-cta w-100">Contact Us</a>
                    </div>
                </div>
            </div>
            <!-- Emergency -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="premium-service-card">
                    <div class="service-card-image">
                        <img src="../img/8633.jpg" alt="Emergency Maintenance">
                    </div>
                    <div class="service-card-content">
                        <h3 class="service-card-title">Emergency Support</h3>
                        <p class="service-card-description">Unexpected power failures or hazardous electrical issues?
                            Our 24-hour emergency electricians in Greenford respond quickly to resolve any urgent
                            situation safely.</p>
                        <a href="tel:07446111951" class="btn btn-hero-cta w-100">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Start -->
<div class="container-fluid cta-section p-0">
    <div class="cta-wrapper text-center">
        <div class="container py-5">
            <h2 class="text-white display-5 mb-4">Your Trusted Electricians - Contact Us!</h2>
            <p class="text-white mb-5 mx-auto" style="max-width: 800px;">
                Let our specialists enhance your property with safe, modern, and energy-efficient electrical solutions.
                From small repairs to major installations, we're here to help. Give us a call today for a free quote!
            </p>
            <a href="tel:07446111951" class="btn btn-hero-cta btn-lg">
                <i class="fas fa-phone-alt"></i> CALL 07446 111 951
            </a>
        </div>
    </div>
</div>

<!-- Google Reviews Start -->
<div class="container-fluid py-5" style="background: #f8f9fa;">
    <div class="container py-5 text-center">
        <h6 class="hero-tag">Customer Trust</h6>
        <h2 class="display-5 fw-bold mb-5">Our Excellent Reputation</h2>
        <div class="elfsight-app-582548cc-e260-449e-ba60-bc0aeef8f12d" data-elfsight-app-lazy></div>
        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    </div>
</div>

<!-- FAQ Start -->
<div class="container-fluid py-5" style="background: #ffffff;">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h6 class="hero-tag">Explore FAQs</h6>
            <h2 class="display-5 fw-bold">Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="faq-item mb-3">
                    <button class="faq-question py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        <span class="faq-question-text">What are the signs of faulty electrical wiring?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div id="faq1" class="collapse">
                        <div class="py-3 text-muted">
                            Flickering lights, sizzling sounds, burning smells, and frequent breaker trips are major
                            signs. If you notice any of these, contact us immediately for an inspection.
                        </div>
                    </div>
                </div>
                <div class="faq-item mb-3">
                    <button class="faq-question py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        <span class="faq-question-text">What causes a circuit breaker to trip?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div id="faq2" class="collapse">
                        <div class="py-3 text-muted">
                            Overloaded circuits, short circuits, or ground faults are common causes. Ageing wiring or a
                            faulty appliance can also trigger the breaker.
                        </div>
                    </div>
                </div>
                <div class="faq-item mb-3">
                    <button class="faq-question py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        <span class="faq-question-text">Why is my electrical bill unusually high?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div id="faq3" class="collapse">
                        <div class="py-3 text-muted">
                            Faulty appliances, outdated wiring, or inefficient lighting can increase consumption. We can
                            help identify and fix these issues.
                        </div>
                    </div>
                </div>
                <div class="faq-item mb-3">
                    <button class="faq-question py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        <span class="faq-question-text">How often should a property be inspected?</span>
                        <span class="faq-icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div id="faq4" class="collapse">
                        <div class="py-3 text-muted">
                            For homeowners, every 10 years is recommended. For businesses, it's every 5 years. If you
                            are a landlord, an EICR is required every 5 years.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>