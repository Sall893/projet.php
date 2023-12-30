<!DOCTYPE html>
<html>
<head>
    <title>Calcul PPCM</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    Entrez le premier entier : <input type="text" name="entier1">
    Entrez le deuxième entier : <input type="text" name="entier2">
    <input type="submit" value="Calculer PPCM">
</form>
<?php
    // Fonction pour calculer le PGCD (Plus Grand Commun Diviseur)
    function pgcd($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    // Fonction pour calculer le PPCM (Plus Petit Commun Multiple)
    function ppcm($a, $b) {
        return ($a * $b) / pgcd($a, $b);
    }

    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les valeurs des champs du formulaire
        $entier1 = $_POST["entier1"];
        $entier2 = $_POST["entier2"];

        // Vérifier que les valeurs sont des entiers positifs
        if (is_numeric($entier1) && is_numeric($entier2) && $entier1 > 0 && $entier2 > 0) {
            // Calculer le PPCM des deux entiers
            $resultat = ppcm($entier1, $entier2);

            // Afficher le résultat
            echo "Le PPCM de $entier1 et $entier2 est : $resultat";
        } else {
            // Afficher un message d'erreur si les valeurs ne sont pas valides
            echo "Veuillez entrer des entiers positifs valides.";
        }
    }
?>



</body>
</html>
