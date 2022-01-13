<?php
session_start();

// Contiene le note che si trovano sotto i pulsanti del main


$_SESSION['NumIndex'] = 0;
$NotePass = Array("");
$NoteCos = Array("Acquisizione" => array(""), "Media" => array(""),"File System" => array(""), "Analisi Windows" => array(""), "Mobile" => array(""),"Image" =>(""));
$_SESSION['NumIndex'] = $NoteCos;

print_r($_SESSION['NumIndex']);

header("location: mainCF.php ");
?>
