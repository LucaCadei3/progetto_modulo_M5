<?php
require "../../../db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["azienda"])) {
    $azienda_selezionata = $_POST["azienda"];

    // Query per selezionare i ristoranti dell'azienda selezionata
    $sql = "SELECT ID, via FROM locale WHERE PIVA = '$azienda_selezionata'";
    $result = $conn->query($sql);

    // Genera le opzioni per il campo "Ristorante"
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row["ID"] . "'>" . $row["via"] . "</option>";
        }
    } else {
        echo "<option value=''>Inserisci l'azienda</option>";
    }

    $conn->close();
} else {
    echo "<option value=''>Errore nel recupero dei ristoranti</option>";
}
?>
