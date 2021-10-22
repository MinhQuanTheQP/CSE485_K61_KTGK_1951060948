<?php
        // Dịch vụ bảo vệ:
        session_start(); //Công ty dịch vụ Bảo vệ

        if(isset($_POST['sbmGuiDi'])){
            $username = $_POST['txtEmail'];
            $password = $_POST['txtPass'];

            // Bước 01: Kết nối DB Server
            $conn = mysqli_connect('localhost','root','','tlu_phonebook');
            if(!$conn){
                die("Không thể truy cập");
            }

            // Bước 02: Truy vấn thông tin
            $sql = "SELECT * FROM db_users WHERE user_email='$username' AND user_pass='$password'";
            $result = mysqli_query($conn,$sql);

            // Bước 03: Xác thực > Đăng nhập > Ở trên, trả về 1 bản ghi thôi
            if(mysqli_num_rows($result) > 0){
                // Bảo vệ cửa CHÍNH: kiểm tra xác thực
                $_SESSION['loginOK'] = $username;
                header("Location: admin/index.php");
            }else{
                header("Location: index.php");
            }
        }
    ?>