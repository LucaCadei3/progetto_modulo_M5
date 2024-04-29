<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map</title>
    <link rel="stylesheet" href="styleIndex.css" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>
<body>
    <section class="header">
        <a href="index.php" class="logo">Food</a>

        <nav class="navbar">
            <a href="#">chi siamo</a>
            <a href="map.php">Map</a>
            <a href="#">Recensioni</a>
        </nav>
        <nav class="navbar">
            <a href="account/login/index.php">Login</a>
        </nav>
    </section>
    <div id="map"></div>
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
            <a href="#.php"><i class="fas fa-angle-right"></i>Recensioni</a>
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

    <script>
        var map = L.map('map').setView([45.6983, 9.6773], 13); // Coordinate di Bergamo
        // Aggiunge un layer di OpenStreetMap alla mappa
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Aggiungi marker per i ristoranti
        var restaurants = [
    {
        name: "La Colombina",
        location: [45.698076, 9.672453],
        description: "Ristorante tradizionale italiano con un'ampia selezione di piatti della cucina bergamasca."
    },
    {
        name: "Il Circolino",
        location: [45.705831, 9.654354],
        description: "Accogliente ristorante con menu stagionale e specialità della cucina locale."
    },
    {
        name: "Trattoria Vecchia Bergamo",
        location: [45.701286, 9.665870],
        description: "Ambiente rustico e piatti tradizionali bergamaschi fatti in casa."
    },
    {
        name: "Da Mimmo",
        location: [45.692118, 9.667456],
        description: "Ristorante familiare con cucina italiana casalinga e atmosfera accogliente."
    },
    {
        name: "Il Sole di Ranco",
        location: [45.699758, 9.654689],
        description: "Ristorante gourmet con vista panoramica sul lago di Iseo e piatti creativi della cucina lombarda."
    }
];


        restaurants.forEach(restaurant => {
            L.marker(restaurant.location).addTo(map)
                .bindPopup(`<b>${restaurant.name}</b><br>${restaurant.description}`);
        });
    </script>
</body>
</html>
