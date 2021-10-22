<?php
include("config/header.php");
include("constants.php");
?>

<div class="container">
    <h1 class="text-center"><b>Danh sách xe cho thuê</b></h1>
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
                <th scope="col">Mã phương tiện</th>
                <th scope="col">Biển số xe</th>
                <th scope="col">Model</th>
                <th scope="col">Năm sản xuất</th>
                <th scope="col">Kiểu oto</th>
                <th scope="col">Giá cho thuê theo ngày</th>
                <th scope="col">Giá cho thuê theo tuần</th>
                <th scope="col">Trạng thái</th>
                
            </tr>
        </thead>
        <tbody id="table">
            <?php
            $sql = "SELECT * FROM cars LIMIT 10 ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $i = 1;
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <td scope="row"><?php echo $i; ?> </td>
                        <td><?php echo $row['vehicle_id']; ?> </td>
                        <td><?php echo $row['license_no']; ?> </td>
                        <td><?php echo $row['model']; ?> </td>
                        <td><?php echo $row['year']; ?> </td>
                        <td><?php echo $row['ctype']; ?> </td>
                        <td><?php echo $row['drate']; ?> </td>
                        <td><?php echo $row['wrate']; ?> </td>
                        <td><?php echo $row['status']; ?> </td>
                        <td><a href="edit.php?vehicle_id=<?php echo $row['vehicle_id']; ?>">Sửa</a></td>
                        <td><a href="delete.php?vehicle_id=<?php echo $row['vehicle_id']; ?>">Xoá</a></td>
                    </tr>
            <?php
                    $i++;
                }
            }
            ?>
        </tbody>
    </table>

</div>

<?php

include("config/footer.php");

?>