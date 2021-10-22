<?php
include("config/header.php");
include("constants.php");
$vehicle_id = $_GET['vehicle_id'];

$sql = "SELECT * FROM cars WHERE vehicle_id = $vehicle_id";

$res = mysqli_query($conn, $sql);
if ($res) {
    $row = mysqli_fetch_assoc($res);
    $license_no = $row['license_no'];
    $model = $row['model'];
    $year = $row['year'];
    $ctype = $row['ctype'];
    $drate = $row['drate'];
    $wrate = $row['wrate'];
    $status = $row['status'];
}
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="POST">
                
                <div class="mb-3">
                    <label class="form-label">Biển số xe</label>
                    <input type="text" class="form-control" id="license_no" name="license_no">  
                </div>
                <div class="mb-3">
                    <label class="form-label">Model</label>
                    <input type="text" class="form-control" id="model" name="model">
                </div>
                <div class="mb-3">
                    <label class="form-label">Năm sản xuất</label>
                    <input type="text" class="form-control" id="year" name="year" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Kiểu oto</label>
                    <input type="text" class="form-control" id="ctype" name="ctype" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Giá cho thuê theo ngày</label>
                    <input type="text" class="form-control" id="drate" name="drate" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Giá cho thuê theo tuần</label>
                    <input type="text" class="form-control" id="wrate" name="wrate" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Trạng thái</label>
                    <input type="text" class="form-control" id="status" name="status" >
                </div>
                <input type="submit" name="submit" class="add" value="Sửa">
            </form>
        </div>
    </div>
</div>
<?php
if (isset($_POST['submit'])) {
    $license_no = $_POST['license_no'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $ctype = $_POST['ctype'];
    $drate = $_POST['drate'];
    $wrate = $_POST['wrate'];
    $status = $_POST['status'];
    $sql = "UPDATE `cars` 
    SET `license_no`='$license_no',
    `model`='$model',
    `year`='$year',
    `ctype`='$ctype',
    `drate`='$drate' 
    `wrate`='$wrate' 
    `status`='$status' 
    WHERE `license_no` = $license_no";
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