<?php 

if(isset($_POST["select"])){
    $price = $_POST["select"];
// ตรวจสอบเงื่อนไขแบบช่วงด้วย switch case
switch(true){
    case ($price>=80 && $price<=100) :
        $price = 4;
        // echo "four";
        break;
    case ($price>=70 && $price<=79) :
        $price = 3;
        // echo "three";
        break;
    case ($price>=60 && $price<=69) :
        $price = 2;
        // echo "two";
        break;
    case ($price>=50 && $price<=59) :
        $price = 1;
        // echo "one";
        break;
    default:
        $price = 0;
        // echo "zero";
        break;
}

}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body{
            background-image:url("https://st5.depositphotos.com/10614052/65855/i/450/depositphotos_658553936-stock-photo-notebooks-text-final-exam-different.jpg");
            background-size:cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
    </style>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>

<body style="margin-top:13%;">
  <!-- <div class="d-flex justify-content-center align-items-center vh-100"> -->
    <div class="row">
  <div class="container roundedlg border border-3 border-warning p-4 col-lg-6 col-md-6 col-sm-4 animate__animated animate__bounce" style="background-color:rgba(255, 255, 255, 0.63)">
    <h2 align="center">😁โปรแกรมแสดงผลการเรียน</h2>
<form action="" method="post">
    <div class="row">
    <label for="select">ป้อนคะแนน:</label>
    <!-- <select name="select" id="select" class="form-select-lg">
      <option value="1">น้ำอัดลมแบบขวด</option>
      <option value="2">น้ำอัดลมแบบกระป๋อง</option>
      <option value="3">น้ำเปล่าขวด</option>
      <option value="4">อิชิตันเย็น ๆ</option>
      <option value="5">โอเอชิ</option>
    </select> -->
    <input type="number" name="select" min="1" max="100" class="form-control" id="">
    </div>
    <div class="d-grid gap-2 my-3">
      <button type="submit" class="btn btn-success">คำนวณ</button>    
    </div>
    <div  class="d-flex justify-content-center">
      <p class="display-6 text-success">ผลการเรียนของคุณคือ <?php if(isset($price)){echo $price;} else { echo 0; }?></p>  
    </div>
  </form>
    </div>

  </div>
    </div>
<!-- </div> -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>