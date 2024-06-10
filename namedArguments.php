<?php

function savePerson(
    string $name,
    int $age,
    string $country,
    float $height,
    string $momName
){
    return 'person saved ';
}

// default way
echo savePerson(
    'Renan',
    30,
    'BR',
    1.73,
    'Tuia'
);

$array = [
    'age' => 35,
    'name' => 'Renan',
    'height' => 1.73,
    'country' => 'Brasil',
    'momName' => 'Tuia'
];

// with array, old way
echo savePerson(
    $array['name'], $array['age'], $array['country'], $array['height'], $array['momName']
);

// new way, namedArguments - order don't matter
echo savePerson(name: 'Renan Ferri', momName: 'Tuia', country: 'BR', height: 1.73, age: 35);

// new way, namedArguments - spread operator - split values of array
echo savePerson(...$array);
