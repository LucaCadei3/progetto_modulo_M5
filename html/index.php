<?php
//link utili
//https://codepen.io/knyttneve/pen/EBNqPN
//https://codepen.io/gvissing/pen/NWERdNO
//https://codepen.io/jkantner/pen/eYJboxN
//https://tailwindcomponents.com/component/input-search
//https://tailwindcomponents.com/component/search-results  <--------------aiuto di ricerca

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="styleIndex.css" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>HomePage</title>
</head>
<body>
    <section class="header">
        <a href="index.php" class="logo">Food</a>

        <nav class="navbar">
            <a href="chiSiamo.php">Chi siamo</a>
            <a href="map.php">Map</a>
            <a href="recensioni.php">Recensioni</a>
        </nav>
        <nav class="navbar">
            <a href="account/login/index.php">Login</a>
        </nav>
    </section>

    <section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

        <div class="swiper-slide" style="background:url(images/background4.jpg) no-repeat ">
                <div class="content">
                    <span>Mangia, bevi, Sorridi</span>
                    <h3>I MIGLIORI RISTORANTI</h3>
                </div>
            </div>

            <div class="swiper-slide" style="background:url(images/background2.jpg) no-repeat ">
                <div class="content">
                    <span>Mangia, bevi, Sorridi</span>
                    <h3>Cerca il top per il tuo palato</h3>
                </div>
            </div>

            <div class="swiper-slide" style="background:url(images/background3.jpg) no-repeat">
                <div class="content">
                    <span>Mangia, bevi, Sorridi</span>
                    <h3>Mangia nei ristoranti stellari</h3>
                </div>
            </div>
        </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

    </div>
</section>
<br>
<br>

    <div class="search-section">
        <h1> RICERCA RISTORANTI </h1>
        <div class="search-bar">
            <input type="text" placeholder="Cerca ristoranti...">
            <button>Cerca</button>
        </div>
        <div class="rating-section"> 
            <div class="stars">
                <input type="radio" id="star1" name="rating" value="1">
                <label for="star1"><i class="fa fa-star"></i></label>
                
                <input type="radio" id="star2" name="rating" value="2">
                <label for="star2"><i class="fa fa-star"></i></label>
                
                <input type="radio" id="star3" name="rating" value="3">
                <label for="star3"><i class="fa fa-star"></i></label>
                
                <input type="radio" id="star4" name="rating" value="4">
                <label for="star4"><i class="fa fa-star"></i></label>
                
                <input type="radio" id="star5" name="rating" value="5">
                <label for="star5"><i class="fa fa-star"></i></label>
            </div>
        </div>
    </div>


    <div class="menu-container">  
    <div class="menu-title">Scelti da noi:</div>
    <div class="restaurant-container">
            <div class="box-container">
            <div class="box">
                    <div class="image">
                        <img src="images/2020-05-31.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Ristorante Locatelli</h3>
                        <p>bel post bela get</p>
                        <p>a partire da 500$</p>
                        <a href="°" class = "btn"> vai al ristorante</a>
                    </div>
            </div>
            
            <div class="box">
                    <div class="image">
                        <img src="images/background2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Ristorante 2</h3>
                        <p>dbwchubeucbwu</p>
                        <p>a partire da //$</p>
                        <a href="°" class = "btn"> vai al ristorante</a>
                    </div>
            </div>

            <div class="box">
                    <div class="image">
                        <img src="images/villa_crespi.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Villa Crespi</h3>
                        <p>troppo costoso per i miei gusti</p>
                        <p>a partire da 600$</p>
                        <a href="°" class = "btn"> vai al ristorante</a>
                    </div>
            </div>

            <div class="box">
                    <div class="image">
                        <img src="images/barbieri.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Ristorante Bruno Barbieri</h3>
                        <p>Tanta tanta roba</p>
                        <p>a partire da 400$</p>
                        <a href="°" class = "btn"> vai al ristorante</a>
                    </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="menu-title">Scelti per te:</div>
<div class="restaurant-container">
    <div class="box-container">
        <div class="box">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/th.jpeg" width="400" height="300" />
                        <div class="content">
                            <h3>Osteria CICCUS Prosciutteria</h3>
                            <div class="content">
                                <img class="small-image" src="images/brescia.jpg" width="200" height="150" />
                                <img class="small-image" src="images/brescia1.jpg" width="200" height="150" />
                                <br>
                                <br>
                                <p>Via: Via dei Ciliegi 3, BRESCIA</p>
                                <p>Recensioni: "Servizio impeccabile e cibo delizioso! Tornerò sicuramente!"</p>
                                <a href="#" class="btn">Vai al ristorante</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/livorno.jpg" width="400" height="300" />
                        <div class="content">
                            <h3>Mascagni Ristorante Livorno</h3>
                            <div class="content">
                                <img class="small-image" src="images/mascagni-ristorante.jpg" width="200" height="150" />
                                <img class="small-image" src="images/mascagni-livorno.jpg" width="200" height="150" />
                                <br>
                                <br>
                                <p>Via: Via del Sole 98, LIVORNO</p>
                                <p>Recensioni: "Prezzi troppo alti rispetto alla qualità del cibo. Non lo consiglio."</p>
                                <a href="#" class="btn">Vai al ristorante</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/milano.jpeg" width="400" height="300" />
                        <div class="content">
                            <h3>Enrico Bartolini</h3>
                            <div class="content">
                                <img class="small-image" src="images/milano1.jpeg" width="200" height="150" />
                                <img class="small-image" src="images/milano3.jpg" width="200" height="150" />
                                <br>
                                <br>
                                <p>Via: Via Roma 16, MILANO</p>
                                <p>Recensioni: "Atmosfera accogliente e personale gentile. Ottima esperienza gastronomica!"</p>
                                <a href="#" class="btn">Vai al ristorante</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/roma.jpg" width="400" height="300" />
                        <div class="content">
                            <h3>Conciabocca Roma</h3>
                            <div class="content">
                                <img class="small-image" src="images/roma3.jpg" width="200" height="150" />
                                <img class="small-image" src="images/roma1.jpg" width="200" height="150" />
                                <br>
                                <br>
                                <p>Via: Via delle Acacie 15, ROMA</p>
                                <p>Recensioni: "Tempo di attesa eccessivo e piatti poco saporiti. Deludente."</p>
                                <a href="#" class="btn">Vai al ristorante</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>

<div class="menu-title">Ristoranti che collaborano con noi:</div>
<div class="restaurant-container">
    <div class="box-container">
        <div class="box">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <!-- McDonald's -->
                    <div class="swiper-slide">
                        <img src="images/mc.png" width="300" height="300" />
                        <div class="content" style='margin-left: 100px;'>
                            <h3>McDonald's</h3>
                            <div class="content">
                                <br>
                                <br>
                                <p>Via: Indirizzo McDonald's</p>
                                <p>Recensioni: "I'm lovin' it!"</p>
                                <a href="https://www.mcdonalds.it/" class="btn">Vai al ristorante</a>
                            </div>
                        </div>
                    </div>
                    <!-- Old Wild West -->
                    <div class="swiper-slide">
                        <img src="images/old.png" width="400" height="300" />
                        <div class="content">
                            <h3>Old Wild West</h3>
                            <div class="content">
                                <br>
                                <br>
                                <p>Via: Indirizzo Old Wild West</p>
                                <p>Recensioni: "Un vero saloon del west!"</p>
                                <a href="https://www.oldwildwest.it/code/22013/home" class="btn">Vai al ristorante</a>
                            </div>
                        </div>
                    </div>
                    <!-- Burger King -->
                    <div class="swiper-slide">
                        <img src="images/burger.png" width="400" height="300" />
                        <div class="content">
                            <h3>Burger King</h3>
                            <div class="content">
                                <br>
                                <br>
                                <p>Via: Indirizzo Burger King</p>
                                <p>Recensioni: "Il re del fast food!"</p>
                                <a href="https://www.burgerking.it/" class="btn">Vai al ristorante</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<div class="search-section" style="width: 100%; height: 500px; salign-items: center;">
    <div class="content" style="text-align: center;">
    <img src="images/giftCard.png" style="width: 200px; height: 200px;">
        <h1 style="font-size: 50px;">GIFT CARD</h1>
        <div class="content" style="text-align: center;">
            <p style="font-size: 30px;">COMPRA LA NOSTRA GIFT CARD</p>
            <br>
            <p style="font-size: 20px;">utilizzala in più di 15.000 ristoranti</p>
            <br>
            <a href="#" class="btn" style="font-size: 20px;">Comprala ora!</a>
        </div>
    </div>
</div>

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>LINK PAGINE</h3>
            <a href="index.php"><i class="fas fa-angle-right"></i> food</a>
            <a href="chiSiamo.php"><i class="fas fa-angle-right"></i>Chi siamo</a>
            <a href="map.php"><i class="fas fa-angle-right"></i>Map</a>
            <a href="recensioni.php"><i class="fas fa-angle-right"></i>Recensioni</a>
        </div>

        <div class="box">
            <h3>CONTATTI</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i> +111-222-3456</a>
            <a href="#"><i class="fas fa-envelope"></i> //@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> BERGAMO </a>   
        </div>

        <div class="box">
            <h3>SEGUITECI</h3>
            <a href="#"><i class="fab fa-facebook"></i> facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>        
        </div>
    </div>
    <div class="credit"> created by <span>GRUPPO PROGETTO</span></div>
</section>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".home-slider", {
            loop:true,
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        });

        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false, // non interrompere l'autoplay quando l'utente interagisce con lo swiper
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });

    </script>

</body>
</html>

