<article class="partner-page">
    <h2><?php echo $this->lang->line("partners")?></h2>
    <ul class="list-brand-1">
        <?php
        $partnerNoSummary = 0;
        $countPartners = count($listPartners);
        foreach ($listPartners as $key => $partner):
            if (!empty($partner['summary_' . LANG])):
                ?>
                <div class="span12">
                    <div class="span4">
                        <img src="/public/images/partners/<?php echo $partner['logo']; ?>" alt="<?php echo $partner['partner_' . LANG] ?>"/>
                    </div>
                    <div class="span8">
                    <p style="padding-top: 5px;">
                        <?php echo $partner['summary_' . LANG] ?>
                    </p>
                    </div>
                </div>
                <?php
            endif;
        endforeach;
        ?>        
    </ul>
    <ul class="list-brands">
        <?php
        $partnerNoSummary = $countPartners - $key;
        $count = 0;
        foreach ($listPartners as $partner):
            if (empty($partner['summary_' . LANG])):
                if ($count % 3 == 0):
                    ?>
                    <div class="span12">
                    <?php endif; ?>
                    <div class="span4"><img src="/public/images/partners/<?php echo $partner['logo']; ?>" alt="<?php echo $partner['partner_' . LANG] ?>"/></span>                    
                    <?php if (($count + 1) % 3 == 0 || ($count) == $partnerNoSummary): ?>
                    </div> 
                <?php endif; ?>
                <?php
                $count++;
            endif;
        endforeach;
        ?>         
    </ul>
</article>