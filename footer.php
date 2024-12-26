<?php
// Kết nối cơ sở dữ liệu
// include "connnect.php";
$conn = new mysqli('127.0.0.1', 'root', '', 'doan_csn');
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Hàm lấy danh sách các hãng xe
function getCarBrands($conn)
{
    $query = "SELECT * FROM tbl_category"; // Bảng tbl_category là bảng chứa thông tin hãng xe
    return $conn->query($query);
}

// Hàm lấy danh sách dịch vụ
function getServices($conn)
{
    $query = "SELECT * FROM tbl_service"; // Bảng tbl_service chứa thông tin dịch vụ
    return $conn->query($query);
}
?>

<footer class="footer">
    <div class="footer__danhMuc">
        <div class="grid20">
            <h4 class="footer__heading">
                Chăm sóc khách hàng
            </h4>
            <ul class="footer__list">
                <li><a href="lienHe.php" class="footer__list--item">Liên hệ</a></li>
                <li><a href="index.php" class="footer__list--item">Trang chủ</a></li>
                <li><a href="datLich.php" class="footer__list--item">Hướng dẫn đặt lịch</a></li>
            </ul>
        </div>
        <div class="grid20">
            <h4 class="footer__heading">
                Giới thiệu
            </h4>
            <ul class="footer__list">
                <li><a href="" class="footer__list--item">Giới thiệu</a></li>
                <li><a href="" class="footer__list--item">Tuyển dụng</a></li>
                <li><a href="" class="footer__list--item">Điều khoản</a></li>
            </ul>
        </div>
        <div class="grid20">
            <h4 class="footer__heading">
                Dịch vụ
            </h4>
            <ul class="footer__list">
                <li><a href="dichVu.php#kia" class="footer__list--item">Kia</a></li>
                <li><a href="dichVu.php#mitsubishi" class="footer__list--item">Mitsubishi</a></li>
                <li><a href="dichVu.php#toyota" class="footer__list--item">Toyota</a></li>
                <li><a href="dichVu.php#huyndai" class="footer__list--item">Huyndai</a></li>
            </ul>
        </div>
        <div class="grid20">
            <h4 class="footer__heading">
                Theo dõi
            </h4>
            <ul class="footer__list">
                <li class="namChung">
                    <img src="https://down-vn.img.susercontent.com/file/2277b37437aa470fd1c71127c6ff8eb5" alt="" class="footer__list--icon">
                    <a href="https://www.facebook.com/quoc.dung.937344/" class="footer__list--item">Facebook</a>
                </li>
                <!-- <li class="namChung">
                    <img src="https://down-vn.img.susercontent.com/file/5973ebbc642ceee80a504a81203bfb91" alt="" class="footer__list--icon">
                    <a href="" class="footer__list--item">Instagram</a>
                </li> -->
            </ul>
        </div>
        <div class="grid20">
            <h4 class="footer__heading">
                Vào cửa hàng trên ứng dụng
            </h4>
            <div class="footer__download">
                <img src="img/qr.jpg" alt="" class="footer__download--QR">
                <div class="footer__download-app">
                    <a href="#" class="footer__download-app-link" style="margin-left: 15px;">
                        <img src="https://down-vn.img.susercontent.com/file/ae7dced05f7243d0f3171f786e123def" alt="">
                    </a>
                    <a href="#" class="footer__download-app-link" style="margin-left: 10px;">
                        <img src="https://down-vn.img.susercontent.com/file/ad01628e90ddf248076685f73497c163" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footerBanQuyen">
        <div class="footerBanQuyen__noiDung">
            <a href="#" class="list">Giới thiệu</a>
            <a href="#" class="list">Chính sách sử dụng</a>
            <a href="#" class="list">Bảo mật</a>
            <font style="color: grey;">&copy; 2024 - Bản quyền thuộc về công ty Durbable Cars</font>
        </div>
    </div>
</footer>
</div>

<script src="js/login.js"></script>
<script src="js/sanPham.js"></script>
<script src="js/datLich.js"></script>
<script>
    document.getElementById('serviceType').addEventListener('change', function() {
        const serviceId = this.value;
        fetch(`get_service_price.php?service_id=${serviceId}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('priceDisplay').value = `${data.price} VND`;
            })
            .catch(error => console.error('Lỗi:', error));
    });
</script>
</body>

</html>