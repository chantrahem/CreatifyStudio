<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Free WiFi Password QR Code Generator | Instant Secure QR for Guests</title>
  <meta name="description" content="Generate a free QR code for your WiFi password. Instantly share secure WiFi access with guests, friends, or customers using our easy QR code generator. No app required!">
  <meta name="keywords" content="free wifi qr code, wifi password qr code, qr code generator, wifi sharing, guest wifi, secure wifi, qr code for wifi, instant wifi access">
  <meta property="og:title" content="Free WiFi Password QR Code Generator" />
  <meta property="og:description" content="Generate a free QR code for your WiFi password. Instantly share secure WiFi access with guests, friends, or customers using our easy QR code generator." />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="/assets/images/og-image.jpg" />
  <meta property="og:url" content="https://www.qrmms.com/qrcode/index.php" />
  <link href="/css/style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
</head>
<body>
<?php
$wifi_name = isset($_POST['wifi_name']) ? trim($_POST['wifi_name']) : 'Example';
$wifi_password = isset($_POST['wifi_password']) ? trim($_POST['wifi_password']) : '123456';
$qr_data = '';
if ($wifi_name !== '' && $wifi_password !== '') {
    $qr_data = 'WIFI:T:WPA;S:' . urlencode($wifi_name) . ';P:' . urlencode($wifi_password) . ';;';
}
?>
<div class="max-w-md mx-auto mt-12">
  <!-- Card 1: Generate Information -->
  <div class="bg-white rounded-2xl shadow-2xl overflow-hidden border border-gray-100 mb-8">
    <div class="p-8 flex flex-col items-center">
      <h2 class="text-2xl font-extrabold text-gray-900 mb-2 tracking-tight">WiFi QR Code Generator</h2>
      <p class="text-gray-500 mb-6 text-center">Easily share your WiFi with guests. Enter your network details and generate a QR code for instant access.</p>
      <form method="post" class="w-full mb-2">
        <div class="mb-4">
          <label for="wifi_name" class="block text-sm font-semibold text-gray-700 mb-2">WiFi Name (SSID)</label>
          <input type="text" id="wifi_name" name="wifi_name" value="<?php echo htmlspecialchars($wifi_name); ?>" required class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50 text-gray-900 placeholder-gray-400 transition" placeholder="Enter WiFi name" />
        </div>
        <div class="mb-4">
          <label for="wifi_password" class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
          <input type="text" id="wifi_password" name="wifi_password" value="<?php echo htmlspecialchars($wifi_password); ?>" required class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50 text-gray-900 placeholder-gray-400 transition" placeholder="Enter password" />
        </div>
        <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-2 rounded-xl font-bold shadow hover:from-blue-700 hover:to-purple-700 transition">Generate QR Code</button>
      </form>
      <p class="text-xs text-gray-500 mb-2 text-center">Hint: Replace the example WiFi name and password above with your own credentials before generating your QR code.</p>
    </div>
  </div>

  <!-- Card 2: QR Code and Info -->
  <div id="wifi-card" class="bg-white rounded-2xl shadow-2xl overflow-hidden border border-gray-100 mt-32">
    <div class="p-8 flex flex-col items-center bg-white rounded-2xl" style="box-shadow: 0 8px 32px rgba(60,60,120,0.12);">
      <div class="flex flex-col items-center gap-2 mb-6">
        <span class="block text-lg font-bold text-blue-600 mb-2 tracking-wide">SCAN TO CONNECT WIFI</span>
        <div id="qrcode" class="rounded-xl border border-gray-200 shadow-lg bg-white" style="width: 220px; height: 220px;"></div>
        <span class="text-xs text-gray-400">Scan with your phone to connect</span>
      </div>
      <div class="w-full bg-white rounded-xl p-4 text-center border border-blue-100">
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
  <div class="flex flex-col items-center pb-8">
    <button id="download-card-btn" type="button" class="w-full max-w-md bg-gradient-to-r from-green-500 to-blue-600 text-white py-2 rounded-xl font-bold shadow hover:from-green-600 hover:to-blue-700 transition text-center">Download Card as PDF</button>
    <a href="/" class="inline-flex items-center mt-4 bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-2 rounded-full font-semibold shadow hover:from-purple-700 hover:to-blue-700 transition focus:outline-none focus:ring-2 focus:ring-blue-500 justify-center" aria-label="Explore More Digital Solutions">
      <i class="fas fa-arrow-left mr-2" aria-hidden="true"></i>
      Explore More Digital Solutions
    </a>
    <br>
    <br>
  </div>
</div>
<script>
  // Generate QR code using QRCode.js
  function generateQRCode() {
    var qrData = 'WIFI:T:WPA;S:' + encodeURIComponent('<?php echo $wifi_name; ?>') + ';P:' + encodeURIComponent('<?php echo $wifi_password; ?>') + ';;';
    var qrcode = new QRCode(document.getElementById("qrcode"), {
      text: qrData,
      width: 220,
      height: 220,
      colorDark : "#000000",
      colorLight : "#ffffff",
      correctLevel : QRCode.CorrectLevel.H
    });
  }

  document.getElementById('download-card-btn').addEventListener('click', function() {
    var card = document.getElementById('wifi-card');
    if (!card) {
      alert('Card element not found.');
      return;
    }
    html2canvas(card, {backgroundColor: '#fff'}).then(function(canvas) {
      var imgData = canvas.toDataURL('image/jpeg', 1.0);
      var pdf = new window.jspdf.jsPDF({orientation: 'portrait', unit: 'px', format: [canvas.width, canvas.height]});
      pdf.addImage(imgData, 'JPEG', 0, 0, canvas.width, canvas.height);
      pdf.save('wifi-card.pdf');
    });
  });

  // Call generateQRCode on page load
  window.onload = function() {
    generateQRCode();
  };
</script>
<!-- Favicon fallback if needed -->
<link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
</body>
</html>