<?php
    include "admin/class/brand_class.php";
    include "admin/class/category_class.php";
    include "admin/class/product_class.php"
?>
<?php
     $product = new product;
     $show_product = $product -> show_product();
     $brand = new brand;
     $show_brand = $brand -> show_brand();
     $category = new category;
     $show_category = $category -> show_category();
?>








<?php
    $product_id = $_GET['product_id'];
    $show_product_price_ajax = $product->show_product_price_ajax($product_id);            
    if($show_product_price_ajax){while($resultb = $show_product_price_ajax->fetch_assoc()){            
    ?>
    <input disabled type="text" value="<?php echo $resultb['product_id'] ?>" placeholder="<?php echo $resultb['product_name'] ?>">
    <?php
    echo $resultb['product_name'];
    }}


?>