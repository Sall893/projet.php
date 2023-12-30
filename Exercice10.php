Exercice 10
<?php
$personnesExercice8 = array(
    "Personne1" => array(
        "prenom" => "Yuri",
        "Ville" => "Dakar",
        "age" => 20
    ),
    "Personne1" => array(
        "prenom" => "Omar",
        "Ville" => "Thies",
        "age" => 25
    ),
    "Personne1" => array(
        "prenom" => "Ababacar",
        "Ville" => "Matam",
        "age" => 30
    ),

);
echo "Exercice 8 - Utilisation de foreach :\n";
foreach ($personnesExercice8 as $nom=> $infos){
    echo "$nom :";
    foreach ($infos as $cle =>$valeur){
        echo "$cle=>$valeur,";
    }
    echo "\n";
}
$personnesExercice9 = array(
    "Personne1" => array(
        "prenom" => "Jule",
        "Ville" => "Dakar",
        "age" => 20
    ),
    "Personne1" => array(
        "prenom" => "Ousmane",
        "Ville" => "Thies",
        "age" => 25
    ),
    "Personne1" => array(
        "prenom" => "Alioune",
        "Ville" => "Matam",
        "age" => 30
    ),

);
echo "Exercice 9 - Utilisation de foreach :\n";
foreach ($personnesExercice9 as $nom=> $infos){
    echo "$nom :";
    foreach ($infos as $cle =>$valeur){
        echo "$cle=>$valeur,";
    }
    echo "\n";
}
?>