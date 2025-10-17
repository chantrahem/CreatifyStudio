<?php
/**
 * Simple Email Handler for CreatifyStudio
 * Works with PHP mail() function and PHPMailer (if available)
 */

/**
 * Send contact form email
 */
function sendContactEmail($form_data) {
    // Check if PHPMailer is available
    $phpmailer_path = __DIR__ . '/../phpmailer/src/PHPMailer.php';
    if (file_exists($phpmailer_path)) {
        return sendEmailWithPHPMailer($form_data);
    } else {
        // Use PHP mail() function as fallback
        return sendEmailWithPHP($form_data);
    }
}

/**
 * Send email using PHPMailer (when available)
 */
function sendEmailWithPHPMailer($form_data) {
    try {
        // Include PHPMailer files
        require_once __DIR__ . '/../phpmailer/src/Exception.php';
        require_once __DIR__ . '/../phpmailer/src/PHPMailer.php';
        require_once __DIR__ . '/../phpmailer/src/SMTP.php';
        
        $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
        
        // SMTP Configuration (UPDATE THESE SETTINGS)
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Update with your SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = 'your-email@gmail.com'; // Update with your email
        $mail->Password = 'your-app-password'; // Update with your app password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        
        // Recipients
        $mail->setFrom('your-email@gmail.com', 'CreatifyStudio Contact Form');
        $mail->addAddress('contact@creatifystudio.com', 'CreatifyStudio Team');
        $mail->addReplyTo($form_data['email'], $form_data['name']);
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission from ' . $form_data['name'];
        $mail->Body = generateEmailHTML($form_data);
        $mail->AltBody = generateEmailText($form_data);
        
        $mail->send();
        return ['success' => true, 'message' => 'Email sent successfully via PHPMailer'];
        
    } catch (Exception $e) {
        error_log("PHPMailer Error: " . $e->getMessage());
        // Fallback to PHP mail if PHPMailer fails
        return sendEmailWithPHP($form_data);
    }
}

/**
 * Send email using PHP mail() function with SMTP configuration
 */
function sendEmailWithPHP($form_data) {
    // Configure SMTP settings for PHP mail()
    ini_set('SMTP', 'smtp.gmail.com');
    ini_set('smtp_port', '587');
    ini_set('sendmail_from', 'noreply@creatifystudio.com');
    
    $to = defined('SITE_EMAIL') ? SITE_EMAIL : 'contact@creatifystudio.com';
    $subject = 'New Contact Form Submission from ' . $form_data['name'];
    $message = generateEmailText($form_data);
    
    $from_email = defined('SITE_EMAIL') ? SITE_EMAIL : 'noreply@creatifystudio.com';
    $headers = "From: " . $from_email . "\r\n";
    $headers .= "Reply-To: " . $form_data['email'] . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Try to send email
    if (@mail($to, $subject, $message, $headers)) {
        return ['success' => true, 'message' => 'Email sent successfully via PHP mail()'];
    } else {
        // If mail fails, save to file as backup
        return saveEmailToFile($form_data);
    }
}

/**
 * Save email to file when email sending fails
 */
function saveEmailToFile($form_data) {
    $email_dir = __DIR__ . '/../../emails/';
    
    // Create emails directory if it doesn't exist
    if (!is_dir($email_dir)) {
        mkdir($email_dir, 0755, true);
    }
    
    $filename = 'contact_' . date('Y-m-d_H-i-s') . '_' . uniqid() . '.txt';
    $filepath = $email_dir . $filename;
    
    $content = "CONTACT FORM SUBMISSION - " . date('Y-m-d H:i:s') . "\n";
    $content .= str_repeat("=", 50) . "\n\n";
    $content .= "Name: " . $form_data['name'] . "\n";
    $content .= "Email: " . $form_data['email'] . "\n";
    $content .= "Phone: " . $form_data['phone'] . "\n";
    $content .= "Service: " . $form_data['service'] . "\n";
    $content .= "Budget: " . $form_data['budget'] . "\n";
    $content .= "Message: " . $form_data['message'] . "\n\n";
    $content .= "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";
    $content .= "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\n";
    
    if (file_put_contents($filepath, $content)) {
        return [
            'success' => true, 
            'message' => 'Email saved to file: ' . $filename . ' (Email server not configured)'
        ];
    } else {
        return [
            'success' => false, 
            'message' => 'Failed to send email and save to file. Please contact administrator.'
        ];
    }
}

/**
 * Generate HTML email content
 */
function generateEmailHTML($form_data) {
    $html = '<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>New Contact Form Submission</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 20px; border-radius: 5px 5px 0 0; }
            .content { background: #f8f9fa; padding: 20px; border-radius: 0 0 5px 5px; }
            .field { margin-bottom: 15px; }
            .field strong { color: #667eea; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>New Contact Form Submission</h2>
                <p>CreatifyStudio Website</p>
            </div>
            <div class="content">
                <div class="field"><strong>Name:</strong> ' . htmlspecialchars($form_data['name']) . '</div>
                <div class="field"><strong>Email:</strong> ' . htmlspecialchars($form_data['email']) . '</div>
                <div class="field"><strong>Phone:</strong> ' . htmlspecialchars($form_data['phone']) . '</div>
                <div class="field"><strong>Service:</strong> ' . htmlspecialchars($form_data['service']) . '</div>
                <div class="field"><strong>Budget:</strong> ' . htmlspecialchars($form_data['budget']) . '</div>
                <div class="field"><strong>Message:</strong><br>' . nl2br(htmlspecialchars($form_data['message'])) . '</div>
                <hr>
                <p><small>Submitted on: ' . date('F j, Y \a\t g:i A') . '</small></p>
                <p><small>IP Address: ' . $_SERVER['REMOTE_ADDR'] . '</small></p>
            </div>
        </div>
    </body>
    </html>';
    
    return $html;
}

/**
 * Generate plain text email content
 */
function generateEmailText($form_data) {
    $text = "NEW CONTACT FORM SUBMISSION\n";
    $text .= "CreatifyStudio Website\n";
    $text .= str_repeat("=", 40) . "\n\n";
    
    $text .= "Name: " . $form_data['name'] . "\n";
    $text .= "Email: " . $form_data['email'] . "\n";
    $text .= "Phone: " . $form_data['phone'] . "\n";
    $text .= "Service: " . $form_data['service'] . "\n";
    $text .= "Budget: " . $form_data['budget'] . "\n";
    $text .= "Message: " . $form_data['message'] . "\n\n";
    
    $text .= str_repeat("-", 40) . "\n";
    $text .= "Submitted: " . date('F j, Y \a\t g:i A') . "\n";
    $text .= "IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
    
    return $text;
}
?>