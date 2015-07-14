<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

// Testevenement
// --------------
// Duur: 5 uur => 20 kwartieren
// Taken: 3 (Luchtkussen, Draaimolen, Stormbaan)
// Vrijwilligers: 8 
// 

// === Gegevens inladen ===
// * Vrijwilligers
$vrijwilligers = array(
    array(
        'naam'              => 'Sanne',
        'v_id'              => 1,
        'beschikbaarheid'   => array(9, 10, 11, 12, 13, 14, 15, 16, 20),
        'max_tijd'          => 3,
        'taken_niet'        => array(),
        'taken_wel'         => array(),
        'samen_met'         => array(4, 5),
        ),
    
    array(
        'naam'              => 'Klaas',
        'v_id'              => 2,
        'beschikbaarheid'   => array(5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
        'max_tijd'          => 4,
        'taken_niet'        => array(),
        'taken_wel'         => array(),
        'samen_met'         => array(),
        ),
    
    array(
        'naam'              => 'Janneke',
        'v_id'              => 3,
        'beschikbaarheid'   => array(1, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
        'max_tijd'          => 4,
        'taken_niet'        => array(),
        'taken_wel'         => array(),
        'samen_met'         => array(),
        ),
    array(
        'naam'              => 'Simon',
        'v_id'              => 4,
        'beschikbaarheid'   => array(1, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
        'max_tijd'          => 4,
        'taken_niet'        => array(),
        'taken_wel'         => array(),
        'samen_met'         => array(),
        ),
    array(
        'naam'              => 'Sterre',
        'v_id'              => 5,
        'beschikbaarheid'   => array(1, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
        'max_tijd'          => 4,
        'taken_niet'        => array(),
        'taken_wel'         => array(),
        'samen_met'         => array(),
        ),
    array(
        'naam'              => 'Anne',
        'v_id'              => 6,
        'beschikbaarheid'   => array(1, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
        'max_tijd'          => 4,
        'taken_niet'        => array(),
        'taken_wel'         => array(),
        'samen_met'         => array(),
        ),
    array(
        'naam'              => 'Bart',
        'v_id'              => 7,
        'beschikbaarheid'   => array(1, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
        'max_tijd'          => 4,
        'taken_niet'        => array(),
        'taken_wel'         => array(),
        'samen_met'         => array(),
        ),
    array(
        'naam'              => 'Tim',
        'v_id'              => 8,
        'beschikbaarheid'   => array(1, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
        'max_tijd'          => 4,
        'taken_niet'        => array(),
        'taken_wel'         => array(),
        'samen_met'         => array(),
        )
    );

// * Taken
$taken = array(
    array(
        'naam'          => 'Luchtkussen',
        't_id'          => 1,
        'coordinaten'   => array(
                            'OL'    =>   '',
                            'WB'    =>   ''
                            ),
        'momenten'      => array(
                            1   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            2   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            3   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            4   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            5   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            6   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            7   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            8   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            9   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            10  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            11  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            12  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            13  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            14  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            15  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            16  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            17  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            18  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            19  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            20  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            )
    ),
    
    array(
        'naam'          => 'Draaimolen',
        't_id'          => 2,
        'coordinaten'   => array(
                            'OL'    =>   '',
                            'WB'    =>   ''
                            ),
        'momenten'      => array(
                            1   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            2   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            3   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            4   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            5   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            6   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            7   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            8   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            9   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            10  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            11  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            12  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            13  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            14  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            15  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            16  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            )
    ),
    
    array(
        'naam'          => 'Stormbaan',
        't_id'          => 3,
        'coordinaten'   => array(
                            'OL'    =>   '',
                            'WB'    =>   ''
                            ),
        'momenten'      => array(
                            1   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            2   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            3   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            4   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            5   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            6   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            7   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            8   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            9   =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            10  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            11  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            12  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            13  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            14  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            15  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            16  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            17  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            18  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            19  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            20  =>   array('aantal_vrijwilligers'  => 1, 'gepinde_vrijwilligers' => array()),
                            )
    ),
);
// *** Gatencheck ***
// Hoeveel plekken zijn er waarop geen enkele vrijwilliger kan worden ingezet?
// ==================


foreach($taken as $taak){
    foreach($taak['momenten'] as $moment_id => $moment){
        // Voor elk moment binnen elke taak...
        // - Check het aantal benodigde vrijwilligers
        $aantal_vrijwilligers = $moment['aantal_vrijwilligers'];
        // - Check het moment-id (tijdcode).
        $moment_id = $moment_id;
        // - Stel een counter in
        $beschikbaar_count = 0;
        // - Ga voor elke vrijwilliger na of hij of zij beschikbaar is
        foreach($vrijwilligers as $vrijwilliger){
            $beschikbaarheid = $vrijwilliger['beschikbaarheid'];
//                echo '<pre>';
//                print_r($beschikbaarheid);
//                echo '</pre>';
            if(in_array($moment_id, $beschikbaarheid)){
                $beschikbaar_count++;
            }

        }
        // - Ga na of er een gat is;
        if($beschikbaar_count == 0){
            $gaten[$taak['t_id']][] = $moment_id;
        }
    }
}

echo '<pre>';
print_r($gaten);
echo '</pre>';








?>