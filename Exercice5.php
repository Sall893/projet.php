<!DOCTYPE html>
<html>
<head>
    <title>Calculs pour un Cercle</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    Entrez le rayon du cercle : <input type="text" name="rayon">
    <input type="submit" value="Calculer">
</form>
<?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer la valeur du champ du formulaire (rayon)
        $rayon = $_POST["rayon"];

        // Vérifier que la valeur est un nombre positif
        if (is_numeric($rayon) && $rayon > 0) {
            // Calculer le diamètre, le périmètre et la surface du cercle
            $diametre = 2 * $rayon;
            $perimetre = 2 * M_PI * $rayon;
            $surface = M_PI * pow($rayon, 2);

            // Afficher les résultats
            echo "Le diamètre du cercle est : $diametre <br>";
            echo "Le périmètre du cercle est : $perimetre <br>";
            echo "La surface du cercle est : $surface";
        } else {
            // Afficher un message d'erreur si la valeur n'est pas valide
            echo "Veuillez entrer un rayon valide (nombre positif).";
        }
    }
?>


</body>
</html>
