Exercice 9
<?php
$personnes = array(
    "Personne1" => array(
        "prenom" => "Jule",
        "Ville" => "Dakar",
        "age" => 20
    ),
    "Personne1" => array(
        "prenom" => "ousmane",
        "Ville" => "Thies",
        "age" => 25
    ),
    "Personne1" => array(
        "prenom" => "Alioune",
        "Ville" => "Matam",
        "age" => 30
    ),

);
foreach ($personnes as $nom=> $infos){
    echo "$nom :";
    foreach ($infos as $cle =>$valeur){
        echo "$cle=>$valeur,";
    }
    echo "\n";
}
?>