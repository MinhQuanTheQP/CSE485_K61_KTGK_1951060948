<?php
    // URL kích hoạt có dạng phương thức GET
    $email = $_GET['email'];
    $code  = $_GET['code'];

    //B1. Kết nối DB Server
    $conn = mysqli_connect('localhost','root','','tlu_phonebook');
    if(!$conn){
        die("Không thể kết nối");
    }

    //B2. Truy vấn dữ liệu
    $sql = "SELECT * FROM db_users WHERE user_email='$email' OR user_code='$code'";
    $result = mysqli_query($conn,$sql);

    //B3. XỬ lý kết quả
    if(mysqli_num_rows($result) > 0){
        $sql_2 = "UPDATE db_users SET user_status = 1 WHERE user_email = '$email'";
        $result_2 = mysqli_query($conn,$sql_2);

        if($result_2 > 0){
            echo 'Tài khoản đã được kích hoạt';
        }
    }else{
       echo 'Không thể kích hoạt.';
    }
