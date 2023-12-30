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
