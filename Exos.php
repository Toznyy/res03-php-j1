<?php

////////////////////////// Exercice 1
echo "Exercice 1";
echo "<br>";
$nb = 42;
echo $nb;
$str = '42';
echo $str;
$nbstr = "$nb";
echo $nbstr;
echo "<br>";

////////////////////////// Exercice 2
echo "Exercice 2";
echo "<br>";
$nb_tab = [1, 1.1, 1.11, 2];
print_r($nb_tab);
$str_tab = ["Chien", "Chat"];
print_r($str_tab);
echo "<br>";

////////////////////////// Exercice 3
echo "Exercice 3";
echo "<br>";
$animal = [
    "species" => "canidé",
    "name" => "chien",
    "age" => 42
    ];
print_r($animal);
echo "<br>";

////////////////////////// Exercice 4
echo "Exercice 4";
echo "<br>";
$data = 42;
$float = (float) $data;
$str = (string) $float;
print_r($str);
echo "<br>";

////////////////////////// Exercice 5
echo "Exercice 5";
echo "<br>";
$animals = ["Chat", "Chien", "Lapin", "Souris"];

for($i = 0; $i < count($animals); $i++) {
    echo "$animals[$i]\n";
    echo "<br>";
}

foreach($animals as $animal) {
    echo "$animal\n";
    echo "<br>";
}

//////////////////////////// Exercice 6
echo "Exercice 6";
echo "<br>";
?>