<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'SlugR',
    'description' => 'Update slugs and add redirects to it',
    'category' => 'fe',
    'version' => '1.0.0',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'author' => 'Benni Mack',
    'author_email' => 'typo3@b13.com',
    'author_company' => 'b13 GmbH',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-11.5.99',
        ],
    ],
];
