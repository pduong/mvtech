<?php $info = $this->session->userdata("users")?>
<html>
    <head>
        <title>Admin Panel</title>
        <meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/public/bootstrap/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css">	
	<script src="/public/scripts/jquery-1.8.3.js" type="text/javascript"></script>
	<script src="/public/scripts/bootstrap.js" type="text/javascript"></script>
        <script src="/public/scripts/jquery.validate.js" type="text/javascript"></script>        
        <script src="/public/admin/scripts/admin.js" type="text/javascript"></script> 
        
        <script src="/public/admin/ckeditor/ckeditor.js" type="text/javascript"></script>        
        <script src="/public/admin/ckfinder/ckfinder.js" type="text/javascript"></script>        

        <!-- load theme-->       
	<link href="/public/admin/styles/bootstrap-cerulean.css" rel="stylesheet">                       
        <link href="/public/bootstrap/css/bootstrap-responsive.css" media="screen" rel="stylesheet" type="text/css">	
	<link href="/public/admin/styles/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='/public/admin/styles/fullcalendar.css' rel='stylesheet'>
	<link href='/public/admin/styles/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='/public/admin/styles/chosen.css' rel='stylesheet'>
	<link href='/public/admin/styles/uniform.default.css' rel='stylesheet'>
	<link href='/public/admin/styles/colorbox.css' rel='stylesheet'>
	<link href='/public/admin/styles/jquery.cleditor.css' rel='stylesheet'>
	<link href='/public/admin/styles/jquery.noty.css' rel='stylesheet'>
	<link href='/public/admin/styles/noty_theme_default.css' rel='stylesheet'>
	<link href='/public/admin/styles/elfinder.min.css' rel='stylesheet'>
	<link href='/public/admin/styles/elfinder.theme.css' rel='stylesheet'>
	<link href='/public/admin/styles/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='/public/admin/styles/opa-icons.css' rel='stylesheet'>
	<link href='/public/admin/styles/uploadify.css' rel='stylesheet'>
        <link href="/public/admin/styles/charisma-app.css" rel="stylesheet">       
        <link href="/public/admin/styles/styles.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="/admin"> <span>mvtech.com.vn</span></a>

                    <!-- theme selector starts -->
<!--                    <div class="btn-group pull-right theme-container" >
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" id="themes">
                            <li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
                            <li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
                            <li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
                            <li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
                            <li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
                            <li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
                            <li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
                            <li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
                            <li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
                        </ul>
                    </div>-->
                    <!-- theme selector ends -->

                    <!-- user dropdown starts -->
                    <div class="btn-group pull-right" >
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user"></i><span class="hidden-phone"> <?php echo (!empty($info['full_name']))?$info['full_name']:""; ?></span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/admin/index.php/users/edit/<?php echo $info['id']?>">Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="/admin/index.php/users/login">Logout</a></li>
                        </ul>
                    </div>
                    <!-- user dropdown ends -->

                    <div class="top-nav nav-collapse">
                        <ul class="nav">
                            <li><a target="_blank" href="/">Visit Site</a></li>						
                        </ul> 
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- topbar ends -->
        <div class="container-fluid">
            <div class="row-fluid">

                <!-- left menu -->
                <?php $this->load->view("layouts/blocks/leftmenu")?>
                <!-- left menu ends -->

                <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
                </noscript>

                <div id="content" class="span10">
                    <!-- content starts -->
                    <?php $this->load->view($bodycontent)?>
                    <!-- content ends -->
                </div><!--/#content.span10-->
            </div><!--/fluid-row-->

            <hr>

            <div class="modal hide fade" id="myModal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary">Save changes</a>
                </div>
            </div>

            <footer>
                <p class="pull-left">&copy; <a href="http://usman.it" target="_blank">Phuc Duong</a> 2013</p>
                <p class="pull-right">Powered by: <a href="http://usman.it/free-responsive-admin-template">Phuc Duong</a></p>
            </footer>

        </div>
        <!-- jQuery UI -->
	<script src="/public/admin/scripts/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="/public/admin/scripts/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="/public/admin/scripts/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="/public/admin/scripts/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="/public/admin/scripts/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="/public/admin/scripts/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="/public/admin/scripts/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="/public/admin/scripts/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="/public/admin/scripts/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="/public/admin/scripts/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="/public/admin/scripts/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="/public/admin/scripts/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="/public/admin/scripts/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="/public/admin/scripts/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="/public/admin/scripts/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='/public/admin/scripts/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='/public/admin/scripts/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="/public/admin/scripts/excanvas.js"></script>
	<script src="/public/admin/scripts/jquery.flot.min.js"></script>
	<script src="/public/admin/scripts/jquery.flot.pie.min.js"></script>
	<script src="/public/admin/scripts/jquery.flot.stack.js"></script>
	<script src="/public/admin/scripts/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="/public/admin/scripts/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="/public/admin/scripts/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="/public/admin/scripts/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="/public/admin/scripts/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="/public/admin/scripts/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="/public/admin/scripts/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="/public/admin/scripts/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="/public/admin/scripts/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="/public/admin/scripts/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="/public/admin/scripts/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="/public/admin/scripts/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="/public/admin/scripts/charisma.js"></script>        
    </body>
</html>
