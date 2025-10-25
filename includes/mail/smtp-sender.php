<?php
/**
 * Simple SMTP Email Sender for QRMMS
 * Works without PHPMailer using PHP sockets
 */

/**
 * Send email via SMTP using sockets
 */
function sendEmailViaSMTP($form_data) {
    // SMTP Configuration - UPDATE THESE SETTINGS
    $smtp_config = [
        'host' => 'smtp.gmail.com',
        'port' => 587,
        'username' => 'alertemail168@gmail.com',
        'password' => 'skozmvmlolzuulrf',
        'from_email' => 'alertemail168@gmail.com',
        'from_name' => 'QRMMS Contact Form',
        'to_email' => SITE_EMAIL // Send to configured site email
    ];
    
    try {
        // Create socket connection
        $socket = @fsockopen($smtp_config['host'], $smtp_config['port'], $errno, $errstr, 30);
        if (!$socket) {
            throw new Exception("Could not connect to SMTP server {$smtp_config['host']}:{$smtp_config['port']} - $errstr ($errno)");
        }
        
        // Read initial response
        $response = fgets($socket);
        if (substr($response, 0, 3) != '220') {
            throw new Exception("SMTP server not ready: $response");
        }
        
        // Send EHLO
        fputs($socket, "EHLO " . $_SERVER['HTTP_HOST'] . "\r\n");
        // Read multi-line response
        do {
            $response = fgets($socket);
        } while (substr($response, 3, 1) == '-');
        
        // Start TLS
        fputs($socket, "STARTTLS\r\n");
        $response = fgets($socket);
        if (substr($response, 0, 3) != '220') {
            throw new Exception("STARTTLS failed: $response");
        }
        
        // Enable crypto
        if (!stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
            throw new Exception("Failed to enable TLS encryption");
        }
        
        // Send EHLO again after TLS
        fputs($socket, "EHLO " . $_SERVER['HTTP_HOST'] . "\r\n");
        // Read multi-line response
        do {
            $response = fgets($socket);
        } while (substr($response, 3, 1) == '-');
        
        // Authenticate
        fputs($socket, "AUTH LOGIN\r\n");
        $response = fgets($socket);
        if (substr($response, 0, 3) != '334') {
            throw new Exception("AUTH LOGIN failed: $response");
        }
        
        // Send username
        fputs($socket, base64_encode($smtp_config['username']) . "\r\n");
        $response = fgets($socket);
        if (substr($response, 0, 3) != '334') {
            throw new Exception("Username authentication failed: $response");
        }
        
        // Send password
        fputs($socket, base64_encode($smtp_config['password']) . "\r\n");
        $response = fgets($socket);
        if (substr($response, 0, 3) != '235') {
            throw new Exception("Password authentication failed: $response");
        }
        
        // Send MAIL FROM
        fputs($socket, "MAIL FROM: <" . $smtp_config['from_email'] . ">\r\n");
        $response = fgets($socket);
        if (substr($response, 0, 3) != '250') {
            throw new Exception("MAIL FROM failed: $response");
        }
        
        // Send RCPT TO
        fputs($socket, "RCPT TO: <" . $smtp_config['to_email'] . ">\r\n");
        $response = fgets($socket);
        if (substr($response, 0, 3) != '250') {
            throw new Exception("RCPT TO failed: $response");
        }
        
        // Send DATA
        fputs($socket, "DATA\r\n");
        $response = fgets($socket);
        if (substr($response, 0, 3) != '354') {
            throw new Exception("DATA command failed: $response");
        }
        
        // Prepare email content
        $subject = 'New Contact Form Submission from ' . $form_data['name'];
        $boundary = md5(time());
        
        $headers = "From: " . $smtp_config['from_name'] . " <" . $smtp_config['from_email'] . ">\r\n";
        $headers .= "To: <" . $smtp_config['to_email'] . ">\r\n";
        $headers .= "Reply-To: " . $form_data['name'] . " <" . $form_data['email'] . ">\r\n";
        $headers .= "Subject: " . $subject . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/alternative; boundary=\"$boundary\"\r\n";
        $headers .= "\r\n";
        
        // Plain text part
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $body .= generateEmailText($form_data) . "\r\n";
        
        // HTML part
        $body .= "--$boundary\r\n";
        $body .= "Content-Type: text/html; charset=UTF-8\r\n";
        $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $body .= generateEmailHTML($form_data) . "\r\n";
        
        $body .= "--$boundary--\r\n";
        
        // Send email content
        fputs($socket, $headers . $body . "\r\n.\r\n");
        $response = fgets($socket);
        if (substr($response, 0, 3) != '250') {
            throw new Exception("Message sending failed: $response");
        }
        
        // Send QUIT
        fputs($socket, "QUIT\r\n");
        fclose($socket);
        
        return ['success' => true, 'message' => 'Email sent successfully via SMTP'];
        
    } catch (Exception $e) {
        if (isset($socket) && is_resource($socket)) {
            fclose($socket);
        }
        
        // Log detailed error for debugging
        error_log("SMTP Error Details: " . $e->getMessage());
        error_log("SMTP Config: " . print_r($smtp_config, true));
        
        return ['success' => false, 'message' => 'SMTP Error: ' . $e->getMessage()];
    }
}
?>