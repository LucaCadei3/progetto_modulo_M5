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
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" disabled>
        <label for="cognome">Cognome</label>
        <input type="text" name="cognome" id="cognome" disabled>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" disabled>
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" id="telefono" disabled><br><br>
        <label for="azienda">Seleziona un'azienda:</label>
        <select name="azienda" id="azienda">
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

            $conn->close();
            ?>
        </select>
        <br><br>
        <label for="ristorante">Seleziona un ristorante:</label>
        <select name="ristorante" id="ristorante">
            <?php
                // Verifica se è stata inviata una richiesta POST
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Controlla se è stata selezionata un'azienda
                    if (isset($_POST["azienda"])) {
                        $azienda_selezionata = $_POST["azienda"];

                        // Query per selezionare i ristoranti dell'azienda selezionata
                        $sql = "SELECT ID, via FROM locale WHERE PIVA = '$azienda_selezionata'";
                        $result = $conn->query($sql);

                        // Genera le opzioni per il campo "Ristorante"
                        if ($result->num_rows > 0) {
                            echo "<option value=''>Seleziona un ristorante</option>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row["ID"] . "'>" . $row["via"] . "</option>";
                            }
                        } else {
                            echo "<option value=''>Nessun ristorante disponibile</option>";
                        }

                        $conn->close();
                    } else {
                        echo "<option value=''>Seleziona un'azienda prima di selezionare un ristorante</option>";
                    }
                }
            ?>
        </select>
        <br><br>
        <label for="data">Data:</label>
        <input type="date" name="data" id="data">
        <br><br>
        <label for="ora">Ora:</label>
        <input type="time" name="ora" id="ora">
        <br><br>
        <input type="submit" value="Prenota">
    </form>
</body>
</html>
