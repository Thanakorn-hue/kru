<?php
if (isset($_POST["price"])){
$_POST["price"];
switch($_POST["price"]){
    case 1:
        $PRICE = "15 บาท";
        break;
    case 2:
        $PRICE = "20 บาท";
        break;
    case 3:
        $PRICE = "7 บาท";
        break;
    case 4:
        $PRICE = "10 บาท";
        break;
    case 5:
        $PRICE = "25 บาท";
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
    <style>
        body{
            background-image: url("https://t4.ftcdn.net/jpg/03/23/21/71/360_F_323217105_X0pR4jWfXAGqzAeLmsUBmuo5ajDNSiPq.jpg");
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <div >
        <form action="" method="post">
            <div class="container my-5 w-50 p-4 border border-2 rounded-3" style="background-color:rgba(226, 226, 226, 0.76)">
                <h6>เลือกเครื่องดื่ม</h6>
                <select name="price" class="form-select" aria-label="Default select example">
                    <option selected="กรุณาเลือกเครื่องดื่ม " >กรุณาเลือกเครื่องดื่ม</option>
                    <option value="1">น้ำอัดลมแบบขวด</option>
                    <option value="2">น้ำอดลมกระป๋อง</option>
                    <option value="3">น้ำเปล่า</option>
                    <option value="4">อชิตันเย็น</option>
                    <option value="5">โออีชิ</option>
                </select>
                <br>
                <div class="d-grid gap-2">
                <input type="submit" value="ตรวจสอบราคา" class="btn btn-danger">
                </div>
            <?php
            if(isset($PRICE)){
                echo "<br><h2 class= text-center>เครื่องดื่มราคา $PRICE</h2>";
            }
            ?>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>