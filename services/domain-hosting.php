<?php
$page_title = "Domain & Hosting Services";
$meta_description = "Reliable domain registration and web hosting services including shared hosting, VPS, SSL certificates, and email hosting with 24/7 support.";
include '../includes/header.php';

$service = $services['domain-hosting'];
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
            <a href="https://ifastnet.com/portal/aff.php?aff=31319" 
               target="_blank"
               rel="noopener"
               class="bg-white text-purple-600 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all transform hover:scale-105">
                Get Hosting Now
            </a>
        </div>
    </div>
</section>

<!-- Hosting Plans -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Hosting Plans</h2>
            <p class="text-xl text-gray-600">Choose the perfect hosting solution for your needs</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Shared Hosting -->
            <div class="bg-white rounded-2xl shadow-lg border-2 border-gray-100 p-8 animate-on-scroll">
                <div class="text-center mb-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Shared Hosting</h3>
                    <p class="text-gray-600">Perfect for small websites and blogs</p>
                </div>
                
                <div class="text-center mb-6">
                    <div class="text-4xl font-bold text-gradient mb-2">$9.99</div>
                    <p class="text-gray-600">per month</p>
                </div>
                
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">10GB SSD Storage</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Unlimited Bandwidth</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">5 Email Accounts</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Free SSL Certificate</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">24/7 Support</span>
                    </li>
                </ul>
                
                <a href="https://ifastnet.com/portal/aff.php?aff=31319" 
                   target="_blank"
                   rel="noopener"
                   class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-3 rounded-full hover:from-blue-700 hover:to-purple-700 transition-all font-semibold text-center block">
                    Get Started
                </a>
            </div>
            
            <!-- VPS Hosting (Popular) -->
            <div class="bg-white rounded-2xl shadow-xl border-2 border-purple-600 p-8 relative animate-on-scroll">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <span class="bg-purple-600 text-white px-4 py-2 rounded-full text-sm font-semibold">Most Popular</span>
                </div>
                
                <div class="text-center mb-6 mt-4">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">VPS Hosting</h3>
                    <p class="text-gray-600">Ideal for growing businesses</p>
                </div>
                
                <div class="text-center mb-6">
                    <div class="text-4xl font-bold text-gradient mb-2">$29.99</div>
                    <p class="text-gray-600">per month</p>
                </div>
                
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">50GB SSD Storage</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Unlimited Bandwidth</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Unlimited Email Accounts</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Free SSL Certificate</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Priority Support</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Root Access</span>
                    </li>
                </ul>
                
                <a href="https://ifastnet.com/portal/aff.php?aff=31319" 
                   target="_blank"
                   rel="noopener"
                   class="w-full bg-gradient-to-r from-purple-600 to-blue-600 text-white py-3 rounded-full hover:from-purple-700 hover:to-blue-700 transition-all font-semibold text-center block">
                    Get Started
                </a>
            </div>
            
            <!-- Dedicated Hosting -->
            <div class="bg-white rounded-2xl shadow-lg border-2 border-gray-100 p-8 animate-on-scroll">
                <div class="text-center mb-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Dedicated Server</h3>
                    <p class="text-gray-600">Maximum performance and control</p>
                </div>
                
                <div class="text-center mb-6">
                    <div class="text-4xl font-bold text-gradient mb-2">$99.99</div>
                    <p class="text-gray-600">per month</p>
                </div>
                
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">500GB SSD Storage</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Unlimited Bandwidth</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Unlimited Email Accounts</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Free SSL Certificate</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">24/7 Premium Support</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-gray-700">Dedicated Resources</span>
                    </li>
                </ul>
                
                <a href="https://ifastnet.com/portal/aff.php?aff=31319" 
                   target="_blank"
                   rel="noopener"
                   class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-3 rounded-full hover:from-blue-700 hover:to-purple-700 transition-all font-semibold text-center block">
                    Get Started
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Choose Our Hosting?</h2>
            <p class="text-xl text-gray-600">Reliable, secure, and fast hosting solutions</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shield-alt text-white text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">99.9% Uptime</h3>
                <p class="text-gray-600">Guaranteed server reliability and performance</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-bolt text-white text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">SSD Storage</h3>
                <p class="text-gray-600">Lightning-fast solid state drives for better performance</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-lock text-white text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Free SSL</h3>
                <p class="text-gray-600">Secure your website with free SSL certificates</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-headset text-white text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">24/7 Support</h3>
                <p class="text-gray-600">Round-the-clock technical support from experts</p>
            </div>
        </div>
    </div>
</section>

<!-- Domain Services -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div class="animate-on-scroll">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">
                    Domain Registration Services
                </h2>
                <p class="text-lg text-gray-600 mb-8">
                    Secure your perfect domain name with our comprehensive domain registration services. 
                    We offer competitive pricing and easy management for all popular domain extensions.
                </p>
                
                <div class="grid grid-cols-2 gap-6 mb-8">
                    <div class="text-center bg-gray-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-gradient mb-1">$12.99</div>
                        <p class="text-gray-600">.com domains</p>
                    </div>
                    <div class="text-center bg-gray-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-gradient mb-1">$15.99</div>
                        <p class="text-gray-600">.net domains</p>
                    </div>
                    <div class="text-center bg-gray-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-gradient mb-1">$18.99</div>
                        <p class="text-gray-600">.org domains</p>
                    </div>
                    <div class="text-center bg-gray-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-gradient mb-1">$8.99</div>
                        <p class="text-gray-600">.info domains</p>
                    </div>
                </div>
                
                <a href="https://ifastnet.com/portal/aff.php?aff=31319" 
                   target="_blank"
                   rel="noopener"
                   class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-3 rounded-full hover:from-blue-700 hover:to-purple-700 transition-all font-semibold">
                    Register Domain
                </a>
            </div>
            
            <!-- Image Placeholder -->
            <div class="animate-on-scroll">
                <div class="bg-gradient-to-br from-green-400 to-blue-600 rounded-2xl p-8 text-white">
                    <div class="text-center">
                        <i class="fas fa-globe text-6xl mb-4 opacity-80"></i>
                        <h3 class="text-2xl font-bold mb-2">Global Domain Network</h3>
                        <p class="opacity-90">Access to hundreds of domain extensions worldwide</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Services -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Additional Services</h2>
            <p class="text-xl text-gray-600">Complete hosting solutions for your online presence</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow animate-on-scroll">
                <div class="w-12 h-12 gradient-bg rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-envelope text-white"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Email Hosting</h3>
                <p class="text-gray-600 mb-4">Professional email accounts with your domain name</p>
                <div class="text-lg font-bold text-gradient">$5.99/month</div>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow animate-on-scroll">
                <div class="w-12 h-12 gradient-bg rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-database text-white"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Database Hosting</h3>
                <p class="text-gray-600 mb-4">MySQL and PostgreSQL database solutions</p>
                <div class="text-lg font-bold text-gradient">$9.99/month</div>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow animate-on-scroll">
                <div class="w-12 h-12 gradient-bg rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-cloud text-white"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Cloud Backup</h3>
                <p class="text-gray-600 mb-4">Automated daily backups to the cloud</p>
                <div class="text-lg font-bold text-gradient">$4.99/month</div>
            </div>
        </div>
    </div>
</section>

<!-- Hosting Partner -->
<section class="py-16 bg-white border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl p-8 md:p-12 animate-on-scroll">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="inline-flex items-center bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                        <i class="fas fa-handshake mr-2"></i>
                        Trusted Hosting Partner
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Powered by iFastNet</h3>
                    <p class="text-lg text-gray-600 mb-6">
                        Our hosting services are powered by iFastNet, a leading hosting provider with over 15 years of experience. 
                        Enjoy enterprise-grade infrastructure, 99.9% uptime guarantee, and lightning-fast performance for your websites.
                    </p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>Enterprise-grade infrastructure</span>
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>99.9% uptime SLA guarantee</span>
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>24/7 technical support</span>
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>Global data centers</span>
                        </li>
                    </ul>
                    <a href="https://ifastnet.com/portal/aff.php?aff=31319" 
                       target="_blank" 
                       rel="noopener"
                       class="inline-flex items-center bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-full hover:from-blue-700 hover:to-purple-700 transition-all font-semibold">
                        Learn More About iFastNet
                        <i class="fas fa-external-link-alt ml-2 text-sm"></i>
                    </a>
                </div>
                <div class="hidden md:block">
                    <div class="bg-white rounded-xl p-8 shadow-lg">
                        <div class="text-center mb-6">
                            <i class="fas fa-server text-6xl text-gradient mb-4"></i>
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Premium Hosting Infrastructure</h4>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-blue-50 rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-blue-600 mb-1">15+</div>
                                <p class="text-sm text-gray-600">Years Experience</p>
                            </div>
                            <div class="bg-purple-50 rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-purple-600 mb-1">99.9%</div>
                                <p class="text-sm text-gray-600">Uptime SLA</p>
                            </div>
                            <div class="bg-green-50 rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-green-600 mb-1">24/7</div>
                                <p class="text-sm text-gray-600">Support</p>
                            </div>
                            <div class="bg-orange-50 rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-orange-600 mb-1">Global</div>
                                <p class="text-sm text-gray-600">Network</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 gradient-bg text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center animate-on-scroll">
        <h2 class="text-4xl font-bold mb-6">Ready to Get Online?</h2>
        <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
            Start your online journey with reliable hosting and domain services
        </p>
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
            <a href="https://ifastnet.com/portal/aff.php?aff=31319" 
               target="_blank"
               rel="noopener"
               class="bg-white text-purple-600 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all">
                Get Hosting Now
            </a>
            <a href="https://ifastnet.com/portal/aff.php?aff=31319" 
               target="_blank"
               rel="noopener"
               class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition-all">
                Register Domain
            </a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
