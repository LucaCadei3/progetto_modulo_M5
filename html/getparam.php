<?php
$request_uri = $_SERVER['REQUEST_URI'];
$request_uri=explode(".php",$request_uri)[1];
// Dividi l'URL per "/"
$parts = explode('/', $request_uri);

// Rimuovi la parte iniziale dell'URL (per esempio, se il tuo script PHP è "/api.php", rimuovi l'elemento vuoto all'inizio)
array_shift($parts);

// Ottieni i valori degli argomenti
$arg1 = isset($parts[0]) ? $parts[0] : null;
$arg2 = isset($parts[1]) ? $parts[1] : null;
?>