Exercice 17
<?php
function afficherTableauXHTML($tableau) {
    echo '<table border="1">';
    
    // En-tête du tableau avec les clés du premier niveau comme titres
    echo '<tr>';
    foreach (array_keys(current($tableau)) as $titre) {
        echo '<th>' . htmlspecialchars($titre) . '</th>';
    }
    echo '</tr>';

    // Corps du tableau avec les données
    foreach ($tableau as $ligne) {
        echo '<tr>';
        foreach ($ligne as $valeur) {
            echo '<td>' . htmlspecialchars($valeur) . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';
}

// Exemple d'utilisation :
$tableauMultidimensionnel = array(
    array('Nom' => 'Moussa', 'Âge' => 25, 'Ville' => 'Dakar'),
    array('Nom' => 'Omar', 'Âge' => 30, 'Ville' => 'Kaolack'),
    array('Nom' => 'Issa', 'Âge' => 22, 'Ville' => 'St louis')
);

afficherTableauXHTML($tableauMultidimensionnel);
?>