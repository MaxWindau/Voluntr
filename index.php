<?php

$page_title = 'Dashboard';
$page_fa_icon = 'fa-dashboard';
$account_name = 'Molenhoekdag';
$show_menu = true;
$page_file = 'login';
    

?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <!-- 3 meta tags (*must* come first in the head!) -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- End 3 meta tags -->
        
        <title>Voluntr</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-social.css" rel="stylesheet">
        
        <!-- Voluntr CSS -->
        <link href="css/style.css" rel="stylesheet">
        
        <!-- Font Awesome 4.3.0 -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>

    <body>
        <div class="container">
            <!-- HEADER START -->
            <div class="header">
                <!-- Header LEFT -->
                <div class="left col-sm-4 menu-collapse hidden-xs" style="">
                    <h3 class="no-margin" style="font-weight:200;color:white;">
                        <div class="icon">
                            <i class="fa fa-dashboard <?php echo $page_fa_icon; ?>"></i>
                        </div>
                        Dashboard<?php echo $page_title; ?>
                    </h3>
                </div>
                
                <!-- Header CENTER -->
                <div class="center col-xs-12 col-sm-4">
                    <h2 class="no-margin">
                        <i class="fa fa-puzzle-piece"></i>
                        Voluntr
                    </h2>
                </div>
                
                <!-- Header RIGHT -->
                <div class="right col-sm-4 account-menu-collapse hidden-xs">
                    <h5 class="no-margin">
                        <!-- Organisation: name -->
                        <?php echo $account_name; ?> <span class="caret"></span>&nbsp;
                        <!-- Organisation: logo -->
                        <img style="height:35px;z-index:1001;" src="img/molenhoekdag-vierkant.png" class="img-circle" />
                    </h5>
                </div>
                
                
            </div>
            <!-- HEADER END -->
            
            <!-- MENU START -->
            <?php if($show_menu == true) { ?>
            <!--<div class="menu menu-collapse hidden-xs">
                <a class="btn btn-menu"><i class="fa fa-dashboard"></i> Dashboard</a>
                <a class="btn btn-menu"><i class="fa fa-users"></i> Vrijwilligers</a>
                <a class="btn btn-menu"><i class="fa fa-list-ol"></i> Taken</a>
                <a class="btn btn-menu"><i class="fa fa-check"></i> Inzet</a> 
            </div>-->
            <div class="menu-listener"></div>
            <?php } ?>
            <!-- MENU END -->
            <div class="popover-menu menu-collapse"> <!-- NEW -->
                <div class="popover bottom">
                    <div class="arrow"></div>
                    <div class="popover-content">
                        <a class="btn btn-menu" style="border:none;"><i class="fa fa-dashboard"></i> Dashboard</a>
                        <a class="btn btn-menu"><i class="fa fa-users"></i> Vrijwilligers</a>
                        <a class="btn btn-menu"><i class="fa fa-list-ol"></i> Taken</a>
                        <a class="btn btn-menu"><i class="fa fa-check"></i> Inzet</a> 
                    </div>
                </div>
            </div>
            
            <!-- ACCOUNT-MENU START -->
            <div class="account-menu account-menu-collapse hidden-xs col-sm-4">
                <p>Test</p>
            </div>
            <div class="account-menu-shadow-hider">
            </div>
            <!-- ACCOUNT-MENU END -->
            
            
            <!-- DESKTOP CONTENT START -->
            <?php require_once('views/'.$page_file.'.php'); ?>
            <!-- DESKTOP CONTENT END -->
            
            <!-- MOBILE CONTENT START -->
            <div class="support visible-xs col-xs-12">
                <center>
                    <h2>
                        <br />
                        <i class="fa fa-life-ring" style="font-size:80px;"></i>
                        <br /><br />Je scherm is te klein voor Voluntr.
                    </h2>
                    <h4>
                        <br />
                        <p>We werken aan ondersteuning voor kleine schermen.<br />
                            Volg ons op <a href="http://www.twitter.com">@voluntr</a> voor actuele updates.</p>
                    </h4>
                    <h3 style="color:#aaa;"><br />Het spijt ons.</h3>
                </center>

            </div>
            <!-- MOBILE CONTENT END -->
            
            <!-- FOOTER START -->
            <div class="col-sm-12 hidden-xs" style="background-color:#fafafa;height:90px;padding:15px;">
                <div class="row">
                    
                    <!-- Footer LEFT -->
                    <div class="col-sm-4 col-sm-offset-1">
                        <h2 style="color:#f18D05;">Voluntr</h2>
                        <h4>Een slogan zegt alles.</h4>
                    </div>
                    
                    <!-- Footer CENTER -->
                    <div class="col-sm-3">
                        <h5>Over ons</h5>
                        <h5>Privacy</h5>
                        <h5>Algemene voorwaarden</h5>
                    </div>
                    
                    <!-- Footer RIGHT -->
                    <div class="col-sm-3">
                        <br />
                        <h3 style="color:#eee !important;text-align:right;">Made with <i class="fa fa-heart"></i> in Nijmegen</h3>
                    </div>
                    
                </div>
            </div>
            <!-- FOOTER END -->

            <!-- jQuery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            
            <!-- Menu collapse script (jQuery) -->
            <script type="text/javascript">
                $( document ).ready(function() {
                    $( ".popover-menu" ).hide(0, function() {
                        // Animation complete.
                    });
                });
                $( ".menu-collapse" ).hover(function() {          
                    $( ".popover-menu" ).show(0, function() {
                        // Animation complete.
                    });               
                });
                $( ".menu-listener" ).hover(function() {
                    $( ".popover-menu" ).hide(0, function() {
                        // Animation complete.
                    });
                });
                $( ".center" ).hover(function() {
                    // Needs to be fine-tuned
                    $( ".popover-menu" ).hide(0, function() {
                        setInterval(0);
                    });
                });
            </script>
            
            <!-- Account-menu collapse script (jQuery) -->
            <script type="text/javascript">
                $( ".account-menu-collapse" ).hover("1", function() {          
                    $( ".account-menu" ).show(function() {
                        // Animation complete.
                    });               
                });
                $( ".menu-listener" ).click(function() {
                    $( ".account-menu" ).hide("1", function() {
                        // Animation complete.
                    });
                });
            </script>
            
            <!-- Bootstrap -->
            <script src="js/bootstrap.min.js"></script>
            
            <!-- Bootstrap: tooltip -->
            <script type="text/javascript">
                $(function () {
                    $('[data-toggle="tooltip"]').tooltip()
                })
                $(function () { 
                    $('[data-toggle="popover"]').popover();    
                });
            </script>
            
        </div> <!-- background div //-->
    </body>
</html>