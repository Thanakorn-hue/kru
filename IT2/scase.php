<?php
if (isset($_POST["month_number"])){
echo $_POST["month_number"]; //ตรวจค่าว่าถูกส่งมาหรือไม่
$month = $_POST["month_number"]; //ตัวอย่างแบบนำเข้าตัวแปรก่อนนำไปใช้
switch($_POST["month_number"]){
    case 1: 
        echo "มกราคม";
        break;
    case 2: 
        echo "กุมภาพันธ์";
        break;
    case 3: 
        echo "มีนาคม";
        break;
    case 4: 
        echo "เมษายน";
        break;
    case 5: 
        echo "พฤษภาคม";
        break;
    case 6: 
        echo "มิถุนายน";
        break;
    case 7: 
        echo "กรกฎาคม";
        break;
    case 8: 
        echo "สิงหาคม";
        break;
    case 9: 
        echo "กันยายน";
        break;
    case 10: 
        echo "ตุลาคม";
        break;
    case 11: 
        echo "พฤศจิกายน";
        break;
    case 12: 
        echo "ธันวาคม";
        break;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>โปรแกรมตรวจสอบเดือนตามตัวเลข ด้วย Switch...case</h1>
    <form action="" method="post">
    <div class="container my-5 w-50 p-4 border border-2 rounded-3">
        <div class="form-floating mb-3">
            <input type="number" min="1" max="12" name="month_number" placeholder="ป้อนเลขเดือน" class="form-control">
            <label for="floatingInput">ป้อนเลขเดือน</label>
        </div>
            <input type="submit" value="ประมวลผล " class="btn btn-primary">
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>