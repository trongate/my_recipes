<?php
// $band_members[] = 'Jimi Hendrix';
// $band_members[] = 'Mitch Mitchell';
// $band_members[] = 'Noel Redding';

$band_members = [
    [
        'name' => 'Jimi Hendrix',
        'instrument' => 'guitar',
        'age' => 27
    ],
    [
        'name' => 'Mitch Mitchell',
        'instrument' => 'drums',
        'age' => 24
    ],
    [
        'name' => 'Noel Redding',
        'instrument' => 'bass',
        'age' => 24
    ]
];

foreach($band_members as $member) {
    echo $member['name'].'<br>';
    echo $member['instrument'].'<br>';
    echo $member['age'].'<hr>';
}




