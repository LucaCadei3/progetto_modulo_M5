<?php
session_start();
if(isset($_COOKIE["account"])){
  if($_COOKIE['accout']=="c"){
    header("Location: /cliente.php");
  }

}
?>

<html>

<head>
    <title>Login</title>
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
        justify-content: center; /* Centra orizzontalmente gli elementi */
        align-items: center; /* Centra verticalmente gli elementi */
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ombra normale */
    }

    .swiper-slide img {
        display: block;
        width: 100%;
    }

    .formLogin {
        margin-top: 100px;
        text-align: center; /* Allinea il testo al centro */
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
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ombra normale */
    height: 20px;
    width: 50px;
    }
    .swiper-pagination {
        margin-top: 5px;
    }
    .error p {
        color: red;
        font-size: 20px;
        font-weight: bold;
    }
    .logoAzienda {
        max-height: 100px;
        max-width: 100  px;
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
            <a href="../register/index.php">Registrazione</a>
        </nav>
    </section>

    <!-- Swiper -->
    <center>
        <h1>
            Login
        </h1>
        <!--<div class="swiper-pagination"></div>-->
        <div class="error">
            <?php 
                session_start();
                echo "<p>".$_SESSION['error']."</p>";
            ?>
        </div>
        <div class="divSwiper">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="formLogin">
                            <table>
                                <thead>
                                    <th colspan="2">
                                        <h1>Azienda</h1>
                                    </th>
                                </thead>
                                <tr>
                                    <td>
                                        <form method="POST" action="cliente.php">
                                                <input type="text" name="username" placeholder="username"><br>
                                                <input type="password" name="password" placeholder="password"><br>
                                                rimani loggato: <input type="checkbox" value="checkbox"><br>
                                                <input type="submit" value="ACCEDI">
                                            </form></td>
                                    <td><div class="logoAzienda">
                                        <img src="../../images/burger.png">
                                    </div></td>
                                </tr>
                                
                            </table>
                        </div> 
                        
                        
                    </div>
                    <div class="swiper-slide">
                        <div class="formLogin">
                        <table>
                                <thead>
                                    <th colspan="2">
                                        <h1>Clienti</h1>
                                    </th>
                                </thead>
                                <tr>
                                    <td>
                                        <form method="POST" action="cliente.php">
                                                <input type="text" name="username" placeholder="username"><br>
                                                <input type="password" name="password" placeholder="password"><br>
                                                rimani loggato: <input type="checkbox" value="checkbox"><br>
                                                <input type="submit" value="ACCEDI">
                                            </form></td>
                                    <td></td>
                                </tr>
                                
                            </table>
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <div class="formLogin">
                        <table>
                                <thead>
                                    <th colspan="2">
                                        <h1>Manager</h1>
                                    </th>
                                </thead>
                                <tr>
                                    <td>
                                        <form method="POST" action="cliente.php">
                                                <input type="text" name="username" placeholder="username"><br>
                                                <input type="password" name="password" placeholder="password"><br>
                                                rimani loggato: <input type="checkbox" value="checkbox"><br>
                                                <input type="submit" value="ACCEDI">
                                            </form></td>
                                    <td><div class="logoAzienda">
                                        <img src="../../images/burger.png">
                                    </div></td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>

                </div>
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

  </script>





    <!--fetch javascript che verifica una volta insetito lo username controlla immediatamente se lo username è all'interno del database-->

</html>