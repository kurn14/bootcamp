<?php

$var1 = [
    1,2,3,4,5,6
];

$var2 = [
    'satu', 'dua', 'tiga', 'empat', 'lima', 'enam'
];

$var3 = [
    1 => 'satu',
    2 => 'dua',
    3 => 'tiga',
    4 => 'empat',
    5 => 'lima',
    6 => 'enam'
];

$var4 = [
    'satu' => 1,
    'dua' => 2,
    'tiga' => 3,
    'empat' => 4,
    'lima' => 5,
    'enam' => 6
];

$var5 = [
    1 => [
        'nama' => 'Kelas 1',
        'siswa' => [
            0 => 'Budi',
            1 => 'Siti',
            2 => 'Joko'
        ]
    ],
    2 => [
        'nama' => 'Kelas 2',
        'siswa' => [
            0 => 'Ali',
            1 => 'Ani',
            2 => 'Budi'
        ]
    ],
    3 => [
        'nama' => 'Kelas 3',
        'siswa' => [
            0 => 'Siti',
            1 => 'Joko',
            2 => 'Ali'
        ]
    ],
    'kelas-khusus' => [
        'nama' => 'Kelas Khusus',
        'guru' => 'Pak Budi',
        'siswa'=> []
    ]


];

var_dump($var5[1]['nama']);
