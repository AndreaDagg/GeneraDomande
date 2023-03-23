<?php

session_start();
$dbTESTING = array(
    "Che tipo di attivita' e' il testing e da cosa e' composto",
    "da quando si può iniziare a pensare al testing e perche' ",
    "Quali sono le risorse del testing e chi svolge le prime attività di testing",
    "Cos'e'un Test Case o caso di test",
    "Cos'e' precondition",
    "cos'e' un input e com'e' importante sceglierlo",
    "Test suite e perche' definirla",
    "Come dimostriamo la correttezza di un programma e la presenza di difetti, Dijkstra",
    "System Version",
    "Test Stub e Drive",
    "Gestione deio fallimenti - Fault handling",
    "Cosa succede se ho fatto integrazione ma comunque mi manca un pezzo? ",
    "BottomUp - TopDown - Sandwitch Rovesciato e Bingbang",
    "Generazione automatica di casi di test e dell'oracolo perche' e' utile"
);
$dbBLACKandWHITE = array(

    "Cosa deriviamo dalla post-condizione (oracolo)",
    "Come definiamo un caso di test",
    "Cos'e' l'error guessing e a cosa si ispira (Calssi di eq)",
    "perche' andiamo a controllare i confini (per esperienza sappiamo...)",
    "Perche' una specifica ambigua blocca il testing? (non sappiamo definire l'oracolo	)",
    "In una classe invece, dato un metodo da testare qual e' la differenza nel testare un metodo rispetto alla funzione? (Roberta pag 13)",
    "Cosa sugnifica coprire una classe di equivalenza?",
    "cosa significa automatizzare l'esecuzione di un caso di test? (Roberta 16)",
    "Cosa sono le pre-condizioni? Predicati veri prima dell'esecuzione",
    "Cosa individuano testing e cosa fault localizioation",
    "Differenza tra testing ed inspection - runnare",
    "In che modo il black box e il white box si completano?",
    "Esempio di codice buggato che white box rileva subito subito ma black box non rileva",
    "Perche' con il White troviamo delle funzionalità in più mentre con il black possiamo fare testing completo sugli scenari del sistema? ",
    "Perche' c'e' necessità di fare W.B.Box testing"

);
$dbMUTATION = array(

    "Che cos’e' il mutation testing? ",
    "Perche' vogliamo minimizzare la test suite?",
    "Se la mia test suite ha ucciso tutti i mutanti posso dire che e' efficace?",
    "Perche' inseriamo un mutante alla volta? ",
    "Cosa facciamo quando non uccidiamo un mutante? creare un caso di test apposta?",
    "Esempio di scenario che rilevo quando il mut testing non uccide il mutante",
    "Testing di mutazione, un quarto mutante che non si sa quali mutanti si cancellano e quali no",
    "esempio di mutante triviale e uno non banale"

);
$dbGenetici = array(

    "Perche' e' meglio una funzione multi obiettivo (Gemma)",
    "Supponi di voler creare un algoritmo genetico per la modularozzazilne di un sistema software quali sono le funzioni di fitness e come rappresentare la soluzione"

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
            $dbCo = $dbTESTING;
            break;
        case 1:
            $dbCo = $dbBLACKandWHITE;
            break;
        case 2:
            $dbCo = $dbMUTATION;
            break;
        case 3:
            $dbCo = $dbGenetici;
            break;
    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: mainTS.php');
