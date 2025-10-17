<?php
/**
 * Comprehensive Email Handler for CreatifyStudio
 * Tries multiple methods to ensure email delivery
 */

// Include SMTP sender
include_once __DIR__ . '/smtp-sender.php';

/**
 * Main email sending function with multiple fallbacks
 */
function sendContactEmail($form_data) {
    // Method 1: Try PHPMailer if available
    if (file_exists(__DIR__ . '/../phpmailer/src/PHPMailer.php')) {
        $result = sendEmailWithPHPMailer($form_data);
        if ($result['success']) {
            return $result;
        }
    }
    
    // Method 2: Try custom SMTP sender
    $result = sendEmailViaSMTP($form_data);
    if ($result['success']) {
        return $result;
    }
    
    // Method 3: Try PHP mail() function
    $result = sendEmailWithPHP($form_data);
    if ($result['success']) {
        return $result;
    }
    
    // Method 4: Save to file as last resort
    return saveEmailToFile($form_data);
}

/**
 * Send email using PHPMailer (when available)
 */
function sendEmailWithPHPMailer($form_data) {
    try {
        require_once __DIR__ . '/../phpmailer/src/Exception.php';
        require_once __DIR__ . '/../phpmailer/src/PHPMailer.php';
        require_once __DIR__ . '/../phpmailer/src/SMTP.php';
        
        $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
        
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'alertemail168@gmail.com';
        $mail->Password = 'skozmvmlolzuulrf';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        
        // Recipients
        $mail->setFrom('alertemail168@gmail.com', 'CreatifyStudio Contact Form');
        $mail->addAddress(SITE_EMAIL, 'CreatifyStudio Team');
        $mail->addReplyTo($form_data['email'], $form_data['name']);
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission from ' . $form_data['name'];
        $mail->Body = generateEmailHTML($form_data);
        $mail->AltBody = generateEmailText($form_data);
        
        $mail->send();
        return ['success' => true, 'message' => 'Email sent via PHPMailer'];
        
    } catch (Exception $e) {
        return ['success' => false, 'message' => 'PHPMailer error: ' . $e->getMessage()];
    }
}

/**
 * Send email using PHP mail() function
 */
function sendEmailWithPHP($form_data) {
    $to = SITE_EMAIL;
    $subject = 'New Contact Form Submission from ' . $form_data['name'];
    $message = generateEmailText($form_data);
    
    $from_email = 'noreply@creatifystudio.com';
    $headers = "From: " . $from_email . "\r\n";
    $headers .= "Reply-To: " . $form_data['email'] . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    if (@mail($to, $subject, $message, $headers)) {
        return ['success' => true, 'message' => 'Email sent via PHP mail()'];
    } else {
        return ['success' => false, 'message' => 'PHP mail() failed'];
    }
}

/**
 * Save email to file when all email methods fail
 */
function saveEmailToFile($form_data) {
    $email_dir = __DIR__ . '/../../emails/';
    
    if (!is_dir($email_dir)) {
        if (!mkdir($email_dir, 0755, true)) {
            return ['success' => false, 'message' => 'Cannot create emails directory'];
        }
    }
    
    $filename = 'contact_' . date('Y-m-d_H-i-s') . '_' . uniqid() . '.txt';
    $filepath = $email_dir . $filename;
    
    $content = "CONTACT FORM SUBMISSION\n";
    $content .= "Submitted: " . date('Y-m-d H:i:s') . "\n";
    $content .= str_repeat("=", 50) . "\n\n";
    $content .= "Name: " . $form_data['name'] . "\n";
    $content .= "Email: " . $form_data['email'] . "\n";
    $content .= "Phone: " . $form_data['phone'] . "\n";
    $content .= "Service: " . $form_data['service'] . "\n";
    $content .= "Budget: " . $form_data['budget'] . "\n";
    $content .= "Message:\n" . $form_data['message'] . "\n\n";
    $content .= "IP Address: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n";
    $content .= "User Agent: " . ($_SERVER['HTTP_USER_AGENT'] ?? 'Unknown') . "\n";
    
    if (file_put_contents($filepath, $content)) {
        // Also try to notify via a simple webhook or log
        error_log("Contact form saved to file: $filename");
        
        return [
            'success' => true, 
            'message' => 'Message received and saved! We will contact you soon.'
        ];
    } else {
        return ['success' => false, 'message' => 'Unable to process your request. Please try again.'];
    }
}

/**
 * Generate HTML email template
 */
function generateEmailHTML($form_data) {
    $html = '<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>New Contact Form Submission</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; margin: 0; padding: 20px; }
            .container { max-width: 600px; margin: 0 auto; }
            .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 20px; border-radius: 8px 8px 0 0; text-align: center; }
            .content { background: #f8f9fa; padding: 30px; border-radius: 0 0 8px 8px; }
            .field { margin-bottom: 15px; padding: 10px; background: white; border-radius: 4px; }
            .field strong { color: #667eea; display: block; margin-bottom: 5px; }
            .footer { margin-top: 20px; padding-top: 20px; border-top: 2px solid #ddd; font-size: 12px; color: #666; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>📧 New Contact Form Submission</h1>
                <p>CreatifyStudio Website</p>
            </div>
            <div class="content">
                <div class="field">
                    <strong>👤 Name:</strong>
                    ' . htmlspecialchars($form_data['name']) . '
                </div>
                <div class="field">
                    <strong>✉️ Email:</strong>
                    <a href="mailto:' . htmlspecialchars($form_data['email']) . '">' . htmlspecialchars($form_data['email']) . '</a>
                </div>
                <div class="field">
                    <strong>📞 Phone:</strong>
                    ' . htmlspecialchars($form_data['phone']) . '
                </div>
                <div class="field">
                    <strong>🛠️ Service:</strong>
                    ' . htmlspecialchars($form_data['service']) . '
                </div>
                <div class="field">
                    <strong>💰 Budget:</strong>
                    ' . htmlspecialchars($form_data['budget']) . '
                </div>
                <div class="field">
                    <strong>💬 Message:</strong><br>
                    ' . nl2br(htmlspecialchars($form_data['message'])) . '
                </div>
                <div class="footer">
                    <p><strong>Submitted:</strong> ' . date('F j, Y \a\t g:i A') . '</p>
                    <p><strong>IP Address:</strong> ' . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . '</p>
                </div>
            </div>
        </div>
    </body>
    </html>';
    
    return $html;
}

/**
 * Generate plain text email
 */
function generateEmailText($form_data) {
    $text = "NEW CONTACT FORM SUBMISSION\n";
    $text .= "CreatifyStudio Website\n";
    $text .= str_repeat("=", 50) . "\n\n";
    
    $text .= "Name: " . $form_data['name'] . "\n";
    $text .= "Email: " . $form_data['email'] . "\n";
    $text .= "Phone: " . $form_data['phone'] . "\n";
    $text .= "Service: " . $form_data['service'] . "\n";
    $text .= "Budget: " . $form_data['budget'] . "\n";
    $text .= "Message: " . $form_data['message'] . "\n\n";
    
    $text .= str_repeat("-", 50) . "\n";
    $text .= "Submitted: " . date('F j, Y \a\t g:i A') . "\n";
    $text .= "IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n";
    
    return $text;
}
?>