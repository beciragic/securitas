<?php

/**
 * Extension Manager/Repository config file for ext "securitas".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Securitas',
    'description' => 'Site Packege',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '13.0.0-13.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Trendhosting\\Securitas\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Dado',
    'author_email' => 'dado@intronet.ch',
    'author_company' => 'Trendhosting',
    'version' => '1.0.0',
];
