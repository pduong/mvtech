<article class="customer-page">
    <h2><?php echo $this->lang->line("customers")?></h2>               
    <div class="list-brands">
        <?php 
        $coutCustomers = count($listCustomers);
        foreach ($listCustomers as $key=>$customer):
        if($key%4 == 0):?>
        <div class="span12">
        <?php endif;?>
            <div class="span3"><img title="<?php echo $customer['brand_'.LANG]?>" alt="<?php echo $customer['brand_'.LANG]?>" src="/public/images/customers/<?php echo $customer['logo']?>" alt=""/></div>
        <?php if( ($key+1)%4 == 0 || ($key+1) == $coutCustomers):?>
        </div>        
        <?php endif; endforeach;?>           
    </div>
</article>