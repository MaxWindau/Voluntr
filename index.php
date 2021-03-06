<?php

$page_title = 'Inloggen';
$page_fa_icon = 'fa-key';
$account_name = 'Molenhoekdag';
$show_menu = true;
$page_file = 'bellen';
    ini_set('display_errors', 'On'); 
error_reporting(E_ALL); 

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
            
            <!-- NOTIFICATION BAR START 
            <div class="notification-bar">           
                    <div class="col-sm-3 left">
                        <small><i class="fa fa-exclamation-triangle"></i> Melding</small>
                    </div>
                    <div class="col-sm-6">
                        <img src="img/silhouette-vierkant.png" style="height:14px;width:14px;align:center;border:1px white solid;" /> Tim van Dijk heeft zich aangemeld als vrijwilliger.
                    </div>
                    <div class="col-sm-3 right">
                        <small>2 minuten geleden</small> <i class="fa fa-clock-o"></i>
                    </div>
            </div>
            <!-- NOTIFICATION BAR END -->
            
            
            <!-- HEADER START -->
            <div class="header">
                <!-- Header LEFT -->
                <div class="col-xs-12 col-sm-9">

                    <h2 class="no-margin">
                        <i class="fa fa-puzzle-piece"></i>
                        <a class="btn btn-sm btn-header active"><img style="height:20px;margin-top:-2px;" src="img/molenhoekdag-vierkant.png" class="img-circle" /> Molenhoekdag <i class="fa fa-caret-down"></i></a>
                        <span class="divider"></span>
                        <a class="btn btn-sm btn-header"><i class="fa fa-table"></i> Rooster</a>
                        <a class="btn btn-sm btn-header"><i class="fa fa-users"></i> Personen</a>
                        <a class="btn btn-sm btn-header"><i class="fa fa-list-ol"></i> Taken</a>
                        <a class="btn btn-sm btn-header"><i class="fa fa-check"></i> Enquêtes</a>
                    </h2>
                    
                </div>
                <div class="col-xs-12 col-sm-3 right">
                    <h2 class="no-margin">
                        <a class="btn btn-sm btn-header active"><img style="height:20px;margin-top:-2px;" src="img/silhouette-vierkant.png" class="img-circle" /> Max Windau <i class="fa fa-caret-down"></i></a>
                        
                    </h2>
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
<!--
                    <div class="col-sm-12">
                        
                        <div class="alert alert-danger alert-dismissible" role="alert">
                        <i class="fa fa-warning"></i> Er is een fout opgetreden bij het maken van de planning. <a class="alert-link" href="#">Klik hier voor meer informatie.</a>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Sluiten">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> 
                </div>    
-->
                
                <?php require_once('views/'.$page_file.'.php'); ?>
                
                <!-- TEST ENVIRONMENT -->
<!--            BELHULP
                <div class="col-sm-12" style="text-align:center;">
                    <h3 style="text-align:left;">Belhulp</h3>
                    <p></p>
                    <h1>Max Windau</h1>
                    <p>1 keer gebeld • 2 mailconversaties</p>
                    <a class="btn btn-lg btn-primary" style="font-weight:200;">
                        <i class="fa fa-phone"></i> 06-12727301 <small><span class="label label-default">mobiel</span></small>
                    </a> 
                    <a class="btn btn-lg btn-primary" style="font-weight:200;">
                        <i class="fa fa-phone"></i> 024-3584250 <small><span class="label label-default">thuis</span></small>
                    </a>
                    
                    <br /><br />
                    
                    <a class="btn btn-default"><i class="fa fa-forward"></i> Sla deze vrijwilliger over</a><br /><br />
                </div>
                
                <div class="col-sm-4 col-sm-offset-2">
                    <a class="btn btn-lg btn-success" style="width:100%;"><i class="fa fa-check"></i> Neemt op</a>
                    <b>Opmerkingen:</b>
                    <p>Ik wil niet bij de luchtkussens.</p>
                </div>
                <div class="col-sm-4" style="text-align:center;">
                    
                    <a class="btn btn-lg btn-danger" style="width:100%;"><i class="fa fa-remove"></i> Neemt niet op</a>
                </div>
-->
                
<?php

$mysqli = new mysqli("localhost", "root", "root", "voluntr");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$gebruikersmomenten = mysqli_query($mysqli, 'SELECT gebruikers.voornaam, gebruikers.tussenvoegsel, gebruikers.achternaam, gebruikertaak.taaknaam, gebruikertaak.moment FROM gebruikers, gebruikertaak WHERE gebruikers.id = gebruikertaak.id GROUP BY taaknaam ORDER BY moment ASC');


//
//$gebruikersmomenten = mysqli_fetch_array($gebruikersmomenten);
echo '<pre>';
print_r($gebruikersmomenten);
echo '</pre>';

// Vraag alle timestamps op en zet ze op volgorde
sort($timestamps);

// Bereken voor elke timestamp de datum en tijd
$k = 1;
foreach($timestamps as $timestamp){
    $data[$k] = date($timestamp, 'j-n-Y'); // 5-9-15 (5 september 2015)
    $tijden[$k] = date($timestamp, 'G:i'); // 17:15 (kwart over 5, 's middags)
    
    while($tm = $gebruikersmomenten->fetch_row()){
        if($tm['timestamp'] == $timestamp){
            $taakids[$timestamp][] = $tm;
        }
    }
    $k++;
}





$rooster = array(
    'Draaimolen' => array(
        1 => 'Tim van Dijk',
        2 => '',
        3 => 'Max Windau',
        4 => 'Max Windau',
        5 => 'Tim van Dijk',
        6 => 'Tom Janssen',
        7 => 'Tom Janssen'
    ),
    
    'Reuzenrad' => array(
        1 => 'Tim van Dijk',
        2 => '',
        3 => 'Max Windau',
        4 => 'Max Windau',
        5 => 'Tim van Dijk',
        6 => 'Tom Janssen',
        7 => 'Tom Janssen'
    )
);



?>
                
                <div class="col-sm-6">
                    <h3>Rooster</h3>
                </div>
                <div class="col-sm-6">
                    <h3 style="text-align:right;">
                        <span class="label label-success" style="font-size:13px;"><i class="fa fa-check"></i> 29 ingedeeld</span>
                        <span class="label label-warning" style="font-size:13px;"><i class="fa fa-share-alt"></i> 14 opties</span>
                        <span class="label label-danger" style="font-size:13px;"><i class="fa fa-warning"></i> 13 tekorten</span>
                    </h3>
                </div>
                <div class="col-sm-12" style="overflow-y:auto;overflow-x:auto;">
                    <table>
                        <tr>
                            <th>Taak</th>
                            <th>16.00</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>17.00</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>18.00</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <td><input type="text" class="input input-sm form-control" placeholder="Zoek een taak" /></td>
                            <td>.00</td>
                            <td>.15</td>
                            <td>.30</td>
                            <td>.45</td>
                            <td>.00</td>
                            <td>.15</td>
                            <td>.30</td>
                            <td>.45</td>
                            <td>.00</td>
                            <td>.15</td>
                            <td>.30</td>
                            <td>.45</td>
                        </tr>

                        <tr>
                            <td>Luchtkussens</td>
                            <td><div class="rooster-label rooster-ingevuld"><i class="fa fa-check"></i> Tim van Dijk</div></td>
                            <td colspan="2"><div class="rooster-label rooster-optie"><i class="fa fa-share-alt"></i></div></td>
                            <td><div class="rooster-label rooster-ingevuld"><i class="fa fa-check"></i> Suus van Gerwik</div></td>
                            <td><div class="rooster-label rooster-tekort"><i class="fa fa-warning"></i></div></td>
                            <td colspan="2"><div class="rooster-label rooster-ingevuld"><i class="fa fa-check"></i> Noa Klaassen</div></td>

                            <td colspan="2"><div class="rooster-label rooster-ingevuld"><i class="fa fa-check"></i> Tim van Dijk</div></td>
                            <td><div class="rooster-label rooster-optie"><i class="fa fa-share-alt"></i></div></td>
                            <td colspan="2"><div class="rooster-label rooster-ingevuld"><i class="fa fa-check"></i> Suus van Gerwik</div></td>
                            
                            
                        </tr>
                        <tr>
                            <td>Draaimolen</td>
                            <td colspan="2"><div class="rooster-label rooster-ingevuld"><i class="fa fa-check"></i> Noa Klaassen</div></td>

                            <td><div class="rooster-label rooster-ingevuld"><i class="fa fa-check"></i> Tim van Dijk</div></td>
                            <td colspan="3"><div class="rooster-label rooster-tekort"><i class="fa fa-warning"></i></div></td>
                            <td colspan="2"><div class="rooster-label rooster-ingevuld"><i class="fa fa-check"></i> Suus van Gerwik</div></td>
                            <td><div class="rooster-label rooster-ingevuld"><i class="fa fa-check"></i> Tim van Dijk</div></td>
                            <td><div class="rooster-label rooster-optie"><i class="fa fa-share-alt"></i></div></td>
                            <td colspan="2"><div class="rooster-label rooster-nietnodig"></div></td>
                        </tr>
                        <tr>
                            <td>Informatiestand</td>
                            <td colspan="2"><div class="rooster-label rooster-nietnodig"></div></td>

                            <td><div class="rooster-label rooster-ingevuld"><i class="fa fa-check"></i> Suus van Gerwik</div></td>
                            <td><div class="rooster-label rooster-tekort"><i class="fa fa-warning"></i></div></td>
                            <td colspan="2"><div class="rooster-label rooster-ingevuld"><i class="fa fa-check"></i> Noa Klaassen</div></td>

                            <td><div class="rooster-label rooster-ingevuld"><i class="fa fa-check"></i> Tim van Dijk</div></td>
                            <td colspan="3"><div class="rooster-label rooster-optie"><i class="fa fa-share-alt"></i></div></td>
                            <td colspan="2"><div class="rooster-label rooster-ingevuld"><i class="fa fa-check"></i> Janne de Voogd</div></td>
                            
                            
                        </tr>
                        <tr>
                            <td>Verkeersregelaar (Singel)</td>
                            <td><div class="rooster-label rooster-ingevuld"><i class="fa fa-check"></i> Suus van Gerwik</div></td>
                            <td><div class="rooster-label rooster-tekort"><i class="fa fa-warning"></i></div></td>
                            <td colspan="3"><div class="rooster-label rooster-ingevuld"><i class="fa fa-check"></i> Noa Klaassen</div></td>
                            <td><div class="rooster-label rooster-tekort"><i class="fa fa-warning"></i></div></td>
                            <td><div class="rooster-label rooster-optie"><i class="fa fa-share-alt"></i></div></td>
                            <td><div class="rooster-label rooster-tekort"><i class="fa fa-warning"></i></div></td>
                            <td colspan="2"><div class="rooster-label rooster-ingevuld"><i class="fa fa-check"></i> Suus van Gerwik</div></td>
                            <td><div class="rooster-label rooster-ingevuld"><i class="fa fa-check"></i> Tim van Dijk</div></td>
                            <td><div class="rooster-label rooster-tekort"><i class="fa fa-warning"></i></div></td>
                        </tr>
                    </table>
                </div>
                <!-- END TEST ENVIRONMENT -->
                
                
                
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
        <div class="footer">       
                    <h6 class="no-margin" style="text-align:center;font-weight:200;font-size:13px;">Over ons - Algemene voorwaarden - Privacy</h6>
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
        
        <!-- Notification collapse (jQuery) -->
        <script type="text/javascript">
        $(document).ready(function() {
                setTimeout(function() {
                    $( ".notification-bar" ).slideUp(200, function() {
                    // Animation complete.
                    });
                }, 8000);
                setTimeout(function() {
                    $( ".notification-bar" ).slideDown(200, function() {
                    // Animation complete.
                    });
                }, 4000);
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