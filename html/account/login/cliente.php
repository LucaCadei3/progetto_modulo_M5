<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

require("../../db.php");



// entro in questo solo se ho il token

if(isset($_COOKIE["token"])){
    $token = $_COOKIE["token"];
    //$token="Y5hIV42rJ2VeOiF6KsCk42orT25Ddm9iR2kwK1JJMUorWUFuUFE9PQ==";
    $key = "key"; // Chiave utilizzata per la cifratura/descifratura

    // Decifrare il token
    $decryptedToken = decryptString($token, $key);

    // Separare username e password dal token decifrato
    list($username, $password) = explode("Þ", $decryptedToken);

    // Criptare i dati con il token statico
    $staticToken = generateToken($username."Þ".$password, $key);



    // Query per verificare i dati utilizzando il token statico
    $query = "SELECT * FROM cliente WHERE token = '$staticToken'";
    $result=$conn->query($query);
    while($row=$result->fetch_assoc()){
        $id=$row['id'];
        $email=$row['mail'];
        $_SESSION['id']=$id;
        setcookie("token",encryptString($username."Þ".$password,"key"),time()+(3600*24*30),"/");
        setcookie("account", "c", time()+(3600*24*30),"/");
        header("Location: ../../dashboard/user/home/");
    }

} else{


    $username=$_POST['username'];
    $psw=$_POST['password'];
    $log=$_POST['checkbox'];

    

    //controllo se l'utente è loggato

    $query="SELECT * from cliente where username='$username'";
    echo$query;
    if($result=$conn->query($query)){
        print_r($result);
        if($result->num_rows==0){
            $_SESSION["error"] = "nessun utente salvato";
            header("Location: ../login/");
        }
        while($row=$result->fetch_assoc()){
            print_r($row);
            if($row['password']!=$psw){
                $_SESSION["error"] = "username o password errati";
                header("Location: ../login/");
            }

            if($log == "on"){
                setcookie("token",encryptString($username."Þ".$psw,"key"),time()+(3600*24*30),"/");
                setcookie("account", "c", time()+(3600*24*30),"/");
            }

            // Salvare l'email in sessione
            $_SESSION['email'] = $row['mail'];

            //se tutto va a buon fine
            header("Location: ../../dashboard/user/home/");

        }
    }else{

        $_SESSION["error"] = "errore login";
        header("Location: ../login/");
    }


}



?>
<script>
    setTimeout(() => {
        window.location.href = "../login/";
    }, 1500);
</script>
