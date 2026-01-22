<?php
function u_def($x,$y){
    echo $x + $y;
}
if(isset($_POST['num1']) && isset($_POST['num2']) && $_POST['num2']<>"" && $_POST['num1']<>""){
    $xx=$_POST['num1'];
    $yy=$_POST['num2'];
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
    background-image:url("https://images.pexels.com/photos/114979/pexels-photo-114979.jpeg");
    background-size:cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
}
</style>
</head>
<body style="margin-top:5%;">
    <form action="" method="post">
    <div class="col-6 mx-auto p-3" style="background-color:rgba(255, 255, 255, 0.66)">
        <h1>โปรแกรมคำนวณการหาผลรวมของตัวเลข 2 จำนวน</h1>
        <div class="col-auto form-control shadow">
            <input type="number" name="num1" class="form-control my-2" id="" placeholder="Enter first number1" required> 
            <input type="number" name="num2" class="form-control" id="" placeholder="Enter first number2" required>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto mt-5 shadow">
            <input type="submit" value="📱คำนวน" name="submit" class="btn btn-primary">
        </div>
    </form>
        <div class="container mx-auto mt-5 p-5 text-center shadow" style="background-color:rgba(255, 170, 170, 1)">
            <span class="display-4">ผลลัพธ์คือ :
            <?php
            if(isset($xx) && isset($yy)){
               u_def($xx,$yy);
            }
            ?>
            </span>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>    
</body>
</html>
