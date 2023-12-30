<?php
// Fonction pour générer un nombre aléatoire à trois chiffres
function genererNombreAleatoire() {
    return rand(100, 999);
}

// Fonction pour effectuer les tirages
function effectuerTirages($nombreInitial) {
    $tentatives = 0;

    // Utilisation de la boucle while
    while (true) {
        $tirage = genererNombreAleatoire();
        $tentatives++;

        if ($tirage == $nombreInitial) {
            break;
        }
    }

    // Affichage des résultats
    echo "Nombre initial : $nombreInitial<br>";
    echo "Nombre de coups (while) : $tentatives<br>";

    // Réinitialisation des variables pour la boucle for
    $tentatives = 0;

    // Utilisation de la boucle for
    for ($tentatives = 1; genererNombreAleatoire() != $nombreInitial; $tentatives++) {
        // La condition est vérifiée à chaque itération
        // Aucun code à exécuter dans le corps de la boucle
    }

    // Affichage des résultats pour la boucle for
    echo "Nombre de coups (for) : $tentatives<br>";
}

// Choisissez un nombre de trois chiffres
$nombreInitial = 456;

// Effectuez les tirages
effectuerTirages($nombreInitial);
?>
