<?php
/**
 * SMTP Configuration for VCR Electrical Services
 * Using Brevo (Formerly Sendinblue) SMTP Relay
 */

// SMTP Server Settings
define('SMTP_HOST', 'smtp-relay.brevo.com');
define('SMTP_PORT', 587); // TLS Port
define('SMTP_USER', '811802001@smtp-brevo.com');
define('SMTP_PASS', '9LhWCNkM2v7a8y5S');

// Email Sender Settings
define('SMTP_FROM_EMAIL', 'vcrelectricservices@gmail.com');
define('SMTP_FROM_NAME', 'VCR Electric Services (No-Reply)');

// Notification Recipients (Comma-separated)
define('SMTP_TO_EMAILS', 'vcrelectricservices@gmail.com, aquibjawed0786@gmail.com');
