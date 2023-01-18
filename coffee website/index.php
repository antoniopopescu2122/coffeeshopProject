
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cafena </title>
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">

    <a href="#" class="logo">
        <img src="images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">Acasă</a>
        <a href="#about">Despre</a>
        <a href="#menu">Meniu</a>
        <a href="#products">Produse</a> 
        <a href="#contact">Contact</a> 
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    <div class="cart-items-container">
        <div class="cart-item">
                <span class="fas fa-times"></span> 
                <img src="images/menu-1.png" alt="">
                <div class="content"> 
                    <h3>Americano</h3>
                    <div class="price">15.99 lei</div>
                </div>
            </div>

            <div class="cart-item">
                <span class="fas fa-times"></span> 
                <img src="images/menu-2.png" alt="">
                <div class="content"> 
                    <h3>Macchiato</h3>
                    <div class="price">22.99 lei </div>
                </div>
            </div>

        <div class="cart-item">
            <span class="fas fa-times"></span> 
            <img src="images/product-2.png" alt="">
            <div class="content"> 
                <h3>Columbia coffee</h3>
                <div class="price">23.99 lei </div>
            </div>
        </div>

        <div class="cart-item">
            <span class="fas fa-times"></span> 
            <img src="images/product-2.png" alt="">
            <div class="content"> 
                <h3>Columbia coffee</h3>
                <div class="price">23.99 lei </div>
            </div>
        </div>    
    
        <div class="cart-item">
            <span class="fas fa-times"></span> 
            <img src="images/menu-1.png" alt="">
            <div class="content"> 
                <h3>Americano</h3>
                <div class="price">15.99 lei</div>
            </div>
        </div>

        <div class="cart-item">
            <span class="fas fa-times"></span> 
            <img src="images/menu-2.png" alt="">
            <div class="content"> 
                <h3>Macchiato</h3>
                <div class="price">22.99 lei </div>
            </div>
        </div>

        <div class="cart-item">
            <span class="fas fa-times"></span> 
            <img src="images/product-2.png" alt="">
            <div class="content"> 
                <h3>Columbia coffee</h3>
                <div class="price">23.99 lei </div>
            </div>
        </div>

        <div class="cart-item">
                <span class="fas fa-times"></span> 
                <img src="images/menu-1.png" alt="">
                <div class="content"> 
                    <h3>Americano</h3>
                    <div class="price">15.99 lei</div>
                </div>
            </div>

            <div class="cart-item">
                <span class="fas fa-times"></span> 
                <img src="images/menu-2.png" alt="">
                <div class="content"> 
                    <h3>Macchiato</h3>
                    <div class="price">22.99 lei </div>
                </div>
            </div>
            
        <a href="#" class="btn">Comandă acum!</a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Cafea proaspăt preparată livrată la tine acasă!</h3>
        <p>
            Descoperiți o selecție diversificată de băuturi din cafea și gustări delicioase în cafeneaua noastră. Folosim ingrediente de calitate pentru a găti băuturile, iar atmosfera relaxată și
             primitoare vă oferă o experiență unică. Veniți să savurați cea mai bună cafea și să vă bucurați de o experiență memorabilă! </p> 
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>Despre </span> NOI </h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.jpeg" alt="">
        </div>

        <div class="content">
            <h3> Ce face cafeneaua noastră mai specială? </h3>
            <p> <b> Cafena </b> este mai mult decat o simpla cafenea. 
                Este locul unde vii faci parte din povestea cafelei, poveste care porneste de la omul ce are grija de planta cu pretioasele boabele pline de savoare si 
                se termina prin procesul de prajire care elibereaza aromele tale preferate.</p>
            <p>Noi ne-am axat pe calitate, complexitate si armonia perfecta a aromelor in ceasca.
                Scopul nostru este sa va oferim nu doar o cafea, ci cea mai buna cafea! Hai sa faci parte din povestea noastra!! </p> 
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <h1 class="heading"> <span>Meniul</span> nostru </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/menu-1.png" alt="">
            <h3>Americano</h3>
            <div class="price">15.99 lei <span>20.99</span></div>
            <a href="#" class="btn">Adauga in cos</a>
        </div>

        <div class="box">
            <img src="images/menu-2.png" alt="">
            <h3>Cortado</h3>
            <div class="price">14.99 lei <span>20.99</span> </div>
            <a href="#" class="btn">Adauga in cos</a>
        </div>

        <div class="box">
            <img src="images/menu-3.png" alt="">
            <h3>Mocha</h3>
            <div class="price">25.99 lei <span>32.99</span> </div>
            <a href="#" class="btn">Adauga in cos</a>
        </div>

        <div class="box">
            <img src="images/menu-4.png" alt="">
            <h3>Macchiato</h3>
            <div class="price">22.99 lei <span>26.99</span> </div>
            <a href="#" class="btn">Adauga in cos</a>
        </div>

        <div class="box">
            <img src="images/menu-5.png" alt="">
            <h3>Flat White</h3>
            <div class="price">19.99 lei <span>25.99</span> </div>
            <a href="#" class="btn">Adauga in cos</a>
        </div>

        <div class="box">
            <img src="images/menu-6.png" alt="">
            <h3>Decaf</h3>
            <div class="price">17.99 lei <span>20.99</span> </div>
            <a href="#" class="btn">Adauga in cos</a>
        </div>
         
    </div>

</section>

<!-- menu section ends -->

<section class="products" id="products">

    <h1 class="heading"> <span>Produsele</span> noastre </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a> 
            </div>
            <div class="image">
                <img src="images/product-1.png" alt="">
            </div>
            <div class="content">
                <h3>Nicaragua coffee</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">25.99 lei  <span>30.99</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a> 
            </div>
            <div class="image">
                <img src="images/product-2.png" alt="">
            </div>
            <div class="content">
                <h3>Columbia coffee</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">23.99 lei  <span>30.99</span></div>
            </div>
        </div> 

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a> 
            </div>
            <div class="image">
                <img src="images/product-3.png" alt="">
            </div>
            <div class="content">
                <h3>Peru coffee</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">22.99 lei   <span>30.99</span></div>
            </div>
        </div> 
 
        
    </div>

</section>
 

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>Contact</span></h1>

    <div class="row">

        <div class="mapouter"><div class="gmap_canvas"><iframe width="800" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=uvt&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:800px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:800px;}</style></div></div>
        
        <form action="php/reviewSubmit.php" method="post">
            <h3>Dorești să ne trasmiți ceva? Te contactăm noi!</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" name = "name" placeholder="Nume">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" name= "email" placeholder="E-mail">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" name= "phone" placeholder="Telefon">
            </div>
            <input type="submit" value="Contactează-mă!" name="submit" class="btn">
        </form>

    </div>

</section>

<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#home">acasă</a>
        <a href="#about">despre</a>
        <a href="#menu">meniu</a>
        <a href="#products">produse</a> 
        <a href="#contact">contact</a> 
    </div>


</section>

<!-- footer section ends --> 

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>