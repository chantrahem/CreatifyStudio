<?php
/**
 * Simple Email Handler using PHPMailer
 * Download PHPMailer from: https://github.com/PHPMailer/PHPMailer
 * Extract to includes/phpmailer/ directory
 */

// Email configuration - UPDATE THESE SETTINGS
$email_config = [
    // SMTP Settings
    'smtp_host' => 'smtp.gmail.com', // Change to your SMTP host
    'smtp_port' => 587,
    'smtp_secure' => 'tls', // 'tls' or 'ssl'
    'smtp_auth' => true,
    
    // SMTP Credentials - IMPORTANT: Update these!
    'smtp_username' => 'your-email@gmail.com', // Your email
    'smtp_password' => 'your-app-password', // Your app password (not regular password)
    
    // Email settings
    'from_email' => 'your-email@gmail.com', // Your email
    'from_name' => 'POS by CHEM Contact Form',
    'reply_to' => 'contact@posbychem.com',
    
    // Recipient
    'to_email' => 'contact@posbychem.com',
    'to_name' => 'POS by CHEM Team'
];

/**
 * Send contact form email
 */
function sendContactEmail($form_data) {
    global $email_config;
    
    // Check if PHPMailer is available
    $phpmailer_path = __DIR__ . '/../phpmailer/src/PHPMailer.php';
    if (file_exists($phpmailer_path)) {
        return sendEmailWithPHPMailer($form_data);
    } else {
        // Fallback to PHP mail() function
        return sendEmailWithPHP($form_data);
    }
}

/**
 * Send email using PHPMailer (recommended)
 */
function sendEmailWithPHPMailer($form_data) {
    global $email_config;
    
    try {
        // Include PHPMailer files
        require_once __DIR__ . '/../phpmailer/src/Exception.php';
        require_once __DIR__ . '/../phpmailer/src/PHPMailer.php';
        require_once __DIR__ . '/../phpmailer/src/SMTP.php';
        
        $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
        
        // Server settings
        $mail->isSMTP();
        $mail->Host = $email_config['smtp_host'];
        $mail->SMTPAuth = $email_config['smtp_auth'];
        $mail->Username = $email_config['smtp_username'];
        $mail->Password = $email_config['smtp_password'];
        $mail->SMTPSecure = $email_config['smtp_secure'];
        $mail->Port = $email_config['smtp_port'];
        
        // Recipients
        $mail->setFrom($email_config['from_email'], $email_config['from_name']);
        $mail->addAddress($email_config['to_email'], $email_config['to_name']);
        $mail->addReplyTo($form_data['email'], $form_data['name']);
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission from ' . $form_data['name'];
        
        // HTML email template
        $mail->Body = generateEmailHTML($form_data);
        $mail->AltBody = generateEmailText($form_data);
        
        $mail->send();
        return ['success' => true, 'message' => 'Email sent successfully via PHPMailer'];
        
    } catch (Exception $e) {
        error_log("PHPMailer Error: " . $mail->ErrorInfo);
        return ['success' => false, 'message' => 'Email could not be sent. Error: ' . $mail->ErrorInfo];
    }
}

/**
 * Fallback email function using PHP mail()
 */
function sendEmailWithPHP($form_data) {
    global $email_config;
    
    $to = $email_config['to_email'];
    $subject = 'New Contact Form Submission from ' . $form_data['name'];
    $message = generateEmailText($form_data);
    
    $headers = "From: " . $email_config['from_email'] . "\r\n";
    $headers .= "Reply-To: " . $form_data['email'] . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    if (mail($to, $subject, $message, $headers)) {
        return ['success' => true, 'message' => 'Email sent successfully via PHP mail()'];
    } else {
        return ['success' => false, 'message' => 'Failed to send email via PHP mail()'];
    }
}

/**
 * Generate HTML email content
 */
function generateEmailHTML($form_data) {
    $html = '
    <!DOCTYPE html>
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
            .footer { margin-top: 20px; padding-top: 20px; border-top: 1px solid #ddd; font-size: 12px; color: #666; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>New Contact Form Submission</h2>
                <p>POS by CHEM Website</p>
            </div>
            <div class="content">
                <div class="field">
                    <strong>Name:</strong> ' . htmlspecialchars($form_data['name']) . '
                </div>
                <div class="field">
                    <strong>Email:</strong> ' . htmlspecialchars($form_data['email']) . '
                </div>
                <div class="field">
                    <strong>Phone:</strong> ' . htmlspecialchars($form_data['phone']) . '
                </div>
                <div class="field">
                    <strong>Service:</strong> ' . htmlspecialchars($form_data['service']) . '
                </div>
                <div class="field">
                    <strong>Budget:</strong> ' . htmlspecialchars($form_data['budget']) . '
                </div>
                <div class="field">
                    <strong>Message:</strong><br>' . nl2br(htmlspecialchars($form_data['message'])) . '
                </div>
                <div class="footer">
                    <p>Submitted on: ' . date('F j, Y \a\t g:i A') . '</p>
                    <p>IP Address: ' . $_SERVER['REMOTE_ADDR'] . '</p>
                </div>
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
    $text .= "POS by CHEM Website\n";
    $text .= str_repeat("=", 40) . "\n\n";
    
    $text .= "Name: " . $form_data['name'] . "\n";
    $text .= "Email: " . $form_data['email'] . "\n";
    $text .= "Phone: " . $form_data['phone'] . "\n";
    $text .= "Service: " . $form_data['service'] . "\n";
    $text .= "Budget: " . $form_data['budget'] . "\n";
    $text .= "Message: " . $form_data['message'] . "\n\n";
    
    $text .= str_repeat("-", 40) . "\n";
    $text .= "Submitted on: " . date('F j, Y \a\t g:i A') . "\n";
    $text .= "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";
    
    return $text;
}
?>