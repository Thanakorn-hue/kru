<?php 
require_once 'connectdb.php'; 

// คำสั่ง SQL ในการดึงข้อมูลผู้ใช้
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$spl = "INSERT INTO users (fullname, username, password) VALUES ('".$_POST["fullname"]."','".$_POST["username"]."','".$_POST["password"]."')";
$result = mysqli_query($conn, $spl);

    if ($result) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
// กำหนดตัวแปรสำหรับการแบ่งหน้า
$limit = 5; // จำนวนข้อมูลที่จะแสดงต่อหน้า
$page = isset($_GET['page']) ? $_GET['page'] : 1; // หน้าปัจจุบัน
$start = ($page-1) * $limit; // จุดเริ่มต้นของข้อมูลในแต่ละหน้า
// คำสั่ง SQL ในการดึงข้อมูลผู้ใช้ พร้อมกับการค้นหา
if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET['keyword'])) {
  $keyword = mysqli_real_escape_string($conn, $_GET['keyword']);
  $sql_get = "SELECT * FROM build_mater_equip WHERE mat_name LIKE '%$keyword%' OR category_id LIKE '%$keyword%'";
} else {
  $sql_get = "SELECT * FROM build_mater_equip LIMIT $start, $limit";
}

$result_get = mysqli_query($conn, $sql_get);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once 'backend_head.php'; ?>
</head>
<body>
 <!-- เมนู -->
<?php require_once 'backend_menu.php'; ?>
<!-- จบเมนู -->
 <div class="container text-center my-4 bg-primary-subtle rounded-3 text-primary">
    <h1><i class="bi bi-clipboard-data-fill"></i> รายงานผลข้อมูลวัสดุ</h1>
 </div>
<!-- ช่องเสริซ -->
 <div class="container">
  <div class="row">
    <div class="col">
      <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"]); ?>" method="get">
        <input type="search" class="form-control" placeholder="ป้อนชื่อ หรือ ชื่อผู้ใช้" name="keyword" aria-label="ค้นหา">
      </form>
    </div>
    <div class="col text-end">
      <a class="btn btn-success" href="#" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">เพิ่มข้อมูลผู้ใช้</a>
    </div>
  </div>
</div>
<!-- จบช่องเสริซ -->
<!-- ตารางข้อมูลรายงานข้อมูลผู้ใช้ -->
<div class="container my-4">
  <?php
  if (mysqli_num_rows($result_get) > 0) { ?> 
  <table class="table table-hover table-striped table-primary table-bordered caption-top">
  <!-- <caption>List of users</caption> -->
  <thead>
    <tr>
      <th scope="col" class="text-center">#</th>
      <th scope="col">ชื่อวัสดุ</th>
      <th scope="col">จำนวนคงเหลือ</th>
      <th scope="col">จัดการข้อมูล</th>
    </tr>
  </thead>
  <tbody>
    <?php
// output data of each row
    while($row = mysqli_fetch_assoc($result_get)) { ?>
    <tr>
      <th scope="row" class="text-center"><?php echo $row["mat_id"]; ?></th>
      <td><?php echo $row["mat_name"]; ?></td>
      <td><?php echo $row["quantity"]." ".$row["unit"]; ?></td>
      <td class="text-center">
        <a class="btn btn-danger" href="equip_del.php?del_id=<?php echo $row["mat_id"]; ?>" role="button" onclick="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบ?');"> ลบ </a>
        <a class="btn btn-warning" href="equip_update_v2.php?edit_id=<?php echo $row["mat_id"] ?>"> แก้ไข </a>
        <!-- <a class="btn btn-warning" href="#" role="button" data-bs-toggle="modal" data-bs-target="#exampleModalUp"> แก้ไข </a> -->
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php
} else {
  echo "❌ 0 ไม่มีข้อมูลผู้ใช้ในระบบ";
}
?>
</div>
<!-- จบตารางข้อมูลรายงานข้อมูลผู้ใช้ -->
<!-- เริ่ม Pagenation -->
 <?php
    $sql_get_pn = "SELECT * FROM build_mater_equip";
    $result_get_pn = mysqli_query($conn, $sql_get_pn);
    $row_pn_toal = mysqli_fetch_assoc($result_get_pn);
    $total_page = ceil(mysqli_num_rows($result_get_pn)/$limit);
 ?>
<div class="container">
  <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a href="?page=1" class="page-link">First</a>
    </li>
    <?php for ($i=2; $i<=$total_page; $i++) { ?>
    <li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php } ?>
    <li class="page-item">
      <a class="page-link" href="?page=<?php echo $total_page; ?>">End</a>
    </li>
  </ul>
</nav>
</div>
<!-- จบ Pagenation -->
<!-- เริ่ม Medal Insert -->
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header bg-success-subtle">
        <h1 class="modal-title fs-5" id="exampleModalLabel">👨‍💻เพิ่มข้อมูลวัสดุ</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- โค้ดช่องป้อน insert-->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-control" name="formadd" id="formadd">
          <div class="mb-3">
            <label for="fullname" class="form-label">ชื่อ-นามสกุล</label>
            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="ป้อนชื่อ-นามสกุล" required>
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">ชื่อผู้ใช้</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="ป้อนชื่อผู้ใช้" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">รหัสผ่าน</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="ป้อนรหัสผ่าน" required>
          </div>
        </form>
        <!-- จบโค้ดช่องป้อน insert-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form="formadd">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- จบ Medal Insert -->

<!-- เริ่ม Medal Update -->
  <!-- Modal -->
<div class="modal fade" id="exampleModalUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header bg-warning-subtle">
        <h1 class="modal-title fs-5" id="exampleModalLabel">📝แก้ไขข้อมูลผู้ใช้</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- โค้ดช่องป้อน insert-->
        <form action="" method="post" class="form-control">
          <div class="mb-3">
            <label for="fullname" class="form-label">ชื่อ-นามสกุล</label>
            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="ป้อนชื่อ-นามสกุล" required>
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">ชื่อผู้ใช้</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="ป้อนชื่อผู้ใช้" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">รหัสผ่าน</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="ป้อนรหัสผ่าน" required>
          </div>
          
          <div class="mb-3">
            <label for="password" class="form-label">สิทธิการใช้งาน</label>
            <select select class="form-select" aria-label="Default select example" id="role" name="role" required>
              <option selected>-- เลือกสิทธิการใช้งาน --</option>
              <option value="admin">ผู้ดูแลระบบ</option>
              <option value="user">ผู้ใช้งานทั่วไป</option>
              <option value="staff">ผู้ช่วยผู้ดูแล</option>
            </select>
          </div>
          <div>
            <label for="password" class="form-label">สถานะการใช้งาน</label> 
            <select select class="form-select" aria-label="Default select example" id="status" name="status" required>
              <option selected>-- เลือกสถานะการใช้งาน --</option>
              <option value="1">ใช้งานปกติ</option>
              <option value="0">ระงับการใช้งาน</option>
            </select>
          </div>
        </form>
        <!-- จบโค้ดช่องป้อน insert-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- จบ Medal Update -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>