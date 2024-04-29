<?php
session_start();
require("../../db.php");

$username=$_POST["username"]; 
$nome=$_POST["nome"];     
$cognome=$_POST["cognome"];  
$telefono=$_POST["number"];  
$psw=$_POST["password"]; 
$log=$_POST["checkbox"]; 


if($log=="on"){
    setcookie("token",encryptString($username."Þ".$password,"key"),time()+(3600*24*30),"/");
}
$token=generateToken($username."Þ".$password,"key");


$query="INSERT INTO `cliente`(`username`, `mail`, `nome`, `cognome`, `telefono`, `password`, `token`) VALUES ('$username','$mail','$nome','$cognome','$telefono','$psw','$token')";
$conn->query($query);

?>