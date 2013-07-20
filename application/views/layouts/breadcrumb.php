<?php 
$controller =  $this->router->fetch_class();
$action  = $this->router->fetch_method();
if($controller == "products"){
    $this->breadcrumb->addCrumb($this->lang->line("product"), "/".langurl()."products");
    if($action == "detail"){
        $cat = $this->Categories_model->getCatById($product['category_id']);
        $this->breadcrumb->addCrumb($cat['category_name_'.LANG], "/".langurl()."products/listproduct/".convertViToEn($cat['category_name_'.LANG], $cat['id']));
        $this->breadcrumb->addCrumb($product['product_name_'.LANG], "");
    }elseif($action == "listproduct"){        
        $this->breadcrumb->addCrumb($cat['category_name_'.LANG], "");
    }
}elseif($controller == "staticcontent"){
    $this->breadcrumb->addCrumb($content['title_'.LANG], "");
}elseif($controller == "contacts"){
    $this->breadcrumb->addCrumb($this->lang->line("contact"), "");
}elseif($controller == "partners"){
    $this->breadcrumb->addCrumb($this->lang->line("partners"), "");
}elseif($controller == "customers"){
    $this->breadcrumb->addCrumb($this->lang->line("customers"), "");
}

?>
<ul class="breadcumb">    
    <?php echo $this->breadcrumb->makeBread();?>
</ul>