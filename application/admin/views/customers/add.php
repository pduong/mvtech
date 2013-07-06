<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Add Customer</h2>
        </div>        
        <div class="box-content">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="textarea">Customer (en)</label>
                        <div class="controls">
                            <input type="text" id="brand_en" name="brand_en" value="" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea">Customer (vi)</label>
                        <div class="controls">
                            <input type="text" id="brand_vi" name="brand_vi" value="" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea">Logo</label>
                        <div class="controls">
                            <input type="file" id="logo" name="logo" />
                            <div class="note-upload">
                                Extentions : png, gif, jpg and < <?php echo $this->config->item("max_size"); ?> kb
                            </div>
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
                window.location = "/admin/index.php/customers";
            } else {
                history.go(-1);
            }
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
                $(".uploader").parent().find(".error").remove();
            },
            rules: {
                brand_vi: {
                    required: true
                },
                brand_en: {
                    required: true
                },
                logo: {
                    required: true
                }
            },
            messages: {
                brand_vi: "Please enter text",
                brand_en: "Please enter text",
                logo: "Please upload image"
            }
        });
    });
</script> 
