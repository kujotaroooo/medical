<?php
include 'qrlib.php';  // Include the library

// Text or URL you want to encode
$text = "S";

// Optional: filename to save the QR code image
$filename = 'qrcode.png';

// Generate the QR code
QRcode::png($text, $filename, QR_ECLEVEL_L, 6);

// Output message
echo "QR code generated! <br>";
echo "<img src='$filename' />";
?>