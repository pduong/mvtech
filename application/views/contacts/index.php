<?php $contact = $this->session->userdata('contact'); ?>
<h2><?php echo $this->lang->line("contact") ?></h2>
<?php if (!empty($msg)): ?>
    <h2><?php
        if ($msg == "Ok") {
            echo $this->lang->line("contact_msg_ok");
        }else{
            echo $this->lang->line("contact_msg_fail");
        }
        ?></h2>
<?php endif; ?>
<div class="contacts">    
    <div class="span7">
        <form class="form-horizontal" method="post">
            <div class="control-group">
                <label class="control-label" for="name"><?php echo $this->lang->line('contact_name_label') ?></label>
                <div class="controls">
                    <input type="text" id="name" name="name" placeholder="<?php echo $this->lang->line('contact_name_label') ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="company"><?php echo $this->lang->line('contact_com_label') ?></label>
                <div class="controls">
                    <input type="text" id="company" name="company" placeholder="<?php echo $this->lang->line('contact_com_label') ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="phone"><?php echo $this->lang->line('contact_phone_label') ?></label>
                <div class="controls">
                    <input type="text" id="phone" name="phone" placeholder="<?php echo $this->lang->line('contact_phone_label') ?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="email">Email</label>
                <div class="controls">
                    <input type="text" id="email" name="email" placeholder="Email">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="contents"><?php echo $this->lang->line('contact_content_label') ?></label>
                <div class="controls">
                    <textarea placeholder="<?php echo $this->lang->line('contact_content_label') ?>" id="contents" name="contents"></textarea>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">                    
                    <button type="submit" class="btn"><?php echo $this->lang->line('contact_submit') ?></button>
                </div>
            </div>
        </form>
    </div>
    <div class="span5">
        <p>
            <?php echo $contact['contact_' . LANG] ?>
        </p>
    </div>
</div>
<script src="/public/scripts/jquery.validate.js" type="text/javascript"></script>
<script>
    $(".form-horizontal").validate({
        ignore: "",
        errorElement: "span",
        errorClass: "help-inline",
        errorPlacement: function(error, element) {
            error.appendTo(element.parent());
        },
        highlight: function(element) {
            $(element).parent().parent().addClass('error');
        },
        unhighlight: function(element) {
            $(element).parent().parent().removeClass('error');
        },
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            contents: {
                required: true
            }
        },
        messages: {
            name: "<?php echo $this->lang->line("contact_name_msg") ?>",
            email: "<?php echo $this->lang->line("contact_email_msg") ?>",
            contents: "<?php echo $this->lang->line("contact_content_msg") ?>"
        }
    });
</script>