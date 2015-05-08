<?php

$page_title = 'Inloggen';
$page_fa_icon = 'fa-key';
$account_name = 'Molenhoekdag';
$show_menu = true;
$page_file = 'dashboard';
    

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
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-social.css" rel="stylesheet">
        
        <!-- Voluntr CSS -->
        <link href="css/style.css" rel="stylesheet">
        
        <!-- Font Awesome 4.3.0 -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        
        <!-- Google Font: Roboto -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:900,400italic,300,500,400' rel='stylesheet' type='text/css'>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>

    <body>
        <div class="wrapper-footer">
            <!-- HEADER START -->
            <div class="header">
                <!-- Header LEFT -->
                <div class="left col-xs-12 col-sm-4 main-menu-collapse" style="">

                    <h2 class="no-margin">
                        <i class="fa fa-puzzle-piece"></i>Voluntr
                    </h2>
                </div>

                <!-- Header CENTER -->
                <div class="center hidden-xs col-sm-4">
                    <p>&nbsp;</p>
                </div>

                <!-- Header RIGHT -->
                <div class="right col-sm-4 account-menu-collapse hidden-xs">

                    <h5 class="no-margin">
                        <!-- Organisation: name -->
                        <?php echo $account_name; ?> <span class="caret"></span>&nbsp;
                        <!-- Organisation: logo -->
                        <img style="height:35px;" src="img/molenhoekdag-vierkant.png" class="img-circle" /> 
                        <a class="btn btn-default">Instellingen</a>
                    </h5>
                </div>


            </div>
            <!-- HEADER END -->

            <!-- MENU START -->
            <?php if($show_menu == true) { ?>
            <div class="menu-listener"></div>
            <?php } ?>
            <!-- MENU END -->
            <div class="main-menu main-menu-collapse" id="main-menu-javascript-visible" style="height:0px;"> <!-- NEW -->
                <div class="popover bottom" id="main-menu">
                    <div class="arrow"></div>
                    <div class="popover-content">
                        <a class="btn btn-menu" style="border:none;"><i class="fa fa-dashboard pull-left"></i> Dashboard</a>
                        <a class="btn btn-menu"><i class="fa fa-users pull-left"></i> Vrijwilligers</a>
                        <a class="btn btn-menu"><i class="fa fa-list-ol pull-left"></i> Taken</a>
                        <a class="btn btn-menu"><i class="fa fa-check pull-left"></i> Inzet</a> 
                    </div>
                </div>
            </div>

            <!-- ACCOUNT-MENU START -->
            <div class="account-menu account-menu-collapse" id="account-menu-javascript-visible" style="height:0px;"> <!-- NEW -->
                <div class="popover bottom" id="account-menu">
                    <div class="arrow"></div>
                    <div class="popover-content">
                        <a class="btn btn-menu" style="border:none;">Dashboard <i class="fa fa-dashboard pull-right"></i></a>
                        <a class="btn btn-menu">Vrijwilligers <i class="fa fa-users pull-right"></i></a>
                        <a class="btn btn-menu">Taken <i class="fa fa-list-ol pull-right"></i></a>
                        <a class="btn btn-menu">Inzet <i class="fa fa-check pull-right"></i></a> 
                    </div>
                </div>
            </div>
            <!-- ACCOUNT-MENU END -->


            <!-- DESKTOP CONTENT START -->
            <div class="animsition hidden-xs">
                <div class="header-push hidden-xs"></div>
                <?php require_once('views/'.$page_file.'.php'); ?>
                <div class="col-xs-12 footer-push hidden-xs"></div>
            </div>
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
            <div class="push-footer col-xs-12"></div>
        </div>
        <!-- FOOTER START -->
        <div class="footer col-sm-12 hidden-xs">
            <div class="row">
                <!-- Footer LEFT -->
                <div class="col-sm-4">
<!--                    <h3 class="no-margin">Voluntr <sup><span style="font-size:11px !important;font-family:Arial, sans-serif;" class="label label-basis">alpha</span></sup></h3>-->
                    
                </div>

                <!-- Footer CENTER -->
                <div class="col-sm-4">
                    <!-- <h5 class="no-margin" style="padding-top:4px;color:#bbb !important;text-align:center;">Made with <i style="color:#F18D05;" class="fa fa-heart"></i> in Nijmegen</h5> -->
                    <h6 class="no-margin" style="text-align:center;font-weight:200;font-size:13px;">Over ons - Algemene voorwaarden - Privacy</h6>
                </div>

                <!-- Footer RIGHT -->
                <div class="col-sm-4">
                    
                    
                </div>
            </div>
        </div>
        <!-- FOOTER END -->

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <!-- Main-menu collapse script (jQuery) -->
        <script type="text/javascript">
            $( document ).ready(function() {
                $("#main-menu-javascript-visible").removeAttr("style");
                $( "#main-menu" ).hide(0, function() {});
            });
            $( ".main-menu-collapse" ).hover(function() {          
                $( "#main-menu" ).show(0, function() {
                    // Animation complete.
                });               
            });
            $( ".main-menu" ).mouseleave(function() {
                $( "#main-menu" ).hide(0, function() {
                    // Animation complete.
                });
            });
            $( ".center" ).hover(function() {
                $( "#main-menu" ).hide(0, function() {
                });
            });
        </script>

        <!-- Account-menu collapse script (jQuery) -->
        <script type="text/javascript">
            $( document ).ready(function() {
                $("#account-menu-javascript-visible").removeAttr("style");
                $( "#account-menu" ).hide(0, function() {}); 
            });
            $( ".account-menu-collapse" ).hover(function() {          
                $( "#account-menu" ).show(0, function() {
                    // Animation complete.
                });               
            });
            $( ".account-menu" ).mouseleave(function() {
                $( "#account-menu" ).hide(0, function() {
                    // Animation complete.
                });
            });
            $( ".center" ).hover(function() {
                $( "#account-menu" ).hide(0, function() {
                    setInterval(0);
                });
            });
        </script>

        <!-- Animation script -->
        <link rel="stylesheet" href="css/animsition.min.css">
        <script src="js/jquery.animsition.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {

          $(".animsition").animsition({

            inClass               :   'zoom-in-sm',
            outClass              :   'zoom-out-sm',
            inDuration            :    200,
            outDuration           :    200,
            linkElement           :   '.animsition-link',
            // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
            loading               :    true,
            loadingParentElement  :   'body', //animsition wrapper element
            loadingClass          :   'animsition-loading',
            unSupportCss          : [ 'animation-duration',
                                      '-webkit-animation-duration',
                                      '-o-animation-duration'
                                    ],
            //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
            //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".

            overlay               :   false,

            overlayClass          :   'animsition-overlay-slide',
            overlayParentElement  :   'body'
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

    </body>
</html>