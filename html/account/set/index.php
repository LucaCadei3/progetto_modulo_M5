<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifica i tuoi dati</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: lightyellow;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .title {
            text-align: center;
            font-size: 30px;
            margin-bottom: 20px;
            color : blue;
        }

        #form-container {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
        }

        #form-container input[type="text"],
        #form-container input[type="number"],
        #form-container input[type="email"],
        #form-container input[type="date"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        #form-container button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #form-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">Modifica i tuoi dati</div>
        <br>
        <br>
        <br>
        <div id="form-container">
            <form>
                Nome<input type="text" name="nome" value="valori prelevati dal database"><br>
                Cognome<input type="text" name="cognome" value="valori prelevati dal database"><br>
                Data Nascita<input type="date" name="data_nascita"><br>
                Telefono<input type="number" name="telefono" value="valori prelevati dal database"><br>
                Email<input type="email" name="email" value="valori prelevati dal database"><br>
                <center><a href ="/user/home/index.php"><button>back</button></a></center>
            </form>
        </div>
    </div>
</body>
</html>
