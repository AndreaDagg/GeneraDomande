<?php
session_start();
$dbLimiti = array("Asintoti", "Maggioranti & Minorati", "Teorema insieme numerico", "Funzioni limitate", "Massimi e minimi relativi", "Risultati dei limiti", "Limiti di funzioni", "Funzioni continue", "grafici di funzioni",
    "Teorema di permanenza del segno delle funzioni","Teorema dei valori intemedi","Teorema dell'esistenza degli zeri","Teorema dell'esistenza dell'inversa di una funzione","Teorema di Weierstrass");
$dbSuccessioni = array("Definizione di successione", "Successione Limitata", "Limiti di successioni", "Teorema unicita del limite",
    "Teorema di permanenza del segno","Grafici delle successioni","Teorema del confronto di successioni", "Teorema Successioni infinitesimali","Teorema del prodotto di una succezzione limitata per una successione infinitesima",
    "Dimostrazione della successione a^n", "Dimostrazione funzione trigonometrica indeterminata", "Disuguaglianza di Bernulli","Successioni Monotone");
$dbDerivate = Array("Definizione di Derivata","Continuita' e derivabilita' di una funzione","Punti di non derivabilita'","Derivata della funzione potenza ^2 ^3 ^n","Derivata radice n","Derivata sin e cos","Derivata log ed e^n",
                   "Regole di derivazione somma e prodotto","Derivate successive","Punto di massimo e minimo relativo ed assoluto","Teorema di Fermat","Teorema di Rolle","Teorema di Lagrange","Criteri di Monotonia Derivate",
                    "Teorema De L'Hopital","Formula di Taylor","Teorema di caratterizzazione delle funzioni costanti","Funzioni concave e convesse");
$dbDerivateII = "";
$dbSerie = Array("Serie numerica","Teorema convergenza della serie","Critieri risoluzione serie","Teorema serie a termini non negativi","Serie geometrica"
,"Serie armonica","Serie armonica generalizzata","Criterio del confronto","Criterio del rapporto","Criterio della radice","Serie di Taylor");
$dbIntegrali = Array("definizione di integrale","Primitiva","Metodi di integrazione","Integrale definito","Somma di Riemann","Teorema della media",
"Teorema di Riemann","Integrazione di finzioni limitate","Formula fondamentale del calcolo integrale","Teorema di caratterizzazione delle primitiva di una funzione",
"Teorema fondamentale del calcolo integrale");
$dbEqDiff = "";

/* arg -> definisce l'argomento. Se non è specificato lo sceglie casualmente*/
if (isset($_GET['arg'])) {
    $dbNum = $_GET['arg'];
} else {
    $dbNum = rand(0, 5);
}

if(isset($dbNum)){
    switch ($dbNum) {
        case 0:
            $dbCo = $dbLimiti;
            break;
        case 1:
            $dbCo = $dbSuccessioni;
            break;
        case 2:
            $dbCo = $dbDerivate;
            break;
        /*case 3:
            $dbCo = $dbDerivateII;
            break;*/
        case 3:
            $dbCo = $dbSerie;
            break;
        case 4:
            $dbCo = $dbIntegrali;
            break;
        case 5:
            $dbCo = $dbEqDiff;
            break;
    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: mainAlgoritmi.php');
