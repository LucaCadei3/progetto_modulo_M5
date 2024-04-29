<html>

<head>
    <title>
        Registrazione
    </title>
</head>

<body>
    <form action="executer.php">
        <!-- 
                nome
                cognome
                password
                telefono
                checkbox rimani loggato
            -->

    </form>
</body>

</html>
<html>

<head>
    <title>Registrazione</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../../styleIndex.css" type="text/css">
</head>
<style>
    .divSwiper {
        height: 550px;
    }

    .swiper {
        width: 500px;
        height: 400px;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 490px;
        height: 300px;
        display: flex;
        justify-content: center;
        /* Centra orizzontalmente gli elementi */
        align-items: center;
        /* Centra verticalmente gli elementi */
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        /* Ombra normale */
    }

    .swiper-slide img {
        display: block;
        width: 100%;
    }

    .formLogin {
        margin-top: 75px;
        text-align: center;
        /* Allinea il testo al centro */
        height: 350px;
        width: 300px;
    }

    .swiper-slide-duplicate {
        display: none;
    }

    .swiper-slide-hidden {
        opacity: 0.5;
        pointer-events: none;
    }

    .puntini {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-55%);
        z-index: 10;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        /* Ombra normale */
        height: 20px;
        width: 50px;
    }

    .swiper-pagination {
        margin-top: 5px;
    }
    .input-error {
        border: 2px solid red; /* Imposta il colore rosso per i bordi */
    }

    .input-success {
        border: 2px solid green; /* Imposta il colore verde per i bordi */
    }
    p {
        font-size: 17px;
    }
</style>

<body>
    <section class="header">
        <a href="../../index.php" class="logo">Food</a>

        <nav class="navbar">
            <a href="#">chi siamo</a>
            <a href="../../map.php">Map</a>
            <a href="#">Recensioni</a>
        </nav>
        <nav class="navbar">
            <a href="../login/index.php">Login</a>
        </nav>
    </section>
    <!-- Swiper -->
    <center>
        <h1>
            Registrazione
        </h1>
        <!--<div class="swiper-pagination"></div>-->
        <div class="divSwiper">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="formLogin">
                            <center>
                                <h1>Azienda</h1>
                                <form method="POST" action="cliente.php">
                                    <p>Nome: <input type="text" name="nome" placeholder="es: Mario"></p>
                                    <p>Cognome: <input type="text" name="cognome" placeholder="es: Rossi"></p>
                                    <p>Num. telefono: <input type="number" name="telefono" placeholder="es: 346987324"></p>
                                    <p>Username: <input type="text" name="username" placeholder="es: Pippo_coca"></p>
                                    <p>Password: <input type="password" name="password" placeholder="Password"></p>
                                    <p>Rimani loggato: <input type="checkbox" name="log"><br>
                                    <input type="submit" value="ACCEDI">
                                </form>
                            </center>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="formLogin">
                            <center>
                                <h1>Cliente</h1>
                                <form method="POST" action="cliente.php">
                                    <p>Nome: <input type="text" name="nome" placeholder="es: Mario"></p>
                                    <p>Cognome: <input type="text" name="cognome" placeholder="es: Rossi"></p>
                                    <p>Num. telefono: <input type="number" name="telefono" placeholder="es: 346987324"></p>
                                    <p>Username: <input type="text" name="username" placeholder="es: Pippo_coca"></p>
                                    <p>Password: <input type="password" name="password" placeholder="Password"></p>
                                    <p>Rimani loggato: <input type="checkbox" name="log"></p><br>
                                    <input type="submit" value="ACCEDI">
                                </form>
                            </center>
                        </div>

                    </div>

                </div>
                <div>
                    <div class="puntini">
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

    </center>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
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
            pagination: {
                el: ".swiper-pagination",
            },
            initialSlide: 1,
        });
        const usernameInput = document.querySelector('input[name="username"]');
usernameInput.addEventListener('input', async (event) => {
    const username = event.target.value;
    try {
        const response = await fetch('apichek.php', {
            method: 'POST',
            body: JSON.stringify({
                username: username
            }),
            headers: {
                'Content-Type': 'application/json'
            }
        });

        if (response.ok) {
            const data = await response.json();

            if (data == true) {
                console.log('Username già esistente');
            } else {
                    console.log('Username disponibile');
                }
            } else {
                console.error('Errore nella richiesta:', response.status);
            }
        } catch (error) {
            console.error('Si è verificato un errore:', error);
        }
    });

    </script>

</html>