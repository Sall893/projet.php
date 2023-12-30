Exercice 11
<?php
$personnes = array(
    'Dia' => array('Malal', 'Dakar', 23),
    'sall' => array('jule', 'pikine', 23),
    'Fall' => array('Modou', 'rufisque', 22),
    // Ajoutez autant de personnes que nécessaire
);
$keys = array_keys($personnes);


$j = 0;


while ($j < count($keys)) {
    $nom = $keys[$j];
    $person = $personnes[$nom];

    echo "Nom: $nom.<br>";


    $i = 0;
    while ($i < count($person)) {
        $key = array_keys($person)[$i];
        $value = $person[$key];
        echo "indice[$key]: $value.<br>";
        $i++;
    }

    echo "<br>";


    $j++;
}

$personnesExercice9 = array(
    "Personne1" => array(
        "prenom" => "Jule",
        "Ville" => "Dakar",
        "age" => 20
    ),
    "Personne2" => array(
        "prenom" => "Ousmane",
        "Ville" => "Thies",
        "age" => 25
    ),
    "Personne3" => array(
        "prenom" => "Alioune",
        "Ville" => "Matam",
        "age" => 30
    )

);

$cle = array_keys($personnesExercice9);
$i=0;
while ($i < count($cle)){
    $nom = $cle[$i];
    $personne = $personnesExercice9[$nom];
    foreach ($personne as $key => $value){
        echo $key. ":". $value. "<br>";
    }
    echo "<br>";
    $i++;
}
?>