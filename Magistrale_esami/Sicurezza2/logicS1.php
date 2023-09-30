<?php

session_start();
$dbUNIX = array(
"Quante tipologie di modi esistono per elevare i privilegi"
,"Come si può creare un Torjan"
,"Qual e' il problema alla base dell'elevamento dei privilegi"
,"Cosa cambia tra sUID e sGID e tra chown chgrp chmod"
,"Se crea problemi come mai non si permette di cambiare i privilegi degli utenti"
,"Come avvalorare i registri per far eseguire le vulnerabilita' nel B.O, scrivere un piccolo main"
,"Basta inserire codice maleolo nello Stack per farlo eseguire?"
,"Come si fa a modificare l'EIP ipotizzando che sappiamo dove si trova"
,"Come si fa a scrivere prima dell'EIP - scrivi codice C"
,"Attacco che non può essere risoplto in UNIX (cavallo di troja) e' un problema intrinseco?"
,"Unix e' sempre soggetto all'utilizzo di codice malevolo?"
,"cos'e' SUID e perche' vorrei abbbassare temporaneamente i privilegi"
,"perche' e' un bene non essere sempre root"
,"Cosa sonoi EUID e RUID"
,"Lab a scelta su Unix"
,"Cosa fare per evitare privilage escalation"
,"permessi unix differneze traa cvartelle e file"



);
$dbBUFFER = array(
"Buffer Overflow"
,"Memoria e processo"
,"Stack ed Heap"
,"Similarita' B.Overflow e TLP(SSL)"
,"Misure per mitigare B.O"
,"Carattere più pericoloso nel B.O"
,"Se inserisco del codice malevolo non è detto che venga eseguito come mai? (B.Overflow)"
,"%n e' il piu' problematico cosa comporta? Esempio del funzionamento"
,"Come si apre una shell di comando tramite buffer oveflow (sia passando per il buffer stesso sia nel caso in cui non c'è spazio nel buffer [environment])"
,"vulnerabilita' sulla printf"
,"a cosa servono i NOP"
,""

);
$dbCROSS = array(
    "Dove abbiamo l'exploit nel caso di Stored XSS"
,"Qual e' l'idea del SOP",""
,"XSS"
,"XSS vs XCRF"
,"xss stored"
,"xss reflected"
,"xss dom"
,"Mitigazione xss"
,"differenze tra stored e reflected"
," Parlami di XSS + laboratori su xss reflected"
,"Creare pagine dinamiche (cookie sessioni hidden file e database)"
,""
,""






);
$dbSQL = array(
"Qual e' il problema alla base sia di B.Overflow che di SQL injection?"
,"Architettura client-server"
,"Http e iformazioni salvate lato client"
,"Sanificazione SQL"
,"Misura per mitigare SQLInj piu' utilizzata? "
,"si può cancellare un DB e capirne la struttura"
,""

);

$dbTHREAT = array(
"A cosa serve il threat modeling"
,"Fasi del Threat modeling"
,"E' importante o si può fare a meno del Threat modeling"
,"Il threat modeling e' un processo one shot o ciclico"
,"Cos'e' Stride"
,"Cosa sono gli alberi d'attacco"
,"Opinione sul perche' il threat modeling e' essenziale"
,"esempio di threat modeling"
,"Abuse cases ed esempio"
,""
,""
,""

);

$dbINTRO = array(
"Differenza tra analisi statica e dinamica"
,"Over approximation con esempio"
,"Lab su stack3 B.Overflow - Cosa e' RIP e per cosa lo usiamo"
,"Over-approximation, cos'è, come funziona, perchè si usa, esempio di over approximation"
,"Differenza tra dimostrazione crittografica e proverif: Se dimostro che uno schema crittografico non è corretto perchè la cifratura con i polinomi non è corretta, lo stesso errore lo rilevo anche su proverif?"
,"Proverif, ultimo laboratorio (da spiegare, non da rifare da 0). Perchè da un falso errore il laboratorio?"
," Proverif, che tipo di approssimazione usa?"
,"Proverif, che approssimazione usa e perchè."
,"Come decidere quale metodo di test utilizzare dato un programma e delle specifiche"
,"bug vs flow AND debolezza vs vulnerabilita'"
,"fasi di un attacco"
,""




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
    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: mainS1.php');
