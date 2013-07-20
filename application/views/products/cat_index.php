<?php if(!empty($listCats)):
  $coutProduct = count($listCats);
 foreach ($listCats as $key=>$product): 
 if($key%3 == 0):?>
<div class="list-product span12 <?php echo ($key != 0)?"list-product-2":""?>">
<?php endif;?>
    <div class="box span4">
        <a class="thumb" href="/<?php echo langurl()?>products/listproduct/<?php echo convertViToEn($product['category_name_'.LANG], $product['id']); ?>" title=""><img src="/public/images/products/<?php echo $product['image']?>" alt=""/></a>
        <h2><a href="/<?php echo langurl()?>products/listproduct/<?php echo convertViToEn($product['category_name_'.LANG], $product['id']); ?>" title="<?php echo $product['category_name_'.LANG]?>"><?php echo $product['category_name_'.LANG]?></a></h2>
    </div>    
<?php if( ($key+1)%3 == 0 || ($key+1) == $coutProduct):?>
</div>
<?php endif;?>
<?php endforeach;?>
<?php endif;?>