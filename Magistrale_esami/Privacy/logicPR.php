<?php

session_start();
$dbGDPR = array("GDPR", "Date Pubblicazione ed entrata in vigore GDPR","Da cosa protegge i dati personali il GDPR?", "Nuove Terminologie e figure introduce il GDPR","Principio di Accountability","Chi è tenuto a provare l'accountability?","Principio di Compliance","Principio R.I.D");
$dbIdentita = array("Identita' anagrafica e digitale", "Cosa formano le identita digitali ed anagrafiche", "Quale delle due tipologie di intentita si puo' rubare facilemnte?");
$dbDatoPersonale = array("Cos'e' un dato perosnale?","Identificare ed essere Identificati","Quali informazioni online rendono identificabile una persona", "Cos'e' il trattamento dei dati personali?","In quale D.Leg si introducono i dati sensibili?","Quali dati personli richiedono il consenso esplicito dell'interessato?","Ciclo del trattamento dei dait personali","Dati Biometrici, Genetici e Particolari","Casi in cui i dati pesonali possono essere trattati senza il consenso esplicito","Quali dati vengono trattati da un'alzienda?");

/* arg -> definisce l'argomento. Se non è specificato lo sceglie casualmente*/
if (isset($_GET['arg'])) {
    $dbNum = $_GET['arg'];
} else {
    $dbNum = rand(0, 2);
}

if (isset($dbNum)) {
    switch ($dbNum) {
        case 0:
            $dbCo = $dbGDPR;
            break;
        case 1:
            $dbCo = $dbIdentita;
            break;
        case 2:
            $dbCo = $dbFileSys;
            break;
        /*case 3:
            $dbCo = $dbDerivateII;
            break;*/
        case 3:
            $dbCo = $dbAnalWin;
            break;
        case 4:
            $dbCo = $dbMobile;
            break;
        case 5:
            $dbCo = $dbImage;
            break;
        case 6:
            $dbCo = $dbIdeReati;
            break;
        case 7:
            $dbCo = $dbCarte;
            break;
    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: mainPR.php');
