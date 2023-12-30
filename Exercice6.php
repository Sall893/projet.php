<!DOCTYPE html>
<html>
<head>
    <title>Diviseurs d'un Nombre</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    Entrez un nombre : <input type="text" name="nombre">
    <input type="submit" value="Afficher les Diviseurs">
</form>

<?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer la valeur du champ du formulaire (nombre)
        $nombre = $_POST["nombre"];

        // Vérifier que la valeur est un entier positif
        if (ctype_digit($nombre) && $nombre > 0) {
            // Afficher le titre
            echo "Les diviseurs de $nombre sont : ";

            // Trouver et afficher les diviseurs
            for ($i = 1; $i <= $nombre; $i++) {
                if ($nombre % $i == 0) {
                    echo "$i ";

                    // Ajouter une virgule si ce n'est pas le dernier diviseur
                    if ($i != $nombre) {
                        echo ", ";
                    }
                }
            }
        } else {
            // Afficher un message d'erreur si la valeur n'est pas valide
            echo "Veuillez entrer un nombre entier positif.";
        }
    }
?>


</body>
</html>
