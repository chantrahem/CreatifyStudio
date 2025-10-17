<?php
$page_title = "Graphic Design Services";
$meta_description = "Professional graphic design services including logo design, brand identity, print design, and digital marketing materials. Creative solutions for your business.";
include '../includes/header.php';

$service = $services['graphic-design'];
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
            <a href="/contact.php?service=graphic-design" 
               class="bg-white text-purple-600 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all transform hover:scale-105">
                Start Your Design
            </a>
        </div>
    </div>
</section>

<!-- Service Details -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Image Placeholder -->
            <div class="animate-on-scroll">
                <div class="bg-gradient-to-br from-pink-400 to-purple-600 rounded-2xl p-8 text-white">
                    <div class="text-center">
                        <i class="fas fa-paint-brush text-6xl mb-4 opacity-80"></i>
                        <h3 class="text-2xl font-bold mb-2">Creative Design</h3>
                        <p class="opacity-90">Bringing your vision to life with stunning visuals</p>
                    </div>
                </div>
            </div>
            
            <!-- Content -->
            <div class="animate-on-scroll">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">
                    Professional Graphic Design Services
                </h2>
                <p class="text-lg text-gray-600 mb-8">
                    Our creative team specializes in developing compelling visual identities and marketing materials 
                    that capture your brand essence and resonate with your target audience. From logos to complete 
                    brand packages, we deliver designs that make an impact.
                </p>
                
                <div class="space-y-4">
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-pink-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-check text-pink-600"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Original Concepts</h3>
                            <p class="text-gray-600">Unique designs tailored to your brand and industry</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-pink-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-check text-pink-600"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Multiple Revisions</h3>
                            <p class="text-gray-600">We work with you until you're completely satisfied</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-pink-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-check text-pink-600"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">High-Quality Files</h3>
                            <p class="text-gray-600">Print-ready and web-optimized formats delivered</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Design Services Grid -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Design Services</h2>
            <p class="text-xl text-gray-600">Complete graphic design solutions for all your business needs</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php 
            $design_services = [
                [
                    'title' => 'Logo Design',
                    'description' => 'Memorable logos that represent your brand identity',
                    'icon' => 'star'
                ],
                [
                    'title' => 'Brand Identity',
                    'description' => 'Complete branding packages with style guides',
                    'icon' => 'eye'
                ],
                [
                    'title' => 'Print Design',
                    'description' => 'Brochures, flyers, business cards, and more',
                    'icon' => 'print'
                ],
                [
                    'title' => 'Digital Graphics',
                    'description' => 'Social media graphics and web banners',
                    'icon' => 'mobile-alt'
                ],
                [
                    'title' => 'UI/UX Design',
                    'description' => 'User interface and experience design',
                    'icon' => 'desktop'
                ],
                [
                    'title' => 'Marketing Materials',
                    'description' => 'Promotional materials and advertisements',
                    'icon' => 'bullhorn'
                ]
            ];
            
            foreach ($design_services as $design_service): ?>
                <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow animate-on-scroll">
                    <div class="w-12 h-12 gradient-bg rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-<?php echo $design_service['icon']; ?> text-white"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2"><?php echo $design_service['title']; ?></h3>
                    <p class="text-gray-600"><?php echo $design_service['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Design Process -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Design Process</h2>
            <p class="text-xl text-gray-600">From concept to completion, we ensure every detail is perfect</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-xl">1</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Brief</h3>
                <p class="text-gray-600">Understanding your vision and requirements</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-xl">2</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Research</h3>
                <p class="text-gray-600">Analyzing market trends and competition</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-xl">3</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Concept</h3>
                <p class="text-gray-600">Developing initial design concepts</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-xl">4</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Refine</h3>
                <p class="text-gray-600">Perfecting the chosen design direction</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-xl">5</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Deliver</h3>
                <p class="text-gray-600">Final files in all required formats</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Preview -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Recent Design Work</h2>
            <p class="text-xl text-gray-600">Take a look at some of our latest design projects</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow animate-on-scroll">
                <div class="h-48 bg-gradient-to-br from-blue-400 to-purple-600 flex items-center justify-center">
                    <i class="fas fa-image text-white text-4xl opacity-50"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Brand Identity Package</h3>
                    <p class="text-gray-600">Complete rebranding for tech startup</p>
                </div>
            </div>
            
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow animate-on-scroll">
                <div class="h-48 bg-gradient-to-br from-green-400 to-blue-600 flex items-center justify-center">
                    <i class="fas fa-image text-white text-4xl opacity-50"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Marketing Materials</h3>
                    <p class="text-gray-600">Print and digital marketing suite</p>
                </div>
            </div>
            
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow animate-on-scroll">
                <div class="h-48 bg-gradient-to-br from-pink-400 to-red-600 flex items-center justify-center">
                    <i class="fas fa-image text-white text-4xl opacity-50"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">UI/UX Design</h3>
                    <p class="text-gray-600">Mobile app interface design</p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="/portfolio" 
               class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-3 rounded-full hover:from-blue-700 hover:to-purple-700 transition-all font-semibold">
                View Full Portfolio
            </a>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 gradient-bg text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center animate-on-scroll">
        <h2 class="text-4xl font-bold mb-6">Ready to Create Something Amazing?</h2>
        <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
            Let's bring your creative vision to life with professional graphic design
        </p>
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
            <a href="/contact.php?service=graphic-design" 
               class="bg-white text-purple-600 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all">
                Start Your Design
            </a>
            <a href="/portfolio.php" 
               class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition-all">
                View Our Work
            </a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>