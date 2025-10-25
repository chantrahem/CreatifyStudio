    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <img src="/assets/images/favicon.ico" alt="QRMMS Logo" class="w-10 h-10">
                        <span class="text-xl font-bold"><?php echo SITE_NAME; ?></span>
                    </div>
                    <p class="text-gray-300 mb-4 max-w-md">
                        <?php echo SITE_TAGLINE; ?>. We help businesses grow with quality resource management, 
                        marketing solutions, and professional digital services.
                    </p>
                    <div class="flex space-x-4">
                        <a href="<?php echo SOCIAL_FACEBOOK; ?>" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="<?php echo SOCIAL_TWITTER; ?>" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="<?php echo SOCIAL_INSTAGRAM; ?>" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="<?php echo SOCIAL_LINKEDIN; ?>" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="<?php echo SOCIAL_GITHUB; ?>" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Services -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Services</h3>
                    <ul class="space-y-2">
                        <?php foreach ($services as $key => $service): ?>
                            <li>
                                <a href="/services/<?php echo $key; ?>.php" 
                                   class="text-gray-300 hover:text-white transition-colors">
                                    <?php echo $service['title']; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Info</h3>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-blue-400"></i>
                            <a href="mailto:<?php echo SITE_EMAIL; ?>" 
                               class="text-gray-300 hover:text-white transition-colors">
                                <?php echo SITE_EMAIL; ?>
                            </a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone text-blue-400"></i>
                            <a href="tel:<?php echo SITE_PHONE; ?>" 
                               class="text-gray-300 hover:text-white transition-colors">
                                <?php echo SITE_PHONE; ?>
                            </a>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-blue-400 mt-1"></i>
                            <span class="text-gray-300">
                                <?php echo COMPANY_ADDRESS; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Bottom Section -->
            <div class="border-t border-gray-800 mt-8 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-300 text-sm">
                        &copy; <?php echo date('Y'); ?> <?php echo COMPANY_NAME; ?>. All rights reserved.
                    </p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="/privacy-policy.php" class="text-gray-300 hover:text-white text-sm transition-colors">
                            Privacy Policy
                        </a>
                        <a href="/terms-of-service.php" class="text-gray-300 hover:text-white text-sm transition-colors">
                            Terms of Service
                        </a>
                        <a href="/sitemap.php" class="text-gray-300 hover:text-white text-sm transition-colors">
                            Sitemap
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- JavaScript -->
    <script src="/assets/js/main.js"></script>
    
    <!-- Mobile Menu Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Navigation background on scroll
            const navbar = document.getElementById('navbar');
            
            function updateNavbar() {
                if (window.scrollY > 50) {
                    navbar.classList.remove('nav-transparent');
                    navbar.classList.add('nav-scrolled', 'shadow-lg');
                } else {
                    navbar.classList.remove('nav-scrolled', 'shadow-lg');
                    navbar.classList.add('nav-transparent');
                }
            }
            
            // Initial check
            updateNavbar();
            
            // Listen for scroll events
            window.addEventListener('scroll', updateNavbar);
            
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            // Ensure menu starts hidden
            if (mobileMenu) {
                mobileMenu.style.display = 'none';
            }
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation(); // Prevent event bubbling
                    
                    
                    // Check current visibility
                    const isCurrentlyHidden = mobileMenu.style.display === 'none' || mobileMenu.classList.contains('mobile-hidden');
                    
                    if (isCurrentlyHidden) {
                        // Show menu
                        mobileMenu.style.display = 'block';
                        mobileMenu.classList.remove('mobile-hidden');
                    } else {
                        // Hide menu
                        mobileMenu.style.display = 'none';
                        mobileMenu.classList.add('mobile-hidden');
                    }
                });
            } else {
                console.error('Mobile menu elements not found');
            }
            
            // Close mobile menu when clicking outside (with delay to prevent immediate closing)
            setTimeout(() => {
                document.addEventListener('click', (e) => {
                    if (mobileMenu && mobileMenuButton && !mobileMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
                        if (mobileMenu.style.display !== 'none') {
                            mobileMenu.style.display = 'none';
                            mobileMenu.classList.add('mobile-hidden');
                        }
                    }
                });
            }, 100);
            
            // Mobile dropdown functionality
            const mobileDropdownButtons = document.querySelectorAll('.mobile-dropdown-btn');
            mobileDropdownButtons.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    const content = button.nextElementSibling;
                    const icon = button.querySelector('i');
                    
                    if (content && icon) {
                        content.classList.toggle('hidden');
                        icon.classList.toggle('rotate-180');
                    }
                });
            });
            
            // Close mobile menu when clicking on a link
            if (mobileMenu) {
                const mobileMenuLinks = mobileMenu.querySelectorAll('a:not(.mobile-dropdown-btn)');
                mobileMenuLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        mobileMenu.style.display = 'none';
                        mobileMenu.classList.add('mobile-hidden');
                    });
                });
            }
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
        
        // Add animation classes to elements when they come into view
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                }
            });
        }, observerOptions);
        
        // Observe all elements with the animate class
        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });
        
        // Back to top button
        const backToTopButton = document.createElement('button');
        backToTopButton.innerHTML = '<i class="fas fa-arrow-up"></i>';
        backToTopButton.className = 'fixed bottom-6 right-6 bg-gradient-to-r from-blue-600 to-purple-600 text-white p-3 rounded-full shadow-lg hover:from-blue-700 hover:to-purple-700 transition-all z-50 opacity-0 pointer-events-none';
        backToTopButton.id = 'back-to-top';
        document.body.appendChild(backToTopButton);
        
        // Show/hide back to top button
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'pointer-events-none');
                backToTopButton.classList.add('opacity-100');
            } else {
                backToTopButton.classList.add('opacity-0', 'pointer-events-none');
                backToTopButton.classList.remove('opacity-100');
            }
        });
        
        // Back to top functionality
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>
</html>