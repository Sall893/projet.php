
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jule immo</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a980e88be8.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="header-home">
        <!-- menu -->
        <header>
            <div class="logo_link">
                <a href="#" class="logo">Jule Immo</a>
                <div class="menu_link">
                    <a href="#">Accueuil</a>
                    <a href="#">Service</a>
                    <a href="#">Projet</a>
                    <a href="#">Contactez-nous</a>
                    <a href="#">Blog</a>
                    <div class="container">
                        <form action="traitement.php" method="post">
                        <input type="submit" name="action" value="Vendre">
                        <input type="submit" name="action" value="Acheter">
                        <input type="submit" name="action" value="Louer">
                        </form>
                    </div>
                </div>
            </div>
             
            <!-- responsive menu -->
                 <div class="sidebar" id="mySidebar">
                    <div class="closebtn"  onclick="closeNav()">
                        <img src="images/close.png">
                    </div>
                    <a href="#">Accueil</a>
                    <a href="#">Service</a>
                    <a href="#">Project</a>
                    <a href="#">Contactez-nous</a>
                    <a href="#">Blog</a>
                    <a href="#">Login</a>
                    <a href="#">Sign up</a>
                 </div>

                 <div id="main">
                    <button class="openbtn" onclick="openNav()">
                        <img src="images/menu.png">
                        Menu
                    </button>
                 </div>
            <!-- responsive menu -->

            <div class="link_buttons">
                <a href="#">Login</a>
                <a href="#" class="orange_link">Sign up</a>
            </div>
        </header>
        <!-- menu -->


        <!-- home -->
           <section class="home">
               <div class="left">
                   <h1>Best Interior design for your home.</h1>
                   <p>Lorem ipsum, dolor sit amet consectetur adipisicing. Dolores reprehenderit nihil dolore vitae necessitatibus veniam voluptatibus asperiores quis cupiditate  asperiores quis cupiditate  asperiores quis cupiditate.</p>
                   <a href="#" class="orange_link">Get Started</a>
               </div>
               <div class="right">
                    <img src="img1.jpg">
               </div>
               <div class="statistiques">
                   <span>
                        <h2>450+</h2>
                        <p>project Finished</p>
                   </span>
                   <span>
                        <h2>120+</h2>
                        <p>professionnal designer</p>
                  </span>
                  <span>
                        <h2>160+</h2>
                        <p>project ongoing</p>
                  </span>
               </div>
           </section>
        <!-- home -->
    </section>
     <!-- about -->
    <section class="about">
        <div class="image">
            <img src="img2.jpg">
        </div>
        <div class="content">
            <h1>About company</h1>
            <h2>We create functionnal beautiful <br> Interior for client since 1858.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing. Eius, iure quas? Non sed doloribus placeat laboriosam eos dolorem exercitationem, porro sint assumenda sequi, nemo dolores obcaecati quibusdam nihil aliquid quam?</p>
        </div>
              
    </section>
     <!-- about -->

    <!-- choice -->
    <section class="why_us">
        <h1>Why Choose us</h1>
        <div class="list_box">
            <div class="box">
                <img src="customer-service.png">
                <h2>support</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing. Harum, consectetur nihil aut dicta fugiat deserunt.</p>
            </div>
            <div class="box">
                <img src="experience.png">
                <h2>experience</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing. Harum, consectetur nihil aut dicta fugiat deserunt.</p>
            </div>
            <div class="box">
                <img src="creative-brain.png">
                <h2>creative</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing. Harum, consectetur nihil aut dicta fugiat deserunt.</p>
            </div>
            <div class="box">
                <img src="puzzle.png">
                <h2>solution</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing. Harum, consectetur nihil aut dicta fugiat deserunt.</p>
            </div>

        </div>
    </section>
    <!-- choice -->

    <!-- decoration -->
    <section class="decoration">
        <h1>Decoration list</h1>
        <div class="deco-list">
            <div class="deco">
                <img src="deco1.jpg">
                <p>decoration chamber</p>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing. <br></span>
                <button class="orange_link">Order the deco</button>
            </div>
            <div class="deco">
                <img src="deco4.png">
                <p>decoration chamber</p>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing.<br></span>
                <button class="orange_link">Order the deco</button>
            </div>
            <div class="deco">
                <img src="deco3.jpg">
                <p>decoration chamber</p>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing.<br></span>
                <button class="orange_link">Order the deco</button>
            </div>
            <div class="deco">
                <img src="deco4.png">
                <p>decoration chamber</p>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing.<br></span>
                <button class="orange_link">Order the deco</button>
            </div>
            <div class="deco">
                <img src="deco5.jpg">
                <p>decoration chamber</p>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing.<br></span>
                <button class="orange_link">Order the deco</button>
            </div>
            <div class="deco">
                <img src="deco6.jpg">
                <p>decoration chamber</p>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing.<br></span>
                <button class="orange_link">Order the deco</button>
            </div>
        </div>
    </section>
     <!-- decoration -->
     <!-- footer -->
    <footer>
        <div class="footer-content">
            <h1>Jule immo</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, cum. Vero, explicabo illum. Repudiandae.</p>
            <h4>contact us</h4>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy;2023 Souleymane Sall. Desighed by <span>Souleymane</span></p>
        </div>
        
    </footer>
    <script src="script.js"></script>
    <script>
        //définir la la largeur de la sidebar a 100vw  et faire un overflow hidden

function openNav(){
    document.getElementById("mySidebar").style.width="100vw";
    document.querySelector("body").style.overflow= "hidden"

}

//définir la la largeur de la sidebar a 0  et faire un overflow auto

function closeNav(){
    document.getElementById("mySidebar").style.width="0";
    document.querySelector("body").style.overflow= "auto"

}
    </script>
</body>
</html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap');
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
.container {
    text-align: center;
    margin-top: 100px;
}

form {
    display: inline-block;
}

input[type="submit"] {
    background-color: #4caf50;
    color: white;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: black;
}

.menu_link {
    margin-left: 60px;
}
.menu_link a {
    margin: 0 10px;
    font-size: 15px;
    color: #999;
}
.menu_link a:first-child {
    color: #f26440;
}
.link_buttons a{
    margin-left: 15px;
}
.link_buttons a:first-child {
    color: #f26440;
}
.orange_link {
    color: #fff;
    padding: 8px 30px;
    background-color: #f26440;
    border-radius: 4px;
    text-transform: capitalize;
}



/*home*/
.home {
    margin-top: 50px;
    margin-left: 10%;
    margin-right: 10%;
    display: flex;
    justify-content: space-between;
    height: 500px;
    position: relative;
}
.home .left {
    width: 50%;
    display: flex;
    flex-direction: column;
}
.home .left p {
    margin: 25px 0;
    color: #999;
    letter-spacing: 0.5px;
    line-height: 25px;
}
.home .left .orange_link {
    width: fit-content;
    padding: 12px 50px;
    box-shadow: 0 0 5px rgba(0,0,0,0.1);
}
.home .right {
    width: 45%;
}
.home .right img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.statistiques {
    position: absolute;
    bottom: -50px;
    height: 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    background-color: #fff;
    box-shadow: 0 0 5px rgba(0,0,0,0.2);
    padding: 20px 10%;
}
.statistiques span {
    text-align: center;
}
.statistiques span h2 {
    color: #f26440;
    font-size: 25px;
    margin-bottom: 10px;
}
.statistiques span p {
    color: #999;
    text-transform: capitalize;
}

/*about*/
.about {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 120px;
    padding: 20px 5%;
}
.about .image {
    width: 55%;
    height: 400px;
}
.about .image img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.about .content {
    width: 40%;
}
.about .content h1 {
    margin: 16px 0;
}
.about .content h2 {
    margin: 15px 0;
    color: #333;
}
.about .content p {
    color: #999;
    text-align: justify;
    letter-spacing: 0.5px;
    line-height: 25px;
}

/*choice*/
.why_us {
    padding: 20px 10%;
    display: flex;
    flex-direction: column;
}
.why_us img {
    width: 60px;
}
.list_box {
    width: 100%;
    display: grid;
    justify-content: center;
    grid-template-columns: repeat(auto-fill,265px);
    grid-gap: 10px;
}
.list_box .box {
    text-align: center;
    background-color: #FAF8F4;
    border-radius: 4px;
    padding: 50px 25px;
    margin: 10px;
    box-shadow: 0 0 5px rgba(0,0,0,0.2);
}
.list_box .box h2 {
    margin: 10px 0;
    color: #f26440;
    letter-spacing: 1px;
    text-transform: capitalize;
}
.list_box .box p {
    color: #999;
}
/*decoration*/
.decoration {
    padding: 20px 10%;
    width: 100%;
}
.deco-list {
    width: 100%;
    display: grid;
    justify-content: center;
    grid-template-columns: repeat(auto-fill,31.11%);
    gap: 30px;
}
.deco-list .deco img {
    width: 100%;
    object-fit: cover;
}
.deco-list .deco {
    text-align: center;
    cursor: pointer;
    padding: 10px;
    transition: 0.5s;
    box-shadow: 0 0 5px rgba(0,0,0,0.1);
}
.deco-list .deco:hover {
    transform: scale(1.1);
}
.deco-list .deco p {
    margin: 5px 0;
    font-weight: bold;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}
.deco-list .deco span {
    font-size: 15px;
    color: #333;
   
}
.deco-list .deco .orange_link {
    margin-top: 5px;
    border: 1px solid #f26440;
    letter-spacing: 1px;
    width: 100%;
    transition: 0.5s;
    cursor: pointer;
}
.deco-list .deco .orange_link:hover {
    background-color: transparent;
    color: #f26440;
    
}
/*footer*/
footer {
    margin-top: 60px;
    background-color: #FAF8F4;
    height: auto;
    padding-top: 40px;
}
.footer-content {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.footer-content h1 {
    font-size: 50px;
    margin: 10px 0;
}
.footer-content p {
    max-width: 500px;
    margin: 20px 0;
    letter-spacing: 1px;
    font-size: 15px;
}
.socials {
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 20px 0;
}
.socials li {
    margin: 0 20px;
}
.socials a {
    text-decoration: 0;
    color: #333;
    font-size: 20px;
    transition: 0.5s;
}
.socials a:hover {
    color: #000;
}
.footer-bottom {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}
.footer-bottom p{
    font-size: 14px;
    letter-spacing: 1px;
    text-transform: capitalize;
}
.footer-bottom  span {
    text-transform: uppercase;
    opacity: .6;
    font-weight: 200;
}
.sidebar , #main {
    display: none;
}
/*responsive*/

@media (max-width:935px) {
    header{
        padding: 20px;
        margin: 0;
        height: auto;
    }
    .link_buttons {
        display: none;
    }
    .menu_link {
        display: none;
    }
    /*responsive menu*/
    .sidebar , #main {
        display: block;
    }
    .sidebar{
        height: 100%;
        width:0;
        position: fixed;
        z-index: 1000;
        top: 0;
        left: 0;background-color: #111;
        overflow-x: hidden;
        padding-top: 60px;
        transition: 0.5s;
        display: flex;
        flex-direction: column;

    }
    .sidebar img , #main img {
        width: 20px;

    }
    .sidebar a{
        padding: 15px;
        font-size: 15px;
        color: #fff;
        transform: 0.3s;
    }
    .sidebar a:hover {
        background-color: #f26440;
    }
    .sidebar .closebtn {
        position: absolute;
        top: 20px;
        right: 20px;
        cursor: pointer;
    }
    .openbtn img {
        width: 20px;
        margin-right: 10px;
    }
    .openbtn {
        background-color: #f26440;
        border: 0;
        display: flex;
        align-items: center;
        color: #fff;
        font-size: 15px;
        padding: 10px 15px;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0,0,0,0.1);
        cursor: pointer;
        transition: 0.5s;
    }
    .openbtn:hover {
        background-color: #111;
    }


}

@media (max-width:588px) {
    h1{
        font-size: 30px;
    }
    .home {
        margin: 25px;
        flex-direction: column-reverse;
        height: auto;
        padding-bottom: 25px;
    }
    .home p , .home h1 {
        margin: 0;
    }
    .home .left , .home .right {
        width: 100%;
        height: fit-content;
    }
    .home .right {
        height: auto;
    }
    .statistiques{
        bottom:-100px;
    }
    .statistiques h2 {
        font-size: 15px;
    }
    .statistiques p {
        font-size: 12px;
    }
    .about {
        flex-direction: column;
    }
    .about .image , .about .content {
        width: 100%;
    }

    /*Why us*/
    .list_box , .deco-list {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .box , .deco {
        width: 100%;
    }
}
</style>