<?php

session_start();
$dbAcqui = array("CTU - CTP","Quali sono le modalita' di acquisizione di un dato?","Quali sono i vantaggi del sequestro?","Quando si ricorre all’isolamento di un dispositivo mobile?","Quali sono le tecniche di isolamento?","Quali sono i requisiti della duplicazione?","Quali sono i metodi di validazione di una duplicazione?","Come assicuriamo la conformita' di una duplicazione?","Quali sono le problematiche legate ad un sistema raid?","Quali sono le caratteristiche di una intercettazione?","Quando e' possibile utilizzare una porta monitor?","E’ possibile utilizzare nell’intercettazione l’attacco “Man In The Middle”?","Quali sono i protocolli da disabilitare nella creazione di una sonda? Perche'?","Differenza tra reati attraverso internet e reati informatici","Locus commissi delicti");
$dbMedia = array("Come è organizzato un HD?","Com'e' il movimento di una testina?","Come avviene la letturea di un HDD","MBR");
$dbFileSys = array("Come si scrive e legge un dato più grande di un Cluster?", "Cos'è il flush","Cos'e' il bad cluster","bad sector","MFT","Cos'e' il file system","metadata","file system jurnaled","Strutture della FAT","\$BITMAP");
$dbAnalWin = array("Difficolta' analisi windows","quali sono le HIVE","SAM","thumbs - pagefile - hiberfile","directory in AppData");
$dbMobile = array("IMEI","ICCID","Acquisime memoria esterna","Tipologia di acquisizione applicabili alla memoria interna","Organizzazione dei dati in un dispositivo mobile");
$dbImage = array("");
$dbIdeReati = array("Cosa compone un identità fisica e cosa quella digitale?","ID digitale cosa permette di fare? Dove la trovo?","Come distinguere i reati? E le pene?","Quale procura è compentente dei reati informatici?","Reato informaco per eccellenza?","Quali leggi identificano i reati informatici?","Addescamento online reato da quando?","Come distinguo i reati informatici?","IDentita' digitale sociologica e giuridica","aggravante furto identita'","reati informatici puri e spuri");
$dbCarte = array("Cose'è e cosa compone una carta di credito?","Cos'è lo skimmer e phishing? Cosa li accomuna alle carte di credito?","clonazione di una carta?","cos'e' il criptolocker");
$dbPed = array("Come si impedisce di vedere un sito illegale?","Leggi Ped","Leggi pirateria audiovisiva","Grooming","divulgazione, distribuzione file pedo","CNCPO");
$dbDir = array("diritto d'autore 663 art 41", "divulgazione pena","CNAIPIC","attacchi informatici piu' importanti","Truffa nigeriana","phishing, trashing boxing","truffa bancomat - pos");
/* arg -> definisce l'argomento. Se non è specificato lo sceglie casualmente*/
if (isset($_GET['arg'])) {
    $dbNum = $_GET['arg'];
} else {
    $dbNum = rand(0, 9);
}

if (isset($dbNum)) {
    switch ($dbNum) {
        case 0:
            $dbCo = $dbAcqui;
            break;
        case 1:
            $dbCo = $dbMedia;
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
        case 8:
            $dbCo = $dbPed;
            break;
        case 9:
            $dbCo = $dbDir;
            break;
    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: mainCF.php');
