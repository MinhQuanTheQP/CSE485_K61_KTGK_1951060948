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
                        <label class="form-label">Mã phương tiện</label>
                        <input type="text" name="vehicle_id" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Biển số xe</label>
                        <input type="text" name="license_no" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Model</label>
                        <input type="text" name="model" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Năm sản xuất</label>
                        <input type="text" name="year" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kiểu oto</label>
                        <input type="text" name="ctype" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giá cho thuê theo ngày</label>
                        <input type="text" name="drate" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giá cho thuê theo tuần</label>
                        <input type="text" name="wrate" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Trạng thái</label>
                        <input type="text" name="status" class="form-control">
                    </div>
                    <input type="submit" name="submit" class="add" value="Thêm">
                </form>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_POST['submit'])) {
    $vehicle_id = $_POST['vehicle_id'];
    $license_no = $_POST['license_no'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $ctype = $_POST['ctype'];
    $drate = $_POST['drate'];
    $wrate = $_POST['wrate'];
    $status = $_POST['status'];
    echo $sql = "INSERT INTO `cars`(`license_no`, `model`, `year`, `ctype`, `drate`, `wrate`, `status`) 
    VALUES ('$license_no','$model','$year','$ctype','$drate','$wrate','$statis')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $_SESSION['noti'] = "Đã thêm thành công";
        header("location:" . $siteurl . "index.php");
    } else {
        $_SESSION['noti'] = "Lỗi! Không thể thêm được";
        header("location:" . $siteurl . "error.php");
    }
}
include("config/footer.php");
?>