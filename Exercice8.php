<?php

// Tableau multidimensionnel associatif
$personnes = array(
    'Dia' => array('Malal', 'Dakar', 23),
    'sall' => array('jule', 'pikine', 23),
    'Fall' => array('Modou', 'rufisque', 22),
    // Ajoutez autant de personnes que nécessaire
);

// Accès aux données
echo "Prénom : " . $personnes['Dia'][0] . "<br>";
echo "Ville : " . $personnes['Dia'][1] . "<br>";
echo "Âge  : " . $personnes['Dia'][2] . "<br>";

echo "Prénom : " . $personnes['sall'][0] . "<br>";
echo "Ville : " . $personnes['sall'][1] . "<br>";
echo "Âge  : " . $personnes['sall'][2] . "<br>";

echo "Prénom : " . $personnes['Fall'][0] . "<br>";
echo "Ville : " . $personnes['Fall'][1] . "<br>";
echo "Âge  : " . $personnes['Fall'][2] . "<br>";

?>
