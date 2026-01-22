<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<style>
table, th, td {
    border:1px solid black;
}
body{
    background-image:url("https://images.dmc.tv/wallpaper/raw/14177.jpg");
    background-size:cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
}
</style>
<body style="margin-top:5%;">
    <form action="" method="post">
    <div class="col-6 mx-auto p-3" style="background-color:rgba(255, 255, 255, 0.75)">
        <div class="col-auto">
            <label for="select">ป้อนจำนวนแถวที่ต้องการ</label>
            <input type="number" name="tnum" min="1" class="form-control shadow"><br>  
        </div>
        <div class="d-grid gap-2 col-6 mx-auto ">
            <button type="submit" class="btn btn-primary">เพิ่มแถว</button><br>
        </div>
<?php
if(isset($_POST["tnum"])){
$tloop = $_POST["tnum"];
if($tloop > 0){
    echo "<h1 class='text-center fw-semibold text-lowercase'>ทั้งหมด $tloop แถว</h1>";
} else{
    echo "<h1 class='text-center fw-semibold text-lowercase'>กรุณาใส่ตัวเลข</h1>";
}
    // echo "<h1 class='text-center fw-semibold text-lowercase'>ทั้งหมด $tloop แถว</h1>";
    echo "<table class='table'>";
    for($a = 1;$a <= $tloop; $a++){
        echo "<tr>
        <th class='text-center fw-normal text-lowercase bg-body-tertiary'>$a</th>
        </tr>";       
    }
    echo "</table>";
}
?>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>