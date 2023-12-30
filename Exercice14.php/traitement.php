<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier quelle action a été sélectionnée
    if (isset($_POST["action"])) {
        $action = $_POST["action"];

        // Rediriger en fonction de l'action
        switch ($action) {
            case "Vendre":
                header("Location: vendre.php");
                break;
            case "Acheter":
                header("Location: acheter.php");
                break;
            case "Louer":
                header("Location: louer.php");
                break;
            default:
                // Redirection par défaut si aucune action ne correspond
                header("Location: index.html");
        }
    } else {
        // Redirection par défaut si aucune action n'a été sélectionnée
        header("Location: index.html");
    }
}
?>
