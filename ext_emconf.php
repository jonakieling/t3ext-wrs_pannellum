<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Panoramic Views',
    'description' => 'Pannellum integration for TYPO3, a viewer for 360 degree and panorama images.',
    'category' => 'fe',
    'author' => 'Thomas Scholze',
    'author_email' => 'info@waurisch.de',
    'state' => 'stable',
    'version' => '1.1.0',
    'constraints' =>
    [
    'depends' => [
      'typo3' => '8.7.13-10.4.99',
    ],
    'conflicts' => [],
    'suggests' => [],
    ],
    'clearCacheOnLoad' => true,
    'uploadfolder' => false
];

