<?php
// no Array
$fruit1 = "banana";
$fruit2 = "apple";
$fruit3 = "orange";
$fruit4 = "grape";
$fruit5 = "mango";
echo "ผลไม้ที่ 1 ". $fruit1. "<br>";
echo "ผลไม้ที่ 2 ". $fruit2. "<br>";
echo "ผลไม้ที่ 3 ". $fruit3. "<br>";
echo "ผลไม้ที่ 4 ". $fruit4. "<br>";
echo "ผลไม้ที่ 5 ". $fruit5. "<br>";
// with array
$cars[]="Toyota";
$cars[]="Honda";
$cars[]="Nissan";
$cars[]="Mazde";
$cars[]="Ford";
$cars[]="BMW";
$cars[]="MacLaren";
echo "รถยนต์ยี่ห้อที่ 1 = ". $cars[0]. "<br>";
echo "รถยนต์ยี่ห้อที่ 5 = ". $cars[4]. "<br>";
echo "-------------For Loop fix----------------<br>";
for($i=0; $i<5; $i++){
    echo "รถยนต์ยี่ห้อที่ ".($i+1)." = ".$cars[$i]."<br>";

}
echo "จำนวนข้อมูลในอาเรย์ cars ทั้งหมด ".count($cars)."<br>";

echo "-------------For Loop Dynamic----------------<br>";
$i = 0;
while($i < count($cars)){
    echo "รถยนต์ยี่ห้อที่ ".($i+1)." = ".$cars[$i]."<br>";
    $i++;
}

?>