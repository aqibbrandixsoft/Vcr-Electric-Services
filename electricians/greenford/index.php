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
                <div class="hero-content">
                    <h6 class="hero-tag">Rapid Response Electricians</h6>
                    <h1 class="hero-title" style="font-size: 46px; font-weight: 600; line-height: 1.2;">
                        Emergency Electricians <br>
                        <span style="color: #f4c430;">in Greenford</span>
                    </h1>
                    <p class="hero-subtitle text-white mt-4" style="max-width: 600px;">
                        VCR Electrical Services delivers safe, reliable, and efficient electrical services in Greenford for both residential and commercial clients.
                    </p>
                    <a href="tel:07446111951" class="btn btn-hero-cta mt-4">
                        <i class="fas fa-bolt"></i> GET A QUOTE
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Banner End -->

<!-- Contact Section Start -->
<div class="container py-5">
    <div class="row g-5">
        <div class="col-lg-6">
            <h2 class="display-5 fw-bold mb-4">Professional Support</h2>
            <p>Our experts handle everything from consumer unit upgrades to full rewiring in Greenford.</p>
            <ul class="list-unstyled mt-4">
                <li><i class="fas fa-check text-warning me-2"></i> 24/7 Emergency Support</li>
                <li><i class="fas fa-check text-warning me-2"></i> Certified & Insured</li>
                <li><i class="fas fa-check text-warning me-2"></i> Transparent Pricing</li>
            </ul>
        </div>
        <div class="col-lg-6">
            <div class="contact-form-wrapper p-4 shadow-sm bg-light rounded">
                <h4 class="mb-4">Request a Call-Out</h4>
                
                <?php if (isset($success_msg)): ?>
                    <div class="alert alert-success"><?php echo $success_msg; ?></div>
                <?php endif; ?>
                <?php if (isset($error_msg)): ?>
                    <div class="alert alert-danger"><?php echo $error_msg; ?></div>
                <?php endif; ?>

                <form action="" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" name="first_name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email_address" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="col-md-12">
                            <input type="text" name="phone_number" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="col-md-12">
                            <textarea name="enquiry" class="form-control" placeholder="How can we help?" style="height: 100px;" required></textarea>
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
<!-- Contact Section End -->

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
