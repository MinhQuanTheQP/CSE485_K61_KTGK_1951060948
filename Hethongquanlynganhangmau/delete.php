<?php
include("constants.php");

$bd_id = $_GET['bd_id'];

$sql = "DELETE FROM `blood_donor` WHERE bd_id = $bd_id";

$res = mysqli_query($conn, $sql);

if ($res) {
    $_SESSION['noti'] = "Đã xóa";
    header("location:" . $siteurl . 'index.php');
} else {
    $_SESSION['noti'] = "Lỗi khi xóa";
    header("location:" . $siteurl . 'error.php');
}