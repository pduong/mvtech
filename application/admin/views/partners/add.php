<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-picture"></i> Add Partner</h2>
        </div>        
        <div class="box-content">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="textarea">Website</label>
                        <div class="controls">
                            <input type="text" id="website" name="website" value="" />
                        </div>
                    </div>    
                    <div class="control-group">
                        <label class="control-label" for="textarea">Logo</label>
                        <div class="controls">
                            <input type="file" id="logo" name="logo" value="" />
                            <div class="note-upload">
                                Extentions : png, gif, jpg and < <?php echo $this->config->item("max_size"); ?> kb
                            </div>
                        </div>
                    </div>                    
                    <div class="control-group">
                        <label class="control-label" for="textarea">Partners (en)</label>
                        <div class="controls">
                            <input type="text" id="partner_en" name="partner_en" value="" />
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label" for="textarea">Summary (en)</label>
                        <div class="controls">
                            <textarea name="summary_en" id="summary_en"></textarea>
                        </div>
                    </div>                    
                    <div class="control-group">
                        <label class="control-label" for="textarea">Partners (vi)</label>
                        <div class="controls">
                            <input type="text" id="partner_vi" name="partner_vi" value="" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea">Summary (en)</label>
                        <div class="controls">
                            <textarea name="summary_vi" id="summary_vi"></textarea>
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
            },
            rules: {
                partner_en: {
                    required: true
                },
                partner_vi: {
                    required: true
                },
                website: {
                    required: true
                },
                logo: {
                    required: true
                }
            },
            messages: {
                
            }
        });
    });
</script> 
