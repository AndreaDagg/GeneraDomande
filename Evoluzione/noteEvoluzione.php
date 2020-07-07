<?php

session_start();

// Contiene le note che si trovano sotto i pulsanti del main


$_SESSION['NumIndex'] = 0;
$NotePass = array("");
$NoteCos = array("Legacy Systems" => array("..."), "Maintenance" => array("..."), "Re-Enginering" => array("..."), "Impact Analysis "
=> array("..."), "Traceability" => array("..."), "Software Quality" => array("..."), "Refactoring" => array("..."), "Regression Test" => array("..."));
$_SESSION['NumIndex'] = $NoteCos;

print_r($_SESSION['NumIndex']);

header("location: mainEvoluzione.php ");


