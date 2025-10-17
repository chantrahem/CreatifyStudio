<?php
$page_title = "Portfolio";
$meta_description = "View our portfolio of successful web development, graphic design, and digital solutions. See examples of our work and client success stories.";
include 'includes/header.php';
?>

<!-- Portfolio Hero -->
<section class="gradient-bg py-20 text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center animate-on-scroll">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Our Portfolio</h1>
            <p class="text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto">
                Discover our latest projects and see how we've helped businesses succeed online
            </p>
        </div>
    </div>
</section>

<!-- Portfolio Filter -->
<section class="py-12 bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-4">
            <button class="filter-btn active px-6 py-3 rounded-full font-semibold transition-all" data-filter="all">
                All Projects
            </button>
            <button class="filter-btn px-6 py-3 rounded-full font-semibold transition-all" data-filter="web-development">
                Web Development
            </button>
            <button class="filter-btn px-6 py-3 rounded-full font-semibold transition-all" data-filter="graphic-design">
                Graphic Design
            </button>
            <button class="filter-btn px-6 py-3 rounded-full font-semibold transition-all" data-filter="domain-hosting">
                Hosting Solutions
            </button>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolio-grid">
            
            <!-- E-commerce Project -->
            <div class="portfolio-item animate-on-scroll" data-category="web-development">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all group">
                    <div class="h-64 bg-gradient-to-br from-blue-400 to-purple-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="text-center text-white">
                                <i class="fas fa-external-link-alt text-2xl mb-2"></i>
                                <p class="font-semibold">View Project</p>
                            </div>
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-white bg-opacity-90 text-purple-600 px-3 py-1 rounded-full text-sm font-semibold">
                                E-commerce
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">StyleHub Fashion Store</h3>
                        <p class="text-gray-600 mb-4">Modern e-commerce platform with advanced inventory management, payment integration, and responsive design.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">PHP</span>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">Laravel</span>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">MySQL</span>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">Stripe</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Client: StyleHub</span>
                            <a href="#" class="text-purple-600 hover:text-purple-700 font-semibold">
                                View Details <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Restaurant Branding -->
            <div class="portfolio-item animate-on-scroll" data-category="graphic-design">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all group">
                    <div class="h-64 bg-gradient-to-br from-orange-400 to-red-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="text-center text-white">
                                <i class="fas fa-external-link-alt text-2xl mb-2"></i>
                                <p class="font-semibold">View Project</p>
                            </div>
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-white bg-opacity-90 text-red-600 px-3 py-1 rounded-full text-sm font-semibold">
                                Branding
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Bella Vista Restaurant</h3>
                        <p class="text-gray-600 mb-4">Complete brand identity package including logo design, menu layouts, and marketing materials.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-orange-100 text-orange-800 px-2 py-1 rounded text-sm">Illustrator</span>
                            <span class="bg-orange-100 text-orange-800 px-2 py-1 rounded text-sm">Photoshop</span>
                            <span class="bg-orange-100 text-orange-800 px-2 py-1 rounded text-sm">InDesign</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Client: Bella Vista</span>
                            <a href="#" class="text-purple-600 hover:text-purple-700 font-semibold">
                                View Details <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Corporate Website -->
            <div class="portfolio-item animate-on-scroll" data-category="web-development">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all group">
                    <div class="h-64 bg-gradient-to-br from-green-400 to-blue-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="text-center text-white">
                                <i class="fas fa-external-link-alt text-2xl mb-2"></i>
                                <p class="font-semibold">View Project</p>
                            </div>
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-white bg-opacity-90 text-blue-600 px-3 py-1 rounded-full text-sm font-semibold">
                                Corporate
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">InnovateTech Solutions</h3>
                        <p class="text-gray-600 mb-4">Professional corporate website with custom CMS, client portal, and integrated documentation system.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm">WordPress</span>
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm">Custom PHP</span>
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm">JavaScript</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Client: InnovateTech</span>
                            <a href="#" class="text-purple-600 hover:text-purple-700 font-semibold">
                                View Details <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Mobile App Design -->
            <div class="portfolio-item animate-on-scroll" data-category="graphic-design">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all group">
                    <div class="h-64 bg-gradient-to-br from-purple-400 to-pink-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="text-center text-white">
                                <i class="fas fa-external-link-alt text-2xl mb-2"></i>
                                <p class="font-semibold">View Project</p>
                            </div>
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-white bg-opacity-90 text-pink-600 px-3 py-1 rounded-full text-sm font-semibold">
                                UI/UX
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">FitTracker Mobile App</h3>
                        <p class="text-gray-600 mb-4">Complete UI/UX design for fitness tracking mobile application with modern interface and user flow.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-sm">Figma</span>
                            <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-sm">Sketch</span>
                            <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-sm">Prototyping</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Client: FitTracker Inc.</span>
                            <a href="#" class="text-purple-600 hover:text-purple-700 font-semibold">
                                View Details <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Hosting Solution -->
            <div class="portfolio-item animate-on-scroll" data-category="domain-hosting">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all group">
                    <div class="h-64 bg-gradient-to-br from-cyan-400 to-blue-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="text-center text-white">
                                <i class="fas fa-external-link-alt text-2xl mb-2"></i>
                                <p class="font-semibold">View Project</p>
                            </div>
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-white bg-opacity-90 text-cyan-600 px-3 py-1 rounded-full text-sm font-semibold">
                                Hosting
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">EduLearn Platform</h3>
                        <p class="text-gray-600 mb-4">High-performance hosting solution for online learning platform serving 10,000+ students globally.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-cyan-100 text-cyan-800 px-2 py-1 rounded text-sm">VPS Hosting</span>
                            <span class="bg-cyan-100 text-cyan-800 px-2 py-1 rounded text-sm">CDN</span>
                            <span class="bg-cyan-100 text-cyan-800 px-2 py-1 rounded text-sm">SSL</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Client: EduLearn</span>
                            <a href="#" class="text-purple-600 hover:text-purple-700 font-semibold">
                                View Details <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Startup Website -->
            <div class="portfolio-item animate-on-scroll" data-category="web-development">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all group">
                    <div class="h-64 bg-gradient-to-br from-yellow-400 to-orange-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="text-center text-white">
                                <i class="fas fa-external-link-alt text-2xl mb-2"></i>
                                <p class="font-semibold">View Project</p>
                            </div>
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-white bg-opacity-90 text-orange-600 px-3 py-1 rounded-full text-sm font-semibold">
                                Startup
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">TechStart Landing</h3>
                        <p class="text-gray-600 mb-4">Modern startup landing page with lead generation, analytics integration, and conversion optimization.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-sm">React</span>
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-sm">Node.js</span>
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-sm">MongoDB</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Client: TechStart</span>
                            <a href="#" class="text-purple-600 hover:text-purple-700 font-semibold">
                                View Details <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-3 rounded-full hover:from-blue-700 hover:to-purple-700 transition-all font-semibold">
                Load More Projects
            </button>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Project Process</h2>
            <p class="text-xl text-gray-600">How we deliver exceptional results for every client</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-lightbulb text-white text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Discovery</h3>
                <p class="text-gray-600">We understand your goals, analyze your market, and define project requirements.</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-pencil-ruler text-white text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Design</h3>
                <p class="text-gray-600">Creating wireframes, mockups, and prototypes that align with your vision.</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-code text-white text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Development</h3>
                <p class="text-gray-600">Building robust, scalable solutions using best practices and modern technologies.</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-rocket text-white text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Launch</h3>
                <p class="text-gray-600">Deploying your project and providing ongoing support for continued success.</p>
            </div>
        </div>
    </div>
</section>

<!-- Client Success Stories -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Success Stories</h2>
            <p class="text-xl text-gray-600">Real results for real businesses</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center animate-on-scroll">
                <div class="text-4xl font-bold text-gradient mb-2">300%</div>
                <p class="text-gray-900 font-semibold mb-1">Increase in Online Sales</p>
                <p class="text-sm text-gray-600">StyleHub Fashion Store</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="text-4xl font-bold text-gradient mb-2">50%</div>
                <p class="text-gray-900 font-semibold mb-1">Reduction in Load Time</p>
                <p class="text-sm text-gray-600">InnovateTech Solutions</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="text-4xl font-bold text-gradient mb-2">95%</div>
                <p class="text-gray-900 font-semibold mb-1">Uptime Achievement</p>
                <p class="text-sm text-gray-600">EduLearn Platform</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 gradient-bg text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center animate-on-scroll">
        <h2 class="text-4xl font-bold mb-6">Ready to Start Your Project?</h2>
        <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
            Join our satisfied clients and let us help you achieve your digital goals
        </p>
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
            <a href="/contact" 
               class="bg-white text-purple-600 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all">
                Start Your Project
            </a>
            <a href="/contact" 
               class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition-all">
                Get Free Quote
            </a>
        </div>
    </div>
</section>

<script>
// Portfolio filtering functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    // Filter button styles
    function updateFilterButtons(activeButton) {
        filterButtons.forEach(btn => {
            if (btn === activeButton) {
                btn.classList.add('active', 'bg-gradient-to-r', 'from-blue-600', 'to-purple-600', 'text-white');
                btn.classList.remove('bg-gray-100', 'text-gray-700');
            } else {
                btn.classList.remove('active', 'bg-gradient-to-r', 'from-blue-600', 'to-purple-600', 'text-white');
                btn.classList.add('bg-gray-100', 'text-gray-700');
            }
        });
    }
    
    // Initialize button styles
    filterButtons.forEach(btn => {
        if (btn.classList.contains('active')) {
            btn.classList.add('bg-gradient-to-r', 'from-blue-600', 'to-purple-600', 'text-white');
        } else {
            btn.classList.add('bg-gray-100', 'text-gray-700');
        }
    });
    
    // Filter functionality
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');
            updateFilterButtons(button);
            
            portfolioItems.forEach(item => {
                const category = item.getAttribute('data-category');
                
                if (filter === 'all' || category === filter) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, 100);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
});
</script>

<?php include 'includes/footer.php'; ?>