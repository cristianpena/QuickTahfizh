<?php
/* @var $this Controller */
define('ADMIN_THEME', Yii::app()->request->baseUrl . '/themes/administration');
define('ADMIN_THEME_CSS', ADMIN_THEME . '/css');
define('ADMIN_THEME_JS', ADMIN_THEME . '/js');
define('ADMIN_THEME_IMAGES', ADMIN_THEME . '/img');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--
            Charisma v1.0.0
    
            Copyright 2012 Muhammad Usman
            Licensed under the Apache License v2.0
            http://www.apache.org/licenses/LICENSE-2.0
    
            http://usman.it
            http://twitter.com/halalit_usman
        -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="<?php echo Yii::app()->language; ?>" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- The styles -->
        <link id="bs-css" href="<?php echo ADMIN_THEME_CSS; ?>/bootstrap-cerulean.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>
        <link href="<?php echo ADMIN_THEME_CSS; ?>/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo ADMIN_THEME_CSS; ?>/charisma-app.css" rel="stylesheet">
        <link href="<?php echo ADMIN_THEME_CSS; ?>/jquery-ui-1.8.21.custom.css" rel="stylesheet">
        <link href='<?php echo ADMIN_THEME_CSS; ?>/fullcalendar.css' rel='stylesheet'>
        <link href='<?php echo ADMIN_THEME_CSS; ?>/fullcalendar.print.css' rel='stylesheet'  media='print'>
        <link href='<?php echo ADMIN_THEME_CSS; ?>/chosen.css' rel='stylesheet'>
        <link href='<?php echo ADMIN_THEME_CSS; ?>/uniform.default.css' rel='stylesheet'>
        <link href='<?php echo ADMIN_THEME_CSS; ?>/colorbox.css' rel='stylesheet'>
        <link href='<?php echo ADMIN_THEME_CSS; ?>/jquery.cleditor.css' rel='stylesheet'>
        <link href='<?php echo ADMIN_THEME_CSS; ?>/jquery.noty.css' rel='stylesheet'>
        <link href='<?php echo ADMIN_THEME_CSS; ?>/noty_theme_default.css' rel='stylesheet'>
        <link href='<?php echo ADMIN_THEME_CSS; ?>/elfinder.min.css' rel='stylesheet'>
        <link href='<?php echo ADMIN_THEME_CSS; ?>/elfinder.theme.css' rel='stylesheet'>
        <link href='<?php echo ADMIN_THEME_CSS; ?>/jquery.iphone.toggle.css' rel='stylesheet'>
        <link href='<?php echo ADMIN_THEME_CSS; ?>/opa-icons.css' rel='stylesheet'>
        <link href='<?php echo ADMIN_THEME_CSS; ?>/uploadify.css' rel='stylesheet'>

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The fav icon -->
        <link rel="shortcut icon" href="<?php echo ADMIN_THEME_IMAGES; ?>/favicon.ico">

    </head>

    <body>
        <!-- topbar starts -->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="index.html"> <img alt="Charisma Logo" src="<?php echo ADMIN_THEME_IMAGES; ?>/logo20.png" /> <span>Charisma</span></a>

                    <!-- theme selector starts -->
                    <div class="btn-group pull-right theme-container" >
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
                    </div>
                    <!-- theme selector ends -->

                    <!-- user dropdown starts -->
                    <div class="btn-group pull-right" >
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user"></i><span class="hidden-phone"> admin</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <!-- user dropdown ends -->

                    <div class="top-nav nav-collapse">
                        <ul class="nav">
                            <li><a href="#">Visit Site</a></li>
                            <li>
                                <form class="navbar-search pull-left">
                                    <input placeholder="Search" class="search-query span2" name="query" type="text">
                                </form>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- topbar ends -->
        <div class="container-fluid">
            <div class="row-fluid">

                <!-- left menu starts -->
                <div class="span2 main-menu-span">
                    <div class="well nav-collapse sidebar-nav">
                        <ul class="nav nav-tabs nav-stacked main-menu">
                            <li class="nav-header hidden-tablet">Main</li>
                            <li><a class="ajax-link" href="index.html"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                            <li><a class="ajax-link" href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
                            <li><a class="ajax-link" href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
                            <li><a class="ajax-link" href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
                            <li><a class="ajax-link" href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
                            <li><a class="ajax-link" href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
                            <li class="nav-header hidden-tablet">Sample Section</li>
                            <li><a class="ajax-link" href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
                            <li><a class="ajax-link" href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
                            <li><a class="ajax-link" href="grid.html"><i class="icon-th"></i><span class="hidden-tablet"> Grid</span></a></li>
                            <li><a class="ajax-link" href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
                            <li><a href="tour.html"><i class="icon-globe"></i><span class="hidden-tablet"> Tour</span></a></li>
                            <li><a class="ajax-link" href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
                            <li><a href="error.html"><i class="icon-ban-circle"></i><span class="hidden-tablet"> Error Page</span></a></li>
                            <li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
                        </ul>
                        <label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
                    </div><!--/.well -->
                </div><!--/span-->
                <!-- left menu ends -->

                <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
                </noscript>
                <div id="content" class="span10">
                    <!-- content starts -->
                    <div>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">Home</a> <span class="divider">/</span>
                            </li>
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                    <?php echo $content; ?>
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
                <p class="pull-left">&copy; <a href="http://usman.it" target="_blank">Muhammad Usman</a> 2012</p>
                <p class="pull-right">Powered by: <a href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
            </footer>

        </div><!--/.fluid-container-->

        <!-- external javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <!-- jQuery -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/jquery-1.7.2.min.js"></script>
        <!-- jQuery UI -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/jquery-ui-1.8.21.custom.min.js"></script>
        <!-- transition / effect library -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/bootstrap-transition.js"></script>
        <!-- alert enhancer library -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/bootstrap-alert.js"></script>
        <!-- modal / dialog library -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/bootstrap-modal.js"></script>
        <!-- custom dropdown library -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/bootstrap-dropdown.js"></script>
        <!-- scrolspy library -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/bootstrap-scrollspy.js"></script>
        <!-- library for creating tabs -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/bootstrap-tab.js"></script>
        <!-- library for advanced tooltip -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/bootstrap-tooltip.js"></script>
        <!-- popover effect library -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/bootstrap-popover.js"></script>
        <!-- button enhancer library -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/bootstrap-button.js"></script>
        <!-- accordion library (optional, not used in demo) -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/bootstrap-collapse.js"></script>
        <!-- carousel slideshow library (optional, not used in demo) -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/bootstrap-carousel.js"></script>
        <!-- autocomplete library -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/bootstrap-typeahead.js"></script>
        <!-- tour library -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/bootstrap-tour.js"></script>
        <!-- library for cookie management -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/jquery.cookie.js"></script>
        <!-- calander plugin -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/fullcalendar.min.js"></script>
        <!-- data table plugin -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/jquery.dataTables.min.js"></script>

        <!-- chart libraries start -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/excanvas.js"></script>
        <script src="<?php echo ADMIN_THEME_JS; ?>/jquery.flot.min.js"></script>
        <script src="<?php echo ADMIN_THEME_JS; ?>/jquery.flot.pie.min.js"></script>
        <script src="<?php echo ADMIN_THEME_JS; ?>/jquery.flot.stack.js"></script>
        <script src="<?php echo ADMIN_THEME_JS; ?>/jquery.flot.resize.min.js"></script>
        <!-- chart libraries end -->

        <!-- select or dropdown enhancer -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/jquery.chosen.min.js"></script>
        <!-- checkbox, radio, and file input styler -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/jquery.uniform.min.js"></script>
        <!-- plugin for gallery image view -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/jquery.colorbox.min.js"></script>
        <!-- rich text editor library -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/jquery.cleditor.min.js"></script>
        <!-- notification plugin -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/jquery.noty.js"></script>
        <!-- file manager library -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/jquery.elfinder.min.js"></script>
        <!-- star rating plugin -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/jquery.raty.min.js"></script>
        <!-- for iOS style toggle switch -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/jquery.iphone.toggle.js"></script>
        <!-- autogrowing textarea plugin -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/jquery.autogrow-textarea.js"></script>
        <!-- multiple file upload plugin -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/jquery.uploadify-3.1.min.js"></script>
        <!-- history.js for cross-browser state change on ajax -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/jquery.history.js"></script>
        <!-- application script for Charisma demo -->
        <script src="<?php echo ADMIN_THEME_JS; ?>/charisma.js"></script>
    </body>
</html>
