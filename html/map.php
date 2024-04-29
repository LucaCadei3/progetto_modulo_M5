<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 800px;
        }

        #map {
            height: 100%;
        }

    .header {
        background-color: #343a40;
        color: #ffffff;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }


    .logo {
        font-size: 24px;
        text-decoration: none;
        color: #ffffff;
    }

    .navbar {
        display: flex;
    }

    .navbar a {
        color: #ffffff;
        text-decoration: none;
        font-size: 25px;
        margin-left: 20px;
        padding: 10px 20px; 
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .navbar a:hover {
        background-color: rgba(255, 255, 255, 0.1); /* Cambia il colore al passaggio del mouse */
    }
    </style>
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
