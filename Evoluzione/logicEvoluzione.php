<?php

session_start();
//Numero degli array degli argomenti considerando il proimo come zero
$NumeroArgomenti = 8;

$dbLegacy = array("Casa e' un Legacy Systems?", "Cosa significa Business Critical?", "Perche' e' rischioso fare lo shutting down di un L.Sys.?", "Componenti di un L.Sys.", "Legacy Dilemma", "Strategie del Legacy Dilemma", "Business Value System quality", "Forward enginering", "Come capire se un L.Sys deve essere manutentuto o rimpiazziato", "L.Sys con H.BusinessValue e Low.SystemQuality cosa fai e su quali parti del sistema?", "Meglio avere documentazione non aggiornata o non averne?",);
$dbMaintenance = array("Quali tipi di manutenzione esistono?", "Mauntenzione correttiva", "Manutenzione evolutiva", "Manutenzione adattiva", "Modello che descrive la manutenzione", "Costi della manutenzione", "Leggi di Lehman", "Strategie di cambiamento", "Processo di manutenzione", "Change request", "Impact analysis", "Maintenance Prediction", "Differenza tra bug fixing ed emergency repair", "Differenza tra fault e failure", "Perche' organizzo le classi in packages?", "Differenza tra validazione e verifica", "Perche' abbiamo design erosion", "Nel caso di grandi problemi ad un sistema cosa si fa?","Perche' e' inevitabile il cambiamento di un sistema software","Le leggi di lehman sono dimeostrabili formalmente","Processo canonico di change request","Processo di emergency repair");
$dbRe_Eng = array("Obiettivi del Re-Eng", "Perche' fare Re-Eng", "Dove fare Re-eng", "Processo di Re-Eng", "Surce code traslation", "Reverse enginering", "Restructoring", "Data-Re-Eng", "Costi/Vantaggi e Svantaggi del Re-Eng", "Perché dovrei fare Re-Eng su un sistema di alta qualita'?","Su quali sottositemi e' propritario fare re-eng?","Collegamento tra re-eng e la seconda legge di Lehman","Rapporto tra re-eng, forword-eng,reverse eng","Perche' il porcesso di re-eng segue quelle fasi in quell'ordine?");
$dbImpact = array("Cos'e' Imapact Analysis", "Processo dell'Imp.Analysis", "Quali sono i set dell'impact anbalysis", "Come verifico la stima dell'Impact Analysis", "Dati i link di tracciabilita' determinati S.i.set attraverso Concept location come navighi il grafo per ottnere C.i.set?", "Cos'e' un ripple effect e fornisci un esempio", "Come navighi il grafo di tracciabilita'", "se volessi sapere coem e' stata la mia stima I.Analysis", "Descrivere il processo di impact analysis e dove finisce","Descrivere il processo di valutazione della stima e sell'F.P.I.Set e Discovered impact set","Precisione e rewcall e al valore al valore basso di quale metrica corrisponde una sottostima e a quale una sovrastima","Come navigo il grafo di tracciabilira'");
$dbTraceability = array("Cosa fa la Tracciabilita'", "Quali sono i diversi tipi di Trac.", "Come recupero dei link di Trac.", "Information Retrival", "Processo di recupero dei link di tracciabilita'", "Matrice dei documenti", "Vector Space Model", "Ranked List e come la taglio", "Valutazione del recupero dei link IR", "Requirements Traceability", "Inf.Retriv applicata a requirments traceability", "come fai a trattare il codice come un documento", "Esempio di trac.Verticale ed Orizzonrale", "Esempio di Trac.Verticale Strutturale ed implicita", "Esempio trac.Orizzontale, Knowledge based", "Come verifico l'esistenza di un link di tracciabilita'", "Conviene un link esplicito o implicito", "casa e' e come si divide il processo di Inf.retrieval","Descrivere il framework di classificazione delle dimensioni di tracciabilita'","Esempio tracciabilita' verticale ed orizzontale","In quali sistemi e particolarmente importante la tracciabilita'","Approccio semi automatico per ricavare i link di tracciabilita'","nel momento in cui si hanno link strutturali conviene mantenerli implicitamente o esplicitamente?");
$dbQuality = array("Definixione di metrica e misura","Scopo dell'usare le metriche","Ceh tipi di metriche esistono","Metriche si size","metriche di complessita'","metrica di mccabe","Come identificare le classi piu' difficili da testare utilizzando la tecnica white-box?","Come misuri la coesione di una classe","Quali aspetti di una classe si misurano per vedere se e' coesa oppure no?","Che vantaggio ha avere un basso coupling","Principali metriche di coupling","Applicazioen pratica di coupling","Come misuro la qualita' del codice?","Perche' mi interessa risolvere problemi di qualita'?","Quali metriche si considerano per individuare un Blob","Con quale metriche identifico un Feature envy?","Definizione di Antipattern","Coem faccio detection di antipattern?","Come controllo se una classe e' un blob con una rulke card","Differenza tra metrica di processo e metrica di prodotto esempio","");
$dbRefactoring = array("definizione di Refactoring","Quale problema deriva dallo spostamento di un metodo","perche' vogliamo migliorare la location of code con move method refactoring e Move classs refactoring?","Quando faccio Extract class refactoring con clausetr gerarchico se taglio prendendo quelli sotto cosa famorisco?Se tagliassi sopra?","Tools per il refactoring 2 fasi...");
$dbRegression = array("Perche' fare test di Regressione","cosa fa il testing?","Test suite minimization");
$dbOther = array("Coesione","Accoppiamento","Obiettivo a quale si punta quanto si sviluppa un sitema e perche'?","Architettura aperte e chiusa svantaggi e vantaggi","Differenza failure e folt","Black e White Box testing","quando fallisce il testing?","Difficolta' di bilanciare coesione ed accoppiamento, quali sono i due casi limite","Validatione e verification esempio","Artefatto software");
/* arg -> definisce l'argomento. Se non è specificato lo sceglie casualmente*/
if (isset($_GET['arg'])) {
    $dbNum = $_GET['arg'];
} else {
    $dbNum = rand(0, $NumeroArgomenti);
}

if (isset($dbNum)) {
    switch ($dbNum) {
        case 0:
            $dbCo = $dbLegacy;
            break;
        case 1:
            $dbCo = $dbMaintenance;
            break;
        case 2:
            $dbCo = $dbRe_Eng;
            break;
        case 3:
            $dbCo = $dbImpact;
            break;
        case 4:
            $dbCo = $dbTraceability;
            break;
        case 5:
            $dbCo = $dbQuality;
            break;
        case 6:
            $dbCo = $dbRefactoring;
            break;
        case 7:
            $dbCo = $dbRegression;
            break;
        case 8:
            $dbCo = $dbOther;
            break;

    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: mainEvoluzione.php');
