<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Adresse Client</title>
</head>
<body>

<h2>Formulaire Adresse Client</h2>

<form action="traitement.php" method="post">
    <fieldset>
        <legend>Adresse client</legend>
        
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>
        
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br>
        
        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse" required><br>
        
        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville" required><br>
        
        <label for="code_postal">Code Postal :</label>
        <input type="text" id="code_postal" name="code_postal" required><br>
    </fieldset>
    
    <br>
    <?php
// Récupérer les données du formulaire
$nom = isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '';
$prenom = isset($_POST['prenom']) ? htmlspecialchars($_POST['prenom']) : '';
$adresse = isset($_POST['adresse']) ? htmlspecialchars($_POST['adresse']) : '';
$ville = isset($_POST['ville']) ? htmlspecialchars($_POST['ville']) : '';
$code_postal = isset($_POST['code_postal']) ? htmlspecialchars($_POST['code_postal']) : '';

// Afficher les données dans un tableau XHTML
echo '<table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
        </tr>
        <tr>
            <td>' . $nom . '</td>
            <td>' . $prenom . '</td>
            <td>' . $adresse . '</td>
            <td>' . $ville . '</td>
            <td>' . $code_postal . '</td>
        </tr>
      </table>';
?>
    </body>
    </html>