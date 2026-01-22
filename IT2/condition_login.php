<?php
if (isset($_POST["usern"]) && isset($_POST["passw"])) {
if ($_POST["usern"]=="admin" and $_POST["passw"]=="123456"){
    echo "😁 ชื่อผู้ใช้และรหัสผ่านถูกต้อง";
} else {
    echo "😡 ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🔑เข้าสู่ระบบ (Administrator Login)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body{
            background-image: url("https://cdn.pixabay.com/photo/2024/06/30/10/28/sky-8862862_1280.png");
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <div style="background-color:rgba(255,255,255,0.75)" class="container my-5 w-50 p-4 border border-2 rounded-3">
    <form action="" method="post">
        <input type="text" name="usern" placeholder="ป้อนชื่อผู้ใช้" class="form-control my-1">
        <input type="password" name="passw" placeholder="ป้อนรหัสผ่าน" class="form-control my-1">
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button>
        </div>
        <p></p>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>