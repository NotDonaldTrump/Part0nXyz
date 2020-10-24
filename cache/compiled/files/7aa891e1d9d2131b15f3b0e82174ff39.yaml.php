<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/part0n.xyz/rismose/user/plugins/archives/archives.yaml',
    'modified' => 1602113433,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'date_display_format' => 'F Y',
        'show_count' => true,
        'limit' => 12,
        'taxonomy_names' => [
            'month' => 'archives_month',
            'year' => 'archives_year'
        ],
        'order' => [
            'by' => 'date',
            'dir' => 'desc'
        ],
        'filters' => [
            'category' => 'blog'
        ],
        'filter_combinator' => 'and',
        'page_specific_config' => [
            0 => [
                'route' => '/blog',
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'filters' => [
                    'page@' => '/blog'
                ],
                'filter_combinator' => 'and'
            ]
        ]
    ]
];
