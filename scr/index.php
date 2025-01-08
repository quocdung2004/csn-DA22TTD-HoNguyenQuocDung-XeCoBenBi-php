<?php
include "header_index.php";
include "connnect.php";
require_once('../DA_CSN/admin/database.php');
$db = new Database;
$db->connectDB();
?>

<div class="container">
    <div class="grid">
        <div class="swiper">
            <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true" space-between="30"
                centered-slides="true" autoplay-delay="2200" autoplay-disable-on-interaction="false">
                <swiper-slide><img src="img/imgMain.jpg" alt=""></swiper-slide> <!-- id="mainslide"-->
                <swiper-slide><img src="img/baoDuongHuyndai.jpg" alt=""></swiper-slide>
                <swiper-slide><img src="img/baoDuongKia.jpg" alt=""></swiper-slide>
                <swiper-slide><img src="img/baoDuongMitsu.png" alt=""></swiper-slide>
                <swiper-slide><img src="img/baoDuongToyota.jpg" alt=""></swiper-slide>
            </swiper-container>
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
        </div>
        <h1>Bảo dưỡng ô tô là gì?</h1>
        <p>Bảo Dưỡng Xe Ô Tô là quá trình kiểm tra, bảo dưỡng và thay thế các linh kiện, dầu nhớt cũng như các hệ thống quan trọng để đảm bảo xe luôn hoạt động trong tình trạng tối ưu nhất. Dưới đây là một số lý do chính mà bạn không nên bỏ qua việc Bảo Dưỡng Xe:</p>
        <p style="text-indent: 30px;">– Gia Tăng Tuổi Thọ Xe: Việc thực hiện Bảo Dưỡng Xe Ô Tô giúp các bộ phận của xe được làm việc hiệu quả và kéo dài tuổi thọ của các chi tiết trên xe. Các lỗi nhỏ nếu không được sửa chữa kịp thời có thể trở thành những hư hỏng lớn và tốn kém.</p>
        <p style="text-indent: 30px;">– Đảm Bảo An Toàn: Một chiếc xe không được Bảo Dưỡng định kỳ có thể gặp phải những sự cố bất ngờ khi đang hoạt động, điều này có thể dẫn đến các tình huống nguy hiểm. Bảo dưỡng thường xuyên giúp phát hiện và khắc phục các vấn đề tiềm ẩn trước khi chúng trở thành mối nguy hiểm.</p>
        <p style="text-indent: 30px;">– Tiết Kiệm Chi Phí: Việc Bảo Dưỡng Xe Ô Tô giúp bạn phát hiện sớm các hư hỏng nhỏ, từ đó giảm thiểu chi phí sửa chữa lớn sau này. Thay vì phải bỏ tiền cho việc sửa chữa các vấn đề lớn, bạn chỉ cần chi cho việc bảo dưỡng định kỳ, điều này tiết kiệm hơn nhiều.</p>
        <p style="text-indent: 30px;">– Giữ Giá Trị Xe Cao: Một chiếc xe được bảo dưỡng tốt có thể giữ giá trị bán lại cao hơn. Người mua xe cũ luôn ưu tiên những chiếc xe có lịch sử bảo dưỡng rõ ràng và được bảo dưỡng định kỳ.</p>
        <h1>Các mốc bảo dưỡng ô tô cần nhớ:</h1>
        <p>Thông thường, quy trình bảo dưỡng xe cho từng bộ phận sẽ được tiến hành định kỳ theo số km di chuyển hoặc thời gian sử dụng nhất định như sau:</p>
        <p class="in_dam">Bảo dưỡng định kỳ theo tháng:</p>
        <p>– Sau 6 – 12 tháng: Thay mới cần gạt nước.</p>
        <p>– Sau 12 tháng: Thay dầu máy (ngay cả khi chưa chạy đủ 12.000km).</p>
        <p>– Sau 12 – 24 tháng: Thay dầu ly hợp và thay dầu phanh xe.</p>
        <p>– Ít nhất 2 năm: Kiểm tra ắc quy tối thiểu 1 lần.</p>
        <p class="in_dam">Bảo dưỡng định kỳ theo số km di chuyển:</p>
        <p>– Từ 8.000 – 12.000km: Thay dầu máy.</p>
        <p>– Từ 8.000 – 16.000km: Đảo lốp xe.</p>
        <p>– Từ 19.000km: Thay lọc gió.</p>
        <p>– Từ 48.000km: Thay nước mát.</p>
        <p>– Từ 60.000km: Thay mới má phanh.</p>
        <p>– Từ 48.000 – 97.000km: Thay dầu trợ lực lái.</p>
        <div class="header-product">
            <h1 style="margin-left: 12px;">Một số dịch vụ nổi bật:</h1>
            <a class="xemTatCa" href="dichVu.php">Tất cả dịch vụ</a>
        </div>
        <div class="grid">
            <div class="grid__row">
                <?php
                $sql = "SELECT * FROM tbl_product INNER JOIN tbl_brand ON tbl_product.brand_id = tbl_brand.brand_id
            ORDER BY tbl_product.product_id DESC limit 8";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="grid__column-2-4">
                            <div class="service-card">
                                <img src="<?php echo $row['product_img']; ?>" alt="Dịch vụ <?php echo $row['product_name']; ?>" class="service-image">
                                <div class="service-content">
                                    <h3 class="service-title"><?php echo $row['product_name']; ?></h3>
                                    <p class="service-price">Giá: <?php echo $row['product_price']; ?> VNĐ</p>
                                    <p style="color: #000;" class="service-price">Thời gian bảo dưỡng: <?php echo $row['product_time']; ?> phút</p>
                                    <p style="color: #e67e22;" class="service-price">Mẫu xe: <?php echo $row['brand_name']; ?></p>
                                    <p style="color: #333;" class="service-price">Vật tư: <?php echo $row['product_vatTu']; ?></p>
                                    <div class="service-buttons">
                                        <a href="datLich.php" class="service-button book-now" style="text-decoration: none; color: white; height: 100%; width:100%;">Đặt Lịch</a>
                                        <!-- <button class="service-button view-details" onclick="viewDetails()">Xem Chi Tiết</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "Không có dịch vụ nào.";
                }
                $conn->close();
                ?>
            </div>
        </div>
    </div>

</div>
<?php
include "footer.php";
?>