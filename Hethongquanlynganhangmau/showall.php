<?php
include("constants.php");
$sql = "SELECT * FROM blood_donor ";
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