<?php
include("config/header.php");
include("constants.php");
?>

<div class="container">
    <h1 class="text-center">Danh sách người tình nguyện hiến máu</h1>
    <?php
    if (isset($_SESSION['noti'])) {
        echo $_SESSION['noti'];
        unset($_SESSION['noti']);
    }
    ?>
    <br>
    <a href="add.php" class="add">Thêm</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Họ và tên</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Năm sinh(Tuổi)</th>
                <th scope="col">Nhóm máu</th>
                <th scope="col">Ngày đăng kí hiến máu</th>
                <th scope="col">Số điện thoại</th>
            </tr>
        </thead>
        <tbody id="table">
            <?php
            $sql = "SELECT * FROM blood_donor LIMIT 2 ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $i = 1;
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <td scope="row"><?php echo $i; ?> </td>
                        <td><?php echo $row['bd_name']; ?> </td>
                        <td><?php echo $row['bd_sex']; ?> </td>
                        <td><?php echo $row['bd_age']; ?> </td>
                        <td><?php echo $row['bd_bgroup']; ?> </td>
                        <td><?php echo $row['bd_reg_date']; ?> </td>
                        <td><?php echo $row['bd_phno']; ?> </td>
                        <td><a href="src/edit.php?bd_id=<?php echo $row['bd_id']; ?>"><i class="fas fa-edit"></i></a></td>
                        <td><a href="src/delete.php?bd_id=<?php echo $row['bd_id']; ?>"><i class="fas fa-trash"></i></a></td>
                    </tr>
            <?php
                    $i++;
                }
            }
            ?>
        </tbody>
    </table>
    <a href="#" id="showall">Chi Tiết</a>
</div>

<?php

include("config/footer.php");

?>
