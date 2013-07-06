<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-font"></i> Edit Product</h2>
        </div>        
        <div class="box-content">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="textarea">Product Category</label>
                        <div class="controls">
                            <?php echo form_dropdown('category_id', $categories, $product['category_id']); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea">Product Image</label>
                        <div class="controls">
                            <input type="file" id="product_image" name="product_image" />
                            <div class="note-upload">
                                Extentions : png, gif, jpg and < <?php echo $this->config->item("max_size"); ?> kb
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea">Product Image Old</label>
                        <div class="controls">
                            <img class="img-logo" src="/public/images/products/<?php echo $product['product_image'] ?>" />
                            <input type="hidden" value="<?php echo $product['product_image'] ?>" name="old_image"/>
                        </div>
                    </div>                    
                    <div class="control-group">
                        <label class="control-label" for="textarea">Product Name</label>
                        <div class="controls">
                            <?php echo form_input('product_name_en', $product['product_name_en']); ?>                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea">Description</label>
                        <div class="controls">
                            <textarea name="description_en"><?php echo $product['description_en'] ?></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="textarea">Product Name (vi)</label>
                        <div class="controls">
                            <?php echo form_input('product_name_vi', $product['product_name_vi']); ?>                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea">Description (vi)</label>
                        <div class="controls">
                            <textarea name="description_vi"><?php echo $product['description_vi'] ?></textarea>
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
        var ck = CKEDITOR.replace('description_vi', {toolbar: 'Full', width: "100%"});
        CKFinder.setupCKEditor(ck, {
            basePath: '/public/admin/ckfinder/'
        });

        var ck = CKEDITOR.replace('description_en', {toolbar: 'Full', width: "100%"});
        CKFinder.setupCKEditor(ck, {
            basePath: '/public/admin/ckfinder/'
        });
        $(".btn.cancel").click(function() {
            if (history.length == 0) {
                window.location = "/admin/index.php/products";
            } else {
                history.go(-1);
            }
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
            description_vi: {
                required: true
            },
            description_en: {
                required: true
            },
            product_name_en: {
                required: true
            },
            product_name_vi: {
                required: true
            },
            category_id: {valueNotEquals: ""}
        },
        messages: {
            description_vi: "Please enter text",
            description_en: "Please enter text",
            category_id: "Please select category"
        }
    });
</script> 
