<?php
include "header_index.php";
include "connnect.php";
include "copy_productClass.php";
$product = new product;
$show_datlich = $product->show_datLich();
?>
<div class="grid">
    <table>
        <tr>
            <th>Stt</th>
            <th>Mã dịch vụ</th>
            <th>Họ tên</th>
            <th>Số điện thoại</th>
            <th>Biển số xe</th>
            <th>Hãng xe</th>
            <th>Mẫu xe</th>
            <th>Dịch vụ bảo dưỡng</th>
            <th>Ngày bảo dưỡng</th>
            <th>Giá dịch vụ</th>
            <th>Thao tác</th>
        </tr>
        <?php
        if ($show_datlich) {
            $i = 0;
            while ($result = $show_datlich->fetch_assoc()) {
                $i++;
        ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $result['datlich_id'] ?></td>
                    <td><?php echo $result['hoten'] ?></td>
                    <td><?php echo $result['sdt'] ?></td>
                    <td><?php echo $result['biensoxe'] ?></td>
                    <td><?php echo $result['category_name'] ?></td>
                    <td><?php echo $result['brand_name'] ?></td>
                    <td><?php echo $result['product_name'] ?></td>
                    <td><?php echo $result['ngaybd'] ?></td>
                    <td><?php echo $result['product_price'] ?></td>
                    <td><a class="thaotac" href="editLich.php?datlich_id=<?php echo $result['datlich_id'] ?>">Sửa</a>/<a class="thaotachuy" href="deleteLich.php?datlich_id=<?php echo $result['datlich_id'] ?>">Hủy</a></td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</div>
<?php
include "footer.php";
?>