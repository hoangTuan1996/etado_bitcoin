<?php
return [
    'status' => [
        'on' => 1,
        'off' => 0
    ],
    'status_bill' => [
        'cancel' => 2,
        'finish' => 1,
        'unfinished' => 0
    ],
    'users' => [
        'code_prefix' => env('USER_PREFIX', 'NV'),
        'gender' =>
            [
                'male' => 0,
                'female' => 1
            ],
        'position' => [
            'admin' => 1,
            'teacher' => 2
        ]
    ],
    'courses' => [
        'status' => [
            'open' => 1,
            'in_progress' => 2,
            'finished' => 3,
            'closed' => 4,
        ]
    ],
    'category' => [
        'code_prefix' => env('CATEGORY_PREFIX', 'CATE'),
    ],
    'students' => [
        'code_prefix' => env('CATEGORY_PREFIX', 'HV'),
    ],
    'contact' => [
        'not-contact' => 1,
        'contact-success' => 2,
        'not-success' => 3
    ]
];
