<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul TVA</title>
</head>
<body>

<?php
// Initialise les variables pour conserver les données saisies
$prixHT = isset($_POST['prixHT']) ? $_POST['prixHT'] : '';
$tauxTVA = isset($_POST['tauxTVA']) ? $_POST['tauxTVA'] : '';

// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifie si les champs nécessaires sont remplis
    if (!empty($prixHT) && !empty($tauxTVA)) {
        // Calcule le montant de la TVA
        $montantTVA = $prixHT * ($tauxTVA / 100);

        // Calcule le prix TTC
        $prixTTC = $prixHT + $montantTVA;
    } else {
        // Affiche un message d'erreur si les champs sont vides
        echo '<p style="color: red;">Veuillez remplir tous les champs.</p>';
    }
}
?>

<!-- Formulaire -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="prixHT">Prix HT :</label>
    <input type="text" name="prixHT" value="<?php echo $prixHT; ?>" required><br>

    <label for="tauxTVA">Taux de TVA :</label>
    <input type="text" name="tauxTVA" value="<?php echo $tauxTVA; ?>" required><br>

    <input type="submit" value="Calculer">
</form>

<!-- Résultats -->
<?php if (isset($montantTVA) && isset($prixTTC)) : ?>
    <h2>Résultats :</h2>
    <p>Montant de la TVA : <?php echo $montantTVA; ?> €</p>
    <p>Prix TTC : <?php echo $prixTTC; ?> €</p>
<?php endif; ?>

</body>
</html>
