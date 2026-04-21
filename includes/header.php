<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php $base = isset($base_path) ? $base_path : '/'; ?>
    <title><?php echo isset($page_title) ? $page_title : 'VCR Electric Services'; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="<?php echo isset($page_description) ? $page_description : ''; ?>" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo $base; ?>css/style.css" rel="stylesheet">
    
    <!-- Dynamic Extra CSS Support -->
    <?php if (isset($extra_css)): ?>
    <link rel="stylesheet" href="<?php echo $extra_css; ?>">
    <?php endif; ?>

    <link rel="stylesheet" href="<?php echo $base; ?>css/whatsapp-button.css">
</head>

<body>


    <!-- Header Start -->
    <div class="vcr-header-wrapper">
        <header class="vcr-header">
            <div class="container container-vcr">
                <nav class="navbar navbar-expand-xl navbar-light p-0" style="height: 100px;">
                    <a href="/" class="navbar-brand d-flex align-items-center me-0">
                        <img src="<?php echo $base; ?>optimised/vcr-logo-update.webp" alt="VCR Electric Services" style="height: 65px; object-fit: contain;">
                    </a>

                    <button class="navbar-toggler border-0 ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#vcrNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="vcrNavbar">
                        <ul class="navbar-nav mx-auto align-items-center">
                            <li class="nav-item"><a class="nav-link nav-link-custom" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link nav-link-custom" href="/about.html">About Us</a></li>
                            <li class="nav-item"><a class="nav-link nav-link-custom" href="/service.html">Services</a></li>
                            <li class="nav-item"><a class="nav-link nav-link-custom" href="/gallery.html">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link nav-link-custom" href="/contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="d-none d-xl-flex align-items-center gap-4 ms-auto">
                        <a href="tel:07446111951" class="btn btn-call-now px-4 py-2">
                            <i class="fas fa-phone-alt"></i> CALL NOW
                        </a>
                    </div>
                </nav>
            </div>
        </header>
    </div>
