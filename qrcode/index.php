<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Free QR Code Generator | WiFi & URL QR Codes</title>
  <meta name="description" content="Generate free QR codes for WiFi passwords and URLs. Instantly share secure WiFi access or website links with guests, friends, or customers using our easy QR code generator.">
  <meta name="keywords" content="free qr code, wifi qr code, url qr code, qr code generator, wifi sharing, link sharing, secure wifi, instant access">
  <meta property="og:title" content="Free QR Code Generator - WiFi & URL" />
  <meta property="og:description" content="Generate free QR codes for WiFi passwords and URLs. Easy, fast, and secure QR code generation." />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="/assets/images/og-image.jpg" />
  <meta property="og:url" content="https://www.posbychem.com/qrcode/index.php" />
  <link href="/css/style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
</head>
<body>
<?php
$qr_type = isset($_POST['qr_type']) ? $_POST['qr_type'] : 'wifi';
$wifi_name = isset($_POST['wifi_name']) ? trim($_POST['wifi_name']) : 'Example';
$wifi_password = isset($_POST['wifi_password']) ? trim($_POST['wifi_password']) : '123456';
$url = isset($_POST['url']) ? trim($_POST['url']) : 'https://example.com';
$url_caption = isset($_POST['url_caption']) ? trim($_POST['url_caption']) : 'SCAN ME WITH YOUR PHONE';
$url_description = isset($_POST['url_description']) ? trim($_POST['url_description']) : '';
$url_short_link = isset($_POST['url_short_link']) ? trim($_POST['url_short_link']) : '';
$qr_data = '';
if ($qr_type === 'wifi' && $wifi_name !== '' && $wifi_password !== '') {
    $qr_data = 'WIFI:T:WPA;S:' . urlencode($wifi_name) . ';P:' . urlencode($wifi_password) . ';;';
} elseif ($qr_type === 'url' && $url !== '') {
    $qr_data = $url;
}
?>
<div class="max-w-md mx-auto mt-12">
  <!-- Card 1: Generate Information -->
  <div class="bg-white rounded-2xl shadow-2xl overflow-hidden border border-gray-100 mb-8">
    <div class="p-8 flex flex-col items-center">
      <h2 class="text-2xl font-extrabold text-gray-900 mb-2 tracking-tight">QR Code Generator</h2>
      <p class="text-gray-500 mb-6 text-center">Create QR codes for WiFi or URLs. Choose your type and generate instantly.</p>
      
      <!-- Tab Navigation -->
      <div class="relative w-full mb-6 bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl p-1.5 border border-blue-100">
        <div class="flex gap-2">
          <button type="button" id="wifi-tab" class="relative flex-1 py-3 px-4 rounded-xl font-semibold transition-all duration-300 bg-white text-blue-600 shadow-md z-10">
            <svg class="w-5 h-5 inline-block mr-2 mb-1" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
              <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
            </svg>
            <span class="relative">WiFi</span>
          </button>
          <button type="button" id="url-tab" class="relative flex-1 py-3 px-4 rounded-xl font-semibold transition-all duration-300 text-gray-600 hover:text-gray-900 hover:bg-white/50">
            <svg class="w-5 h-5 inline-block mr-2 mb-1" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"></path>
            </svg>
            <span class="relative">URL</span>
          </button>
        </div>
      </div>

      <!-- WiFi Form -->
      <form method="post" id="wifi-form" class="w-full mb-2">
        <input type="hidden" name="qr_type" value="wifi">
        <div class="mb-4">
          <label for="wifi_name" class="block text-sm font-semibold text-gray-700 mb-2">WiFi Name (SSID)</label>
          <input type="text" id="wifi_name" name="wifi_name" value="<?php echo htmlspecialchars($wifi_name); ?>" required class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50 text-gray-900 placeholder-gray-400 transition" placeholder="Enter WiFi name" />
        </div>
        <div class="mb-4">
          <label for="wifi_password" class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
          <input type="text" id="wifi_password" name="wifi_password" value="<?php echo htmlspecialchars($wifi_password); ?>" required class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50 text-gray-900 placeholder-gray-400 transition" placeholder="Enter password" />
        </div>
        <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-2 rounded-xl font-bold shadow hover:from-blue-700 hover:to-purple-700 transition">Generate WiFi QR Code</button>
        <p class="text-xs text-gray-500 mt-2 text-center">Enter your WiFi credentials to generate a scannable QR code.</p>
      </form>

      <!-- URL Form -->
      <form method="post" id="url-form" class="w-full mb-2 hidden">
        <input type="hidden" name="qr_type" value="url">
        <div class="mb-4">
          <label for="url_caption" class="block text-sm font-semibold text-gray-700 mb-2">
            Custom Caption <span class="text-xs font-normal text-gray-500">(displays above QR code)</span>
          </label>
          <input type="text" id="url_caption" name="url_caption" value="<?php echo htmlspecialchars($url_caption); ?>" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50 text-gray-900 placeholder-gray-400 transition" placeholder="e.g., SCAN ME WITH YOUR PHONE, ARE YOU HAPPY?, JOIN OUR WIFI" />
          <p class="text-xs text-gray-500 mt-1">💡 Customize this text to match your needs</p>
        </div>
        <div class="mb-4">
          <label for="url_description" class="block text-sm font-semibold text-gray-700 mb-2">Description (Optional)</label>
          <textarea id="url_description" name="url_description" rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50 text-gray-900 placeholder-gray-400 transition resize-none" placeholder="e.g., Visit our website for more information"><?php echo htmlspecialchars($url_description); ?></textarea>
        </div>
        <div class="mb-4">
          <label for="url" class="block text-sm font-semibold text-gray-700 mb-2">Website URL</label>
          <input type="url" id="url" name="url" value="<?php echo htmlspecialchars($url); ?>" required class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50 text-gray-900 placeholder-gray-400 transition" placeholder="https://example.com" />
        </div>
        <div class="mb-4">
          <label for="url_short_link" class="block text-sm font-semibold text-gray-700 mb-2">Short Link Text (Optional)</label>
          <input type="text" id="url_short_link" name="url_short_link" value="<?php echo htmlspecialchars($url_short_link); ?>" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50 text-gray-900 placeholder-gray-400 transition" placeholder="e.g., vt.mk/yourlink or example.com/short" />
        </div>
        <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-2 rounded-xl font-bold shadow hover:from-blue-700 hover:to-purple-700 transition">Generate URL QR Code</button>
        <p class="text-xs text-gray-500 mt-2 text-center">Customize your QR code with a caption and description.</p>
      </form>
    </div>
  </div>

  <!-- Card 2: QR Code and Info -->
  <div id="qr-card" class="bg-white rounded-2xl shadow-2xl overflow-hidden border border-gray-100 mt-32">
    <div class="p-8 flex flex-col items-center bg-white rounded-2xl" style="box-shadow: 0 8px 32px rgba(60,60,120,0.12);">
      <div class="flex flex-col items-center gap-2 mb-6">
        <span id="qr-title" class="block text-lg font-bold text-blue-600 mb-2 tracking-wide text-center px-4">
          <?php echo $qr_type === 'wifi' ? 'SCAN TO CONNECT WIFI' : htmlspecialchars($url_caption); ?>
        </span>
        <?php if ($qr_type === 'url' && $url_description !== ''): ?>
        <p id="qr-description" class="text-sm text-gray-600 text-center px-4 mb-2"><?php echo nl2br(htmlspecialchars($url_description)); ?></p>
        <?php endif; ?>
        <div id="qrcode" class="rounded-xl border border-gray-200 shadow-lg bg-white" style="width: 220px; height: 220px;"></div>
        <span class="text-xs text-gray-400">Scan with your phone</span>
        <?php if ($qr_type === 'url' && $url_short_link !== ''): ?>
        <div id="qr-short-link" class="mt-2 text-center">
          <span class="text-xs text-gray-500 block mb-1">OR USE THIS SHORT LINK:</span>
          <div class="text-sm font-mono text-blue-600 font-semibold"><?php echo htmlspecialchars($url_short_link); ?></div>
        </div>
        <?php endif; ?>
      </div>
      
      <!-- WiFi Info -->
      <div id="wifi-info" class="w-full bg-white rounded-xl p-4 text-center border border-blue-100 <?php echo $qr_type !== 'wifi' ? 'hidden' : ''; ?>">
        <div class="mb-2">
          <span class="font-semibold text-gray-700">WiFi Name:</span>
          <span class="text-blue-700 font-mono"><?php echo htmlspecialchars($wifi_name); ?></span>
        </div>
        <div>
          <span class="font-semibold text-gray-700">Password:</span>
          <span class="text-blue-700 font-mono"><?php echo htmlspecialchars($wifi_password); ?></span>
        </div>
      </div>
    </div>
  </div>
  <div class="h-12"></div>
  <div class="flex flex-col items-center pb-8 gap-4">
    <!-- Download Buttons -->
    <div class="w-full max-w-md bg-white rounded-2xl p-6 border-2 border-gray-200 shadow-lg">
      <h3 class="text-xl font-bold text-gray-900 mb-5 text-center flex items-center justify-center gap-2">
        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
        </svg>
        Download Your QR Code
      </h3>
      <div class="flex flex-col gap-3">
        <button id="download-image-btn" type="button" class="w-full py-4 px-6 rounded-xl font-bold shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300 transform group" style="background: linear-gradient(135deg, #8b5cf6 0%, #ec4899 50%, #f43f5e 100%);">
          <div class="flex items-center justify-center mb-1">
            <svg class="w-7 h-7 mr-3 group-hover:scale-110 transition-transform" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <span class="text-xl font-extrabold tracking-wide text-white" style="text-shadow: 0 2px 4px rgba(0,0,0,0.3);">Download as Image</span>
          </div>
          <span class="text-sm font-semibold block text-white" style="text-shadow: 0 1px 2px rgba(0,0,0,0.2);">High-quality PNG format</span>
        </button>
        <button id="download-card-btn" type="button" class="w-full py-4 px-6 rounded-xl font-bold shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300 transform group" style="background: linear-gradient(135deg, #10b981 0%, #14b8a6 50%, #06b6d4 100%);">
          <div class="flex items-center justify-center mb-1">
            <svg class="w-7 h-7 mr-3 group-hover:scale-110 transition-transform" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
            </svg>
            <span class="text-xl font-extrabold tracking-wide text-white" style="text-shadow: 0 2px 4px rgba(0,0,0,0.3);">Download as PDF</span>
          </div>
          <span class="text-sm font-semibold block text-white" style="text-shadow: 0 1px 2px rgba(0,0,0,0.2);">Print-ready document</span>
        </button>
      </div>
    </div>
    <a href="/" class="inline-flex items-center mt-2 bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-2 rounded-full font-semibold shadow hover:from-purple-700 hover:to-blue-700 transition focus:outline-none focus:ring-2 focus:ring-blue-500 justify-center" aria-label="Explore More Digital Solutions">
      <i class="fas fa-arrow-left mr-2" aria-hidden="true"></i>
      Explore More Digital Solutions
    </a>
    <br>
    <br>
  </div>
</div>
<script>
  // Current QR type
  var currentQRType = '<?php echo $qr_type; ?>';
  var qrCodeInstance = null;

  // Tab switching functionality
  document.getElementById('wifi-tab').addEventListener('click', function() {
    switchTab('wifi');
  });

  document.getElementById('url-tab').addEventListener('click', function() {
    switchTab('url');
  });

  function switchTab(type) {
    var wifiTab = document.getElementById('wifi-tab');
    var urlTab = document.getElementById('url-tab');
    var wifiForm = document.getElementById('wifi-form');
    var urlForm = document.getElementById('url-form');

    if (type === 'wifi') {
      // Active WiFi tab
      wifiTab.className = 'relative flex-1 py-3 px-4 rounded-xl font-semibold transition-all duration-300 bg-white text-blue-600 shadow-md z-10';
      wifiTab.innerHTML = '<svg class="w-5 h-5 inline-block mr-2 mb-1" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg><span class="relative">WiFi</span>';
      // Inactive URL tab
      urlTab.className = 'relative flex-1 py-3 px-4 rounded-xl font-semibold transition-all duration-300 text-gray-600 hover:text-gray-900 hover:bg-white/50';
      urlTab.innerHTML = '<svg class="w-5 h-5 inline-block mr-2 mb-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"></path></svg><span class="relative">URL</span>';
      wifiForm.classList.remove('hidden');
      urlForm.classList.add('hidden');
    } else {
      // Active URL tab
      urlTab.className = 'relative flex-1 py-3 px-4 rounded-xl font-semibold transition-all duration-300 bg-white text-blue-600 shadow-md z-10';
      urlTab.innerHTML = '<svg class="w-5 h-5 inline-block mr-2 mb-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"></path></svg><span class="relative">URL</span>';
      // Inactive WiFi tab
      wifiTab.className = 'relative flex-1 py-3 px-4 rounded-xl font-semibold transition-all duration-300 text-gray-600 hover:text-gray-900 hover:bg-white/50';
      wifiTab.innerHTML = '<svg class="w-5 h-5 inline-block mr-2 mb-1" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg><span class="relative">WiFi</span>';
      urlForm.classList.remove('hidden');
      wifiForm.classList.add('hidden');
    }
  }

  // Generate QR code
  function generateQRCode() {
    var qrCodeDiv = document.getElementById("qrcode");
    qrCodeDiv.innerHTML = ''; // Clear existing QR code
    
    var qrData;
    if (currentQRType === 'wifi') {
      qrData = 'WIFI:T:WPA;S:' + encodeURIComponent('<?php echo $wifi_name; ?>') + ';P:' + encodeURIComponent('<?php echo $wifi_password; ?>') + ';;';
    } else {
      qrData = '<?php echo addslashes($url); ?>';
    }
    
    qrCodeInstance = new QRCode(qrCodeDiv, {
      text: qrData,
      width: 220,
      height: 220,
      colorDark : "#000000",
      colorLight : "#ffffff",
      correctLevel : QRCode.CorrectLevel.H
    });
  }

  // Download PDF functionality
  document.getElementById('download-card-btn').addEventListener('click', function() {
    var card = document.getElementById('qr-card');
    if (!card) {
      alert('Card element not found.');
      return;
    }
    html2canvas(card, {backgroundColor: '#fff'}).then(function(canvas) {
      var imgData = canvas.toDataURL('image/jpeg', 1.0);
      var pdf = new window.jspdf.jsPDF({orientation: 'portrait', unit: 'px', format: [canvas.width, canvas.height]});
      pdf.addImage(imgData, 'JPEG', 0, 0, canvas.width, canvas.height);
      var filename = currentQRType === 'wifi' ? 'wifi-qr-code.pdf' : 'url-qr-code.pdf';
      pdf.save(filename);
    });
  });

  // Download Image functionality
  document.getElementById('download-image-btn').addEventListener('click', function() {
    var card = document.getElementById('qr-card');
    if (!card) {
      alert('Card element not found.');
      return;
    }
    html2canvas(card, {backgroundColor: '#fff', scale: 2}).then(function(canvas) {
      var link = document.createElement('a');
      var filename = currentQRType === 'wifi' ? 'wifi-qr-code.png' : 'url-qr-code.png';
      link.download = filename;
      link.href = canvas.toDataURL('image/png');
      link.click();
    });
  });

  // Initialize on page load
  window.onload = function() {
    // Set correct tab state
    if (currentQRType === 'url') {
      switchTab('url');
    } else {
      switchTab('wifi');
    }
    generateQRCode();
  };
</script>
<!-- Favicon fallback if needed -->
<link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
</body>
</html>