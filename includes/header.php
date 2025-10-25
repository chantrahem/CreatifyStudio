<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME . ' - ' . SITE_TAGLINE; ?></title>
    
    <!-- Meta Description -->
    <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : 'Professional web development, graphic design, domain and hosting services. Transform your business with creative digital solutions.'; ?>">
    
    <!-- Prevent caching during development -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    
    <!-- Meta Keywords -->
    <meta name="keywords" content="web development, graphic design, domain registration, web hosting, website design, PHP development, responsive design, SEO">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME; ?>">
    <meta property="og:description" content="<?php echo isset($meta_description) ? $meta_description : 'Professional web development and design services'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/images/og-image.jpg">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME; ?>">
    <meta name="twitter:description" content="<?php echo isset($meta_description) ? $meta_description : 'Professional web development and design services'; ?>">
    <meta name="twitter:image" content="<?php echo SITE_URL; ?>/assets/images/og-image.jpg">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">
    
    <!-- Tailwind CSS -->
    <link href="/css/style.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .text-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .service-card:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }
        .nav-link.active {
        a.dropdown-link-active,
        .services-dropdown-active {
            color: #667eea !important;
            border-left: 4px solid #764ba2 !important;
            background: rgba(118,75,162,0.07) !important;
        }
            color: #667eea;
            border-bottom: 2px solid #667eea;
            border-left: 4px solid #764ba2;
            background: rgba(118,75,162,0.07);
        }
        .nav-scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        .nav-transparent {
            background: transparent;
            box-shadow: none;
        }
        .rotate-180 {
            transform: rotate(180deg);
        }
        .transition-transform {
            transition: transform 0.2s ease-in-out;
        }
        #mobile-menu {
            transition: all 0.3s ease-in-out;
            position: relative;
            z-index: 60;
        }
        @media (max-width: 767px) {
            #mobile-menu.mobile-hidden {
                display: none !important;
            }
            #mobile-menu:not(.mobile-hidden) {
                display: block !important;
            }
        }
        @media (min-width: 768px) {
            #mobile-menu {
                display: none !important;
            }
        }
        
        /* Ensure hamburger icon is always visible */
        #mobile-menu-button svg {
            display: block !important;
            opacity: 1 !important;
            visibility: visible !important;
        }
        
        /* Prevent any hidden class from affecting the hamburger */
        #mobile-menu-button svg:not(.hidden) {
            display: block !important;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav id="navbar" class="nav-transparent fixed w-full top-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-3">
                        <img src="/assets/images/favicon.ico" alt="QRMMS Logo" class="w-10 h-10">
                        <span class="text-xl font-bold text-gray-900"><?php echo SITE_NAME; ?></span>
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <?php foreach ($navigation as $name => $url): ?>
                        <?php if (is_array($url)): ?>
                            <!-- Dropdown Menu for Services -->
                            <div class="relative group">
                                <button class="nav-link text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors flex items-center <?php echo isServicesActive(); ?>">
                                    <?php echo $name; ?>
                                    <i class="fas fa-chevron-down ml-1 text-xs"></i>
                                </button>
                            <!-- Add active class to Services parent if any subpage is active -->
                            <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                var servicesBtn = document.querySelector('.nav-link:contains("Services")');
                                if (servicesBtn) {
                                    servicesBtn.classList.add('<?php echo isServicesActive(); ?>');
                                }
                            });
                            </script>
                                <div class="absolute top-full left-0 mt-1 w-56 bg-white rounded-lg shadow-lg border border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                                    <?php foreach ($url as $subName => $subUrl): ?>
                                        <?php if ($subName === 'divider'): ?>
                                            <div class="border-t border-gray-200 my-1"></div>
                                        <?php else: ?>
                                            <a href="<?php echo $subUrl; ?>"
                                               class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-blue-600 transition-colors first:rounded-t-lg last:rounded-b-lg"
                                               <?php if (isActivePage(ltrim($subUrl, '/'))) echo 'style="color:#667eea;border-left:4px solid #764ba2;background:rgba(118,75,162,0.07);"'; ?>>
                                                <?php echo $subName; ?>
                                            </a>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <?php if ($name === 'QR Menu System'): ?>
                                <a href="<?php echo $url; ?>" 
                                   class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:from-blue-700 hover:to-purple-700 transition-all transform hover:scale-105 flex items-center <?php echo isActivePage(basename($url)); ?>">
                                    <i class="fas fa-star text-yellow-300 mr-2 text-xs"></i>
                                    <?php echo $name; ?>
                                </a>
                            <?php else: ?>
                                <a href="<?php echo $url; ?>" 
                                   class="nav-link text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors <?php echo ($url === '/' ? isActivePage('home') : isActivePage(basename($url))); ?>">
                                    <?php echo $name; ?>
                                </a>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    
                    <a href="/contact.php" 
                       class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-2 rounded-full hover:from-blue-700 hover:to-purple-700 transition-all font-medium">
                        Get Quote
                    </a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" 
                            class="text-gray-700 hover:text-blue-600 focus:outline-none focus:text-blue-600 transition-colors">
                        <!-- Only hamburger icon - no X icon -->
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="mobile-hidden bg-white shadow-lg border-t border-gray-200 w-full">
            <div class="px-4 pt-2 pb-3 space-y-1">
                <?php foreach ($navigation as $name => $url): ?>
                    <?php if (is_array($url)): ?>
                        <!-- Mobile Services Dropdown -->
                        <div>
                            <button class="mobile-dropdown-btn w-full text-left px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md transition-colors flex items-center justify-between">
                                <?php echo $name; ?>
                                <i class="fas fa-chevron-down text-xs transition-transform"></i>
                            </button>
                            <div class="mobile-dropdown-content hidden pl-4 space-y-1">
                                <?php foreach ($url as $subName => $subUrl): ?>
                                    <?php if ($subName === 'divider'): ?>
                                        <div class="border-t border-gray-200 my-2"></div>
                                    <?php else: ?>
                                        <a href="<?php echo $subUrl; ?>"
                                           class="block px-3 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-md transition-colors"
                                           <?php if (isActivePage(ltrim($subUrl, '/'))) echo 'style="color:#667eea;border-left:4px solid #764ba2;background:rgba(118,75,162,0.07);"'; ?>>
                                            <?php echo $subName; ?>
                                        </a>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php else: ?>
                        <a href="<?php echo $url; ?>" 
                           class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md transition-colors <?php echo ($url === '/' ? isActivePage('home') : isActivePage(basename($url))); ?>">
                            <?php echo $name; ?>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
                
                <a href="/contact.php" 
                   class="block px-3 py-2 text-base font-medium bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-md hover:from-blue-700 hover:to-purple-700 transition-all">
                    Get Quote
                </a>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main class="pt-16">