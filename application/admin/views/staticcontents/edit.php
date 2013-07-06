<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-eye-open"></i> Edit Static Content</h2>
        </div>        
        <div class="box-content">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="textarea">Image</label>
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
                            <img class="img-logo" src="/public/images/statics/<?php echo $static['image'] ?>" />
                            <input type="hidden" value="<?php echo $static['image'] ?>" name="old_image"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea"><?php echo $static['title_en'] ?></label>
                        <div class="controls">
                            <textarea id="content_en" cols="80" rows="6" name="content_en"><?php echo $static['content_en'] ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea"><?php echo $static['title_vi'] ?></label>
                        <div class="controls">
                            <textarea id="content_vi" cols="80" rows="6" name="content_vi"><?php echo $static['content_vi'] ?></textarea>
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
        var ck = CKEDITOR.replace('content_en', {toolbar: 'Full', width: "100%"});
        CKFinder.setupCKEditor(ck, {
            basePath: '/public/admin/ckfinder/'
        });
        var ck = CKEDITOR.replace('content_vi', {toolbar: 'Full', width: "100%"});
        CKFinder.setupCKEditor(ck, {
            basePath: '/public/admin/ckfinder/'
        });
        $(".form-horizontal").bind('submit', function() {
            for (instance in CKEDITOR.instances)
                CKEDITOR.instances[instance].updateElement();
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
                content_en: {
                    required: true
                },
                content_vi: {
                    required: true
                }
            },
            messages: {
                content_en: "Please enter text",
                content_vi: "Please enter text"
            }
        });
    });</script>
<script>
    $(document).ready(function() {
        $(".btn.cancel").click(function() {
            if (history.length == 0) {
                window.location = "/admin/index.php/staticcontents";
            } else {
                history.go(-1);
            }
        });
    });
</script> 
