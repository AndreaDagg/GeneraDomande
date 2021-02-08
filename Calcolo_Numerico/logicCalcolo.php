<?php
session_start();
//Numero degli array degli argomenti considerando il proimo come zero
$NumeroArgomenti = 5;

$dbNorme = array("Modello Risolubile", "Cos'è una Norma e quali sono", "Th di esistenza delle norme", "Condizionamento e Stabilita'", "Calcolo errore e accuratezza di un risultato", "Quando e' detto stabile un Algoritmo", "Rappresentazione F.P", "Quyando si ha owerflow e underflow", "Quali tecniche per rappresentare un numero", "epsilon macchina", "Aritmentica F.P ed errori", "Studiare la propagazione dell'errore di round-off");
$dbSistemiLineari = array("Quando e' risolto un sistema lineare, delt != 0", "Metodi Diretti, Iterativi e criteri di scelta", "Formula condizionamento sistema lineare e come si stima (DIM), Indice condizionamento", "Sistema lineare BEN/MAL Condizionato", "Metodi Eliminazione di Gauss", "Algoritmo Eliminazione di Gauss", "Problema dell'eliminazione di gauss e perche' pivoting parziale", "Th condizione Necessaria per la fattorizzazione", "Th condizione Sufficiente per la fattorizzazione", "Th di Bauer", "Calcolo inverso di A", "Quali sono i metodi iterativi", "Metodo di Jacobi", "Come nascono i metodi di GS e J", "Calcolo x^(k+1) in J e GS e criteri di stop", "(TH)(DIM)Convergenza dei metodi iterativi", "Se Gs converge anche J?", "Raggio spettrale", "Condizione Sufficiente per convergere M.Iterativi", "Velocita' di convergenza", "TH piu' veloce GS o J");
$dbFittingDati = array("Cos'e' il problema del fitting","Quali scelte per il fitting","Pol interpolante di la grange","come stimo l'errore interpolazione di la grange","DIM - Errore di propagazione","DIM - Errore di discretizzazione","stabilita errore di discretizzazione","Polinomi di chebychev","Cmplessita La Grange","Interpolazione di Newton e come costruire Pn interpolante","Limite Pol. Inte. La Grange","Definizione DIff.Div grado n+1","Aggiunta di un nodo in Newton","Polinomio H","Th. Errore H","Limiti interp. Polinomiale","Convergenza delle Formule interative","Th.di Faber","Fallimenti Interpolazione Polinomiale");
$dbSplineBezier = array("Perche' usiamo l'interpola Pol a tratti","Interpolazione Lineare a tratti","Cosa sono le Spline","Spline Cubica","Condizioni per l'interpolazione S3(x)","Costruzione spline cubiche interpolante","Th minimizzazzione Spline","Limiti utilizzo delle S(X)","Spline Paramentriche");
$dbBezierInterp = array("Th Interpolazione Trigonometrica di convergenza","Polinomio di Bernstain","Polinomio di Bezier","Curve di bezier e limiti","Alg di Catejau","Interpolazione Trigonometrica","Th. dei coefficneti Ck (Dim)","DFT && FFT");
$dbNotLinear = array("Problema f(x) = 0","metodi per cercae gli zeri di f(x)=0","K(d) di f(x)=0","Metodo di bisezione","Metodo Punto Fisso","Quanto è Malcondizionato f(x)=0?","Convergenza Metodi Lineari","Th convergenza Punto Fisso","Th ordine di convergenza punto fisso");
$dbMinimo=array("Approssimazione Minimi qadrati","Consizioni per l'esistenza del minimo quadrato","errore minimo quadrato");
/* arg -> definisce l'argomento. Se non è specificato lo sceglie casualmente*/
if (isset($_GET['arg'])) {
    $dbNum = $_GET['arg'];
} else {
    $dbNum = rand(0, $NumeroArgomenti);
}

if (isset($dbNum)) {
    switch ($dbNum) {
        case 0:
            $dbCo = $dbNorme;
            break;
        case 1:
            $dbCo = $dbSistemiLineari;
            break;
         case 2:
             $dbCo = $dbFittingDati;
             break;
         case 3:
             $dbCo = $dbSplineBezier;
             break;
         case 4:
             $dbCo =  $dbBezierInterp;
             break;
         case 5:
             $dbCo = $dbNotLinear;
             break;
         case 6:
             $dbCo = $dbMinimo;
             break;
         /*case 7:
             $dbCo = $dbRegression;
             break;*/

    }
}

$r = rand(0, count($dbCo) - 1);
$_SESSION ['result'] = json_encode($dbCo[$r]);
header('Location: mainCalcolo.php');
