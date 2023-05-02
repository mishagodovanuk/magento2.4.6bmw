<?php
return [
    'backend' => [
        'frontName' => 'admin_qk5j5s'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'HXrU8dkWZzZFWc47KwAewSWbDILQw8Yw'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => 'a6b_'
            ],
            'page_cache' => [
                'id_prefix' => 'a6b_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '0815dec6b070a7503f77bc721ef5caea'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'bmw',
                'username' => 'mihod',
                'password' => 'Callofduty1997#',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 0,
        'block_html' => 0,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 0,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'bmw'
    ],
    'install' => [
        'date' => 'Fri, 28 Apr 2023 10:14:16 +0000'
    ]
];
