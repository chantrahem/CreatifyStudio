<?php
// Configuration file for CreatifyStudio

// Site Information
define('SITE_NAME', 'CreatifyStudio');
define('SITE_TAGLINE', 'Creative Web Solutions & Design Services');
define('SITE_URL', 'https://creatifystudio.com');
define('SITE_EMAIL', 'creatifystudio168@gmail.com');
define('SITE_PHONE', '+855 69 71 21 21');

// Company Information
define('COMPANY_NAME', 'CreatifyStudio');
define('COMPANY_ADDRESS', 'Siem Reap, Kingdom of Cambodia');
define('COMPANY_FOUNDED', '2020');

// Social Media Links
define('SOCIAL_FACEBOOK', 'https://facebook.com/creatifystudio');
define('SOCIAL_TWITTER', 'https://twitter.com/creatifystudio');
define('SOCIAL_INSTAGRAM', 'https://instagram.com/creatifystudio');
define('SOCIAL_LINKEDIN', 'https://linkedin.com/company/creatifystudio');
define('SOCIAL_GITHUB', 'https://github.com/creatifystudio');

// Services Configuration
$services = [
    'web-development' => [
        'title' => 'Web Development',
        'icon' => 'code',
        'description' => 'Custom websites and web applications built with modern technologies',
        'features' => [
            'Responsive Design',
            'E-commerce Solutions', 
            'CMS Development',
            'API Integration',
            'Performance Optimization',
            'SEO Optimization'
        ],
        'technologies' => ['PHP', 'JavaScript', 'React', 'Vue.js', 'Laravel', 'WordPress'],
        'pricing_from' => '$750'
    ],
    'graphic-design' => [
        'title' => 'Graphic Design',
        'icon' => 'palette',
        'description' => 'Creative visual solutions for your brand identity and marketing materials',
        'features' => [
            'Logo Design',
            'Brand Identity',
            'Print Design',
            'Social Media Graphics',
            'UI/UX Design',
            'Marketing Materials'
        ],
        'technologies' => ['Adobe Creative Suite', 'Figma', 'Sketch', 'Canva Pro'],
        'pricing_from' => '$299'
    ],
    'domain-hosting' => [
        'title' => 'Domain & Hosting',
        'icon' => 'server',
        'description' => 'Reliable domain registration and web hosting solutions for your online presence',
        'features' => [
            'Domain Registration',
            'Shared Hosting',
            'VPS Hosting',
            'SSL Certificates',
            'Email Hosting',
            'Daily Backups'
        ],
        'technologies' => ['cPanel', 'CloudFlare', 'Let\'s Encrypt', 'SSD Storage'],
        'pricing_from' => '$9.99/month'
    ]
];

// Navigation Menu
$navigation = [
    'Home' => '/',
    'Services' => [
        'All Services' => '/services.php',
        'divider' => true,
        'Web Development' => '/services/web-development.php',
        'Graphic Design' => '/services/graphic-design.php',
        'Domain & Hosting' => '/services/domain-hosting.php'
    ],
    'Portfolio' => '/portfolio.php',
    'About' => '/about.php',
    'Contact' => '/contact.php'
];

// Testimonials
$testimonials = [
    [
        'name' => 'Sarah Johnson',
        'company' => 'TechStart Inc.',
        'position' => 'CEO',
        'message' => 'CreatifyStudio transformed our online presence with a stunning website that perfectly captures our brand. Their attention to detail and professionalism exceeded our expectations.',
        'rating' => 5,
        'image' => 'testimonial-1.jpg'
    ],
    [
        'name' => 'Michael Chen',
        'company' => 'Urban Cafe',
        'position' => 'Owner',
        'message' => 'The team created an amazing e-commerce solution for our restaurant. Orders increased by 40% since launch, and customers love the user-friendly design.',
        'rating' => 5,
        'image' => 'testimonial-2.jpg'
    ],
    [
        'name' => 'Emily Rodriguez',
        'company' => 'Creative Agency',
        'position' => 'Marketing Director',
        'message' => 'Outstanding graphic design work! Our new brand identity has received incredible feedback from clients and partners. Highly recommended!',
        'rating' => 5,
        'image' => 'testimonial-3.jpg'
    ]
];

// Portfolio Projects
$portfolio = [
    [
        'title' => 'E-commerce Fashion Store',
        'category' => 'web-development',
        'client' => 'StyleHub',
        'description' => 'Modern online fashion store with inventory management and payment integration',
        'technologies' => ['PHP', 'Laravel', 'MySQL', 'Stripe API'],
        'image' => 'portfolio-ecommerce.jpg',
        'url' => '#'
    ],
    [
        'title' => 'Restaurant Brand Identity',
        'category' => 'graphic-design',
        'client' => 'Bella Vista',
        'description' => 'Complete brand identity package including logo, menu design, and marketing materials',
        'technologies' => ['Adobe Illustrator', 'Photoshop', 'InDesign'],
        'image' => 'portfolio-restaurant.jpg',
        'url' => '#'
    ],
    [
        'title' => 'Corporate Website',
        'category' => 'web-development',
        'client' => 'InnovateTech',
        'description' => 'Professional corporate website with CMS and client portal',
        'technologies' => ['WordPress', 'Custom PHP', 'JavaScript'],
        'image' => 'portfolio-corporate.jpg',
        'url' => '#'
    ]
];

// Contact Form Settings
define('CONTACT_EMAIL', SITE_EMAIL);
define('CONTACT_SUBJECT_PREFIX', '[CreatifyStudio Contact] ');

// Error and Success Messages
$messages = [
    'contact_success' => 'Thank you for your message! We\'ll get back to you within 24 hours.',
    'contact_error' => 'Sorry, there was an error sending your message. Please try again.',
    'validation_error' => 'Please fill in all required fields correctly.',
    'email_invalid' => 'Please enter a valid email address.'
];

// Helper Functions
function getCurrentPage() {
    $page = $_SERVER['REQUEST_URI'];
    $page = parse_url($page, PHP_URL_PATH);
    $page = trim($page, '/');
    return empty($page) ? 'home' : $page;
}

function isActivePage($page) {
    $current = getCurrentPage();
    return $current === $page ? 'active' : '';
}

function formatPrice($price) {
    return is_numeric($price) ? '$' . number_format($price, 2) : $price;
}

function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

function generateStars($rating) {
    $stars = '';
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $rating) {
            $stars .= '<i class="fas fa-star text-yellow-400"></i>';
        } else {
            $stars .= '<i class="far fa-star text-gray-300"></i>';
        }
    }
    return $stars;
}
?>