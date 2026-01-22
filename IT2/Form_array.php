<?php
// ตัวแปรเก็บชื่อจังหวัดและจำนวนจังหวัด
if(isset($_POST['text1']) && isset($_POST['num1'])){
$test= $_POST['text1'];
$tnum= $_POST['num1'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-color: #a4d5ff;
        font-family: "Segoe UI", Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    div {
        background-color: #ffffff;
        width: 50%;
        margin: 40px auto;
        padding: 25px 30px;
        border-radius: 12px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    h1, h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    label {
        font-size: 18px;
        color: #333;
        display: block;
        margin-bottom: 10px;
    }

    input[type="number"],
    input[type="text"] {
        width: 95%;
        padding: 10px 12px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
        transition: 0.2s;
    }

    input[type="number"]:focus,
    input[type="text"]:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.4);
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        border: none;
        color: #ffffff;
        font-size: 18px;
        border-radius: 8px;
        cursor: pointer;
        margin-top: 10px;
        transition: 0.2s;
    }

    button:hover {
        background-color: #0056b3;
    }

    li {
        font-size: 18px;
        background: #f4f8ff;
        padding: 8px 12px;
        margin: 6px 0;
        border-radius: 6px;
        border-left: 5px solid #007bff;
        list-style: none;
    }
</style>
<body>
    <div>
        <!-- แบบฟอร์มป้อนจำนวนชื่อจังหวัด -->
        <form method="post">
            <h1>ป้อนชื่อจังหวัดที่คุณรู้จัก</h1>
            <label>ป้อนจำนวนจังหวัดที่รู้จัก</label>
            <input type="number" name="num1" min="1" max="77" placeholder="ป้อนจำนวนตรงนี้" class="" required><br>
            <button type="submit">ตกลง</button>
        </form>
        <!--  แบบฟอร์มป้อนชื่อจังหวัดตามจำนวนที่ระบุ -->
        <?php 
        if (isset($_POST["num1"]) && !isset($_POST["text1"])) {
            $tnum = ($_POST["num1"]); ?>
            <form action="" method="post">
                <h2>ป้อนชื่อจังหวัดที่คุณรู้จัก <?php echo $tnum; ?> จังหวัด</h2>
                <?php for($i = 0; $i < $tnum; $i++) { ?>
                    <input type="text" name="text1[]" required><br>
                <?php } ?>
                <input type="hidden" name="num1" value="<?php echo $tnum; ?>" required>
                <button type="submit">ส่งค่าชื่อจังหวัด</button>
            </form>
        <!--  แสดงผลชื่อจังหวัดที่ป้อน -->
            <?php } elseif (isset($_POST["text1"])) { ?>
                <h2>ชื่อจังหวัดที่คุณป้อนมีดังนี้</h2>
                <?php 
                $test = $_POST["text1"];
                foreach ($test as $province) {
                    echo "<li>" . htmlspecialchars($province) . "</li>";
                }
                ?>
            <?php } ?>
    </div>
</body>
</html>
