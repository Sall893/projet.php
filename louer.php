<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Page Louer</title>
</head>
<body>
<header>
        <h1>Jule Immo</h1>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="acheter.php">Acheter</a></li>
                <li><a href="louer.php">Louer</a></li>
                <li><a href="vendre.php">Vendre</a></li>
            </ul>
        </nav>
    </header>
    <section class="content">
        <h2>Bienvenue dans notre section de location</h2>
        <p>Découvrez les propriétés disponibles pour location :</p>

        <!-- Liste des propriétés à acheter -->
        <div class="property">
            <img src="111.jpg" alt="Propriété 3">
            <h3>Nom de la propriété 3</h3>
            <p>Description de la propriété 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Prix: $600,000</p>
            <input type="submit" class="buton" name="action" value="Louer">
        </div>

        <div class="property">
            <img src="222.jpg" alt="Propriété 4">
            <h3>Nom de la propriété 4</h3>
            <p>Description de la propriété 4. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Prix: $800,000</p>
            <input type="submit" class="buton" name="action" value="Louer">
        </div>
        <div class="property">
            <img src="333.jpg" alt="Propriété 4">
            <h3>Nom de la propriété 4</h3>
            <p>Description de la propriété 4. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Prix: $700,000</p>
            <input type="submit" class="buton" name="action" value="Louer">
        </div>
        <div class="property">
            <img src="444.jpg" alt="Propriété 4">
            <h3>Nom de la propriété 4</h3>
            <p>Description de la propriété 4. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Prix: $900,000</p>
            <input type="submit" class="buton" name="action" value="Louer">
        </div>
        <!-- Ajoutez d'autres propriétés ici -->

    </section>

    <footer>
        <p>Souleymane sall &copy; 2023</p>
    </footer>
    <div class="container">
    </div>
</body>
</html>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #f26440;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
}

.content {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.property {
    margin-bottom: 20px;
}

.property img {
    max-width: 100%;
    height: auto;
}
.buton{
    background-color:green;
    border-radius:4px;
    color:#fff;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
}

</style>


    <div class="container">
        <h1>Contenu de la page Louer</h1>
    </div>

</body>
</html>
