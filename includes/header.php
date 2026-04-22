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
    <!-- Wolt-Style Header Start -->

    <div class="vcr-header-wrapper">

        <header class="vcr-header">

            <div class="container container-vcr">

                <nav class="navbar navbar-expand-xl navbar-light p-0" style="height: 100px;">

                    <!-- Logo -->

                    <a href="https://www.vcrelectricservices.uk/" class="navbar-brand d-flex align-items-center me-0">

                        <img src="/optimised/vcr-logo-update.webp" alt="VCR Electric Services"
                            style="height: 65px; object-fit: contain;">

                    </a>


                    <!-- Mobile Toggler -->

                    <button class="navbar-toggler border-0 ms-auto" type="button" data-bs-toggle="collapse"
                        data-bs-target="#vcrNavbar">

                        <span class="navbar-toggler-icon"></span>

                    </button>



                    <!-- Navigation Links -->

                    <div class="collapse navbar-collapse" id="vcrNavbar">

                        <ul class="navbar-nav mx-auto align-items-center">

                            <li class="nav-item">

                                <a class="nav-link nav-link-custom active-vcr"
                                    href="https://www.vcrelectricservices.uk/">Home</a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link nav-link-custom"
                                    href="/about-us.html">About Us</a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link nav-link-custom"
                                    href="https://www.vcrelectricservices.uk/service.html">Services</a>

                            </li>

                            <li class="nav-item">
                                <a class="nav-link nav-link-custom" href="/gallery.html">Gallery</a>
                            </li>

                            <li class="nav-item">

                                <a class="nav-link nav-link-custom"
                                    href="https://www.vcrelectricservices.uk/contact-us.html">Contact Us</a>

                            </li>

                        </ul>

                    </div>



                    <!-- Right Side Tools -->

                    <div class="d-none d-xl-flex align-items-center gap-4 ms-auto">

                        <a href="#" class="header-icon-link" data-bs-toggle="modal" data-bs-target="#searchModal">

                            <i class="fas fa-search h5 mb-0"></i>

                        </a>

                        <a href="tel:07446111951" class="btn btn-call-now px-4 py-2">

                            <i class="fas fa-phone-alt"></i> CALL NOW

                        </a>

                    </div>

                </nav>

            </div>

        </header>

    </div>
    <style>
        .container-vcr {

            max-width: 1320px;

        }
        .vcr-header-wrapper {

            background: #ffffff !important;

            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.05);

            z-index: 1000;

            width: 100% !important;

            position: sticky;

            top: 0;

        }
        .vcr-header {

            background: #ffffff !important;

            width: 100% !important;

        }
        .navbar {

            background: none !important;

            box-shadow: none !important;

        }
        .nav-link-custom {

            color: #1a1a1a !important;

            font-weight: 600;

            font-size: 15px;

            padding: 10px 25px !important;

            transition: all 0.3s ease;

            text-decoration: none !important;

            cursor: pointer;

        }
        .nav-link-custom:hover {

            opacity: 0.7;

            text-decoration: none !important;

        }
        .active-vcr {

            background-color: #fbc02d !important;

            border-radius: 4px;

            color: #000 !important;

            padding: 8px 15px !important;

            font-weight: 700 !important;

        }

        .header-icon-link {

            color: #333;

            transition: color 0.3s ease;

            text-decoration: none !important;

            cursor: pointer;

        }
        .header-icon-link:hover {

            color: #f4c430;

        }
        .cart-badge {

            position: absolute;

            top: -8px;

            right: -10px;

            background-color: #f4c430;

            color: #000;

            font-size: 10px;

            font-weight: 700;

            padding: 2px 5px;

            border-radius: 4px;

        }
        .btn-call-now {

            background: #fbc02d;

            color: #000;

            border: none;

            transition: all 0.3s ease;

            font-size: 14px;

            cursor: pointer;

            border-radius: 4px;

            font-weight: 700;

            text-transform: uppercase;

            display: inline-flex;

            align-items: center;

            gap: 10px;

            box-shadow: 0 4px 10px rgba(251, 192, 45, 0.2);

        }

        .btn-call-now:hover {

            background: #000;

            color: #fbc02d;

            transform: translateY(-2px);

            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);

        }

        /* Mobile Adjustments */

        @media (max-width: 1199px) {

            .navbar-collapse {

                background: #fff;

                padding: 20px;

                margin-top: 15px;

                border: 1px solid #eee;

                border-radius: 8px;

            }

            .nav-link-custom {

                padding: 12px 0 !important;

                border-bottom: 1px solid #f8f9fa;

            }

            .active-vcr {

                display: inline-block;

                padding-left: 15px !important;

                padding-right: 15px !important;

            }

        }
    </style>

    <!-- Wolt-style Header End -->
