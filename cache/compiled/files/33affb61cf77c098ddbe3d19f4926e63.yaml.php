<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/part0n.xyz/rismose/user/config/groups.yaml',
    'modified' => 1603417177,
    'data' => [
        'Owner' => [
            'groupname' => 'Owner',
            'access' => [
                'site' => [
                    'login' => 'true'
                ],
                'admin' => [
                    'super' => 'true',
                    'login' => 'true',
                    'cache' => 'true',
                    'configuration' => 'true',
                    'configuration_system' => 'true',
                    'configuration_site' => 'true',
                    'configuration_media' => 'true',
                    'configuration_info' => 'true',
                    'settings' => 'true',
                    'pages' => 'true',
                    'maintenance' => 'true',
                    'statistics' => 'true',
                    'plugins' => 'true',
                    'themes' => 'true',
                    'tools' => 'true',
                    'users' => 'true'
                ],
                'admin-addon-user-manager' => [
                    'users' => 'true',
                    'groups' => 'true',
                    'users_expert' => 'true'
                ]
            ]
        ],
        'Admin' => [
            'groupname' => 'Admin',
            'access' => [
                'site' => [
                    'login' => 'true'
                ],
                'admin' => [
                    'super' => 'true',
                    'login' => 'true',
                    'cache' => 'false',
                    'configuration' => 'false',
                    'configuration_system' => 'false',
                    'configuration_site' => 'false',
                    'configuration_media' => 'false',
                    'configuration_info' => 'false',
                    'settings' => 'false',
                    'pages' => 'true',
                    'maintenance' => 'false',
                    'statistics' => 'true',
                    'plugins' => 'false',
                    'themes' => 'false',
                    'tools' => 'false',
                    'users' => 'false'
                ],
                'admin-addon-user-manager' => [
                    'users' => 'false',
                    'groups' => 'false',
                    'users_expert' => 'false'
                ]
            ]
        ]
    ]
];
