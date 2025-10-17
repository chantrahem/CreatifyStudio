<?php
$page_title = "Our Services";
$meta_description = "Comprehensive web development, graphic design, and hosting services. Professional digital solutions to help your business grow online.";
include 'includes/header.php';
?>

<!-- Services Hero -->
<section class="gradient-bg py-20 text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center animate-on-scroll">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Our Services</h1>
            <p class="text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto">
                Comprehensive digital solutions to transform your business and enhance your online presence
            </p>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section id="services" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">What We Offer</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                From concept to deployment, we provide end-to-end digital solutions tailored to your business needs
            </p>
        </div>
        
        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach ($services as $key => $service): ?>
                <div class="service-card bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-2xl transition-all animate-on-scroll group">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-<?php echo $service['icon']; ?> text-2xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3"><?php echo $service['title']; ?></h3>
                        <p class="text-gray-600"><?php echo $service['description']; ?></p>
                    </div>
                    
                    <div class="mb-6">
                        <h4 class="font-semibold text-gray-900 mb-3">Key Features:</h4>
                        <ul class="space-y-2">
                            <?php foreach (array_slice($service['features'], 0, 4) as $feature): ?>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-green-500 mr-3 flex-shrink-0"></i>
                                    <?php echo $feature; ?>
                                </li>
                            <?php endforeach; ?>
                            <?php if (count($service['features']) > 4): ?>
                                <li class="flex items-center text-gray-500 italic">
                                    <i class="fas fa-plus mr-3 flex-shrink-0"></i>
                                    And <?php echo count($service['features']) - 4; ?> more features
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    
                    <div class="text-center border-t pt-6">
                        <p class="text-2xl font-bold text-gradient mb-4">Starting at <?php echo $service['pricing_from']; ?></p>
                        <a href="/services/<?php echo $key; ?>.php" 
                           class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-full hover:from-blue-700 hover:to-purple-700 transition-all font-semibold block">
                            Learn More
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Choose CreatifyStudio?</h2>
            <p class="text-xl text-gray-600">What sets us apart in the digital landscape</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-rocket text-white text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Fast Delivery</h3>
                <p class="text-gray-600">Quick turnaround times without compromising quality</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shield-alt text-white text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Reliable Support</h3>
                <p class="text-gray-600">24/7 support and maintenance for peace of mind</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users text-white text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Expert Team</h3>
                <p class="text-gray-600">Experienced professionals dedicated to your success</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-dollar-sign text-white text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Great Value</h3>
                <p class="text-gray-600">Competitive pricing with exceptional quality</p>
            </div>
        </div>
    </div>
</section>

<!-- Process -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Process</h2>
            <p class="text-xl text-gray-600">How we bring your ideas to life</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white font-bold text-xl">1</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Consultation</h3>
                <p class="text-gray-600">We discuss your goals and understand your vision</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white font-bold text-xl">2</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Strategy</h3>
                <p class="text-gray-600">We create a detailed plan and project roadmap</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white font-bold text-xl">3</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Development</h3>
                <p class="text-gray-600">We build and design your solution with care</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white font-bold text-xl">4</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Launch</h3>
                <p class="text-gray-600">We deploy and provide ongoing support</p>
            </div>
        </div>
    </div>
</section>

<!-- Service Comparison -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Service Comparison</h2>
            <p class="text-xl text-gray-600">Choose the right service for your needs</p>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-xl shadow-lg overflow-hidden">
                <thead class="bg-gradient-to-r from-blue-600 to-purple-600 text-white">
                    <tr>
                        <th class="px-6 py-4 text-left">Feature</th>
                        <th class="px-6 py-4 text-center">Web Development</th>
                        <th class="px-6 py-4 text-center">Graphic Design</th>
                        <th class="px-6 py-4 text-center">Domain & Hosting</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-900">Custom Solutions</td>
                        <td class="px-6 py-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                        <td class="px-6 py-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                        <td class="px-6 py-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="px-6 py-4 font-medium text-gray-900">Responsive Design</td>
                        <td class="px-6 py-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                        <td class="px-6 py-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                        <td class="px-6 py-4 text-center"><i class="fas fa-minus text-gray-400"></i></td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-900">24/7 Support</td>
                        <td class="px-6 py-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                        <td class="px-6 py-4 text-center"><i class="fas fa-minus text-gray-400"></i></td>
                        <td class="px-6 py-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="px-6 py-4 font-medium text-gray-900">Starting Price</td>
                        <td class="px-6 py-4 text-center text-gradient font-bold">$999</td>
                        <td class="px-6 py-4 text-center text-gradient font-bold">$299</td>
                        <td class="px-6 py-4 text-center text-gradient font-bold">$9.99/mo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 gradient-bg text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center animate-on-scroll">
        <h2 class="text-4xl font-bold mb-6">Ready to Get Started?</h2>
        <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
            Let's discuss your project and find the perfect solution for your business needs
        </p>
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
            <a href="/contact.php" 
               class="bg-white text-purple-600 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all">
                Get Free Consultation
            </a>
            <a href="/portfolio.php" 
               class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition-all">
                View Our Work
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>