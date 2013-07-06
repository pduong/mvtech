<div class="row-fluid">
    <div class="well span5 center login-box">
        <div class="alert <?php echo (!empty($alert)) ? "alert-error" : "alert-info"; ?>">
            <?php
            if (!empty($alert)):
                echo $alert;
            else:
                ?>
                Please enter your Username and Password below.                    
            <?php endif; ?>
        </div>
        <form class="form-horizontal" action="/admin/index.php/users/login" method="post">
            <fieldset>
                <div class="input-prepend" title="Username" data-rel="tooltip">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input autofocus class="input-large span10" value="<?php echo (!empty($login['username'])) ? $login['username'] : "" ?>" name="username" id="username" type="text"/>
                </div>
                <div class="clearfix"></div>

                <div class="input-prepend" title="Password" data-rel="tooltip">
                    <span class="add-on"><i class="icon-lock"></i></span>
                    <input class="input-large span10" name="password" id="password" type="password"/>
                </div>
                <div class="clearfix"></div>

                <div class="input-prepend">
                    <label class="remember checkbox inline" for="remember"><input type="checkbox" id="remember" name="remember"/> Remember me</label>
                </div>

                <input type="hidden" name="backLink" value=""/>

                <p class="center span5">
                    <button id="btnLogin" type="submit" class="btn btn-primary">Login</button>
                </p>

                <div class="clearfix"></div>
                <p class="center">Can't access your account? <a href="/admin/index.php/users/forgotpassword"> Reset password </a></p>
            </fieldset>
        </form>
    </div><!--/span-->
</div>