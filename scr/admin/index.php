<?php
include "header.php";
include "slider.php";
include "class/brand_class.php";
?>
<?php
$brand = new brand;
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $category_id = $_POST['category_id'];
    $brand_name = $_POST['brand_name'];
    $insert_brand = $brand->insert_brand($category_id, $brand_name);
}
?>
<style>
    select {
        height: 30px;
        width: 200px;
    }
</style>
<div class="admin-contentRight">
    <div class="admin-contentRight-category_add">
        <h1 style="text-align: center;">Chào mừng bạn đến với Hệ thống quản trị</h1><br>
    </div>
</div>
</section>
<?php
include "footer_admin.php";
?>
