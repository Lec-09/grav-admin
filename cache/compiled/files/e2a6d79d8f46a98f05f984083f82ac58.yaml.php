<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-admin/user/config/site.yaml',
    'modified' => 1756694905,
    'size' => 330,
    'data' => [
        'title' => 'Administacion de sistemas ',
        'default_lang' => 'es',
        'author' => [
            'name' => 'Marcel Chamorro',
            'email' => 'mchamorro@usm.cl'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
