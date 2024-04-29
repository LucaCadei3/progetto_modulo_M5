<?php
$conn=mysqli_connect("localhost","root","","ristoranti");
if($conn->connect_error){
    die($conn->connect_error);
}
/**
     * Write a message to the log.
     *
     * @param string $message The message to write to the log.
     * @param string $level   The level of the log message ('debug','info','warn','error','fatal').
     * 
     */
    function writeToLog($message, $level = 'info') {
        // Imposta il livello di log massimo
        $logLevels = [
            'debug' => 0,
            'info' => 1,
            'warn' => 2,
            'error' => 3,
            'fatal' => 4
        ];
        
        $logLevel = isset($logLevels[$level]) ? $logLevels[$level] : $logLevels['info'];
        $currentLogLevel = defined('LOG_LEVEL') ? constant('LOG_LEVEL') : $logLevels['info'];
        
        // Verifica se il messaggio deve essere registrato
        if ($logLevel >= $currentLogLevel) {
            $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2);
            $caller =str_replace("esame%20merdoso/",'',$backtrace[0]['file']);
            $line = $backtrace[0]['line'];
            

            // Percorso del file di log
            $currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            $pathback = count(explode('/',str_replace("http://localhost/esame%20merdoso/","",$currentURL)));
            $path="";
            for($i=1;$i<$pathback;$i++){
                $path.='../';
            }
            $logDirectory = $path . 'logs/' . date('Y') . '/' . date('m') . '/' . date('d');
            $logFilename = $logDirectory . '/log_' . date('Y-m-d') .'.log';
            
            // Crea la directory se non esiste
            if (!is_dir($logDirectory)) {
                mkdir($logDirectory, 0777, true);
            }
            
            // Formatta il messaggio di log
            $formattedMessage = '[' . date('Y-m-d H:i:s') . '] [' . strtoupper($level) . '] [' . ($caller) . '] [' . strtoupper($line) . '] '. $message . PHP_EOL;
            
            // Scrivi il messaggio nel file di log
            file_put_contents($logFilename, $formattedMessage, FILE_APPEND | LOCK_EX);
        }
    }
    

include("security.php");
include("getparam.php");
?>

