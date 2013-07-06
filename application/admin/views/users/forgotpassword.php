<div class="well span5 center login-box">
    <div class="alert  <?php echo (!empty($success))?"alert-error":"alert-info";?>">
        <?php if(!empty($alert)):
            echo $alert;
            else : ?>
        Please enter the email address you use to login to this website. We'll send a new password to this email address.                
        <?php endif;?>
    </div>
    <form class="form-horizontal" action="/admin/index.php/users/forgotpassword" method="post">
        <fieldset>
            <div class="input-prepend" title="Username" data-rel="tooltip">
                <span class="add-on"><i class="icon-user"></i></span><input autofocus="" class="input-large span10" name="email" id="email" type="text" value="">
            </div>
            <div class="clearfix"></div>

            <p class="center span5">
                <button id="btnLogin" type="submit" class="btn btn-primary">Continue</button>
            </p>

            <div class="clearfix"></div>
            <p class="center"><a href="/admin/index.php/users/login"><i class="icon-chevron-left"></i> Back to login</a></p>
        </fieldset>
    </form>
</div>