<?php
session_start();
//Numero degli array degli argomenti considerando il proimo come zero
$NumeroArgomenti = 0;
$dbStruttureDati = array("Perche' convertire in audio?","Perche' Wav","Precision e Recall","Ripeti","Fine del MIL","Come fa un'app di colluding ad accedere alle info","Quali modelli sono stati utilizzati?","Petrche' usare MIL","Quali sono i tipi di MIL","Come si converte un apk in wav","Features estratte");


/* arg -> definisce l'argomento. Se non è specificato lo sceglie casualmente*/
if (isset($_GET['arg'])) {
    $dbNum = $_GET['arg'];
} else {
    $dbNum = rand(0, $NumeroArgomenti);
}

if (isset($dbNum)) {
    switch ($dbNum) {
        case 0:
            $dbCo = $dbStruttureDati;
            break;

    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: mainMIL.php');
