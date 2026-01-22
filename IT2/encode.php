<?php 
$txt = "Hello Worlg!";
echo chr(70) . "<br>"; // Decimal value
echo "ตัวอักษรปกติยังไม่มีการเข้ารหัส = ".$txt."<br>";
$enc_md5 = md5($txt);
echo "ตัวอักษรที่เข้ารหัสแบบ md5 = ".$enc_md5."<br>";
$enc_txt = base64_encode($txt);
echo "ตัวอักษรที่เข้ารหัสแบบ base64 = ".$enc_txt."<br>";
$dec_txt = base64_decode($enc_txt);
echo "ตัวอักษรที่เข้ารหัสแบบ base64 = ".$dec_txt."<br>";
?>