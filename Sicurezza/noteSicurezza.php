<?php

session_start();

// Contiene le note che si trovano sotto i pulsanti del main


$_SESSION['NumIndex'] = 0;
$NotePass = array("");
$NoteCos = array("Strutture Dati" => array("..."), "Grafi" => array("..."), "..." => array("..."), "..." => array("..."));
$_SESSION['NumIndex'] = $NoteCos;

print_r($_SESSION['NumIndex']);

header("location: mainSicurezza.php ");

