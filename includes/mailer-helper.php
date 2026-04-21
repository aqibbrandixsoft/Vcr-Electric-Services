<?php
/**
 * PHPMailer Helper for VCR Electrical Services
 * Handles SMTP email delivery for contact forms.
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// PHPMailer core files (assuming they exist in the PHPMailer directory)
require_once __DIR__ . '/PHPMailer/src/Exception.php';
require_once __DIR__ . '/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/src/SMTP.php';
require_once __DIR__ . '/mailer-config.php';

/**
 * Sends a professional email using SMTP.
 * 
 * @param string $to_emails Comma-separated list of recipient emails.
 * @param string $subject The email subject.
 * @param string $body The email message body.
 * @param string $reply_to_email Optional reply-to address.
 * @param string $reply_to_name Optional reply-to name.
 * @return bool True on success, false on failure.
 */
function vcr_send_email($to_emails, $subject, $body, $reply_to_email = '', $reply_to_name = '') {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USER;
        $mail->Password   = SMTP_PASS;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = SMTP_PORT;

        // Recipients
        $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
        
        // Handle multiple recipients
        $recipients = explode(',', $to_emails);
        foreach ($recipients as $email) {
            $mail->addAddress(trim($email));
        }

        if (!empty($reply_to_email)) {
            $mail->addReplyTo($reply_to_email, $reply_to_name);
        }

        // Content
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        $mail->send();
        return true;
    } catch (Exception $e) {
        // Silent fail for production; in dev, use error_log($mail->ErrorInfo);
        return false;
    }
}
