<?php
if(isset($_POST['agen'])){
$age=$_POST['agen'];
    if($age<=20){
        echo "วัยรุ่น";
    }else{
        echo "วัยทำงาน";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="condition.php" method="post">
        อายุ:    <input type="number" name="agen"><br>
                <input type="submit" value="ตรวจสอบ">
    </form>
</body>
</html>