<html>
    <head>
        <title>Welcome</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/public/styles/bootstrap.css" media="screen" rel="stylesheet" type="text/css">
        <link href="/public/styles/bootstrap-responsive.css" media="screen" rel="stylesheet" type="text/css">	
        <link href="/public/styles/update.css" type="text/css" rel="stylesheet" />
        <link href="/public/styles/style.css" type="text/css" rel="stylesheet" />
        <link href="/public/styles/special.css" type="text/css" rel="stylesheet" />
        <script src="/public/scripts/jquery-1.8.3.js" type="text/javascript"></script>
        <script src="/public/scripts/bootstrap.js" type="text/javascript"></script>   
        <script src="/public/scripts/scripts.js" type="text/javascript"></script>
        <!--[if lt IE 9]><script type="text/javascript" src="/public/scripts/html5.js"></script><![endif]-->
    </head>
    <body>
        <div id="container" class="row-fluid">
            <div id="header" class="row-fluid">
               <?php $this->load->view("layouts/header")?> 
            </div> <!-- header -->
            <div id="main">
                <?php $this->load->view("layouts/breadcrumb")?>   
                <div id="content" class="row-fluid">        	
                    <?php $this->load->view($bodycontent)?>                    
                </div>  
            </div>  <!--main -->
            <div id="footer" class="row-fluid">
                <?php $this->load->view("layouts/footer")?>
            </div>
        </div> <!-- container -->
    </body>
</html>
