<?php
// Simple admin page to view contact form submissions
session_start();

// Simple password protection (change this password!)
$admin_password = 'admin123'; // CHANGE THIS PASSWORD!

if (isset($_POST['password'])) {
    if ($_POST['password'] === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
    } else {
        $error = 'Invalid password';
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: admin-emails.php');
    exit;
}

if (!isset($_SESSION['admin_logged_in'])) {
    // Show login form
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Admin - View Contact Submissions</title>
        <meta charset="UTF-8">
        <style>
            body { font-family: Arial, sans-serif; max-width: 400px; margin: 100px auto; padding: 20px; }
            .form-group { margin-bottom: 15px; }
            label { display: block; margin-bottom: 5px; font-weight: bold; }
            input[type="password"] { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; }
            button { background: #667eea; color: white; padding: 12px 24px; border: none; border-radius: 4px; cursor: pointer; width: 100%; }
            button:hover { background: #5a67d8; }
            .error { color: red; margin-top: 10px; }
        </style>
    </head>
    <body>
        <h2>🔐 Admin Login</h2>
        <p>Enter password to view contact form submissions:</p>
        
        <form method="POST">
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        
        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <p style="margin-top: 30px; font-size: 12px; color: #666;">
            <strong>Note:</strong> Change the password in admin-emails.php file for security.
        </p>
    </body>
    </html>
    <?php
    exit;
}

// Admin is logged in, show emails
$emails_dir = 'emails/';
$emails = [];

if (is_dir($emails_dir)) {
    $files = scandir($emails_dir);
    foreach ($files as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'txt') {
            $filepath = $emails_dir . $file;
            $content = file_get_contents($filepath);
            $emails[] = [
                'file' => $file,
                'content' => $content,
                'date' => filemtime($filepath),
                'size' => filesize($filepath)
            ];
        }
    }
    
    // Sort by date (newest first)
    usort($emails, function($a, $b) {
        return $b['date'] - $a['date'];
    });
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin - Contact Submissions</title>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background: #f5f5f5; }
        .header { background: white; padding: 20px; border-radius: 8px; margin-bottom: 20px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .header h1 { margin: 0; color: #333; }
        .stats { display: flex; gap: 20px; margin: 20px 0; }
        .stat-box { background: #667eea; color: white; padding: 15px; border-radius: 8px; text-align: center; flex: 1; }
        .emails-container { display: grid; gap: 20px; }
        .email-card { background: white; border-radius: 8px; padding: 20px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .email-header { border-bottom: 1px solid #eee; padding-bottom: 10px; margin-bottom: 15px; }
        .email-content { white-space: pre-wrap; font-family: monospace; background: #f8f9fa; padding: 15px; border-radius: 4px; }
        .logout { float: right; color: #667eea; text-decoration: none; }
        .logout:hover { text-decoration: underline; }
        .no-emails { text-align: center; padding: 40px; color: #666; }
    </style>
</head>
<body>
    <div class="header">
        <h1>📧 Contact Form Submissions</h1>
        <a href="?logout=1" class="logout">Logout</a>
    </div>
    
    <div class="stats">
        <div class="stat-box">
            <div style="font-size: 24px; font-weight: bold;"><?php echo count($emails); ?></div>
            <div>Total Submissions</div>
        </div>
        <div class="stat-box">
            <div style="font-size: 24px; font-weight: bold;"><?php echo is_dir($emails_dir) ? count(scandir($emails_dir)) - 2 : 0; ?></div>
            <div>Files in Directory</div>
        </div>
        <div class="stat-box">
            <div style="font-size: 24px; font-weight: bold;"><?php echo date('M j'); ?></div>
            <div>Today's Date</div>
        </div>
    </div>
    
    <div class="emails-container">
        <?php if (empty($emails)): ?>
            <div class="no-emails">
                <h2>📭 No submissions yet</h2>
                <p>Contact form submissions will appear here when received.</p>
                <p><a href="contact.php">Test the contact form →</a></p>
            </div>
        <?php else: ?>
            <?php foreach ($emails as $email): ?>
                <div class="email-card">
                    <div class="email-header">
                        <strong>📄 <?php echo htmlspecialchars($email['file']); ?></strong>
                        <span style="float: right; color: #666;">
                            <?php echo date('M j, Y g:i A', $email['date']); ?>
                            (<?php echo round($email['size'] / 1024, 1); ?> KB)
                        </span>
                    </div>
                    <div class="email-content"><?php echo htmlspecialchars($email['content']); ?></div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    
    <div style="margin-top: 40px; padding: 20px; background: white; border-radius: 8px; text-align: center; color: #666;">
        <p><strong>📝 Note:</strong> These are contact form submissions saved to files.</p>
        <p>Configure SMTP settings in email handler to send actual emails.</p>
        <p><a href="EMAIL_SETUP.md" target="_blank">View Email Setup Instructions →</a></p>
    </div>
</body>
</html>