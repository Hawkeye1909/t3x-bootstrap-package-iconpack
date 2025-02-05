<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Iconpack for Bootstrap Package',
    'description' => 'Replaces the icons in bootstrap_package with iconpacks.',
    'category' => 'fe',
    'state' => 'beta',
    'clearcacheonload' => true,
    'author' => 'Stephan Kellermayr',
    'author_email' => 'typo3@quellenform.at',
    'author_company' => 'Kellermayr KG',
    'version' => '0.2.1',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.11-12.4.99',
            'iconpack' => '0.2.0-1.99',
            'bootstrap_package' => '12.0.10-14.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ],
    'autoload' => [
        'psr-4' => ['Quellenform\\BootstrapPackageIconpack\\' => 'Classes']
    ]
];
