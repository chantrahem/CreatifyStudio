<?php 
$title = 'Thank You - QRMMS';
$page = 'thank-you';
include 'includes/config.php';
include 'includes/header.php';

// Get parameters from URL
$status = $_GET['status'] ?? '';
$name = $_GET['name'] ?? 'there';
?>

<!-- Thank You Hero -->
<section class="bg-gradient-to-br from-green-500 to-blue-600 text-white py-20 min-h-screen flex items-center">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            
            <?php if ($status === 'success'): ?>
                <!-- Success Message -->
                <div class="animate-bounce mb-8">
                    <div class="bg-white bg-opacity-20 rounded-full w-24 h-24 mx-auto flex items-center justify-center mb-6">
                        <i class="fas fa-check text-4xl text-white"></i>
                    </div>
                </div>
                
                <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in">
                    Thank You, <?php echo htmlspecialchars($name); ?>!
                </h1>
                
                <p class="text-xl md:text-2xl text-green-100 mb-8 animate-fade-in-delay">
                    Your message has been sent successfully. We appreciate you reaching out to QRMMS!
                </p>
                
                <div class="bg-white bg-opacity-10 rounded-lg p-8 mb-12 animate-slide-up">
                    <h2 class="text-2xl font-semibold mb-4">What happens next?</h2>
                    <div class="grid md:grid-cols-3 gap-6 text-center">
                        <div class="space-y-3">
                            <div class="bg-white bg-opacity-20 rounded-full w-16 h-16 mx-auto flex items-center justify-center">
                                <i class="fas fa-envelope-open text-2xl"></i>
                            </div>
                            <h3 class="font-semibold">We Review</h3>
                            <p class="text-sm text-green-100">Our team will review your inquiry within 2-4 hours</p>
                        </div>
                        <div class="space-y-3">
                            <div class="bg-white bg-opacity-20 rounded-full w-16 h-16 mx-auto flex items-center justify-center">
                                <i class="fas fa-phone text-2xl"></i>
                            </div>
                            <h3 class="font-semibold">We Contact You</h3>
                            <p class="text-sm text-green-100">We'll reach out via email or phone within 24 hours</p>
                        </div>
                        <div class="space-y-3">
                            <div class="bg-white bg-opacity-20 rounded-full w-16 h-16 mx-auto flex items-center justify-center">
                                <i class="fas fa-rocket text-2xl"></i>
                            </div>
                            <h3 class="font-semibold">We Start</h3>
                            <p class="text-sm text-green-100">Let's bring your vision to life together!</p>
                        </div>
                    </div>
                </div>
                
            <?php else: ?>
                <!-- Generic Thank You -->
                <div class="animate-bounce mb-8">
                    <div class="bg-white bg-opacity-20 rounded-full w-24 h-24 mx-auto flex items-center justify-center mb-6">
                        <i class="fas fa-heart text-4xl text-white"></i>
                    </div>
                </div>
                
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Thank You!</h1>
                <p class="text-xl md:text-2xl text-blue-100 mb-8">
                    We appreciate your interest in QRMMS.
                </p>
            <?php endif; ?>
            
            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6 mb-12">
                <a href="/" 
                   class="bg-white text-blue-600 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all transform hover:scale-105 inline-flex items-center">
                    <i class="fas fa-home mr-2"></i>
                    Back to Home
                </a>
                <a href="/portfolio.php" 
                   class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-blue-600 transition-all inline-flex items-center">
                    <i class="fas fa-eye mr-2"></i>
                    View Our Work
                </a>
            </div>
            
            <!-- Quick Contact Info -->
            <div class="bg-white bg-opacity-10 rounded-lg p-6 max-w-2xl mx-auto">
                <h3 class="text-xl font-semibold mb-4">Need immediate assistance?</h3>
                <div class="flex flex-col sm:flex-row justify-center items-center space-y-2 sm:space-y-0 sm:space-x-8">
                    <a href="tel:<?php echo SITE_PHONE; ?>" 
                       class="text-white hover:text-green-200 transition-colors inline-flex items-center">
                        <i class="fas fa-phone mr-2"></i>
                        <?php echo SITE_PHONE; ?>
                    </a>
                    <a href="mailto:<?php echo SITE_EMAIL; ?>" 
                       class="text-white hover:text-green-200 transition-colors inline-flex items-center">
                        <i class="fas fa-envelope mr-2"></i>
                        <?php echo SITE_EMAIL; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Optional: Recent Work Showcase -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">While You Wait, Check Out Our Recent Work</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Sample Portfolio Items -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:transform hover:scale-105 transition-all">
                    <div class="bg-gradient-to-br from-purple-500 to-blue-500 h-40 flex items-center justify-center">
                        <i class="fas fa-laptop-code text-white text-3xl"></i>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 mb-2">E-commerce Website</h3>
                        <p class="text-gray-600 text-sm">Modern online store with payment integration</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:transform hover:scale-105 transition-all">
                    <div class="bg-gradient-to-br from-green-500 to-teal-500 h-40 flex items-center justify-center">
                        <i class="fas fa-palette text-white text-3xl"></i>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 mb-2">Brand Identity</h3>
                        <p class="text-gray-600 text-sm">Complete branding package with logo design</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:transform hover:scale-105 transition-all">
                    <div class="bg-gradient-to-br from-orange-500 to-red-500 h-40 flex items-center justify-center">
                        <i class="fas fa-server text-white text-3xl"></i>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 mb-2">Web Hosting</h3>
                        <p class="text-gray-600 text-sm">Fast and reliable hosting solutions</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-8">
                <a href="/portfolio.php" 
                   class="bg-purple-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-purple-700 transition-colors inline-flex items-center">
                    <i class="fas fa-arrow-right mr-2"></i>
                    View Full Portfolio
                </a>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes fade-in {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes slide-up {
    from { opacity: 0; transform: translateY(40px); }
    to { opacity: 1; transform: translateY(0); }
}

.animate-fade-in {
    animation: fade-in 0.8s ease-out;
}

.animate-fade-in-delay {
    animation: fade-in 0.8s ease-out 0.3s both;
}

.animate-slide-up {
    animation: slide-up 1s ease-out 0.6s both;
}
</style>

<?php include 'includes/footer.php'; ?>