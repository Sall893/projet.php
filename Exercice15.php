Exercice 15
<?php
function formatChaine(&$tableau) {
    foreach ($tableau as &$chaine) {
        $chaine = ucfirst(strtolower($chaine));
    }
}

// Exemple d'utilisation :
$mesChaines = array("HeLLo", "wORlD", "PHp", "MiXeD");

echo "Avant la transformation : ";
print_r($mesChaines);

formatChaine($mesChaines);

echo "Après la transformation : ";
print_r($mesChaines);
?>


