<?php

function encryptString($string, $key) {
    // Algoritmo di cifratura e modalità di utilizzo
    $cipher_algo = 'aes-256-cbc';
    
    // Generazione di un vettore di inizializzazione casuale
    $iv_length = openssl_cipher_iv_length($cipher_algo);
    $iv = openssl_random_pseudo_bytes($iv_length);
    
    // Cifratura della stringa con la chiave specificata
    $encrypted = openssl_encrypt($string, $cipher_algo, $key, 0, $iv);
    
    // Concatenazione del vettore di inizializzazione al risultato cifrato
    $encrypted_with_iv = base64_encode($iv . $encrypted);
    
    return $encrypted_with_iv;
}

function decryptString($encrypted_string, $key) {
    // Algoritmo di cifratura e modalità di utilizzo
    $cipher_algo = 'aes-256-cbc';
    
    // Decodifica dell'input in base64 per ottenere il vettore di inizializzazione e il testo cifrato
    $encrypted_data = base64_decode($encrypted_string);
    
    // Estrazione del vettore di inizializzazione e del testo cifrato
    $iv_length = openssl_cipher_iv_length($cipher_algo);
    $iv = substr($encrypted_data, 0, $iv_length);
    $encrypted = substr($encrypted_data, $iv_length);
    
    // Decifratura del testo cifrato utilizzando la chiave specificata
    $decrypted = openssl_decrypt($encrypted, $cipher_algo, $key, 0, $iv);
    
    return $decrypted;
}




function generateToken($string, $key) {
    // Scelta dell'algoritmo di cifratura e della modalità di crittografia
    $cipher = "aes-256-cbc";

    // Utilizzo di un IV statico
    $iv = "0123456789012345"; // Puoi modificare questo IV secondo le tue esigenze

    // Cifratura della stringa
    $encrypted = openssl_encrypt($string, $cipher, $key, OPENSSL_RAW_DATA, $iv);

    // Codifica in base64 per rappresentare il risultato come stringa
    return base64_encode($encrypted);
}

// Funzione per decodificare il token
function decodeToken($token, $key) {
    // Decodifica il token dalla base64
    $data = base64_decode($token);

    // Recupera il vettore di inizializzazione dal token
    $iv = "0123456789012345"; // Utilizza lo stesso IV utilizzato per la cifratura

    // Decifratura dei dati
    $decrypted = openssl_decrypt($data, "aes-256-cbc", $key, OPENSSL_RAW_DATA, $iv);

    // Restituzione dei dati decifrati
    return $decrypted;
}



?>