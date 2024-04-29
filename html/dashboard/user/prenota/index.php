<?php
require "../../../db.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Prenota un ristorante</title>
    <link rel="stylesheet" href="../../../styleIndex.css">
</head>
<body>
    <h1>Prenota un ristorante</h1>
    <form action="prenota.php" method="post">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" disabled>
        <br><br>
        <label for="azienda">Seleziona un'azienda:</label>
        <select name="azienda" id="azienda">
            <option value="" selected>Seleziona un'azienda</option>
            <?php
            // Query per selezionare tutte le aziende
            $sql = "SELECT PIVA, nome FROM azienda";
            $result = $conn->query($sql);

            // Genera le opzioni per il campo "Azienda"
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["PIVA"] . "'>" . $row["nome"] . "</option>";
                }
            } else {
                echo "<option value=''>Nessuna azienda disponibile</option>";
            }
            ?>
        </select>
        <br><br>
        <label for="ristorante">Seleziona la via di un ristorante:</label>
        <select name="ristorante" id="ristorante">
            <option value=''>Inserisci l'azienda</option>
            <!-- I ristoranti verranno caricati dinamicamente qui -->
        </select>
        <br><br>
        <label for="data">Seleziona la data:</label>
        <input type="date" name="data" id="data">
        <br><br>
        <label for="ora">Seleziona il turno:</label>
        <select name="turno" id="turno">
            <option value="" selected>Seleziona il turno</option>
            <option value="1">1: 18-20</option>
            <option value="2">2: 20-22</option>
            <option value="3">3: 22-00</option>
        </select>
        <br><br>
        <label for="posti">Seleziona il numero di posti:</label>
        <input type="number" name="posti" id="posti">
        <br><br>
        <input type="submit" value="Prenota">
    </form>

    <script>
        // Codice JavaScript per caricare dinamicamente i ristoranti in base all'azienda selezionata
        document.getElementById("azienda").addEventListener("change", function() {
            var aziendaSelezionata = this.value;
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        document.getElementById("ristorante").innerHTML = xhr.responseText;
                    } else {
                        console.error('Si è verificato un errore durante il recupero dei ristoranti.');
                    }
                }
            };
            xhr.open("POST", "carica_ristoranti.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("azienda=" + aziendaSelezionata);
        });
    </script>
</body>
</html>
