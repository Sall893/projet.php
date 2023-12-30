Exercice 2
<!DOCTYPE html>
<html>
<head>
    <title>Test Multiples de 3 et 5</title>
</head>
<body>
<form method="post">
    Entrez un nombre : <input type="text" name="nombre">
    <input type="submit" value="Vérifier">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $nombre = isset($_POST["nombre"]) ? (int)$_POST["nombre"] : 0;
    $resultat=($nombre % 3==0) && ($nombre % 5 == 0); 
   if($resultat){
       echo "ce nombre est multiple par 3 et 5";
   }else{
       echo "ce nombre n'est pas multiple de 3 et de 5";
   }
}
?>



</body>
</html>
