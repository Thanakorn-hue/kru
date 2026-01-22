<?php
//กำหนดตัวแปรที่จะใช้
if(isset($_POST["numbm"])){  
$loopWh = $_POST["numbm"];
$i = 1;
$x=1;
$loopfor = $loopWh;
$loopfor++;
$loopdow = $loopfor;
$loopdow++;
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
            background-image:url("https://img.pikbest.com/back_our/20210930/bg/bb215b405b13fd509e8f6fc98f145ad5_102608.png!w700wp");
            background-size:cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
        div.mycontainer {   
            width:100%;
            color: black;

        }
        div.mycontainer div {
            width:33%;  
            float:left;
        }
    </style>
</head>
<body style="margin-top:5%;">
    <div class="row">
        <div class="container roundedlg border border-3 border-warning p-4 col-lg-6 col-md-6 col-sm-4 animate__animated animate__bounce" style="background-color:rgba(255, 255, 255, 1)">
    <form action="" method="post">
        <div class="row">
            <label for="select">ป้อนแม่สูตรคูณ</label>
            <input type="number" name="numbm" class="form-control" min="1" max="24">
        </div>
        <div class="d-grid gap-2 my-3">
            <button type="submit" class="btn btn-success">ดูแม่สูตรคูณ</button>
        </div>
        <div class="d-flex justify-content-center ">
            <div class="display-6 fw-bold mycontainer">
                <?php
                if(isset($_POST["numbm"])){
                echo "<div class=display-6 fw-bold>";
                while($i<=12){
                    echo "<br/>{$loopWh} x {$i} = ".( $loopWh * $i );
                            $i++;
                }
                echo "</div>";
                echo "<div class=display-6 fw-bold>";
                for($a=1;$a<=12;$a++){
                    echo "<br/>{$loopfor} x {$a} = ".( $loopfor * $a );
                }
                echo "</div>";
                echo "<div class=display-6 fw-bold>";
                do{
                    echo "<br/>{$loopdow} x {$x} = ".( $loopdow * $x );
                            $x++;
                }while($x<=12);
                echo "</div>";
                }
                ?>
            </div>
        </div>
    </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>