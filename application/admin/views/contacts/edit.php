<div class="row-fluid sortable">
    <div class="box span12">
        <?php if (!empty($alert)): ?>
            <div class="alert alert-info">
                <?php
                if (!empty($alert)):
                    echo $alert;
                endif;
                ?>
            </div>
        <?php endif; ?>
        <div class="box-header well" data-original-title>
            <h2><i class="icon-envelope"></i> Edit Contact</h2>
        </div>                
        <div class="box-content">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="textarea">Hotline</label>
                        <div class="controls">
                            <input type="text" id="hotline" name="hotline" value="<?php echo $contact['hotline'] ?>"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea">Email</label>
                        <div class="controls">
                            <input type="text" id="email" name="email" value="<?php echo $contact['email'] ?>"/>
                        </div>
                    </div>                                                           
                    <div class="control-group">
                        <label class="control-label" for="textarea">Contact (en)</label>
                        <div class="controls">
                            <textarea name="contact_en"><?php echo $contact['contact_en'] ?></textarea>
                        </div>
                    </div>                   
                    <div class="control-group">
                        <label class="control-label" for="textarea">Contact (vi)</label>
                        <div class="controls">
                            <textarea name="contact_vi"><?php echo $contact['contact_vi'] ?></textarea>
                        </div>
                    </div>
                </fieldset>                    
                <div class="form-actions">
                    <input type="hidden" name="section" value="text"/>             
                    <button class="btn btn-primary" type="submit">Save Changes</button>                    
                    <button class="btn cancel" type="button">Cancel</button>
                </div>
            </form>
        </div>
    </div><!--/span-->
</div><!--/row-->

<script>
    $(document).ready(function() {
        var ck = CKEDITOR.replace('contact_vi', {toolbar: 'Full', width: "100%"});
        CKFinder.setupCKEditor(ck, {
            basePath: '/public/admin/ckfinder/'
        });

        var ck = CKEDITOR.replace('contact_en', {toolbar: 'Full', width: "100%"});
        CKFinder.setupCKEditor(ck, {
            basePath: '/public/admin/ckfinder/'
        });
        $(".btn.cancel").click(function() {
            window.location = "/admin/index.php/contacts";
        });
    });
    $(".form-horizontal").bind('submit', function() {
        for (instance in CKEDITOR.instances)
            CKEDITOR.instances[instance].updateElement();
    });

    $.validator.addMethod("valueNotEquals", function(value, element, arg) {
        return arg != value;
    }, "Value must not equal arg.");

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
            hotline: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            contact_en: {
                required: true
            },
            contact_vi: {
                required: true
            },
            category_id: {valueNotEquals: ""}
        },
        messages: {
            email: "Please enter Email",
            hotline: "Please enter Hotline",
            contact_en: "Please enter Contact (en)",
            contact_vi: "Please enter Contact (vi)"
        }
    });
</script> 
