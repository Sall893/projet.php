<!DOCTYPE html>
<html>
<head>
    <title>Test de Nombre Parfait</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    Entrez un nombre : <input type="text" name="nombre">
    <input type="submit" value="Tester si Parfait">
</form>

<?php
    // Fonction pour tester si un nombre est parfait
    function estParfait($nombre) {
        $sommeDiviseurs = 0;

        // Trouver les diviseurs et les additionner
        for ($i = 1; $i < $nombre; $i++) {
            if ($nombre % $i == 0) {
                $sommeDiviseurs += $i;
            }
        }

        // Le nombre est parfait si la somme des diviseurs est égale au nombre
        return $sommeDiviseurs == $nombre;
    }

    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer la valeur du champ du formulaire (nombre)
        $nombre = $_POST["nombre"];

        // Vérifier que la valeur est un entier positif
        if (ctype_digit($nombre) && $nombre > 0) {
            // Tester si le nombre est parfait
            if (estParfait($nombre)) {
                echo "$nombre est un nombre parfait.";
            } else {
                echo "$nombre n'est pas un nombre parfait.";
            }
        } else {
            // Afficher un message d'erreur si la valeur n'est pas valide
            echo "Veuillez entrer un nombre entier positif.";
        }
    }
?>


</body>
</html>
