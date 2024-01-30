<?php
session_start();

$dbVerifica_Software = array(
    "Differenza tra testing e tecniche simboliche",
    "Cos'e' SAT, che problema è?",
    "Loop invariant",
    "Over approximation",
    "se vado a testare un sistema, chi mi garantisce che non ci siano errori?",
    "software life-critical / safety critical cosa bisogna garantire?",
    "Vantaggio e Svantaggio dei testing"
, "Definizioen di NP-C e P-Space",
    "Perchè vogliamo ridurre un problme NP-C a SAT che è anch'esso un problema NP-C "
, "Dato che SAT è un problema noto, come fanno a risolverlo? "

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
, "Come mai un sistema infinito non è detto sia indecidibie?"
, "Data una funzione booleana cosa significa che è soddisfacibile?"
, "La funzione booleana è facile da risolvere?"
, ""
, ""
, ""
, ""
, "", ""
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
, "Cose tecniche del MC
"
, "Formula del BMC "
, "Chi e' init? Cos'e'? "
, "Cos'e' S0 "
, "Avendo solo init e trans quand'è valutata ad uno? "
, "Come sono legate le transizioni? "
, "Assengate le variabili cosa rappresentano nel sistema?"
, "Formula della completezza del BMC, cosa ci dice?"
, "se ho la formula PHi soddisfacibilile posso dire di aver visto tutte le path? "
, "Riduzione al problema della soddisfiacibilià->Psì con K ti dice qualcosa"
, "Cosa sono Si ed Si+1? "
, "Se nalle formula psì i tran iniziano da i=1 cosa succede? "
, "Per il check di completezza quanto sei sicuro che non ci sono più stati da vedere?"
, "Dalla formula di incomp se facciamo partire il secondo indice da 1, abbiamo problemi perché i e j possono avere lo stesso valore e quindi diventa insoddisfacibile."
, "La formula incomp dev'essere soddisfacibile o insoddisfacibile? "
, "Cosa controlla incomp? "
, "Trovare un assegnameto di soddisfacibilità per la formula incomp cosa significa?"
, "Esiste un essecuzione dove qualsiasi coppia di nodi sono diverse. Se questa è soddisfacibile perché puoi concludere che non cisaranno nodi nuovi"
, "A cosa corrisponde il k nel caso pessimo nella formula BMC? "
, ""
);

$dbBmcConcorrente = array(

    "Cosa significa rendere un programma bounded"
, "Dara Race e Lock"
, "Numero di interliving e problema nella concorrenza"
, "Sequenzializzazione"
, "Simulare le interazioni / interlivings"
    ,"Paralre della sequenzializzazione"
    ,"cose principali per fare la sequenzializzazione con LAZYCSeq"
    ,"Descrivere ad alto livello cosa fa il main drive"
    ,"Nel dettagio come viene istrimentato il codice del tread Fi"
    ,"Formula NextCS"
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
, "Che taglia ha BDD in base al numero di variabili?"
, "Che altezza ha BDD con n variabili?  "
, "Si puo' ordinare un BDD in modo diverso"
, "2^n - 1 è esponenziale, allora perche' si usano BDD? "
, "Quali sono le due regole di semplificazione? "
, "Bdd di una tautologia? e se è sempre falso?"
, "Supponi di avere una funziona bool di 3 variabili A,B,C. I valori di F falli tu come ti pare [0,1,1,1,0,0,1,0]. scrivere la tavola di verità di exist_A? Su qunte variabili sarà?"


);

$dbCBMC = array(
    "Scrivere un programma C che se gli do un espressione C fallisce se e' soddisfacibile? [assert]"
, "(3Color graph) Grafo non diretto e vuoi sapere se e' possibile associare un colore ad ogni nodo, così che per ogni arco nel grafo questo dev'essere incidente ad un nodo diverso. Determinare se puo' essere soddisfacibile"
, "(3Color graph) Il primo colore com'e' assegnato? ed il secondo? alla fine cosa fai? cosa metti come espressione dell'assert? come lo fai fallire se arrivi alla fine (dato già i controlli che fai se ci arrivi sigifica che sono già diversi) se sai sono gia' tutti diversi"

);

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
