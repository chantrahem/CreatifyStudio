<?php
/**
 * Email Configuration Template
 * Copy this file to email-config.php and update with your settings
 */

// SMTP Configuration - UPDATE THESE VALUES
$email_config = [
    // Gmail SMTP (most common)
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 587,
    'smtp_secure' => 'tls',
    'smtp_auth' => true,
    
    // YOUR EMAIL CREDENTIALS (IMPORTANT: UPDATE THESE!)
    'smtp_username' => 'alertemail168@gmail.com',
    'smtp_password' => 'skozmvmlolzuulrf', // Use App Password for Gmail
    
    // Email addresses
    'from_email' => 'creatifystudio168@gmail.com',
    'from_name' => 'CreatifyStudio Contact Form',
    'reply_to' => 'creatifystudio168@gmail.com',
    
    // Where to send contact form emails
    'to_email' => 'creatifystudio168@gmail.com',
    'to_name' => 'CreatifyStudio Team'
];

/* 
GMAIL SETUP INSTRUCTIONS:
1. Enable 2-Step Verification in your Google Account
2. Generate an App Password:
   - Go to Google Account > Security > 2-Step Verification > App passwords
   - Select "Mail" and generate password
   - Use that 16-character password above (not your regular Gmail password)

OTHER PROVIDERS:
- Outlook: smtp-mail.outlook.com, port 587, TLS
- Yahoo: smtp.mail.yahoo.com, port 587, TLS
- Custom: Contact your hosting provider for SMTP settings
*/
?>