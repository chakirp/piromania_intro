<?php

/**
 * Extension Manager/Repository config file for ext "piromania_intro".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Piromania Intro',
    'description' => 'skin testing on v11',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Piromaniacom\\PiromaniaIntro\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Chakir',
    'author_email' => 'chakir.piro@gmail.com',
    'author_company' => 'Piromania.com',
    'version' => '1.0.0',
];
