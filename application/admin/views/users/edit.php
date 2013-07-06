<div class="row-fluid sortable">
    <?php if (!empty($error)) : ?>
        <div class="span12">
            <div class="alert alert-error">
                <button class="close" data-dismiss="alert" type="button">X</button>
                <?php echo $error['error']?>
            </div>
        </div>
    <?php endif; ?>
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Edit User</h2>
        </div>        
        <div class="box-content">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="textarea">Fullname</label>
                        <div class="controls">
                            <input type="text" id="full_name" name="full_name" value="<?php echo $user['full_name']?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea" >Email</label>
                        <div class="controls">
                            <input type="text" id="email" name="email" value="<?php echo $user['email']?>"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea">Username</label>
                        <div class="controls">
                            <input type="text" id="username" name="username" value="<?php echo $user['username']?>"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea">Password</label>
                        <div class="controls">
                            <input type="text" id="password" name="password" />
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
                full_name: {
                    required: true
                },
                username: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                full_name: "Please enter text",
                username: "Please enter username",
                email: "Please enter email"                
            }
        });
    });
</script> 
