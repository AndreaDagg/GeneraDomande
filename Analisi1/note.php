<?php
session_start();

$_SESSION['NumIndex'] = 0;
$NotePass = Array("");
$NoteCos = Array("Limiti" => array("Dimostrazione e^x - 1 / x"), 
"Successioni" => array("Dimostrazione 1^infinity", 
                           "Dimostrazione n(n+1)/2", "Dimostrazione e"), 
"Derivate"
                 => array("Dimostrazione Continuita' e derivabilita'", "Derivata F^-1 & arcoseno ...","Dimostrazione Fermat",
                         "Dimostrazione Lagrange","REsto di Peano e Lagrange"),
"Serie" => array("1/4 -> 1/3 SerArm"), 
"Integrali" => array("Pass. Th.Fondamentale del calcolo"));
$_SESSION['NumIndex'] = $NoteCos;

print_r($_SESSION['NumIndex']);

header("location: main.php ");
?>
