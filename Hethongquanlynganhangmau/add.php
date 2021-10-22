<?php
include("config/header.php");
include("constants.php");
?>
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST">
                    <div class="mb-3 ">
                        <label class="form-label">Họ và tên</label>
                        <input type="text" name="bd_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giới tính</label>
                        <input type="text" name="bd_sex" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Năm sinh (Tuổi)</label>
                        <input type="text" name="bd_age" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nhóm máu</label>
                        <input type="text" name="bd_bgroup" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Số điện thoại</label>
                        <input type="text" name="bd_phno" class="form-control">
                    </div>
                    <input type="submit" name="submit" class="add" value="Thêm">
                </form>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_POST['submit'])) {
    $bd_name = $_POST['bd_name'];
    $bd_sex = $_POST['bd_sex'];
    $bd_age = $_POST['bd_age'];
    $bd_bgroup = $_POST['bd_bgroup'];
    $bd_phno = $_POST['bd_phno'];
    echo $sql = "INSERT INTO `blood_donor`(`bd_name`, `bd_sex`, `bd_age`, `bd_bgroup`, `bd_phno`) 
    VALUES ('$bd_name','$bd_sex','$bd_age','$bd_bgroup','$bd_phno')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $_SESSION['noti'] = "Đã thêm thành công";
        header("location:" . $siteurl . "index.php");
    } else {
        $_SESSION['noti'] = "Lỗi! Thêm không thành công";
        header("location:" . $siteurl . "error.php");
    }
}
include("config/footer.php");
?>