<?php

// Variables 

$firstName = "Margaret"; // string
$date = date('today'); // string
$age = 10; // int
$price = 1.99; // float
$values = ['value 1', 'value 2', 'value 3']; // array (numeric)
$values = ['key 1' => 'value 1', 'key 2' => 'value 2', 'key 3' => 'value 3']; // array associatif key value
$values = [
    'categorie 1' => ['value 1', 'value 2', 'value 3'],
    'categorie 2' => ['value 1', 'value 2', 'value 3'],
    'categorie 3' => ['value 1', 'value 2', 'value 3'],
]; // array multidimensionnelle
$isOk = true; // boolean

// Structure de controle

if ($isOk === false) {
    echo "You have to be ok";
} else {
    echo "Well done !";
}

// Boucles
// foreach 
foreach ($values as $value) {
    echo $value;
}
// for
for ($i=0; $i < 5; $i++) { 
    echo $i;
}
// while
$i = 0;
do {
    echo $i++;
} while ($i < 5);

// Function
function getAge($year, $birthday)
{
    return $year - $birthday;
}
// call function
echo getAge(2021, 1995);


