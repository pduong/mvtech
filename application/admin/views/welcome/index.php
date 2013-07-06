<?php $info = $this->session->userdata("users")?>
<h2>Welcome <?php echo (!empty($info['full_name']))?$info['full_name']:""; ?> !</h2>
<div class="row-fluid sortable ui-sortable">
    <a data-rel="tooltip" class="well span4 top-block" href="/admin/index.php/products" data-original-title="">
        <img src="/public/images/icon/product.png">
        <div>PRODUCTS</div>
    </a>

    <a data-rel="tooltip" class="well span4 top-block" href="/admin/index.php/categories" data-original-title="">
        <img src="/public/images/icon/cat.png">
        <div>CATEGORIES</div>
    </a>

    <a data-rel="tooltip" class="well span4 top-block" href="/admin/index.php/partners" data-original-title="">
        <img src="/public/images/icon/coins.png">
        <div>PARTNERS</div>
    </a>
</div>
<div class="row-fluid sortable ui-sortable">&nbsp;</div>
<div class="row-fluid sortable ui-sortable">
    <a data-rel="tooltip" class="well span4 top-block" href="/admin/index.php/customers" data-original-title="">
        <img src="/public/images/icon/users.png">
        <div>CUSTOMERS</div>
    </a>

    <a data-rel="tooltip" class="well span4 top-block" href="/admin/index.php/partners" data-original-title="">
        <img src="/public/images/icon/paleta.png">
        <div>STATIC CONTENTS</div>
    </a>

    <a data-rel="tooltip" class="well span4 top-block" href="/admin/index.php/users/login" data-original-title="">
        <img src="/public/images/icon/logout.png">
        <div>LOGOUT</div>
    </a>
</div>