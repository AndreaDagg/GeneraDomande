<?php
session_start();

$_SESSION['NumIndex'] = 0;
$NotePass = Array("");
$NoteCos = Array("Limiti" => array("Dimostrazione e^x - 1 / x"), "Successioni" => array("Dimostrazione 1^infinity", 
                           "Dimostrazione n(n+1)/2", "Dimostrazione e"), "Derivate"
                 => array("Dimostrazione Continuita' e derivabilita'", "Derivata F^-1 & arcoseno ...","Dimostrazione Fermat",
                         "Dimostrazione Lagrange","REsto di Peano e Lagrange"));

$_SESSION['NumIndex'] = $NoteCos;

print_r($_SESSION['NumIndex']);

header("location: main.php ");
?>
