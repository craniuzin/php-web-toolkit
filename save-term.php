<?php

    $moods = array(
        'PN' => (int) $_POST['positive-negative'],
        'HS' => (int) $_POST['happy-sad'],
        'IS' => (int) $_POST['intense-subdued'],
        'AS' => (int) $_POST['angry-serene']
    );

    $abs = array(
        'PN' => abs($moods['PN']),
        'HS' => abs($moods['HS']),
        'IS' => abs($moods['IS']),
        'AS' => abs($moods['AS'])
    );

    var_dump($moods, $abs, max($abs));

    // If Happy-Sad is the Greater value
    if($abs['HS'] == max($abs)){
        $coords = array(
            'x' => $moods['PN'],
            'y' => $moods['IS']
        );
    }
    // If INTENSE-SUBDUED is the Greater value
    if($abs['IS'] == max($abs)){
        $coords = array(
            'x' => $moods['HS'],
            'y' => $moods['AS']
        );
    }
    // If ANGRY-SERENE is the Greater value
    if($abs['AS'] == max($abs)){
        $coords = array(
            'x' => $moods['PN'],
            'y' => $moods['IS']
        );
    }
    // If POSITIVE-NEGATIVE is the Greater value
    if($abs['PN'] == max($abs)){
        $coords = array(
            'x' => $moods['AS'],
            'y' => $moods['HS']
        );
    }

    echo '================';
    var_dump($coords);
