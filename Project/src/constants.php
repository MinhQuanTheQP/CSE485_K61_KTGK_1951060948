<?php
if (!isset($_SESSION)) {
    session_start();
}

$conn = mysqli_connect('localhost','root','','hethongquanlydichvuchothuexeoto');
    if(!$conn){
        die("Không thể kết nối");
    }

?>