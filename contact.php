<?php
// IMPORTANT: Process form submission FIRST, before any output or includes

// Process form submission immediately if it exists
if ($_SERVER['REQUEST_METHOD'] === 'POST' && (!empty($_POST['name']) || !empty($_POST['email']) || !empty($_POST['message']))) {
    // Include required files only when needed for form processing
    include 'includes/config.php';
    include 'includes/mail/comprehensive-email-handler.php';
    
    // Sanitize input
    $name = sanitizeInput($_POST['name'] ?? '');
    $email = sanitizeInput($_POST['email'] ?? '');
    $phone = sanitizeInput($_POST['phone'] ?? '');
    $service = sanitizeInput($_POST['service'] ?? '');
    $budget = sanitizeInput($_POST['budget'] ?? '');
    $message = sanitizeInput($_POST['message'] ?? '');
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        // Validation failed - we'll show error after page loads
        $contact_error = $messages['validation_error'];
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $contact_error = $messages['email_invalid'];
    } else {
        // Create form data
        $form_data = [
            'name' => $name,
            'email' => $email, 
            'phone' => $phone,
            'service' => $service,
            'budget' => $budget,
            'message' => $message
        ];
        
        // Try to send email
        $email_result = sendContactEmail($form_data);
        
        if ($email_result['success']) {
            // SUCCESS: Redirect immediately before any output
            header('Location: thank-you.php?status=success&name=' . urlencode($name));
            exit();
        } else {
            // Email failed - we'll show error after page loads
            $contact_error = $messages['contact_error'] . ' (Error: ' . $email_result['message'] . ')';
        }
    }
    
    // Store form data for repopulation on error
    $form_data = [
        'name' => $name,
        'email' => $email, 
        'phone' => $phone,
        'service' => $service,
        'budget' => $budget,
        'message' => $message
    ];
}

// If we get here, either no form was submitted or there was an error
// Now we can safely include files and generate the page

// Include required files for page display
include 'includes/config.php';
include 'includes/mail/comprehensive-email-handler.php';

// Initialize variables if not set from form processing
if (!isset($contact_error)) $contact_error = '';
if (!isset($contact_success)) $contact_success = '';
if (!isset($form_data)) $form_data = [];

// Get service parameter from URL
$selected_service = $_GET['service'] ?? '';

// Set page variables
$page_title = "Contact Us";
$meta_description = "Get in touch with QRMMS for your web development, graphic design, and hosting needs. Free consultation and competitive pricing.";

// Now safe to include header
include 'includes/header.php';
?>

<!-- Contact Hero -->
<section class="gradient-bg py-20 text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center animate-on-scroll">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Get In Touch</h1>
            <p class="text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto">
                Ready to start your project? Let's discuss how we can help bring your vision to life
            </p>
        </div>
    </div>
</section>

<!-- Contact Form & Info -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="animate-on-scroll">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Send Us a Message</h2>
                
                <!-- Success/Error Messages -->
                <?php if ($contact_success): ?>
                    <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6">
                        <div class="flex">
                            <i class="fas fa-check-circle text-green-400 mr-3 mt-1"></i>
                            <span><?php echo $contact_success; ?></span>
                        </div>
                    </div>
                <?php endif; ?>
                
                <?php if ($contact_error): ?>
                    <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6">
                        <div class="flex">
                            <i class="fas fa-exclamation-triangle text-red-400 mr-3 mt-1"></i>
                            <span><?php echo $contact_error; ?></span>
                        </div>
                    </div>
                <?php endif; ?>
                
                <form method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                Full Name *
                            </label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   required
                                   value="<?php echo htmlspecialchars($form_data['name'] ?? ''); ?>"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent transition-colors">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Email Address *
                            </label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   required
                                   value="<?php echo htmlspecialchars($form_data['email'] ?? ''); ?>"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent transition-colors">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                Phone Number
                            </label>
                            <input type="tel" 
                                   id="phone" 
                                   name="phone"
                                   value="<?php echo htmlspecialchars($form_data['phone'] ?? ''); ?>"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent transition-colors">
                        </div>
                        
                        <div>
                            <label for="service" class="block text-sm font-medium text-gray-700 mb-2">
                                Service Interested In
                            </label>
                            <select id="service" 
                                    name="service"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent transition-colors">
                                <option value="">Select a service...</option>
                                <option value="qr-menu-system" 
                                        <?php echo ($selected_service === 'qr-menu-system' || ($form_data['service'] ?? '') === 'qr-menu-system') ? 'selected' : ''; ?>>
                                    🌟 QR Menu Management System (Featured)
                                </option>
                                <?php foreach ($services as $key => $service): ?>
                                    <option value="<?php echo $key; ?>" 
                                            <?php echo ($selected_service === $key || ($form_data['service'] ?? '') === $key) ? 'selected' : ''; ?>>
                                        <?php echo $service['title']; ?>
                                    </option>
                                <?php endforeach; ?>
                                <option value="consultation" <?php echo ($form_data['service'] ?? '') === 'consultation' ? 'selected' : ''; ?>>
                                    General Consultation
                                </option>
                            </select>
                        </div>
                    </div>
                    
                    <div>
                        <label for="budget" class="block text-sm font-medium text-gray-700 mb-2">
                            Project Budget
                        </label>
                        <select id="budget" 
                                name="budget"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent transition-colors">
                            <option value="">Select budget range...</option>
                            <option value="under-1000" <?php echo ($form_data['budget'] ?? '') === 'under-1000' ? 'selected' : ''; ?>>Under $1,000</option>
                            <option value="1000-5000" <?php echo ($form_data['budget'] ?? '') === '1000-5000' ? 'selected' : ''; ?>>$1,000 - $5,000</option>
                            <option value="5000-10000" <?php echo ($form_data['budget'] ?? '') === '5000-10000' ? 'selected' : ''; ?>>$5,000 - $10,000</option>
                            <option value="10000-25000" <?php echo ($form_data['budget'] ?? '') === '10000-25000' ? 'selected' : ''; ?>>$10,000 - $25,000</option>
                            <option value="over-25000" <?php echo ($form_data['budget'] ?? '') === 'over-25000' ? 'selected' : ''; ?>>Over $25,000</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                            Project Description *
                        </label>
                        <textarea id="message" 
                                  name="message" 
                                  rows="6" 
                                  required
                                  placeholder="Tell us about your project, goals, and any specific requirements..."
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent transition-colors resize-vertical"><?php echo htmlspecialchars($form_data['message'] ?? ''); ?></textarea>
                    </div>
                    
                    <div>
                        <button type="submit" 
                                name="contact_submit"
                                value="1"
                                class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-4 px-8 rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all font-semibold text-lg">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Contact Information -->
            <div class="animate-on-scroll">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Contact Information</h2>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 gradient-bg rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Email Us</h3>
                            <p class="text-gray-600 mb-2">Send us an email anytime</p>
                            <a href="mailto:<?php echo SITE_EMAIL; ?>" 
                               class="text-purple-600 hover:text-purple-700 transition-colors">
                                <?php echo SITE_EMAIL; ?>
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 gradient-bg rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-phone text-white"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Call Us</h3>
                            <p class="text-gray-600 mb-2">Mon-Fri 9AM-6PM EST</p>
                            <a href="tel:<?php echo SITE_PHONE; ?>" 
                               class="text-purple-600 hover:text-purple-700 transition-colors">
                                <?php echo SITE_PHONE; ?>
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 gradient-bg rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Visit Us</h3>
                            <p class="text-gray-600">
                                <?php echo COMPANY_ADDRESS; ?>
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 gradient-bg rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-clock text-white"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Business Hours</h3>
                            <div class="text-gray-600">
                                <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                                <p>Saturday: 10:00 AM - 4:00 PM</p>
                                <p>Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media -->
                <div class="mt-12">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="<?php echo SOCIAL_FACEBOOK; ?>" 
                           class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-purple-600 hover:text-white transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="<?php echo SOCIAL_TWITTER; ?>" 
                           class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-purple-600 hover:text-white transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="<?php echo SOCIAL_INSTAGRAM; ?>" 
                           class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-purple-600 hover:text-white transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="<?php echo SOCIAL_LINKEDIN; ?>" 
                           class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-purple-600 hover:text-white transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="<?php echo SOCIAL_GITHUB; ?>" 
                           class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-purple-600 hover:text-white transition-colors">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
            <p class="text-xl text-gray-600">Common questions about our services and process</p>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <div class="space-y-6">
                <div class="bg-white rounded-lg p-6 shadow-md animate-on-scroll">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">How long does a typical project take?</h3>
                    <p class="text-gray-600">
                        Project timelines vary depending on complexity and scope. A simple website typically takes 2-4 weeks, 
                        while complex web applications can take 2-6 months. We'll provide a detailed timeline during our consultation.
                    </p>
                </div>
                
                <div class="bg-white rounded-lg p-6 shadow-md animate-on-scroll">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Do you offer ongoing support after project completion?</h3>
                    <p class="text-gray-600">
                        Yes! We offer various support packages including maintenance, updates, security monitoring, 
                        and technical support to ensure your digital presence continues to perform optimally.
                    </p>
                </div>
                
                <div class="bg-white rounded-lg p-6 shadow-md animate-on-scroll">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">What's included in your web development service?</h3>
                    <p class="text-gray-600">
                        Our web development service includes responsive design, content management system, SEO optimization, 
                        security implementation, performance optimization, and basic training on managing your website.
                    </p>
                </div>
                
                <div class="bg-white rounded-lg p-6 shadow-md animate-on-scroll">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Can you help migrate my existing website?</h3>
                    <p class="text-gray-600">
                        Absolutely! We provide complete website migration services including content transfer, 
                        design improvements, SEO preservation, and minimal downtime during the transition process.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 gradient-bg text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center animate-on-scroll">
        <h2 class="text-4xl font-bold mb-6">Let's Create Something Amazing Together</h2>
        <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
            Ready to take your business to the next level? Get in touch for a free consultation.
        </p>
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
            <a href="tel:<?php echo SITE_PHONE; ?>" 
               class="bg-white text-purple-600 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all">
                Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="mailto:<?php echo SITE_EMAIL; ?>" 
               class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition-all">
                Email Us
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>