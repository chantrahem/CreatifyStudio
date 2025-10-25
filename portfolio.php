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
            <button class="filter-btn px-6 py-3 rounded-full font-semibold transition-all" data-filter="qr-menu-system">
                QR Menu System
            </button>
            <button class="filter-btn px-6 py-3 rounded-full font-semibold transition-all" data-filter="web-development">
                Web Development
            </button>
            <button class="filter-btn px-6 py-3 rounded-full font-semibold transition-all" data-filter="graphic-design">
                Graphic Design
            </button>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolio-grid">
            
            <?php foreach ($portfolio as $index => $project): ?>
            
            <!-- <?php echo htmlspecialchars($project['client']); ?> -->
            <div class="portfolio-item animate-on-scroll" data-category="<?php echo htmlspecialchars($project['category']); ?>">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all group">
                    <div class="h-64 relative overflow-hidden">
                        <img src="assets/images/<?php echo htmlspecialchars($project['image']); ?>" 
                             alt="<?php echo htmlspecialchars($project['client']); ?>" 
                             class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="text-center text-white">
                                <i class="fas fa-external-link-alt text-2xl mb-2"></i>
                                <p class="font-semibold">View Project</p>
                            </div>
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-white bg-opacity-90 text-gray-800 px-3 py-1 rounded-full text-xs font-semibold shadow-lg">
                                <?php echo htmlspecialchars($project['type']); ?>
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2"><?php echo htmlspecialchars($project['client']); ?></h3>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <?php 
                            $categoryBadges = [
                                'qr-menu-system' => ['label' => 'QR Menu System', 'color' => 'bg-green-100 text-green-800'],
                                'web-development' => ['label' => 'Web Development', 'color' => 'bg-blue-100 text-blue-800'],
                                'graphic-design' => ['label' => 'Graphic Design', 'color' => 'bg-purple-100 text-purple-800']
                            ];
                            $categories = explode(' ', $project['category']);
                            foreach ($categories as $cat):
                                $catInfo = isset($categoryBadges[$cat]) ? $categoryBadges[$cat] : ['label' => 'Other', 'color' => 'bg-gray-100 text-gray-800'];
                            ?>
                                <span class="<?php echo $catInfo['color']; ?> px-3 py-1 rounded text-sm font-medium">
                                    <?php echo $catInfo['label']; ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                        <div class="flex justify-center items-center">
                            <a href="<?php echo htmlspecialchars($project['url']); ?>" target="_blank" class="text-purple-600 hover:text-purple-700 font-semibold transition-colors">
                                View Project <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php endforeach; ?>
            
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
                const categories = item.getAttribute('data-category').split(' ');
                
                if (filter === 'all' || categories.includes(filter)) {
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