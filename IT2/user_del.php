<?php
// เชื่อมต่อฐานข้อมูล
require_once 'connectdb.php'; 
// ตรวจสอบว่ามีการส่งค่า del_id มาหรือไม่
if (isset($_GET['del_id'])) {
    $del_id = intval($_GET['del_id']); // รับค่า del_id และแปลงเป็นจำนวนเต็ม
    // คำสั่ง SQL ในการลบผู้ใช้ตาม user_id
    $sql_delete = "DELETE FROM users WHERE user_id = $del_id";
    if (mysqli_query($conn, $sql_delete)) {
        // หากลบสำเร็จ ให้กลับไปที่หน้ารายงานผู้ใช้
        header("Location: user_report.php");
        exit();
    } else {
        echo "ไม่สามารถลบข่อมูลได้ " . mysqli_error($conn);
    }
} else {
    echo "ไม่พบรหัสผู้ใช้ที่ต้องการลบ";
}
?>