<?php

$email = 'sohproduction1152018@gmail.com';
$password_raw = "456";

// B1. Kết nối DB Server
$conn = mysqli_connect('localhost','root','','tlu_phonebook');
if(!$conn){
    die("Không thể kết nối");
}

//B2. Truy vấn
$sql = "SELECT * FROM db_users WHERE user_email= '$email'";
$result = mysqli_query($conn,$sql);

//B3. Kiểm tra và xử lý kết quả
if(mysqli_num_rows($result) > 0){
    $row= mysqli_fetch_assoc($result);
    $password_hash = $row['user_pass'];
    echo $password_hash;
if(password_verify($password_raw, $password_hash)){
    echo 'Đăng nhập thành công';
}else{
    echo 'Mật khẩu không khớp';
}
}else{
    echo 'Email không tồn tại';  
}





?> 