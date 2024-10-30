<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Example: site sets compat',
    'description' => 'Example of how to provide site sets in an extension that is compatible with older TYPO3 versions',
    'category' => 'example',
    'author' => 'Chris Müller',
    'author_email' => 'typo3@brotkrueml.dev',
    'state' => 'stable',
    'version' => '1.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
