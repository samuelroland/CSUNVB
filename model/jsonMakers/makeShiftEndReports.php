<?php
$data = [
    [
        'id' => 3,
        'base' => 'Yverdon',
        'date' => '2020-02-02',
        'respday' => 'Joe',
        'teamday' => [
            'Jack',
            'William',
            'Averell'
        ],
        'vehiclesday' => [
            32,
            34
        ],
        'respnight' => 'Luke',
        'buddynight' => 'Rantanplan',
        'vehiclenight' => 44,
        'equipmentsection' => [
            [
                'header' => 'Radios',
                'done' => 1,
                'comment' => ''
            ],
            [
                'header' => 'Détecteurs CO',
                'done' => 0,
                'comment' => ''
            ],
            [
                'header' => 'Téléphones',
                'done' => 0,
                'comment' => 'iPhone #32: batterie plate'
            ],
            [
                'header' => 'Gt info avisé',
                'done' => 2,
                'comment' => ''
            ],
            [
                'header' => 'Annonce 144',
                'done' => 0,
                'comment' => ''
            ]
        ],
        'vehiclesection' => [
            [
                'header' => 'Plein essence',
                'done' => 0,
                'comment' => ''
            ],
            [
                'header' => 'Opérationnel',
                'done' => 1,
                'comment' => ''
            ],
            [
                'header' => 'Rdv garage',
                'done' => 2,
                'comment' => 'Faudra y penser, pneus lisses'
            ],
            [
                'header' => 'Gt vhc avisé',
                'done' => 0,
                'comment' => ''
            ],
            [
                'header' => '50chf présents',
                'done' => 1,
                'comment' => ''
            ],
            [
                'header' => 'Problèmes d’interventions hors véhicules',
                'done' => 2,
                'comment' => ''
            ]
        ],
        'screenssection' => [
            [
                'header' => 'Info trafic consulté',
                'done' => 1,
                'comment' => ''
            ],
            [
                'header' => 'Report des infos trafic sur plan de secteur en centrale',
                'done' => 1,
                'comment' => ''
            ],
            [
                'header' => 'Accueil étudiant ou stagiaire',
                'done' => 1,
                'comment' => 'Il était en retard de 15 minutes...'
            ],
            [
                'header' => 'Lecture journal de bord ',
                'done' => 1,
                'comment' => ''
            ],
            [
                'header' => 'Problème et responsable Gt avisé',
                'done' => 1,
                'comment' => ''
            ]
        ],
        'basetasksection' => [
            [
                'header' => 'Centrale propre',
                'done' => 2,
                'comment' => 'Chips sur la table'
            ],
            [
                'header' => 'Tâches du jour effectuées',
                'done' => 2,
                'comment' => 'Fatigué...'
            ],
            [
                'header' => 'Dimanche: Fiches stupéfiants et tableau tâches saisies',
                'done' => 2,
                'comment' => 'Aujourd\'hui c\'est mardi'
            ]
        ]
    ],
    [
        'id' => 5,
        'base' => 'Yverdon',
        'date' => '2020-02-03',
        'respday' => 'Jack',
        'teamday' => [
            'Joe',
            'William'
        ],
        'vehiclesday' => [
            33,
            34
        ],
        'respnight' => 'Bill',
        'buddynight' => 'Mike',
        'vehiclenight' => 32,
        'equipmentsection' => [
            [
                'header' => 'Radios',
                'done' => 0,
                'comment' => ''
            ],
            [
                'header' => 'Détecteurs CO',
                'done' => 0,
                'comment' => ''
            ],
            [
                'header' => 'Téléphones',
                'done' => 0,
                'comment' => ''
            ],
            [
                'header' => 'Gt info avisé',
                'done' => 0,
                'comment' => ''
            ],
            [
                'header' => 'Annonce 144',
                'done' => 0,
                'comment' => ''
            ]
        ],
        'vehiclesection' => [
            [
                'header' => 'Plein essence',
                'done' => 0,
                'comment' => ''
            ],
            [
                'header' => 'Opérationnel',
                'done' => 0,
                'comment' => ''
            ],
            [
                'header' => 'Rdv garage',
                'done' => 0,
                'comment' => ''
            ],
            [
                'header' => 'Gt vhc avisé',
                'done' => 0,
                'comment' => ''
            ],
            [
                'header' => '50chf présents',
                'done' => 0,
                'comment' => ''
            ],
            [
                'header' => 'Problèmes d’interventions hors véhicules',
                'done' => 0,
                'comment' => ''
            ]
        ],
        'screenssection' => [
            [
                'header' => 'Info trafic consulté',
                'done' => 2,
                'comment' => ''
            ],
            [
                'header' => 'Report des infos trafic sur plan de secteur en centrale',
                'done' => 2,
                'comment' => ''
            ],
            [
                'header' => 'Accueil étudiant ou stagiaire',
                'done' => 2,
                'comment' => 'Il était en retard de 15 minutes...'
            ],
            [
                'header' => 'Lecture journal de bord ',
                'done' => 2,
                'comment' => 'Pas envie...'
            ],
            [
                'header' => 'Problème et responsable Gt avisé',
                'done' => 2,
                'comment' => ''
            ]
        ],
        'basetasksection' => [
            [
                'header' => 'Centrale propre',
                'done' => 2,
                'comment' => 'Chips toujours sur la table'
            ],
            [
                'header' => 'Tâches du jour effectuées',
                'done' => 1,
                'comment' => ''
            ],
            [
                'header' => 'Dimanche: Fiches stupéfiants et tableau tâches saisies',
                'done' => 0,
                'comment' => ''
            ]
        ]
    ]
];
file_put_contents('data.json',json_encode($data));
?>
