<?php
include("config/header.php");
include("constants.php");
$bd_id = $_GET['bd_id'];

$sql = "SELECT * FROM blood_donor WHERE bd_id = $bd_id";

$res = mysqli_query($conn, $sql);
if ($res) {
    $row = mysqli_fetch_assoc($res);
    $bd_id = $row['bd_id'];
    $bd_name = $row['bd_name'];
    $bd_sex = $row['bd_sex'];
    $bd_age = $row['bd_age'];
    $bd_bgroup = $row['bd_bgroup'];
    $bd_reg_date = $row['bd_reg_date'];
    $bd_phno = $row['bd_phno'];
}
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="POST">
                <div class="mb-3 ">
                    <label class="form-label">Họ và tên</label>
                    <input type="text" name="bd_name" class="form-control" value="<?= $bd_name ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Giới tính</label>
                    <input type="text" name="bd_sex" class="form-control" value="<?= $bd_sex ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Năm sinh(Tuổi)</label>
                    <input type="text" name="bd_age" class="form-control" value="<?= $bd_age ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nhóm máu</label>
                    <input type="text" name="bd_bgroup" class="form-control" value="<?= $bd_bgroup ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Ngày đăng kí</label>
                    <input type="text" name="bd_reg_date" class="form-control" value="<?= $bd_reg_date ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Số điện thoại</label>
                    <input type="text" name="bd_phno" class="form-control" value="<?= $bd_phno ?>">
                </div>
                <input type="submit" name="submit" class="add" value="Sửa">
            </form>
        </div>
    </div>
</div>
<?php
if (isset($_POST['submit'])) {
    $bd_name = $_POST['bd_name'];
    $bd_sex = $_POST['bd_sex'];
    $bd_age = $_POST['bd_age'];
    $bd_bgroup = $_POST['bd_bgroup'];
    $bd_reg_date = $_POST['bd_reg_date'];
    $bd_phno = $_POST['bd_phno'];
    $sql = "UPDATE `blood_donor` 
    SET `bd_name`='$bd_name',
    `bd_sex`='$bd_sex',
    `bd_age`='$bd_age',
    `bd_bgroup`='$bd_bgroup',
    `bd_reg_date`='$bd_reg_date',
    `bd_phno`='$bd_phno' 
    WHERE `bd_id` = $bd_id";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $_SESSION['noti'] = "Đã sửa thành công";
        header("location:" . $siteurl . 'index.php');
    } else {
        $_SESSION['noti'] = "Lỗi! Sửa không thành công";
        header("location:" . $siteurl . 'error.php');
    }
}
include("config/footer.php");
?>