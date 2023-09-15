
<?php
$EM_CONF['academic_persons_sync'] = [
    'title' => 'FGTCLB: Academic Persons Sync',
    'description' => 'Adds some configuration for external users providers like Active Directory.',
    'category' => 'plugin',
    'author' => 'Tim Schreiner',
    'author_email' => 'tim.schreiner@km2.de',
    'author_company' => 'FGTCLB',
    'state' => 'beta',
    'version' => '0.1.0',
    'clearCacheOnLoad' => true,
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            "academic_persons" => "0.1.0 - 0.1.99",
            "academic_persons_edit" => "0.1.0 - 0.1.99",
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];