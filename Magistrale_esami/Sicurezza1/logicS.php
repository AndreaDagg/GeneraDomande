<?php
session_start();

$dbVerifica_Software = array(
    "Differenza tra testing e tecniche simboliche",
    "Cos'e' SAT",
    "Loop invariant",
    "Over approximation",
    "se vado a testare un sistema, chi mi garantisce che non ci siano errori?",
    "software life-critical / safety critical cosa bisogna garantire?",
    "Vantaggio e Svantaggio dei testing"
);

$dbModel_Checking = array(
    "Come sono detti i sistemi che non terminano mai? Possiamo usare Model Checking?",
    "Quali sistemi non terminano mai? Poosso usare il Model Checking?",
    ""
);

$dbModellazione = array(
"Che tipologia di funzioni si usano per modellare i sistemi?",
    "Come deve essere il dominio delle variabili nella modellazione con funzioni booleane?",
    "A cosa serve stabilire le variabili ed il loro dominio?",
    "Cosa rappresenta la rappresentazione simbolica?",
    "Nella funzione di transiszione cosa accade se non caratterizzo una variabile?",
    "Modellazione del TRIS",
    "Cosa possono modellare i transition system?",
    "Modellazione di una procedura, come la rappresentiamo (Variabili e statement)?",
    "Modellazione di assegnamento",
    "Modellazione if-then-else",
    "Modellazione di un ciclo",
    "Cosa serve il not nelle paretensi",
    "Cosa ritorna la funzione init"

);

$dbBMC = array(
"Cosa posso dedurre se BMC non trova errori? e cosa se MC non trova errori?",
    "Se BMC trova un bug e' reale?",
    ""
);

$dbBmcConcorrente = array(

);

$dbINTRO = array(

);


/* arg -> definisce l'argomento. Se non e' specificato lo sceglie casualmente*/
if (isset($_GET['arg'])) {
    $dbNum = $_GET['arg'];
} else {
    $dbNum = rand(0, 3);
}

if (isset($dbNum)) {
    switch ($dbNum) {
        case 0:
            $dbCo = $dbUNIX;
            break;
        case 1:
            $dbCo = $dbBUFFER;
            break;
        case 2:
            $dbCo = $dbCROSS;
            break;
        case 3:
            $dbCo = $dbSQL;
            break;
        case 4:
            $dbCo = $dbTHREAT;
            break;
        case 5:
            $dbCo = $dbINTRO;
            break;
    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: mainS.php');
