<?php
$page_title = "Home";
$meta_description = "Professional web development, graphic design, domain and hosting services. Transform your business with CreatifyStudio's creative digital solutions.";
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