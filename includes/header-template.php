<?php
// Header Template for About Us Page
?>
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
                                href="/service.html">Services</a>
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
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .nav-link-custom {
            padding: 12px 0 !important;
            border-bottom: 1px solid #f8f9fa;
            margin: 0 !important;
        }

        .nav-link-custom:last-child {
            border-bottom: none;
        }

        .active-vcr {
            display: inline-block;
            padding-left: 15px !important;
            padding-right: 15px !important;
            background-color: #fbc02d !important;
            border-radius: 4px;
            margin: 5px 0 !important;
        }

        .navbar-nav {
            margin: 0 !important;
        }
    }

    /* Tablet and Mobile Styles */
    @media (max-width: 991px) {
        .vcr-header {
            padding: 10px 0;
        }

        .navbar {
            height: auto !important;
            min-height: 70px;
        }

        .navbar-brand img {
            height: 50px !important;
        }

        .navbar-toggler {
            padding: 8px 12px;
            font-size: 18px;
            border: 1px solid #ddd !important;
            border-radius: 4px;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .navbar-collapse {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: #fff;
            padding: 20px;
            margin-top: 10px;
            border: 1px solid #eee;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            z-index: 1000;
        }

        .nav-link-custom {
            padding: 15px 0 !important;
            font-size: 16px;
            border-bottom: 1px solid #f8f9fa;
            margin: 0 !important;
        }

        .nav-link-custom:last-child {
            border-bottom: none;
        }

        .active-vcr {
            background-color: #fbc02d !important;
            border-radius: 4px;
            margin: 5px 0 !important;
            padding: 12px 15px !important;
        }
    }

    /* Mobile Styles */
    @media (max-width: 767px) {
        .container-vcr {
            padding: 0 15px;
        }

        .vcr-header {
            padding: 5px 0;
        }

        .navbar-brand img {
            height: 45px !important;
        }

        .navbar-toggler {
            padding: 6px 10px;
        }

        .navbar-collapse {
            padding: 15px;
            margin-top: 5px;
        }

        .nav-link-custom {
            font-size: 15px;
            padding: 12px 0 !important;
        }
    }

    /* Small Mobile */
    @media (max-width: 480px) {
        .navbar-brand img {
            height: 40px !important;
        }

        .nav-link-custom {
            font-size: 14px;
            padding: 10px 0 !important;
        }
    }
</style>

<!-- Wolt-style Header End -->
