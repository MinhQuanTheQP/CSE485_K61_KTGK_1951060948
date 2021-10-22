<?php
// Nhận dữ liệu gửi sang:
if(isset($_POST['btnRegister'])){
    $user  = $_POST['txtUser'];
    $email = $_POST['txtEmail'];
    $pass1 = $_POST['txtPass01'];
    $pass2 = $_POST['txtPass02'];
}


// Nhiệm vụ Javascrpt: coi như dữ liệu đã hợp lệ
//Nhiệm vụ của PHP: kiểm tra email đã tồn tại chưa, nếu chưa mới chèn và gửi email
//B1. Kết nối DB Server
$conn = mysqli_connect('localhost','root','','tlu_phonebook');
if(!$conn){
    die("Không thể kết nối");
}

//B2. Truy vấn dữ liệu để kiểm tra Email:
$sql = "SELECT * FROM db_users WHERE user_email='$email'";
$result = mysqli_query($conn, $sql);


//B3. Xử lý kết quả
if(mysqli_num_rows($result) > 0){
    echo('Email đã tồn tại');
}else{
//Mật khẩu
$pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
$sql2= "INSERT INTO db_users(user_name, user_email, user_pass) VALUES ('$user', '$email', '$pass_hash')";
$result2 = mysqli_query($conn, $sql2);

if($result2 == 1){
    include('sendemail.php');
}else{
    echo "Lỗi";
}
}








?>