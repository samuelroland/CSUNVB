<?php
$data = [
    [
        'id' => 101,
        'date' => '2020-02-03',
        'base' => 'Payerne',
        'nightjob' => 0,
        'description' => 'Fax 144  Transmission',
        'acknowledged_by' => null,
        'type' => 0,
        'value' => null
    ],
    [
        'id' => 102,
        'date' => '2020-02-03',
        'base' => 'Payerne',
        'nightjob' => 0,
        'description' => 'Check Ambulance et Communication',
        'acknowledged_by' => null,
        'type' => 0,
        'value' => null
    ],
    [
        'id' => 103,
        'date' => '2020-02-03',
        'base' => 'Payerne',
        'nightjob' => 0,
        'description' => 'Contrôle stupéfiants  +  Date perf. Chaudes',
        'acknowledged_by' => 'ABC',
        'type' => 1,
        'value' => null
    ],
    [
        'id' => 104,
        'date' => '2020-02-03',
        'base' => 'Payerne',
        'nightjob' => 0,
        'description' => 'Désinfection Inventaire hebdo Nova N° : {}',
        'acknowledged_by' => null,
        'type' => 1,
        'value' => 12
    ],
    [
        'id' => 105,
        'date' => '2020-02-04',
        'base' => 'Payerne',
        'nightjob' => 1,
        'description' => 'Check bibliothèque',
        'acknowledged_by' => 'XYZ',
        'type' => 0,
        'value' => null
    ],
    [
        'id' => 106,
        'date' => '2020-02-04',
        'base' => 'Payerne',
        'nightjob' => 0,
        'description' => 'Tâches selon nécessité',
        'acknowledged_by' => null,
        'type' => 0,
        'value' => null
    ],
    [
        'id' => 107,
        'date' => '2020-02-04',
        'base' => 'Payerne',
        'nightjob' => 0,
        'description' => 'Check de nuit ',
        'acknowledged_by' => null,
        'type' => 0,
        'value' => null
    ],
    [
        'id' => 108,
        'date' => '2020-02-04',
        'base' => 'Payerne',
        'nightjob' => 0,
        'description' => 'Remise locaux Transmission',
        'acknowledged_by' => null,
        'type' => 0,
        'value' => null
    ],
    [
        'id' => 109,
        'date' => '2020-02-04',
        'base' => 'Payerne',
        'nightjob' => 1,
        'description' => 'Commande O2',
        'acknowledged_by' => null,
        'type' => 0,
        'value' => null
    ],
    [
        'id' => 110,
        'date' => '2020-02-04',
        'base' => 'Payerne',
        'nightjob' => 1,
        'description' => 'Changer Bac chariot de nettoyage',
        'acknowledged_by' => null,
        'type' => 0,
        'value' => null
    ]
];
file_put_contents('data.json',json_encode($data));
?>
