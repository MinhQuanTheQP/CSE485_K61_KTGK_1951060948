<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>

<body>
    <?php
    if (isset($_SESSION['noti'])) {
        echo $_SESSION['noti'];
        unset($_SESSION['noti']);
    }
    ?>
    <a href="index.php">Quay về trang chủ</a>
</body>

</html>