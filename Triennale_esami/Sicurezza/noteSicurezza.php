<?php

session_start();

// Contiene le note che si trovano sotto i pulsanti del main


$_SESSION['NumIndex'] = 0;
$NotePass = array("");
$NoteCos = array("Iformation Security" => array("..."), "Attacchi" => array("..."), "Crittografia Intro" => array("..."), "Cifrari" => array("..."), "Hash, Mac & KeyAgr" => array("..."),
    "OpSec, Ike, PKey" => array("..."), "Digital Cert, TLS & SSL" => array("..."), "IDS" => array("..."));
$_SESSION['NumIndex'] = $NoteCos;

print_r($_SESSION['NumIndex']);

header("location: mainSicurezza.php ");

