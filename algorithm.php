<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

// Testevenement
// --------------
// Duur: 5 uur => 20 kwartieren
// Locaties: 3 (Luchtkussen, Draaimolen, Stormbaan)
// Vrijwilligers: 8 
// 

// === Gegevens inladen ===
// * Vrijwilligers
$vrijwilligers = array(
    array(
        'naam'              = 'Sanne',
        'v_id'              = 1,
        'beschikbaarheid'   = array(9, 10, 11, 12, 13, 14, 15, 16, 20),
        'max_tijd'          = 3,
        'locaties_niet'     = array(),
        'locaties_wel'      = array(),
        'samen_met'         = array(4, 5),
        ),
    
    array(
        'naam'              = 'Klaas',
        'v_id'              = 2,
        'beschikbaarheid'   = array(5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
        'max_tijd'          = 4,
        'locaties_niet'     = array(),
        'locaties_wel'      = array(),
        'samen_met'         = array(),
        ),
    
    array(
        'naam'              = 'Janneke',
        'v_id'              = 3,
        'beschikbaarheid'   = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
        'max_tijd'          = 4,
        'locaties_niet'     = array(),
        'locaties_wel'      = array(),
        'samen_met'         = array(),
        ),
    array(
        'naam'              = 'Simon',
        'v_id'              = 4,
        'beschikbaarheid'   = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
        'max_tijd'          = 4,
        'locaties_niet'     = array(),
        'locaties_wel'      = array(),
        'samen_met'         = array(),
        ),
    array(
        'naam'              = 'Sterre',
        'v_id'              = 5,
        'beschikbaarheid'   = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
        'max_tijd'          = 4,
        'locaties_niet'     = array(),
        'locaties_wel'      = array(),
        'samen_met'         = array(),
        ),
    array(
        'naam'              = 'Anne',
        'v_id'              = 6,
        'beschikbaarheid'   = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
        'max_tijd'          = 4,
        'locaties_niet'     = array(),
        'locaties_wel'      = array(),
        'samen_met'         = array(),
        ),
    array(
        'naam'              = 'Bart',
        'v_id'              = 7,
        'beschikbaarheid'   = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
        'max_tijd'          = 4,
        'locaties_niet'     = array(),
        'locaties_wel'      = array(),
        'samen_met'         = array(),
        ),
    array(
        'naam'              = 'Tim',
        'v_id'              = 8,
        'beschikbaarheid'   = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
        'max_tijd'          = 4,
        'locaties_niet'     = array(),
        'locaties_wel'      = array(),
        'samen_met'         = array(),
        )
    );

// * Locaties
$locaties = array(
    array(
        'naam'          = 'Luchtkussen',
        'l_id'          = 1,
        'coordinaten'   = array(
                            'OL'    =   '',
                            'WB'    =   ''
                            ),
        'momenten'      = array(
                            1   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            2   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            3   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            4   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            5   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            6   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            7   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            8   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            9   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            10  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            11  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            12  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            13  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            14  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            15  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            16  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            17  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            18  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            19  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            20  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            )
    ),
    
    array(
        'naam'          = 'Draaimolen',
        'l_id'          = 2,
        'coordinaten'   = array(
                            'OL'    =   '',
                            'WB'    =   ''
                            ),
        'momenten'      = array(
                            1   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            2   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            3   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            4   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            5   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            6   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            7   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            8   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            9   =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            10  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            11  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            12  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            13  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            14  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            15  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            16  =   array('aantal_vrijwilligers'  = 1, 'gepinde_vrijwilligers' = array()),
                            )
    ),
    
    array(
        'naam'          = 'Stormbaan',
        'l_id'          = 3,
        'coordinaten'   = array(
                            'OL'    =   '',
                            'WB'    =   ''
                            ),
        'momenten'      = array(
                            1   =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            2   =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            3   =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            4   =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            5   =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            6   =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            7   =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            8   =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            9   =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            10  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            11  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            12  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            13  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            14  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            15  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            16  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            17  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            18  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            19  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            20  =   array('aantal_vrijwilligers'  = 2, 'gepinde_vrijwilligers' = array()),
                            )
    )
    
);

// === Capaciteitscheck ===
for($l=1; $l <= count($locaties); $l++){                    // Voor elke locatie
    foreach($locaties){
        for($m=1; $m <= $momenten_aantal; $m++){                // Voor elk moment       
            for($v=0; $v < count($vrijwilligers); $v++){  // Voor elke vrijwilliger
                if(in_array($m, $vrijwilligers_beschikbaarheid[$v]) AND !(in_array($l, $vrijwilligers_locaties_niet[$v]))){
                    $capaciteit[$l.'-'.$m][] = $v;
                }
            }
        }
    }
}

for($t=0; $t < count($capaciteit); $t++){
    $capaciteit_tijdslotten = array_keys($capaciteit);
    $tijdslot = $capaciteit_tijdslotten[$t];
    $capaciteit[$tijdslot]['count'] = count($capaciteit[$capaciteit_tijdslotten[$t]]);
}

$capaciteit_uren = array_sum($vrijwilligers_maximale_tijd) - ($momenten_aantal * $locaties_aantal);
echo 'Capaciteitscheck: '.$capaciteit_uren.'<br />';

for($x=0; $x<1000; $x++){
    unset($planning);
    for($t=0; $t < count($capaciteit); $t++){
        $capaciteit_tijdslotten = array_keys($capaciteit);
        $tijdslot = $capaciteit_tijdslotten[$t];
        $count = $capaciteit[$tijdslot]['count'] - 1;
        $rand = rand(0, $count);\
        $vrijwilliger = $capaciteit[$tijdslot][$rand];
        $planning['locaties'][$tijdslot] = $vrijwilligers_namen[$vrijwilliger];

        if(!isset($planning['uren'][strval($vrijwilliger)])){
            $planning['uren'][strval($vrijwilliger)] = 0;
        }

        $planning['uren'][strval($vrijwilliger)] = $planning['uren'][strval($vrijwilliger)] + 1;
    }
    
    // Harde eisen
    // * Maximaal aantal uren
    $eis_max_uren = true;
    foreach($planning['uren'] as $vrijwilliger => $uren){
        if($uren > $vrijwilligers_maximale_tijd[$vrijwilliger]){
            $max++;
            continue;
        }
    }
    
    // Zachte eisen
    // * L Gemiddeld aantal taken
    unset($gemiddelde);
    unset($spreiding);
    $eis_gemiddelde = false;
    $gemiddelde = array_sum($planning['uren']) / count($vrijwilligers_namen);
    if(!isset($eis_gemiddelde_number)){
        $eis_gemiddelde_vorige = $gemiddelde;
    }
    if($gemiddelde < $eis_gemiddelde_vorige){
        $eis_gemiddelde_vorige = $gemiddelde;
        $eis_gemiddelde = true;
    }
    
    // * L Spreiding
    unset($gemiddelde);
    $eis_spreiding = false;
    $gemiddelde = array_sum($planning['uren']) / count($vrijwilligers_namen);
    foreach($planning['uren'] as $uur){
        if(isset($spreiding)){
            $spreiding = $spreiding + abs($uur - $gemiddelde);
        }
        else {
            $spreiding = abs($uur - $gemiddelde);
        }
    } 
    
    if(!isset($eis_spreiding_number)){
        $eis_spreiding_number = $spreiding;
    }
    if($spreiding < $eis_spreiding_number){
        $eis_spreiding_number = $spreiding;
        $eis_spreiding = true;
    }
    
    // Check de zachte eisen
    if(isset($beste_planning)){
        if($eis_gemiddelde == true OR $eis_spreiding == true){
            $beste_planning = $planning;
            $beste_gemiddelde = $gemiddelde;
            $beste_spreiding = $spreiding;
            $verbeteringen++;
        }
    }
    else{
        $beste_planning = $planning;
        $beste_gemiddelde = $gemiddelde;
        $beste_spreiding = $spreiding;
    }
}
echo 'Maxuren: '.$max;
echo '<pre>';
print_r($beste_planning);
echo '</pre>';

echo 'Gemiddelde: '.$beste_gemiddelde.'<br />';
echo 'Spreiding: '.$beste_spreiding.'<br />';
echo 'Verbeteringen: '.$verbeteringen.'<br />'






?>