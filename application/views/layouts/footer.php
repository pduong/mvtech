<?php
$menu = $this->uri->rsegment(1);
if ($menu == "staticcontent") {
    $menu = trim($this->uri->rsegment(3));
}
$contact = $this->session->userdata('contact');
?>
<div id="footer" class="row-fluid">
    <div class="nav span9 footer-menu">
        <div class="span3">
            <li <?php if($menu == "products"):?> class="current" <?php endif;?>>
                <a href="/<?php echo langurl() ?>products" title="">
                    <?php echo $this->lang->line("product") ?></a> </li>
            <li <?php if($menu == "NEWS"):?> class="current" <?php endif;?>>
                <a href="/<?php echo langurl() ?>news" title="">
                    <?php echo $this->lang->line("news") ?></a> </li>
            <li <?php if($menu == "CAREERS"):?> class="current" <?php endif;?>>
                <a href="/<?php echo langurl() ?>careers" title="">
                    <?php echo $this->lang->line("career") ?></a> </li>
        </div>
        <div class="span3">   
            <li <?php if($menu == "SOLUTION"):?> class="current" <?php endif;?>>
                <a href="/<?php echo langurl() ?>solutions" title="">
                    <?php echo $this->lang->line("solution") ?></a></li> 
            <li <?php if($menu == "partners"):?> class="current" <?php endif;?>>
                <a href="/<?php echo langurl() ?>partners" title="">
                    <?php echo $this->lang->line("partners") ?></a></li>      
            <li <?php if($menu == "WHITE_PAPER"):?> class="current" <?php endif;?>>
                <a href="/<?php echo langurl() ?>white-papers" title="">
                    <?php echo $this->lang->line("white-papers") ?></a></li>
        </div>
        <div class="span3">
            <li <?php if($menu == "SERVICE"):?> class="current" <?php endif;?>>
                <a href="/<?php echo langurl() ?>services" title="">
                    <?php echo $this->lang->line("services") ?></a></li>           
            <li <?php if($menu == "customers"):?> class="current" <?php endif;?>>
                <a href="/<?php echo langurl() ?>customers" title="">
                    <?php echo $this->lang->line("customers") ?></a></li>
            <li <?php if($menu == "contacts"):?> class="current" <?php endif;?>> 
                <a href="/<?php echo langurl() ?>contacts" title="">
                    <?php echo $this->lang->line("contact") ?></a></li>
        </div>
        <div class="span3">
            <li class="phone"><a href="#" title="">
                <?php echo (!empty($contact['hotline']))?$contact['hotline']:"";?>
                </a></li>           
            <li class="email"><a href="mailto:<?php echo (!empty($contact['email']))?$contact['email']:"";?>" title="">
                <?php echo (!empty($contact['email']))?$contact['email']:"";?></a></li>
        </div>
    </div>
    <div class="span3">
        <a class="logo" href="#" title="MVTech"><img src="/public/images/logo-footer.png" alt="MVTech"/></a>
    </div>
</div>