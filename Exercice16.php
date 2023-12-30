<!DOCTYPE html>
<html>
<head>
    <title>Calcul du Sinus</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    Entrez l'angle : <input type="text" name="angle">
    Choisissez l'unité :
    <select name="unite">
        <option value="radian">Radian</option>
        <option value="degre">Degré</option>
        <option value="grade">Grade</option>
    </select>
    <input type="submit" value="Calculer Sinus">
</form>

<?php
    // Fonction pour calculer le sinus en fonction de l'unité de mesure
    function calculerSinus($angle, $unite = "radian") {
        // Convertir l'angle en radian si l'unité n'est pas radian
        if ($unite == "degre") {
            $angle = deg2rad($angle);
        } elseif ($unite == "grade") {
            $angle = deg2rad($angle * 9 / 10);
        }

        // Calculer le sinus de l'angle
        $sinus = sin($angle);

        return $sinus;
    }

    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les valeurs du formulaire
        $angle = $_POST["angle"];
        $unite = $_POST["unite"];

        // Vérifier que l'angle est un nombre
        if (is_numeric($angle)) {
            // Calculer le sinus en fonction de l'unité
            $sinus = calculerSinus($angle, $unite);

            // Afficher le résultat
            echo "Le sinus de $angle $unite est : $sinus";
        } else {
            // Afficher un message d'erreur si l'angle n'est pas un nombre
            echo "Veuillez entrer une valeur numérique pour l'angle.";
        }
    }
?>


</body>
</html>
