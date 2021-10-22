<?php
if (!isset($_SESSION)) {
    session_start();
}
$siteurl = "http://localhost/MinhQuan/Hethongquanlynganhangmau/";
$conn = mysqli_connect('localhost','root','','he_thong_quan_ly_ngan_hang_mau');
    if(!$conn){
        die("Không thể kết nối");
    }
