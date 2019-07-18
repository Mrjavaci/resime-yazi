<?php

// İçerik türünü belirtelim
header('Content-type: image/png');

// Resmi boş olarak oluşturalım
$resim = imagecreatetruecolor(2110, 350);

// Renkleri tanımlayalım
$beyaz = imagecolorallocate($resim, 255, 255, 255);
$gri = imagecolorallocate($resim, 128, 128, 128);
$siyah = imagecolorallocate($resim, 0, 0, 0);
imagefilledrectangle($resim, 0, 0, 2110, 350, $beyaz);

// Metni tanımlayalım
$metin = $_GET["t"];
// Buraya kendi dosya yolunuzu yazın
$font = 'Pacifico-Regular.ttf';

// Metne gölge verelim
//imagettftext($resim, 20, 0, 11, 21, $gri, $font, $metin);
imagettftext($resim, 50, 0, 748, 198, $gri, $font, $metin);

// Metni ekleyelim kullanımı-> imagettftext ( resource $resim , float $boyut , float $açı , int $x , int $y , int $renk , string $yazıtipi , string $metin )
imagettftext($resim, 50, 0, 750, 200, $siyah, $font, $metin);

// imagejpeg()'ye göre daha temiz sonuç veren imagepng()'yi kullanalım
imagepng($resim);
imagedestroy($resim);

?>