<?php
require_once 'connectdb.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['edit_id'])) {
    $edit_id = mysqli_real_escape_string($conn, $_GET['edit_id']);
    // ดึงข้อมูล
    $sql_edit = "SELECT * FROM users WHERE user_id = '$edit_id'";
    $result_edit = mysqli_query($conn, $sql_edit);
    $user_data = mysqli_fetch_assoc($result_edit);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
<!-- เริ่ม Medal Update -->
  <!-- Modal -->
      <div class="modal-body">
        <!-- โค้ดช่องป้อน insert-->
        <form action="" method="post" class="form-control">
          <div class="mb-3">
            <label for="fullname" class="form-label">ชื่อ-นามสกุล</label>
            <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $user_data['fullname']; ?>" placeholder="ป้อนชื่อ-นามสกุล" required>
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">ชื่อผู้ใช้</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo $user_data['username']; ?>"  placeholder="ป้อนชื่อผู้ใช้" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">รหัสผ่าน</label>
            <input type="password" class="form-control" id="password" name="password" value="<?php echo $user_data['password']; ?>"   placeholder="ป้อนรหัสผ่าน" required>
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
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
        <!-- จบโค้ดช่องป้อน insert-->
      </div>
     
        
  

<!-- จบ Medal Update -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>