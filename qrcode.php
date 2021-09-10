<?php
require_once 'phpqrcode/qrlib.php';

$path = 'qrimages/';
$file = $path.uniqid().".png";

// text to output
$text = "Something";
$text .= "Someone";
$text .= "Somebody";

QRcode::png($text, $file);
// png($text, $file, ECC_LEVEL, Pixel_Size, Frame_Size)

echo "<img src='".$file."'>";
// echo $file;
// echo uniqid();
?>