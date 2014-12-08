<!DOCTYPE html>
<!--[if lt IE 7]> <html dir="ltr" lang="en-US" class="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="en-US" class="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="en-US" class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="en-US"> <!--<![endif]-->

<!-- BEGIN head -->
<head>
    <!--Meta Tags-->
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        
    <!--Title-->
    <title>:-: <?=$meta_title;?> | Harpara High School :-:</title>

    <!--Stylesheets-->
    <link rel="stylesheet" href="<?=$this->config->item('site_assets_url');?>css/style.css" type="text/css"  media="all" />
    <link rel="stylesheet" href="<?=$this->config->item('site_assets_url');?>css/colour.css" type="text/css"  media="all" />
    <link rel="stylesheet" href="<?=$this->config->item('site_assets_url');?>css/flexslider.css" type="text/css"  media="all" />
    <link rel="stylesheet" href="<?=$this->config->item('site_assets_url');?>css/superfish.css" type="text/css"  media="all" />
    <?php if($this->router->fetch_class('gallery')=='gallery'): ?>
    <link rel="stylesheet" href="<?=$this->config->item('site_assets_url');?>css/prettyPhoto.css" type="text/css"  media="all" />
    <?php endif; ?>
    <link rel="stylesheet" href="<?=$this->config->item('site_assets_url');?>css/responsive.css" type="text/css"  media="all" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,700,900' rel='stylesheet' type='text/css'>

    <!--Favicon-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <!--JavaScript-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js'></script>
    <script type="text/javascript" src="<?=$this->config->item('site_assets_url');?>js/superfish.js"></script>
    <script type="text/javascript" src="<?=$this->config->item('site_assets_url');?>js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="<?=$this->config->item('site_assets_url');?>js/tinynav.min.js"></script>
    <script type="text/javascript" src="<?=$this->config->item('site_assets_url');?>js/jquery.uniform.js"></script>
    <?php if($this->router->fetch_class('gallery')=='gallery'): ?>
    <script type="text/javascript" src="<?=$this->config->item('site_assets_url');?>js/jquery.prettyPhoto.js"></script>
    <?php endif; ?>
    <script type="text/javascript" src="<?=$this->config->item('site_assets_url');?>js/scripts.js"></script>
    
    <!--[if (gte IE 6)&(lte IE 8)]>
        <script type="text/javascript" src="js/selectivizr-min.js"></script>
    <![endif]-->

<!-- END head -->
</head>

<!-- BEGIN body -->
<body class="loading">

    <!-- BEGIN #header-wrapper -->
    <div id="header-wrapper">
        
        <!-- BEGIN #header-border -->
        <div id="header-border">
        
            <!-- BEGIN #header-top -->
            <div id="header-top" class="clearfix">
                <ul class="top-left-nav clearfix">
                    <li><a href="blog.html">Home</a><span>/</span></li>
                </ul>
            
                <ul class="top-right-nav clearfix">
                    <li class="phone-icon">+8804439970254</li>
                    <li class="email-icon">inquiry@hhs.gov.bd</li>
                </ul>           
            </div>
            <!-- END #header-top -->
            
            <!-- BEGIN #header-content-wrapper -->
            <div id="header-content-wrapper" class="clearfix">
                <div id="school-logo">logo</div>
                <div id="logo">
                    <h1><a href="index.html"><span> Harpara </span>High School</a></h1>
                </div>
            
                <ul class="social-icons clearfix">  
                    <!-- <li><a target="_blank" href="#"><span class="twitter-icon"></span></a></li> -->
                    <li><a target="_blank" href="#"><span class="facebook-icon"></span></a></li>
                    <li><a target="_blank" href="#"><span class="gplus-icon"></span></a></li>
                    <!-- <li><a target="_blank" href="#"><span class="pinterest-icon"></span></a></li> -->
                    <!-- <li><a target="_blank" href="#"><span class="flickr-icon"></span></a></li> -->
                    <li><a target="_blank" href="#"><span class="youtube-icon"></span></a></li>
                    <!-- <li><a target="_blank" href="#"><span class="vimeo-icon"></span></a></li> -->
                    <!-- <li><a target="_blank" href="#"><span class="skype-icon"></span></a></li> -->
                    <!-- <li><a target="_blank" href="#"><span class="rss-icon"></span></a></li> -->
                </ul>
            </div>
            <!-- END #header-content-wrapper -->
        
            <!-- BEGIN #main-menu-wrapper -->
            <div id="main-menu-wrapper" class="clearfix">
        
                <!-- BEGIN #main-menu -->
                <ul id="main-menu">                 
                    <li class="current_page_item"><a href="<?=base_url();?>">Home</a></li>
                    <li><a href="#">About Us</a>
                        <ul>
                            <li><a href="#">History of School</a></li>
                            <li><a href="#">At a Glance</a>                         
                            <li><a href="#">Headmaster Message</a></li>
                            <li><a href="#">Management Committee</a></li>                           
                        </ul>
                    </li>                   
                    <li><a href="#">Academic</a>
                        <ul>                            
                            <li><a href="#">Admission Procedure</a></li>
                            <li><a href="#">Academic Calendar</a></li>
                            <li><a href="#">List of Holidays</a></li>
                            <li><a href="#">Result</a>
                                <ul>
                                    <li><a href="#">JSC Result</a></li>
                                    <li><a href="#">SSC Result</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Teachers</a></li>
                    <li><a href="<?=base_url('gallery');?>">Image Gallery</a></li>
                    <li><a href="#">News &amp; Events</a></li>
                    <li><a href="#">Alumni</a></li>
                    <li><a href="<?=base_url('contact');?>">Contact Us</a></li>
                </ul>
                <!-- END #main-menu -->
            </div>
            <!-- END #main-menu-wrapper -->
        </div>
        <!-- END #header-border -->
    </div>
    <!-- END #header-wrapper -->