<?php
$username = 'mietitrebbia@progettoedogian.com';
$password = 'trebbiamieti$69DIO';

// destinatario, oggetto e contenuto della email
$to = 'loslocos.real@gmail.com';
$subject = 'Auguri Di Buon Compleanno '.$field2name;
        $message = '
            <center>
            <div class="contenuto" style="margin-top: 30px;width: 80%;">
                <link rel="stylesheet" href="https://progettoedogian.com/css/css.css">
                <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
                <div class="ql-editor"><p>	</p><h1 class="ql-align-center"><span style="color: red;">TANTI AUGURI DI BUON COMPLEANNO</span></h1><p class="ql-align-center">
                        <img src="https://progettoedogian.com/decorazioni/torta.webp"></p><h2 class="ql-align-center">Caro/a '.$field2name.',</h2><h3 class="ql-align-center">Vogliamo farti i più sinceri auguri di buon compleanno </h3><h3 class="ql-align-center">Siamo grati di far parte delle vostre vite e vi auguriamo </h3><h3 class="ql-align-center">un anno pieno di gioie, successi e realizzazioni dei vostri sogni.</h3><h2 class="ql-align-center">Buon compleanno!</h2><p class="ql-align-center">Il team di O.T.T.O ROA</p><p class="ql-align-center"><br></p><p class="ql-align-right"><br></p>
                        </div>
    </center>
        ';
        // intestazioni della email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: NoReply@ottoroa.it' . "\r\n";
        $headers .= 'Reply-To: postmaster@progettoedogian.com' . "\r\n";

        //Informazioni per l'autenticazione SMTP
        ini_set('SMTP', "smtp.aruba.it");
        ini_set('smtp_port', "587");
        ini_set('username', $username);
        ini_set('password', $password);

if($send) {
    echo "Email inviata con successo!";
} else {
    echo "Errore durante l'invio dell'email.";
}
?>