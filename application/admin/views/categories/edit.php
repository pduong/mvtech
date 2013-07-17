<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-list-alt"></i> Edit Categories</h2>
        </div>        
        <div class="box-content">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="textarea">Category Name (en)</label>
                        <div class="controls">
                            <input type="text" id="category_name_en" name="category_name_en" value="<?php echo $cat['category_name_en'] ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea">Category Name (vi)</label>
                        <div class="controls">
                            <input type="text" id="category_name_vi" name="category_name_vi" value="<?php echo $cat['category_name_vi'] ?>" />
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label" for="image">Image</label>
                        <div class="controls">
                            <input type="file" id="image" name="image" />                            
                            <div class="note-upload">
                                Extentions : png, gif, jpg and < <?php echo $this->config->item("max_size"); ?> kb
                            </div>
                        </div>                        
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea">Old Image</label>
                        <div class="controls">
                            <img class="img-logo" src="/public/images/products/<?php echo $cat['image'] ?>" />
                            <input type="hidden" value="<?php echo $cat['image'] ?>" name="old_image"/>
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
        $(".btn.cancel").click(function() {
            if (history.length == 0) {
                window.location = "/admin/index.php/categories";
            } else {
                history.go(-1);
            }
        });
    });
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
            category_name_vi: {
                required: true
            },
            category_name_en: {
                required: true
            }            
        },
        messages: {
            category_name_vi: "Please enter text",
            category_name_en: "Please enter text"            
        }
    });
</script> 
