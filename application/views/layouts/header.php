<?php
$menu = $this->uri->rsegment(1);
if ($menu == "staticcontent") {
    $menu = trim($this->uri->rsegment(3));
}
?>
<div class="search-frm">
    <form id="search-frm" name="search-frm" action="#" method="post">
        <input id="search" name="search" type="text" value="Search"/>
        <button id="btn-search">Seach</button>
    </form>
</div>                
<div class="bottom-head span12">
    <a class="logo span2" href="/" title="MVTech"><img src="/public/images/logo.png" alt="MVTech"/></a>
    <div class="small-menu-toogle">
        <button class="btn btn-primary" type="button">Menu</button>                    
    </div>
    <div id="nav" class="span9 display-menu">
        <ul>
            <li <?php if ($menu == "products"): ?> class="current products" <?php endif; ?>>
                <a href="/<?php echo langurl() ?>products" title="Products">
<?php echo $this->lang->line('product') ?></a>                
            </li>
            <li <?php if ($menu == "SOLUTION"): ?> class="current" <?php endif; ?> >
                <a href="/<?php echo langurl() ?>solutions" title="Control Systems & Solutions">
<?php echo $this->lang->line('solution') ?></a>
            </li>
            <li <?php if ($menu == "ABOUT_US"): ?> class="current" <?php endif; ?> >
                <a href="/<?php echo langurl() ?>about-us" title="About us">
<?php echo $this->lang->line('about') ?></a>
            </li>
            <li <?php if ($menu == "contacts"): ?> class="current" <?php endif; ?> >
                <a href="/<?php echo langurl() ?>contacts" title="Contact us">
<?php echo $this->lang->line('contact') ?></a>
            </li>
        </ul>
    </div>
</div>