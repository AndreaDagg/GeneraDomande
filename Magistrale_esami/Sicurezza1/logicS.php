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
    "Model Checking è statico o dinamico?"
, "Cos'e' un modello"
, "Cos'e' una specifica formale"
, "Quando termina il Model Checking"
, "Principale limitazione del Model Checking"
, "Cosa puo' rendere il numero degli stati alto"
, "Problema della raggiungibilita'"
, "Cosa contiene uno stato"
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
    "Cosa ritorna la funzione init",
    "Come mai caratterizzare tutte le variabili?"
, "Perchè modellare con S.TransitionSystem"
, "cosa descrive init"
, "si usa targhet per modellare"
, "come mai un ciclo dev'essere unwind, va solo avanti"

);

$dbBMC = array(
    "Cosa posso dedurre se BMC non trova errori? e cosa se MC non trova errori?",
    "Se BMC trova un bug e' reale?",
    ""
);

$dbBmcConcorrente = array(

    "Cosa significa rendere un programma bounded"
, "Dara Race e Lock"
, "Numero di interliving e problema nella concorrenza"
, "Sequenzializzazione"
, "Simulare le interazioni / interlivings"
);

$dbBDD = array(
    "Perche' usare un BDD"
, "Cosa rappresenta un formula booleana"
, "Definizioen di BDD"
, "Cosa succede se cambio l'ordine delle variabili in un BDD"
, "Quanto e' grande l'albero"
, "OBDT e ROBDD"
, "da cosa dipende la dimensione del BDD"
, "ordering ottimale BDD"
, "cosa bisogna fare per rappresentare F.Booleana con un BDD"
, "cosa rappresenta una foglia di un BDD"
, "Costruire un ROBDD a partire da un albero completo"
, "Problema dell'orgine delle variabili in un ROBDD e nel BDD"
, "cosa mi dicono due BDD isomorfi"
, "qual'e' il tempo impiegato per fare operazioni con BDD"
, "differenza tra BDT, BDD e ROBDD"
, "come verifico una proprieta' in un bdd"
, "la rioduzione per un ROBDD di una Funzioen booleana e' unica"
, "BDD e ROBDD sono canoniche"
, "Cosa significa forma canonica e come la rappresento con un BDD"
, "ROBDD esplode sempre perche'?"
, "Quanto costa capire se una F e' SAT con ROBDD?"
, "Quale struttura dati sono ROBDD e BDD"
, "Altezza MAX e min di ROBDD e BDD"


);

$dbCBMC = array();


$dbINTRO = array();


/* arg -> definisce l'argomento. Se non e' specificato lo sceglie casualmente*/
if (isset($_GET['arg'])) {
    $dbNum = $_GET['arg'];
} else {
    $dbNum = rand(0, 3);
}

if (isset($dbNum)) {
    switch ($dbNum) {
        case 0:
            $dbCo = $dbVerifica_Software;
            break;
        case 1:
            $dbCo = $dbModel_Checking;
            break;
        case 2:
            $dbCo = $dbModellazione;
            break;
        case 3:
            $dbCo = $dbBMC;
            break;
        case 4:
            $dbCo = $dbBmcConcorrente;
            break;
        case 5:
            $dbCo = $dbBDD;
            break;
        case 6:
            $dbCo = $dbCBMC;
            break;
        case 7:
            $dbCo = $dbINTRO;
            break;
    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: mainS.php');
