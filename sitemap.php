<?php 
$title = 'Sitemap - CreatifyStudio';
$page = 'sitemap';
include 'includes/config.php';
include 'includes/header.php'; 
?>

<!-- Header -->
<section class="bg-gradient-to-br from-purple-600 to-blue-600 text-white py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Sitemap</h1>
            <p class="text-xl text-purple-100">
                Navigate through all pages and sections of CreatifyStudio
            </p>
        </div>
    </div>
</section>

<!-- Sitemap Content -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Main Pages -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-purple-600 mb-4">Main Pages</h3>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-700 hover:text-purple-600 transition-colors">Home</a></li>
                        <li><a href="/about.php" class="text-gray-700 hover:text-purple-600 transition-colors">About Us</a></li>
                        <li><a href="/services.php" class="text-gray-700 hover:text-purple-600 transition-colors">Services</a></li>
                        <li><a href="/portfolio.php" class="text-gray-700 hover:text-purple-600 transition-colors">Portfolio</a></li>
                        <li><a href="/contact.php" class="text-gray-700 hover:text-purple-600 transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-purple-600 mb-4">Services</h3>
                    <ul class="space-y-2">
                        <?php foreach($services as $key => $service): ?>
                            <li>
                                <a href="/services/<?php echo $key; ?>.php" 
                                   class="text-gray-700 hover:text-purple-600 transition-colors">
                                    <?php echo $service['title']; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Company Info -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-purple-600 mb-4">Company</h3>
                    <ul class="space-y-2">
                        <li><a href="/privacy-policy.php" class="text-gray-700 hover:text-purple-600 transition-colors">Privacy Policy</a></li>
                        <li><a href="/terms-of-service.php" class="text-gray-700 hover:text-purple-600 transition-colors">Terms of Service</a></li>
                        <li><a href="/sitemap.php" class="text-gray-700 hover:text-purple-600 transition-colors">Sitemap</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="mt-12 bg-gray-50 p-8 rounded-lg">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Get In Touch</h3>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="bg-purple-600 text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Phone</h4>
                        <p class="text-gray-600">+855 69 71 21 21</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-purple-600 text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Email</h4>
                        <p class="text-gray-600">creatifystudio168@gmail.com</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-purple-600 text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Location</h4>
                        <p class="text-gray-600">Siem Reap<br>Kingdom of Cambodia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>