<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleIndex.css" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>Chi Siamo</title>
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

    <div class="container large-description">
        <h1>Chi Siamo</h1>
        <p>Siamo un team appassionato di gastronomia con l'obiettivo di semplificare la tua esperienza culinaria. La nostra missione è rendere più facile per te trovare e prenotare i migliori ristoranti per soddisfare i tuoi desideri gastronomici. Con il nostro servizio online, ti offriamo una vasta selezione di locali, dai ristoranti gourmet alle gemme nascoste del quartiere, garantendo una varietà di opzioni per tutti i gusti e le esigenze.</p>
        <p>La nostra piattaforma è progettata per essere intuitiva e user-friendly, permettendoti di navigare facilmente attraverso le varie opzioni di ristoranti, leggere recensioni autentiche e fare prenotazioni in pochi semplici passaggi. Che tu stia cercando un ristorante romantico per una cena a due, un locale informale per un pranzo con gli amici o un luogo speciale per celebrare un'occasione importante, siamo qui per aiutarti a trovare la destinazione perfetta.</p>
        <p>Con il nostro impegno per l'eccellenza e la passione per la gastronomia, ci sforziamo di offrirti un'esperienza culinaria indimenticabile ogni volta che usi il nostro servizio. Grazie per aver scelto di essere con noi nel tuo viaggio attraverso il mondo del cibo e della ristorazione. Buon appetito!</p>
    </div>

    <center><div class="menu-title">RECENSIONI UTENTI</div></center>
    <div class="restaurant-container">
        <div class="box-container">
            <div class="box">
                <div class="swiper mySwiper" style ='background-color:lightyellow'>
                    <div class="swiper-wrapper">
                    <div class="swiper-slide">
                    <center><img src="images/persona1.jpeg" width="200" height="150" /></center>
                        <div class="content">
                            <h3>Marco93</h3>
                            <div class="content">
                                <p>⭐⭐⭐⭐⭐</p>
                                <p>Recensione: "Sito fantastico! Facile da usare e mi ha aiutato a trovare il ristorante perfetto per la mia serata speciale. Consigliatissimo!"</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                    <center><img src="images/persona2.jpeg" width="200" height="150" /></center>
                        <div class="content">
                            <h3>Gastronauta87</h3>
                            <div class="content">
                                <p>⭐⭐⭐</p>
                                <p>Recensione: "Ho trovato il mio nuovo ristorante preferito grazie a questo sito! La varietà di opzioni è incredibile e le recensioni degli altri utenti sono molto utili."</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                    <center><img src="images/persona3.jpeg" width="200" height="150" /></center>
                        <div class="content">
                            <h3>CucinareInsieme</h3>
                            <div class="content">
                                <p>⭐⭐⭐⭐</p>
                                <p>Recensione: "Bellissima esperienza! Ho prenotato un tavolo per la mia famiglia e abbiamo trascorso una serata indimenticabile. Sicuramente torneremo su questo sito per le nostre prossime uscite."</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                    <center><img src="images/persona4.jpg" width="200" height="150" /></center>
                        <div class="content">
                            <h3>GourmetExplorer</h3>
                            <div class="content">
                                <p>⭐⭐⭐</p>
                                <p>Recensione: "Il modo più semplice e veloce per trovare nuovi ristoranti da provare! Sono rimasto impressionato dalla varietà di scelte e dalla qualità del servizio."</p>
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
    
    <center>
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
</center>

    

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
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
