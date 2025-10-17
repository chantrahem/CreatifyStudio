<?php
$page_title = "About Us";
$meta_description = "Learn about CreatifyStudio - a creative digital agency specializing in web development, graphic design, and hosting services. Meet our team and discover our story.";
include 'includes/header.php';
?>

<!-- About Hero -->
<section class="gradient-bg py-20 text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center animate-on-scroll">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">About CreatifyStudio</h1>
            <p class="text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto">
                We're passionate about creating digital solutions that help businesses thrive in the modern world
            </p>
        </div>
    </div>
</section>

<!-- Our Story -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="animate-on-scroll">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Story</h2>
                <p class="text-lg text-gray-600 mb-6">
                    Founded in <?php echo COMPANY_FOUNDED; ?>, CreatifyStudio began as a small team of passionate developers 
                    and designers with a simple mission: to help businesses succeed online with creative, 
                    effective digital solutions.
                </p>
                <p class="text-lg text-gray-600 mb-6">
                    What started as a local web development service has grown into a full-service digital agency, 
                    serving clients worldwide with comprehensive web development, graphic design, and hosting solutions.
                </p>
                <p class="text-lg text-gray-600">
                    Today, we're proud to have completed over 150+ successful projects, maintaining a 95% client 
                    satisfaction rate while continuing to innovate and adapt to the ever-evolving digital landscape.
                </p>
            </div>
            
            <div class="animate-on-scroll">
                <div class="bg-gradient-to-br from-blue-400 to-purple-600 rounded-2xl p-8 text-white">
                    <div class="text-center">
                        <i class="fas fa-rocket text-6xl mb-4 opacity-80"></i>
                        <h3 class="text-2xl font-bold mb-2">Innovation Driven</h3>
                        <p class="opacity-90">Constantly evolving to deliver cutting-edge solutions</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Values</h2>
            <p class="text-xl text-gray-600">The principles that guide everything we do</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-heart text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Client-First Approach</h3>
                <p class="text-gray-600">
                    We put our clients' success at the center of everything we do. Your goals become our mission, 
                    and we work tirelessly to exceed your expectations.
                </p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-gem text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Quality Excellence</h3>
                <p class="text-gray-600">
                    We believe in delivering nothing but the best. Every project undergoes rigorous quality 
                    checks to ensure it meets our high standards.
                </p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-lightbulb text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Innovation & Creativity</h3>
                <p class="text-gray-600">
                    We stay ahead of trends and embrace new technologies to deliver innovative solutions 
                    that give your business a competitive edge.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Meet Our Team</h2>
            <p class="text-xl text-gray-600">The talented people behind CreatifyStudio</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="text-center animate-on-scroll">
                <div class="w-32 h-32 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-user text-white text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Alex Johnson</h3>
                <p class="text-purple-600 font-semibold mb-3">Lead Developer</p>
                <p class="text-gray-600 mb-4">
                    Full-stack developer with 8+ years of experience in web technologies and a passion for clean, efficient code.
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-gray-400 hover:text-purple-600 transition-colors">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-purple-600 transition-colors">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-purple-600 transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
            
            <!-- Team Member 2 -->
            <div class="text-center animate-on-scroll">
                <div class="w-32 h-32 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-user text-white text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Sarah Martinez</h3>
                <p class="text-purple-600 font-semibold mb-3">Creative Director</p>
                <p class="text-gray-600 mb-4">
                    Award-winning designer specializing in brand identity and user experience with a keen eye for detail.
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-gray-400 hover:text-purple-600 transition-colors">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-purple-600 transition-colors">
                        <i class="fab fa-behance"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-purple-600 transition-colors">
                        <i class="fab fa-dribbble"></i>
                    </a>
                </div>
            </div>
            
            <!-- Team Member 3 -->
            <div class="text-center animate-on-scroll">
                <div class="w-32 h-32 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-user text-white text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Mike Thompson</h3>
                <p class="text-purple-600 font-semibold mb-3">Systems Administrator</p>
                <p class="text-gray-600 mb-4">
                    Infrastructure expert ensuring reliable hosting solutions and 24/7 system monitoring for optimal performance.
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-gray-400 hover:text-purple-600 transition-colors">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-purple-600 transition-colors">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-purple-600 transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">How We Work</h2>
            <p class="text-xl text-gray-600">Our proven process for delivering exceptional results</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-comments text-white text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">1. Consultation</h3>
                <p class="text-gray-600">We listen to your needs and understand your vision</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-clipboard-list text-white text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">2. Planning</h3>
                <p class="text-gray-600">Detailed project planning and strategy development</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-pencil-ruler text-white text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">3. Design</h3>
                <p class="text-gray-600">Creating mockups and prototypes for your approval</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-code text-white text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">4. Development</h3>
                <p class="text-gray-600">Building your solution with precision and care</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-rocket text-white text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">5. Launch</h3>
                <p class="text-gray-600">Deployment and ongoing support for your success</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Achievements</h2>
            <p class="text-xl text-gray-600">Numbers that speak to our commitment and success</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center animate-on-scroll">
                <div class="text-4xl font-bold text-gradient mb-2">150+</div>
                <p class="text-gray-600 font-semibold">Projects Completed</p>
                <p class="text-sm text-gray-500 mt-1">Successful deliveries across all services</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="text-4xl font-bold text-gradient mb-2">95%</div>
                <p class="text-gray-600 font-semibold">Client Satisfaction</p>
                <p class="text-sm text-gray-500 mt-1">Based on post-project surveys</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="text-4xl font-bold text-gradient mb-2">24/7</div>
                <p class="text-gray-600 font-semibold">Support Available</p>
                <p class="text-sm text-gray-500 mt-1">Round-the-clock assistance when needed</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="text-4xl font-bold text-gradient mb-2">5+</div>
                <p class="text-gray-600 font-semibold">Years Experience</p>
                <p class="text-sm text-gray-500 mt-1">Serving businesses worldwide</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 gradient-bg text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center animate-on-scroll">
        <h2 class="text-4xl font-bold mb-6">Ready to Work Together?</h2>
        <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
            Let's discuss how CreatifyStudio can help transform your digital presence
        </p>
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
            <a href="/contact.php" 
               class="bg-white text-purple-600 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all">
                Start a Project
            </a>
            <a href="/portfolio.php" 
               class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition-all">
                View Our Work
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>