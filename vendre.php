<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Page Vendre</title>
</head>
<body>
<title>Vendre</title>
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
        <h2>Bienvenue dans notre section Vente</h2>
        <p>Découvrez nos propriétés à vendre :</p>

        <!-- Liste des propriétés à vendre -->
        <div class="property">
            <img src="ppp.jpg" alt="Propriété 1">
            <h3>Nom de la propriété 1</h3>
            <p>Description de la propriété 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Prix: $500,000</p>
                <input type="submit" class="buton" name="action" value="Vendre">

        </div>

        <div class="property">
            <img src="ggg.jpg" alt="Propriété 2">
            <h3>Nom de la propriété 2</h3>
            <p>Description de la propriété 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Prix: $700,000</p>
            <input type="submit" class="buton" name="action" value="Vendre">

        </div>
        <div class="property">
            <img src="sss.jpg" alt="Propriété 2">
            <h3>Nom de la propriété 2</h3>
            <p>Description de la propriété 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Prix: $800,000</p>
            <input type="submit" class="buton" name="action" value="Vendre">

        </div>
        <div class="property">
            <img src="lll.jpg" alt="Propriété 2">
            <h3>Nom de la propriété 2</h3>
            <p>Description de la propriété 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Prix: $900,000</p>
            <input type="submit" class="buton" name="action" value="Vendre">

        </div>

        <!-- Ajoutez d'autres propriétés ici -->

    </section>

    <footer>
        <p>Souleymane sall &copy; 2023</p>
    </footer>
<!--<section class="header-home">
        -- menu -
        

    <div class="container">
        <div class="wrapper">
            <div class="wrapper-holder">
                <div id="slider-img-1"></div>
                <div id="slider-img-2"></div>
                <div id="slider-img-3"></div>
                <div id="slider-img-4"></div>
            </div>
        </div>
        <div class= "button-holder">
            <a href="#slider-img-1"
            class="button"></a>
            <a href="#slider-img-2"
            class="button"></a>
            <a href="#slider-img-3"
            class="button"></a>
            <a href="#slider-img-4"
            class="button"></a>
        </div>

    </div>-->
</body>
</html>
<style>
    
 /*   @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto Condensed', sans-serif;
}
body {
    transition: 0.5s;
}
a{
    text-decoration: 0;
}
.header-home {
    background-color: #FAF8F4;
    position: relative;
}
h1 {
    font-size: 60px;
    font-weight: bold;
    letter-spacing: 1px;
    margin: 35px 0;
    text-transform: capitalize;
}

/* menu */
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

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 10%;
}
    .logo {
        text-transform: capitalize;
        color: #000;
        font-size: 30px;
        font-weight: bold;
        font-style: italic;
    }

    header .logo_link {
        display: flex;
        align-items: center;
    }
    *{
        margin:0;
        padding:0;
    }
    body{
       /* background-image:url(222.jpg);*/
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:cover;
    }
    .container{
        position:relative;
    }
    .container .wrapper{
        width:60vw;
        height:75vh;
        box-shadow:10px 10px 20px rgba(0,0,0,0.6);
        margin:5rem auto;
        overflow:hidden;
    }
    .container .wrapper-holder{
        display: grid;
        grid-template-columns:repeat(4,100%);
        height:100%;
        width:100% ;
        animation:slider 30s ease-in-out infinite
        alternate;
    }
    .container #slider-img-1{
        background-image:url(aaa.jpg);
        background-position:center;
    }
    .container #slider-img-2{
        background-image:url(bbb.jpg);
        background-position:center;
    }
    .container #slider-img-3{
        background-image:url(ccc.jpg);
        background-position:center;
    }
    .container #slider-img-3{
        background-image:url(ddd.jpg);
        background-position:center;
    }
    .container .button-holder .button{
        background-color:white;
        width: 15px;
        height:15px;
        border-radius 15px;
        display:inline-block;
        margin:.3rem;

    }
    .container .button-holder{
        position:absolute;
        left:45%;
        bottom:0%;
    }
    .button:hover{
        box-shadow: 0px 0px 7px 4px rgba(0,255,255,0.6);
    }
    @keyframes slider{
        0%{transform: translateX(0%);}
        10%{transform: translateX(-100%);}
        20%{transform: translateX(-100%);}
        30%{transform: translateX(-200%);}
        40%{transform: translateX(-200%);}
        50%{transform: translateX(-200%);}
        60%{transform: translateX(-300%);}
        70%{transform: translateX(-300%);}
        80%{transform: translateX(-300%);}
        90%{transform: translateX(0%);}
        100%{transform: translateX(0%);}



    }











</style>
