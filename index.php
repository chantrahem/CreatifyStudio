<?php
$page_title = "Home";
$meta_description = "Professional web development, graphic design, domain and hosting services. Transform your business with QRMMS's quality digital solutions.";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="gradient-bg min-h-screen flex items-center relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Hero Content -->
            <div class="text-white animate-on-scroll">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Creative Digital Solutions for Your
                    <span class="text-yellow-300">Success</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-gray-200">
                    Transform your business with professional web development, stunning graphic design, 
                    and reliable hosting solutions.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="/contact.php" 
                       class="bg-white text-purple-600 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all transform hover:scale-105">
                        Start Your Project
                    </a>
                    <a href="#services" 
                       class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition-all text-center">
                        View Services
                    </a>
                    <a href="/qrcode" 
                       class="bg-gradient-to-r from-green-500 to-blue-600 text-white px-8 py-4 rounded-full font-semibold hover:from-green-600 hover:to-blue-700 transition-all flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-blue-500" aria-label="Generate Free WiFi QR Code">
                        <i class="fas fa-qrcode mr-3" aria-hidden="true"></i>
                        Free WiFi QR Code Generator
                    </a>
                </div>
            </div>
            
            <!-- Hero Image/Graphics -->
            <div class="hidden lg:block animate-on-scroll">
                <div class="relative">
                    <div class="w-96 h-96 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full opacity-20 absolute -top-10 -right-10"></div>
                    <div class="w-80 h-80 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full opacity-30 absolute top-10 right-10"></div>
                    <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-2xl p-8">
                        <div class="grid grid-cols-3 gap-4">
                            <div class="bg-white bg-opacity-20 rounded-lg p-4 text-center">
                                <i class="fas fa-code text-3xl text-yellow-300 mb-2"></i>
                                <p class="text-sm font-semibold">Web Dev</p>
                            </div>
                            <div class="bg-white bg-opacity-20 rounded-lg p-4 text-center">
                                <i class="fas fa-palette text-3xl text-green-300 mb-2"></i>
                                <p class="text-sm font-semibold">Design</p>
                            </div>
                            <div class="bg-white bg-opacity-20 rounded-lg p-4 text-center">
                                <i class="fas fa-server text-3xl text-blue-300 mb-2"></i>
                                <p class="text-sm font-semibold">Hosting</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <i class="fas fa-chevron-down text-white text-2xl"></i>
    </div>
</section>

<!-- Featured: QR Menu Management System -->
<section class="py-20 bg-gradient-to-br from-blue-50 to-purple-50 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-blue-200 to-purple-200 rounded-full opacity-20 transform translate-x-48 -translate-y-48"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-yellow-200 to-orange-200 rounded-full opacity-20 transform -translate-x-32 translate-y-32"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div class="animate-on-scroll">
                <div class="inline-flex items-center bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                    <i class="fas fa-star text-yellow-500 mr-2"></i>
                    Featured Solution
                </div>
                
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    QR Menu Management
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">System</span>
                </h2>
                
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Revolutionary digital menu platform for restaurants, cafes, and bars. Save money on menu printing 
                    and graphic design while providing customers with a modern, contactless dining experience.
                </p>
                
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6 mb-8">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-dollar-sign text-green-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Cost Savings</h4>
                            <p class="text-sm text-gray-600">No printing costs</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-sync-alt text-blue-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Real-time Updates</h4>
                            <p class="text-sm text-gray-600">Instant menu changes</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-mobile-alt text-purple-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Mobile Friendly</h4>
                            <p class="text-sm text-gray-600">Works on all devices</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-leaf text-yellow-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Eco-Friendly</h4>
                            <p class="text-sm text-gray-600">Paperless solution</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-shopping-cart text-red-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Post Sale</h4>
                            <p class="text-sm text-gray-600">Complete sales processing</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-receipt text-indigo-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Print Receipt</h4>
                            <p class="text-sm text-gray-600">Digital & physical receipts</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-language text-pink-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Multi-Language</h4>
                            <p class="text-sm text-gray-600">Khmer, English, Chinese</p>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="https://t.me/qrcodemenu" 
                       class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all font-semibold inline-flex items-center justify-center transform hover:scale-105">
                        <i class="fab fa-telegram mr-3"></i>
                        Get Free Demo
                    </a>
                    <a href="/services/qr-menu-system.php" 
                       class="border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-lg hover:border-blue-600 hover:text-blue-600 transition-all font-semibold inline-flex items-center justify-center">
                        <i class="fas fa-info-circle mr-3"></i>
                        Learn More
                    </a>
                </div>
            </div>
            
            <!-- Visual Element -->
            <div class="animate-on-scroll">
                <div class="relative">
                    <!-- Phone Mockup -->
                    <div class="bg-white rounded-3xl shadow-2xl p-4 transform rotate-6 hover:rotate-0 transition-transform duration-500">
                        <div class="bg-gray-900 rounded-2xl p-6 text-white">
                            <!-- Phone Screen Header -->
                            <div class="flex items-center justify-between mb-6">
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                    <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                    <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                </div>
                                <div class="text-sm text-gray-400">Menu</div>
                            </div>
                            
                            <!-- QR Code -->
                            <div class="bg-white p-4 rounded-xl mb-6">
                                <div class="w-32 h-32 bg-gray-900 mx-auto rounded-lg flex items-center justify-center">
                                    <i class="fas fa-qrcode text-white text-4xl"></i>
                                </div>
                            </div>
                            
                            <!-- Menu Items Preview -->
                            <div class="space-y-3">
                                <div class="bg-gray-800 rounded-lg p-3 flex items-center justify-between">
                                    <div>
                                        <div class="font-semibold text-sm">Grilled Chicken</div>
                                        <div class="text-gray-400 text-xs">Delicious grilled...</div>
                                    </div>
                                    <div class="text-green-400 font-bold">$12.99</div>
                                </div>
                                
                                <div class="bg-gray-800 rounded-lg p-3 flex items-center justify-between">
                                    <div>
                                        <div class="font-semibold text-sm">Caesar Salad</div>
                                        <div class="text-gray-400 text-xs">Fresh lettuce...</div>
                                    </div>
                                    <div class="text-green-400 font-bold">$8.99</div>
                                </div>
                                
                                <div class="bg-gray-700 rounded-lg p-3 flex items-center justify-between opacity-50">
                                    <div>
                                        <div class="font-semibold text-sm">Fish & Chips</div>
                                        <div class="text-gray-400 text-xs">Currently unavailable</div>
                                    </div>
                                    <div class="text-red-400 font-bold">Out of Stock</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating Elements -->
                    <div class="absolute -top-4 -right-4 bg-green-500 text-white px-3 py-1 rounded-full text-xs font-semibold animate-pulse">
                        Live Updates
                    </div>
                    <div class="absolute -bottom-4 -left-4 bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
                        Contactless
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Stats -->
        <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8 text-center animate-on-scroll">
            <div>
                <div class="text-3xl font-bold text-gray-900 mb-2">90%</div>
                <div class="text-gray-600">Cost Reduction</div>
            </div>
            <div>
                <div class="text-3xl font-bold text-gray-900 mb-2">24/7</div>
                <div class="text-gray-600">Menu Access</div>
            </div>
            <div>
                <div class="text-3xl font-bold text-gray-900 mb-2">100+</div>
                <div class="text-gray-600">Happy Restaurants</div>
            </div>
            <div>
                <div class="text-3xl font-bold text-gray-900 mb-2">0</div>
                <div class="text-gray-600">Paper Waste</div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Services</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                We offer comprehensive digital solutions to help your business thrive in the digital world
            </p>
        </div>
        
        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach ($services as $key => $service): ?>
                <div class="service-card bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-2xl transition-all animate-on-scroll">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-<?php echo $service['icon']; ?> text-2xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3"><?php echo $service['title']; ?></h3>
                        <p class="text-gray-600"><?php echo $service['description']; ?></p>
                    </div>
                    
                    <div class="mb-6">
                        <h4 class="font-semibold text-gray-900 mb-3">Features:</h4>
                        <ul class="space-y-2">
                            <?php foreach (array_slice($service['features'], 0, 4) as $feature): ?>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <?php echo $feature; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    
                    <div class="text-center">
                        <p class="text-2xl font-bold text-gradient mb-4">Starting at <?php echo $service['pricing_from']; ?></p>
                        <a href="/services/<?php echo $key; ?>.php" 
                           class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-full hover:from-blue-700 hover:to-purple-700 transition-all font-semibold">
                            Learn More
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
            <div class="animate-on-scroll">
                <div class="text-4xl font-bold text-gradient mb-2">150+</div>
                <p class="text-gray-600">Projects Completed</p>
            </div>
            <div class="animate-on-scroll">
                <div class="text-4xl font-bold text-gradient mb-2">95%</div>
                <p class="text-gray-600">Client Satisfaction</p>
            </div>
            <div class="animate-on-scroll">
                <div class="text-4xl font-bold text-gradient mb-2">24/7</div>
                <p class="text-gray-600">Support Available</p>
            </div>
            <div class="animate-on-scroll">
                <div class="text-4xl font-bold text-gradient mb-2">5+</div>
                <p class="text-gray-600">Years Experience</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
            <p class="text-xl text-gray-600">Don't just take our word for it - hear from our satisfied clients</p>
        </div>
        
        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach ($testimonials as $testimonial): ?>
                <div class="bg-gray-50 rounded-2xl p-8 animate-on-scroll">
                    <div class="mb-6">
                        <?php echo generateStars($testimonial['rating']); ?>
                    </div>
                    <blockquote class="text-gray-700 mb-6 italic">
                        "<?php echo $testimonial['message']; ?>"
                    </blockquote>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold text-lg">
                                <?php echo substr($testimonial['name'], 0, 1); ?>
                            </span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900"><?php echo $testimonial['name']; ?></h4>
                            <p class="text-gray-600 text-sm">
                                <?php echo $testimonial['position']; ?>, <?php echo $testimonial['company']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 gradient-bg relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center text-white animate-on-scroll">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Ready to Start Your Project?
            </h2>
            <p class="text-xl md:text-2xl mb-8 text-gray-200 max-w-3xl mx-auto">
                Let's bring your vision to life with our expert team of developers and designers
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="/contact.php" 
                   class="bg-white text-purple-600 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all transform hover:scale-105">
                    Get Free Consultation
                </a>
                <a href="/portfolio.php" 
                   class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition-all">
                    View Our Work
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>