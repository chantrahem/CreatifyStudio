<?php
$page_title = "Web Development Services";
$meta_description = "Professional web development services including custom websites, e-commerce solutions, CMS development, and API integration. Built with modern technologies.";
include '../includes/header.php';

$service = $services['web-development'];
?>

<!-- Service Hero Section -->
<section class="gradient-bg py-20 text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center animate-on-scroll">
            <div class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-<?php echo $service['icon']; ?> text-3xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-6"><?php echo $service['title']; ?></h1>
            <p class="text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto mb-8">
                <?php echo $service['description']; ?>
            </p>
            <p class="text-3xl font-bold text-yellow-300 mb-8">Starting at <?php echo $service['pricing_from']; ?></p>
            <a href="/contact.php?service=web-development" 
               class="bg-white text-purple-600 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all">
                Get Started Today
            </a>
        </div>
    </div>
</section>

<!-- Service Details -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div class="animate-on-scroll">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">
                    Modern Web Development Solutions
                </h2>
                <p class="text-lg text-gray-600 mb-8">
                    We create powerful, scalable web applications using the latest technologies and best practices. 
                    Our development team specializes in building custom solutions that drive business growth and 
                    enhance user experience.
                </p>
                
                <div class="space-y-4">
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-check text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Responsive Design</h3>
                            <p class="text-gray-600">Mobile-first approach ensuring perfect display on all devices</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-check text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Performance Optimized</h3>
                            <p class="text-gray-600">Fast loading times and optimized code for better user experience</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-check text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">SEO Ready</h3>
                            <p class="text-gray-600">Built with search engine optimization best practices</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image Placeholder -->
            <div class="animate-on-scroll">
                <div class="bg-gradient-to-br from-blue-400 to-purple-600 rounded-2xl p-8 text-white">
                    <div class="text-center">
                        <i class="fas fa-laptop-code text-6xl mb-4 opacity-80"></i>
                        <h3 class="text-2xl font-bold mb-2">Custom Development</h3>
                        <p class="opacity-90">Tailored solutions for your unique business needs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Grid -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">What's Included</h2>
            <p class="text-xl text-gray-600">Comprehensive web development services to meet all your needs</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($service['features'] as $feature): ?>
                <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow animate-on-scroll">
                    <div class="w-12 h-12 gradient-bg rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-star text-white"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2"><?php echo $feature; ?></h3>
                    <p class="text-gray-600">Professional implementation with attention to detail and best practices.</p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Technologies -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Technologies We Use</h2>
            <p class="text-xl text-gray-600">Cutting-edge tools and frameworks for modern web development</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
            <?php foreach ($service['technologies'] as $tech): ?>
                <div class="text-center animate-on-scroll">
                    <div class="bg-gray-100 rounded-xl p-6 hover:bg-gray-200 transition-colors">
                        <div class="text-2xl font-bold text-gradient mb-2"><?php echo substr($tech, 0, 2); ?></div>
                        <p class="text-gray-700 font-medium"><?php echo $tech; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Process -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Development Process</h2>
            <p class="text-xl text-gray-600">A proven methodology that ensures project success</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-xl">1</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Discovery</h3>
                <p class="text-gray-600">Understanding your requirements and goals</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-xl">2</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Planning</h3>
                <p class="text-gray-600">Creating wireframes and project roadmap</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-xl">3</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Development</h3>
                <p class="text-gray-600">Building and testing your application</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-xl">4</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Launch</h3>
                <p class="text-gray-600">Deployment and ongoing support</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 gradient-bg text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center animate-on-scroll">
        <h2 class="text-4xl font-bold mb-6">Ready to Build Your Website?</h2>
        <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
            Let's discuss your project and create something amazing together
        </p>
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
            <a href="/contact.php?service=web-development" 
               class="bg-white text-purple-600 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all">
                Start Your Project
            </a>
            <a href="/portfolio.php" 
               class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition-all">
                View Portfolio
            </a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>