<?php
$fioe = $_GET['file'];
echo $_FILES
//Đọc Nội Dung Tệp TIn

$contents = file($file);

foreach($cotents as $line){
    echo $line.'<br>';
}


?>
