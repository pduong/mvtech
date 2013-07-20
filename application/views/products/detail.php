<?php if (!empty($product)): ?>
    <div class="details-page row-fluid span12">
        <div class="span5">
            <img src="/public/images/products/<?php echo $product['product_image'] ?>"/>
        </div>	
        <div class="span7 product-info">
            <h2><?php echo $product['product_name_' . LANG] ?></h2>            
            <?php echo $product['description_' . LANG] ?>
        </div>
    </div>
<?php endif; ?>