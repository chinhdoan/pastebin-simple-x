<?php
/*
    API Parameters rules
    Auto generated at 2020-10-23 11:58:15
*/
return [
    '/post' => [
        'POST' => [
            'lang' => [
                'type' => 'string',
                'required' => true,
            ],
            'title' => [
                'type' => 'string',
            ],
            'content' => [
                'type' => 'string',
                'required' => true,
            ],
            'comment' => [
                'type' => 'string',
            ],
        ],
    ],
    '/post/@id' => [
        'GET' => [
            'render' => [
                'type' => 'bool',
                'default' => 'false',
            ],
        ],
    ],
];